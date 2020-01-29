<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;


class SejarahController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarah = Sejarah::orderBy('id_sejarah', 'DESC')->get();
        return view('admins.profile.sejarah.index', ['sejarah' => $sejarah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.profile.sejarah.create');
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
            'sejarah'             => 'required',
        ]);

        
        $id_sejarahlast = DB::table('sejarah')->select('id_sejarah')->latest('id_sejarah')->first();
        if($id_sejarahlast){
            $id_sejarahlastplus1 = $id_sejarahlast->id_sejarah + 1;
        }else{
            $id_sejarahlastplus1 = 1;
        }
        

        Sejarah::create([
            'sejarah'             => $request->sejarah,
        ]);

        return redirect()->to('/admin/profile/sejarah')->with('status','Data sejarah berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function show(Sejarah $sejarah)
    {
        return view('admins.profile.sejarah.show', compact('sejarah')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sejarah $sejarah)
    {
       return view('admins.profile.sejarah.edit', compact('sejarah'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sejarah $sejarah)
    {
        $request->validate([
            'sejarah'         => 'required',
        ]);

        
        Sejarah::where('id_sejarah', $sejarah->id_sejarah)
            ->update([
                'sejarah'        => $request->sejarah
            ]);

        return redirect()->to('/admin/profile/sejarah')->with('status','Data sejarah berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejarah $sejarah)
    {
        Sejarah::destroy($sejarah->id_sejarah);
        return redirect('/admin/profile/sejarah')->with('status','Data sejarah berhasil dihapus');

    }
}
