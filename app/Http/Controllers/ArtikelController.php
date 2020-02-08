<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Helper;


class ArtikelController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->to('/admin/beritadanartikel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.beritadanartikel.artikel.create');
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
            'judul'     => 'required',
            'kategori'  => 'required',
            'artikel'   => 'required',
            'gambar'    => 'required|max:1000|image'
        ], [
            'gambar.max'=> 'The gambar may not be greater than 1 MegaBytes'
        ]);

        
        $id_artikellast= DB::table('artikel')->select('id_artikel')->latest('id_artikel')->first();
        if($id_artikellast){
            $id_artikellastplus1 = $id_artikellast->id_artikel+ 1;
        }else{
            $id_artikellastplus1 = 1;
        }
        

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_artikel, judul and current timestamp
            $name = $id_artikellastplus1 .'_'. $request->judul .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/beritadanartikel/artikel/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
}

        Artikel::create([
            'judul'             => $request->judul,
            'kategori'          => $request->kategori,
            'artikel'           => $request->artikel,
            'gambar'            => $filePath
        ]);

        return redirect()->to('/admin/beritadanartikel')->with('status','Data artikel berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        return view('admins.beritadanartikel.artikel.show', compact('artikel')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('admins.beritadanartikel.artikel.edit', compact('artikel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul'         => 'required',
            'kategori'      => 'required',
            'artikel'       => 'required',
            
        ]);

        $filePath = $artikel->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            $request->validate([
                'gambar'             => 'required|max:1000|image',
            ], [
                'gambar.max'      => 'The gambar may not be greater than 1 MegaBytes'
            ]);
            $serverpathimage = Helper::serverpathimage();
            $image_path = "$serverpathimage$artikel->gambar";  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_artikel, judul and current timestamp
            $name = $artikel->id_artikel.'_'.$request->judul .'_'.time();
            // Define folder path   
            $folder = '/uploads/images/beritadanartikel/artikel/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    

        Artikel::where('id_artikel', $artikel->id_artikel)
            ->update([
                'judul'         => $request->judul,
                'kategori'      => $request->kategori,
                'artikel'       => $request->artikel,
                'gambar'        => $filePath
            ]);

        return redirect()->to('/admin/beritadanartikel/')->with('status','Data Artikel Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $serverpathimage = Helper::serverpathimage();
        $image_path = "$serverpathimage$artikel->gambar";  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        Artikel::destroy($artikel->id_artikel);
        return redirect('/admin/beritadanartikel')->with('status','Data artikel Berhasil Dihapus');
    }
}
