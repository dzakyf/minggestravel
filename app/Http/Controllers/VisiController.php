<?php

namespace App\Http\Controllers;

use App\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisiController extends Controller
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
        return view('admins.profile.visidanmisi.visi.create');

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
            'visi'   => 'required',
        ]);

        
        $id_visilast= DB::table('visi')->select('id_visi')->latest('id_visi')->first();
        if($id_visilast){
            $id_visilastplus1 = $id_visilast->id_visi+ 1;
        }else{
            $id_visilastplus1 = 1;
        }
        


        Visi::create([
            'visi'           => $request->visi,
        ]);

        return redirect()->to('/admin/profile/visidanmisi')->with('status','Data visi berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function show(Visi $visi)
    {
        return view('admins.profile.visidanmisi.visi.show', compact('visi')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function edit(Visi $visi)
    {
        return view('admins.profile.visidanmisi.visi.edit', compact('visi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visi $visi)
    {
        $request->validate([
            'visi'        => 'required',
            
        ]);


        Visi::where('id_visi', $visi->id_visi)
            ->update([
                'visi'        => $request->visi,
            ]);

        return redirect()->to('/admin/profile/visidanmisi')->with('status','Data visi berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visi  $visi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visi $visi)
    {
        Visi::destroy($visi->id_visi);
        return redirect('/admin/profile/visidanmisi')->with('status','Data visi berhasil dihapus');

    }
}
