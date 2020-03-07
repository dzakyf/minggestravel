<?php

namespace App\Http\Controllers;

use App\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Helper;

class MitraController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra  = Mitra::orderBy('id_mitra', 'DESC')->get();
        return view('admins.mitra.index', ['mitra' => $mitra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'             => 'required',
            'gambar'           => 'required|max:2000|image'
        ],[
            'gambar.max'        => 'The gambar may not be greater than 2 MegaBytes'
        ]);

        
        $id_mitralast = DB::table('mitra')->select('id_mitra')->latest('id_mitra')->first();
        if($id_mitralast){
            $id_mitralastplus1 = $id_mitralast->id_mitra + 1;
        }else{
            $id_mitralastplus1 = 1;
        }
        

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_mitra, nama and current timestamp
            $name = $id_mitralastplus1 .'_'. $request->nama .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/mitra/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Mitra::create([
            'nama'             => $request->nama,
            'gambar'            => $filePath
        ]);

        return redirect()->to('/admin/mitra')->with('status','Data Mitra berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $mitra)
    {
        return view('admins.mitra.show', compact('mitra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitra $mitra)
    {
        return view('admins.mitra.edit', compact('mitra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        $request->validate([
            'nama'         => 'required'
        ]);

        $filePath = $mitra->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            $request->validate([
                'gambar'          => 'required|max:2000|image',
            ], [
                'gambar.max'      => 'The gambar may not be greater than 2 MegaBytes'
            ]);
            $serverpathimage = Helper::serverpathimage();
            $image_path = "$serverpathimage$mitra->gambar";  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_mitra, nama and current timestamp
            $name = $mitra->id_mitra .'_'.$request->nama .'_'.time();
            // Define folder path   
            $folder = '/uploads/images/mitra/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    

        Mitra::where('id_mitra', $mitra->id_mitra)
            ->update([
                'nama'         => $request->nama,
                'gambar'        => $filePath
            ]);

        return redirect()->to('/admin/mitra')->with('status','Data Mitra Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        $serverpathimage = Helper::serverpathimage();
        $image_path = "$serverpathimage$mitra->gambar";  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        Mitra::destroy($mitra->id_mitra);
        return redirect('/admin/mitra')->with('status', 'Data Mitra Berhasil Dihapus');
    }
}
