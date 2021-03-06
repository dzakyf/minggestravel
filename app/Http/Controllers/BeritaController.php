<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;    
use Helper;

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
        $berita     = Berita::orderBy('id_berita', 'DESC')->get();
        return view('admins.berita.index', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.berita.create');
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
            'kategori'          => 'required',
            'berita'            => 'required',
            'gambar'            => 'required|max:2000|image'
        ],[
            'gambar.max'        => 'The gambar may not be greater than 2 MegaBytes'
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
            'kategori'          => $request->kategori,
            'berita'            => $request->berita,
            'gambar'            => $filePath
        ]);

        return redirect()->to('/admin/berita')->with('status','Data berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        return view('admins.berita.show', compact('berita')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('admins.berita.edit', compact('berita'));
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
            'kategori'      => 'required',
            'berita'        => 'required',
        ]);

        $filePath = $berita->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            $request->validate([
                'gambar'             => 'required|max:2000|image',
            ], [
                'gambar.max'      => 'The gambar may not be greater than 2 MegaBytes'
            ]);
            $serverpathimage = Helper::serverpathimage();
            $image_path = "$serverpathimage$berita->gambar";  // Value is not URL but directory file path
            // return $image_path;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
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
                'kategori'      => $request->kategori,
                'berita'        => $request->berita,
                'gambar'        => $filePath
            ]);

        return redirect()->to('/admin/berita')->with('status','Data Berita Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $serverpathimage = Helper::serverpathimage();
        $image_path = "$serverpathimage$berita->gambar";  // Value is not URL but directory file path
        // return $image_path;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        Berita::destroy($berita->id_berita);
        return redirect('/admin/berita')->with('status','Data Berita Berhasil Dihapus');
    }
}
