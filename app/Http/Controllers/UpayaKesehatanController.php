<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Upaya_Kesehatan;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;

class UpayaKesehatanController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->action('MenuController@dashboard');
        /*$upaya_kesehatan = Upaya_Kesehatan::orderBy('id_upaya_kesehatan', 'DESC')->get();
        return view('admins.profile.upayakesehatan.index', ['upaya_kesehatan' => $upaya_kesehatan]);*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return redirect()->action('MenuController@dashboard');
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'judul'                       => 'required',
            'deskripsi'                   => 'required',
            'upaya_kesehatan'             => 'required',
            'gambar'                      => 'required|max:1000|image'
        ], [
            'gambar.max'                  => 'The gambar may not be greater than 1 MegaBytes'
        ]);

        
        $id_upaya_kesehatanlast = DB::table('upaya_kesehatan')->select('id_upaya_kesehatan')->latest('id_upaya_kesehatan')->first();
        if($id_upaya_kesehatanlast){
            $id_upaya_kesehatanlastplus1 = $id_upaya_kesehatanlast->id_upaya_kesehatan + 1;
        }else{
            $id_upaya_kesehatanlastplus1 = 1;
        }

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_upaya_kesehatan, judul and current timestamp
            $name = $id_upaya_kesehatanlastplus1 .'_'. $request->judul .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/profile/upayakesehatan/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }
        

        Upaya_Kesehatan::create([
            'judul'                       => $request->judul,
            'deskripsi'                   => $request->deskripsi,
            'upaya_kesehatan'             => $request->upaya_kesehatan,
            'gambar'                      => $filePath
        ]);

        return redirect()->to('/admin/profile/upayakesehatan')->with('status','Data upaya kesehatan berhasil ditambahkan');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upaya_Kesehatan  $upaya_Kesehatan
     * @return \Illuminate\Http\Response
     */
    public function show(Upaya_Kesehatan $upaya_kesehatan)
    {
        /*
        return view('admins.profile.upayakesehatan.show', compact('upaya_kesehatan')); 
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upaya_Kesehatan  $upaya_kesehatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Upaya_Kesehatan $upaya_kesehatan)
    {   
        /*
        return view('admins.profile.upayakesehatan.edit', compact('upaya_kesehatan'));
        */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upaya_Kesehatan  $upaya_Kesehatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upaya_Kesehatan $upaya_kesehatan)
    {
         /* $request->validate([
            'judul'                   => 'required',
            'deskripsi'               => 'required',
            'upaya_kesehatan'         => 'required'
        ]);

        $filePath = $upaya_kesehatan->gambar;

        // Check if a image has been uploaded
        if ($request->has('gambar')) {
            $request->validate([
                'gambar'             => 'required|max:1000|image',
            ], [
                'gambar.max'      => 'The gambar may not be greater than 1 MegaBytes'
            ]);
            // Get image file
            $image = $request->file('gambar');
            // Make a image name based on id_upaya_kesehatan, judul and current timestamp
            $name = $upaya_kesehatan->id_upaya_kesehatan .'_'.$request->judul .'_'.time();
            // Define folder path   
            $folder = '/uploads/images/profile/upayakesehatan/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    
        
        Upaya_Kesehatan::where('id_upaya_kesehatan', $upaya_kesehatan->id_upaya_kesehatan)
            ->update([
                'judul'                 => $request->judul,
                'deskripsi'             => $request->deskripsi,
                'upaya_kesehatan'       => $request->upaya_kesehatan,
                'gambar'                => $filePath
            ]);

        return redirect()->to('/admin/profile/upayakesehatan')->with('status','Data upaya kesehatan berhasil diubah');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upaya_Kesehatan  $upaya_Kesehatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upaya_Kesehatan $upaya_kesehatan)
    {
       /* Upaya_Kesehatan::destroy($upaya_kesehatan->id_upaya_kesehatan);
        return redirect('/admin/profile/upayakesehatan')->with('status','Data upaya kesehatan berhasil dihapus');
        */
    }
}
