<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Helper;

class SejarahController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarah = Sejarah::orderBy('id_sejarah', 'DESC')->get();
        return view('admins.profile.sejarah.index', ['sejarah' => $sejarah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.profile.sejarah.create');
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
            'sejarah'           => 'required',
            'gambar'            => 'required|max:20000|image'
        ],[
            'gambar.max'        => 'The gambar may not be greater than 20 MegaBytes'
        ]);

        
        $id_sejarahlast = DB::table('sejarah')->select('id_sejarah')->latest('id_sejarah')->first();
        if($id_sejarahlast){
            $id_sejarahlastplus1 = $id_sejarahlast->id_sejarah + 1;
        }else{
            $id_sejarahlastplus1 = 1;
        }

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_sejarah, and current timestamp
            $name = $id_sejarahlastplus1 .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/profile/sejarah/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    

        

        Sejarah::create([
            'sejarah'           => $request->sejarah,
            'gambar'            => $filePath
        ]);

        return redirect()->to('/admin/profile/sejarah')->with('status','Data sejarah berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function show(Sejarah $sejarah)
    {
        return view('admins.profile.sejarah.show', compact('sejarah')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sejarah $sejarah)
    {
       return view('admins.profile.sejarah.edit', compact('sejarah'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sejarah $sejarah)
    {
        $request->validate([
            'sejarah'         => 'required',
        ]);

        $filePath = $sejarah->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            $request->validate([
                'gambar'             => 'required|max:20000|image',
            ], [
                'gambar.max'      => 'The gambar may not be greater than 20 MegaBytes'
            ]);
            $serverpathimage = Helper::serverpathimage();
            $image_path = "$serverpathimage$sejarah->gambar";  // Value is not URL but directory file path
            // return $image_path;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_sejarah, judul and current timestamp
            $name = $sejarah->id_sejarah .'_'.time();
            // Define folder path   
            $folder = '/uploads/images/profile/strukturorganisasi/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    

        
        Sejarah::where('id_sejarah', $sejarah->id_sejarah)
            ->update([
                'sejarah'       => $request->sejarah,
                'gambar'        => $filePath
            ]);

        return redirect()->to('/admin/profile/sejarah')->with('status','Data sejarah berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejarah $sejarah)
    {
        $serverpathimage = Helper::serverpathimage();
        $image_path = "$serverpathimage$sejarah->gambar";  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        Sejarah::destroy($sejarah->id_sejarah);
        return redirect('/admin/profile/sejarah')->with('status','Data sejarah berhasil dihapus');

    }
}
