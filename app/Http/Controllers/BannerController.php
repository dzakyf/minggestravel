<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Helper;

class BannerController extends Controller
{
    use UploadTrait;

    public function index(){
        $banner = Banner::all();
        return view('admins.banner.index', ['banner' => $banner]);
    }

    public function create(){
        return view('admins.banner.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama'      => 'required',
            'banner'    => 'required'
        ]);

        $id_bannerlast = DB::table('banner')->select('id_banner')->latest('id_banner')->first();
        if($id_bannerlast){
            $id_bannerlastplus1 = $id_bannerlast->id_banner + 1;
        }else{
            $id_bannerlastplus1 = 1;
        }
        

        // Check if a image has been uploaded
        if ($request->has('banner')) {
            // Get image file
            $image = $request->file('banner');
            // Make a image name based on id_banner, nama and current timestamp
            $name = $id_bannerlastplus1 .'_'. $request->nama .'_'. time();
            // Define folder path   
            $folder = '/uploads/images/banner/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image, accessed by Fany
            $this->uploadOne($image, $folder, 'public', $name);
        }

        Banner::create([
            'nama'              => $request->nama,
            'banner'            => $filePath
        ]);

        return redirect()->to('/admin/banner')->with('status','Data banner berhasil ditambahkan');
    }

    public function show(Banner $banner){
        return view('admins.banner.show', compact('banner'));
    }

    public function edit(Banner $banner){
        return view('admins.banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner){
        $request->validate([
            'nama'         => 'required'
        ]);

        $filePath = $banner->banner;

        // Check if a image has been uploaded
        if ($request->has('banner')) {
            $serverpathimage = Helper::serverpathimage();
            $image_path = "$serverpathimage$banner->banner";  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            // Get image file
            $image = $request->file('banner');
            // Make a image name based on id_banner, nama and current timestamp
            $name = $banner->id_banner .'_'.$request->nama .'_'.time();
            // Define folder path   
            $folder = '/uploads/images/banner/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image, fungsi ini ada di app/Traits/UploadTrait.php diambil dari larashout.com cara upload image
            $this->uploadOne($image, $folder, 'public', $name);
        }    

        Banner::where('id_banner', $banner->id_banner)
            ->update([
                'nama'         => $request->nama,
                'banner'        => $filePath
            ]);

        return redirect()->to('/admin/banner')->with('status','Data Banner Berhasil Diubah');
    }

    public function destroy(Banner $banner){
        $serverpathimage = Helper::serverpathimage();
        $image_path = "$serverpathimage$banner->banner";  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        Banner::destroy($banner->id_banner);
        return redirect('/admin/banner')->with('status', 'Data Banner Berhasi Dihapus');
    }
}
