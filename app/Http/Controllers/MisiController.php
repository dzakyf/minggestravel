<?php

namespace App\Http\Controllers;

use App\Misi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->to('/admin/profile/visidanmisi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.profile.visidanmisi.misi.create');

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
            'misi'   => 'required',
        ]);

        
        $id_misilast= DB::table('misi')->select('id_misi')->latest('id_misi')->first();
        if($id_misilast){
            $id_misilastplus1 = $id_misilast->id_misi+ 1;
        }else{
            $id_misilastplus1 = 1;
        }
     

        Misi::create([
            'misi'           => $request->misi,
        ]);

        return redirect()->to('/admin/profile/visidanmisi')->with('status','Data misi berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function show(Misi $misi)
    {
        return view('admins.profile.visidanmisi.misi.show', compact('misi')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function edit(Misi $misi)
    {
        return view('admins.profile.visidanmisi.misi.edit', compact('misi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Misi $misi)
    {
        $request->validate([
            'misi'        => 'required',
            
        ]);


        Misi::where('id_misi', $misi->id_misi)
            ->update([
                'misi'        => $request->misi,
            ]);

        return redirect()->to('/admin/profile/visidanmisi')->with('status','Data misi berhasil diubah');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Misi  $misi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Misi $misi)
    {
        Misi::destroy($misi->id_misi);
        return redirect('/admin/profile/visidanmisi')->with('status','Data misi berhasil dihapus');

    }
}
