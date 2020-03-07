<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Helper;

class GaleriController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::orderBy('id_galeri', 'DESC')->get();
        return view('admins.kepustakaan.galeri.index', ['galeri' => $galeri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.kepustakaan.galeri.create');
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
            'judul'             => 'required',
            'deskripsi'         => 'required',
            'gambar'            => 'required',
            'gambar.*'          => 'image|mimes:jpeg,png,jpg,gif|max:2000'
        ],[
            'gambar.max'        => 'The gambar mmay not be greater than 2 MegaBytes'
        ]);

        
        $id_galeri = DB::table('galeri')->select('id_galeri')->latest('id_galeri')->first();
        if($id_galeri){
            $id_galeriplus1 = $id_galeri->id_galeri + 1;
        }else{
            $id_galeriplus1 = 1;
        }
        

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_galeri, judul and current timestamp
            $name = $id_galeriplus1 .'_'. $request->judul .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/kepustakaan/galeri/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Galeri::create([
            'judul'             => $request->judul,
            'deskripsi'         => $request->deskripsi,
            'gambar'            => $filePath
        ]);

        return redirect()->to('/admin/kepustakaan/galeri')->with('status','Data Galeri berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        return view('admins.kepustakaan.galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('admins.kepustakaan.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul'             => 'required',
            'deskripsi'         => 'required',
        ]);

        $filePath = $galeri->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            $request->validate([
                'gambar'             => 'required|max:2000|image',
            ], [
                'gambar.max'      => 'The gambar may not be greater than 2 MegaBytes'
            ]);
            $serverpathimage = Helper::serverpathimage();
            $image_path = "$serverpathimage$galeri->gambar";  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_galeri, judul and current timestamp
            $name = $galeri->id_galeri .'_'. $request->judul .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/kepustakaan/galeri/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Galeri::where('id_galeri', $galeri->id_galeri)
            ->update([
                'judul'         => $request->judul,
                'deskripsi'     => $request->deskripsi,
                'gambar'        => $filePath
            ]);

        return redirect()->to('/admin/kepustakaan/galeri')->with('status','Data Galeri Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        $serverpathimage = Helper::serverpathimage();
        $image_path = "$serverpathimage$galeri->gambar";  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        Galeri::destroy($galeri->id_galeri);
        return redirect('/admin/kepustakaan/galeri')->with('status','Data Galeri Berhasil Dihapus');
    }
}
