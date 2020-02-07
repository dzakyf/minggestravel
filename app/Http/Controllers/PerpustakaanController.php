<?php

namespace App\Http\Controllers;

use App\Perpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Helper;

class PerpustakaanController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpustakaan = Perpustakaan::orderBy('id_perpustakaan', 'DESC')->get();
        return view('admins.kepustakaan.perpustakaan.index', ['perpustakaan' => $perpustakaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.kepustakaan.perpustakaan.create');
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
            'pengarang'         => 'required',
            'edisi'             => 'required',
            'tahun_terbit'      => 'required|numeric',
            'jumlah_halaman'    => 'required|numeric',
            'kategori'          => 'required',
            'resensi'           => 'required',
            'cover'             => 'required'
        ]);

        
        $id_perpustakaan = DB::table('perpustakaan')->select('id_perpustakaan')->latest('id_perpustakaan')->first();
        if($id_perpustakaan){
            $id_perpustakaanplus1 = $id_perpustakaan->id_perpustakaan + 1;
        }else{
            $id_perpustakaanplus1 = 1;
        }
        

        // Check if a image has been uploaded
        if ($request->has('cover')) {
            // Get image file
            $image = $request->file('cover');
            // Make a image name based on id_perpustakaan, judul and current timestamp
            $name = $id_perpustakaanplus1 .'_'. $request->judul .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/kepustakaan/perpustakaan/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Perpustakaan::create([
            'judul'             => $request->judul,
            'pengarang'         => $request->pengarang,
            'edisi'            => $request->edisi,
            'tahun_terbit'      => $request->tahun_terbit,
            'jumlah_halaman'    => $request->jumlah_halaman,
            'kategori'          => $request->kategori,
            'resensi'           => $request->resensi,
            'cover'            => $filePath
        ]);

        return redirect()->to('/admin/kepustakaan/perpustakaan')->with('status','Data Perpustakaan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perpustakaan $perpustakaan)
    {
        return view('admins.kepustakaan.perpustakaan.show', compact('perpustakaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perpustakaan $perpustakaan)
    {
        return view('admins.kepustakaan.perpustakaan.edit', compact('perpustakaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perpustakaan $perpustakaan)
    {
        $request->validate([
            'judul'             => 'required',
            'pengarang'         => 'required',
            'edisi'             => 'required',
            'tahun_terbit'      => 'required|numeric',
            'jumlah_halaman'    => 'required|numeric',
            'kategori'          => 'required',
            'resensi'           => 'required',
        ]);

        $filePath = $perpustakaan->cover;

        // Check if a image has been uploaded
        if ($request->has('cover')) {
            $serverpathimage = Helper::serverpathimage();
            $image_path = "$serverpathimage$perpustakaan->cover";  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            // Get image file
            $image = $request->file('cover');
            // Make a image name based on id_perpustakaan, judul and current timestamp
            $name = $perpustakaan->id_perpustakaan .'_'. $request->judul .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/kepustakaan/perpustakaan/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Perpustakaan::where('id_perpustakaan', $perpustakaan->id_perpustakaan)
            ->update([
                'judul'         => $request->judul,
                'pengarang'     => $request->pengarang,
                'edisi'         => $request->edisi,
                'tahun_terbit'  => $request->tahun_terbit,
                'jumlah_halaman'=> $request->jumlah_halaman,
                'kategori'      => $request->kategori,
                'resensi'       => $request->resensi,
                'cover'         => $filePath
            ]);

        return redirect()->to('/admin/kepustakaan/perpustakaan')->with('status','Data Perpustakaan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perpustakaan $perpustakaan)
    {
        $serverpathimage = Helper::serverpathimage();
        $image_path = "$serverpathimage$perpustakaan->cover";  // Value is not URL but directory file path
        // return $image_path;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        Perpustakaan::destroy($perpustakaan->id_perpustakaan);
        return redirect('/admin/kepustakaan/perpustakaan')->with('status','Data Perpustakaan Berhasil Dihapus');
    }
}
