<?php

namespace App\Http\Controllers;

use App\Kompetensi_SDM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KompetensiSDMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompetensi_sdm = Kompetensi_SDM::orderBy('id_kompetensi_sdm', 'DESC')->get();
        return view('admins.profile.kompetensisdm.index', ['kompetensi_sdm' => $kompetensi_sdm]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.profile.kompetensisdm.create');

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
            'judul'                     => 'required',
            'kompetensi_sdm'             => 'required',

        ]);

        
        $id_kompetensi_sdmlast = DB::table('kompetensi_sdm')->select('id_kompetensi_sdm')->latest('id_kompetensi_sdm')->first();
        if($id_kompetensi_sdmlast){
            $id_kompetensi_sdmlastplus1 = $id_kompetensi_sdmlast->id_kompetensi_sdm + 1;
        }else{
            $id_kompetensi_sdmlastplus1 = 1;
        }
        


        Kompetensi_SDM::create([
            'judul'                     => $request->judul,
            'kompetensi_sdm'            => $request->kompetensi_sdm
        ]);

        return redirect()->to('/admin/profile/kompetensisdm')->with('status','Data kompetensi SDM berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kompetensi_SDM  $kompetensi_SDM
     * @return \Illuminate\Http\Response
     */
    public function show(Kompetensi_SDM $kompetensi_sdm)
    {
        return view('admins.profile.kompetensisdm.show', compact('kompetensi_sdm')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kompetensi_SDM  $kompetensi_SDM
     * @return \Illuminate\Http\Response
     */
    public function edit(Kompetensi_SDM $kompetensi_sdm)
    {
        return view('admins.profile.kompetensisdm.edit', compact('kompetensi_sdm'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kompetensi_SDM  $kompetensi_SDM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kompetensi_SDM $kompetensi_sdm)
    {
        $request->validate([
            'judul'                  => 'required', 
            'kompetensi_sdm'         => 'required',
        ]);

        
        Kompetensi_SDM::where('id_kompetensi_sdm', $kompetensi_sdm->id_kompetensi_sdm)
            ->update([
                'judul'                 => $request->judul,
                'kompetensi_sdm'        => $request->kompetensi_sdm
            ]);

        return redirect()->to('/admin/profile/kompetensisdm')->with('status','Data kompetensi SDM berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kompetensi_SDM  $kompetensi_SDM
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kompetensi_SDM $kompetensi_sdm)
    {
        Kompetensi_SDM::destroy($kompetensi_sdm->id_kompetensi_sdm);
        return redirect('/admin/profile/kompetensisdm')->with('status','Data kompetensi SDM berhasil dihapus');

    }
}
