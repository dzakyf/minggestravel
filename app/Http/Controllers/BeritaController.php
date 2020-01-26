<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

class BeritaController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ditampilkan melalui MenuController
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.beritadanartikel.berita.create');
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
            'berita'            => 'required',
            'gambar'            => 'required'
        ]);

        
        $id_beritalast = DB::table('berita')->select('id_berita')->latest('id_berita')->first();
        if($id_beritalast){
            $id_beritalastplus1 = $id_beritalast->id_berita + 1;
        }else{
            $id_beritalastplus1 = 1;
        }
        

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_berita, judul and current timestamp
            $name = $id_beritalastplus1 .'_'. $request->judul .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/beritadanartikel/berita/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Berita::create([
            'judul'             => $request->judul,
            'deskripsi'         => $request->deskripsi,
            'berita'            => $request->berita,
            'gambar'            => $filePath
        ]);

        return redirect()->to('/admin/beritadanartikel')->with('status','Data berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        return view('admins.beritadanartikel.berita.show', compact('berita')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('admins.beritadanartikel.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul'         => 'required',
            'deskripsi'     => 'required',
            'berita'        => 'required',
        ]);

        $filePath = $berita->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_berita, judul and current timestamp
            $name = $berita->id_berita .'_'.$request->judul .'_'.time();
            // Define folder path   
            $folder = '/uploads/images/beritadanartikel/berita/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    

        Berita::where('id_berita', $berita->id_berita)
            ->update([
                'judul'         => $request->judul,
                'deskripsi'     => $request->deskripsi,
                'berita'        => $request->berita,
                'gambar'        => $filePath
            ]);

        return redirect()->to('/admin/beritadanartikel')->with('status','Data Berita Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        Berita::destroy($berita->id_berita);
        return redirect('/admin/beritadanartikel')->with('status','Data Berita Berhasil Dihapus');
    }
}
