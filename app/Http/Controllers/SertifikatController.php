<?php

namespace App\Http\Controllers;

use App\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

class SertifikatController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertifikat = Sertifikat::orderBy('id_sertifikat', 'DESC')->get();
        return view('admins.sertifikat.index', ['sertifikat' => $sertifikat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.sertifikat.create');
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
            'gambar'           => 'required'
        ]);

        
        $id_sertifikatlast = DB::table('sertifikat')->select('id_sertifikat')->latest('id_sertifikat')->first();
        if($id_sertifikatlast){
            $id_sertifikatlastplus1 = $id_sertifikatlast->id_sertifikat + 1;
        }else{
            $id_sertifikatlastplus1 = 1;
        }
        

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_sertifikat, nama and current timestamp
            $name = $id_sertifikatlastplus1 .'_'. $request->nama .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/sertifikat/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Sertifikat::create([
            'nama'             => $request->nama,
            'gambar'            => $filePath
        ]);

        return redirect()->to('/admin/sertifikat')->with('status','Data sertifikat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikat $sertifikat)
    {
        return view('admins.sertifikat.show', compact('sertifikat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertifikat $sertifikat)
    {
        return view('admins.sertifikat.edit', compact('sertifikat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        $request->validate([
            'nama'      => 'required'
        ]);

        $filePath = $sertifikat->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_sertifikat, nama and current timestamp
            $name = $sertifikat->id_sertifikat .'_'.$request->nama .'_'.time();
            // Define folder path   
            $folder = '/uploads/images/sertifikat/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    

        Sertifikat::where('id_sertifikat', $sertifikat->id_sertifikat)
            ->update([
                'nama'         => $request->nama,
                'gambar'        => $filePath
            ]);

        return redirect()->to('/admin/sertifikat')->with('status','Data Sertifikat Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikat $sertifikat)
    {
        Sertifikat::destroy($sertifikat->id_sertifikat);
        return redirect('/admin/sertifikat')->with('status', 'Data Sertifikat Berhasil Dihapus');
    }
}
