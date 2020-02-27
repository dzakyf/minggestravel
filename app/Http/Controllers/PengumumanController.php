<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;    
use Helper;

class PengumumanController extends Controller
{
    use uploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::orderBy('id_pengumuman', 'DESC')->get();
        return view('admins.pengumuman.index', ['pengumuman' => $pengumuman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.pengumuman.create');
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
            'pengumuman'        => 'required'            
        ]);

         $id_pengumumanlast = DB::table('pengumuman')->select('id_pengumuman')->latest('id_pengumuman')->first();
        if($id_pengumumanlast){
            $id_pengumumanlastplus1 = $id_pengumumanlast->id_pengumuman + 1;
        }else{
            $id_pengumumanlastplus1 = 1;
        }

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_pengumuman, judul and current timestamp
            $name = $id_pengumumanlastplus1 .'_'. $request->judul .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/pengumuman/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }
        if(!$request->has('gambar')){
            $filePath = '';
        }
        Pengumuman::create([
            'judul'             => $request->judul,
            'gambar'            => $filePath,
            'pengumuman'        => $request->pengumuman
        ]);

        return redirect()->to('/admin/pengumuman')->with('status','Data Pengumuman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        return view('admins.pengumuman.show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('admins.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'judul'         => 'required',
            'pengumuman'    => 'required',
        ]);


        $filePath = $pengumuman->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            $request->validate([
                'gambar'             => 'required|max:20000|image',
            ], [
                'gambar.max'      => 'The gambar may not be greater than 20 MegaBytes'
            ]);
            $serverpathimage = Helper::serverpathimage();
            $image_path = "$serverpathimage$pengumuman->gambar";  // Value is not URL but directory file path
            // return $image_path;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_pengumuman, judul and current timestamp
            $name = $pengumuman->id_pengumuman .'_'.time();
            // Define folder path   
            $folder = '/uploads/images/pengumuman/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }   

        Pengumuman::where('id_pengumuman', $pengumuman->id_pengumuman)
            ->update([
                'judul'         => $request->judul,
                'gambar'        => $filePath,
                'pengumuman'    => $request->pengumuman
            ]);

        return redirect()->to('/admin/pengumuman')->with('status','Data Pengumuman Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->id_pengumuman);
        return redirect('/admin/pengumuman')->with('status', 'Data Pengumuman Berhasil Dihapus');
    }
}
