<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Helper;

class DownloadController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $download = Download::orderBy('id_download', 'DESC')->get();
        return view('admins.kepustakaan.download.index', ['download' => $download]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.kepustakaan.download.create');
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
            'nama_file'          => 'required',
            'file'               => 'required'
        ]);

        
        $id_download = DB::table('download')->select('id_download')->latest('id_download')->first();
        if($id_download){
            $id_downloadplus1 = $id_download->id_download + 1;
        }else{
            $id_downloadplus1 = 1;
        }
        

        // Check if a image has been uploaded
        if ($request->has('file')) {
            // Get image file
            $image = $request->file('file');
            // Make a image name based on id_download, nama_file and current timestamp
            $name = $id_downloadplus1 .'_'. $request->nama_file .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/kepustakaan/download/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Download::create([
            'nama_file'        => $request->nama_file,
            'file'             => $filePath
        ]);

        return redirect()->to('/admin/kepustakaan/download')->with('status','Data download berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download)
    {
        return view('admins.kepustakaan.download.show', compact('download'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $download)
    {
        return view('admins.kepustakaan.download.edit', compact('download'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download)
    {
        $request->validate([
            'nama_file'             => 'required',
        ]);

        $filePath = $download->file;

        // Check if a image has been uploaded
        if ($request->has('file')) {
            $serverpathimage = Helper::serverpathimage();
            $image_path = "$serverpathimage$download->file";  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            // Get image file
            $image = $request->file('file');
            // Make a image name based on id_download, nama_file and current timestamp
            $name = $download->id_download .'_'. $request->nama_file .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/kepustakaan/download/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Download::where('id_download', $download->id_download)
            ->update([
                'nama_file'    => $request->nama_file,
                'file'         => $filePath
            ]);

        return redirect()->to('/admin/kepustakaan/download')->with('status','Data Download Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $download)
    {
        $serverpathimage = Helper::serverpathimage();
        $image_path = "$serverpathimage$download->file";  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        Download::destroy($download->id_download);
        return redirect('/admin/kepustakaan/download')->with('status','Data Download Berhasil Dihapus');
    }
}
