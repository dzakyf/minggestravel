<?php

namespace App\Http\Controllers;

use App\JenisPelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

class JenisPelayananController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->to('/admin/layanandantarif');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.layanandantarif.jenispelayanan.create');
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
            'nama'      => 'required',
            'icon'      => 'required|max:1000|image'
        ],[
            'icon.max'  => 'The icon may not be greater than 1 MegaBytes'
        ]);

        $id_pelayananlast = DB::table('jenis_pelayanan')->select('id_pelayanan')->latest('id_pelayanan')->first();
        if($id_pelayananlast){
            $id_pelayananlastplus1 = $id_pelayananlast->id_pelayanan + 1;
        }else{
            $id_pelayananlastplus1 = 1;
        }
        

        // Check if a icon has been uploaded
        if ($request->has('icon')) {
            // Get image file
            $image = $request->file('icon');
            // Make a image name based on $id_pelayanan, nama and current timestamp
            $name = $id_pelayananlastplus1 .'_'. $request->nama .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/jenispelayanan/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        JenisPelayanan::create([
            'nama'      => $request->nama,
            'icon'      => $filePath
        ]);

        return redirect()->to('/admin/layanandantarif')->with('status','Data Jenis Pelayanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JenisPelayanan  $jenisPelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(JenisPelayanan $jenisPelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JenisPelayanan  $jenisPelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisPelayanan $jenisPelayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JenisPelayanan  $jenisPelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisPelayanan $jenisPelayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JenisPelayanan  $jenisPelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisPelayanan $jenisPelayanan)
    {
        //
    }
}
