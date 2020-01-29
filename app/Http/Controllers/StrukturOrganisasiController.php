<?php

namespace App\Http\Controllers;

use App\Struktur_Organisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;


class StrukturOrganisasiController extends Controller
{   use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur_organisasi = Struktur_Organisasi::orderBy('id_struktur_organisasi', 'DESC')->get();
        return view('admins.profile.strukturorganisasi.index', ['struktur_organisasi' => $struktur_organisasi]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.profile.strukturorganisasi.create');

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
            'gambar'      => 'required',
            'deskripsi'   => 'required'
        ]);

        
        $id_struktur_organisasilast= DB::table('struktur_organisasi')->select('id_struktur_organisasi')->latest('id_struktur_organisasi')->first();
        if($id_struktur_organisasilast){
            $id_struktur_organisasilastplus1 = $id_struktur_organisasilast->id_struktur_organisasi + 1;
        }else{
            $id_struktur_organisasilastplus1 = 1;
        }


        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_struktur_organisasi, judul and current timestamp
            $name = $id_struktur_organisasilastplus1 .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/profile/strukturorganisasi/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    

                

        Struktur_Organisasi::create([
            'gambar'      => $filePath,
            'deskripsi'   => $request->deskripsi
        ]);

        return redirect()->to('/admin/profile/strukturorganisasi')->with('status','Data struktur organisasi berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Struktur_Organisasi  $struktur_Organisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Struktur_Organisasi $struktur_organisasi)
    {
        return view('admins.profile.strukturorganisasi.show', compact('struktur_organisasi')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Struktur_Organisasi  $struktur_Organisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Struktur_Organisasi $struktur_organisasi)

    {
        return view('admins.profile.strukturorganisasi.edit', compact('struktur_organisasi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Struktur_Organisasi  $struktur_Organisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Struktur_Organisasi $struktur_organisasi)
    {
        $request->validate([
            'deskripsi'   => 'required'
        ]);

        $filePath = $struktur_organisasi->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_struktur_organisasi, judul and current timestamp
            $name = $struktur_organisasi->id_struktur_organisasi .'_'.time();
            // Define folder path   
            $folder = '/uploads/images/profile/strukturorganisasi/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    

        Struktur_Organisasi::where('id_struktur_organisasi', $struktur_organisasi->id_struktur_organisasi)
            ->update([
            'gambar'      => $filePath, 
            'deskripsi'   => $request->deskripsi
            ]);

        return redirect()->to('/admin/profile/strukturorganisasi')->with('status','Data struktur organisasi berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Struktur_Organisasi  $struktur_Organisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktur_Organisasi $struktur_organisasi)
    {
        Struktur_Organisasi::destroy($struktur_organisasi->id_struktur_organisasi);
        return redirect('/admin/profile/strukturorganisasi')->with('status','Data struktur organisasi berhasil dihapus');

    }
}
