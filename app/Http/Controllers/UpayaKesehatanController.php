<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Upaya_Kesehatan;
use Illuminate\Http\Request;

class UpayaKesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upaya_kesehatan = Upaya_Kesehatan::orderBy('id_upaya_kesehatan', 'DESC')->get();
        return view('admins.profile.upayakesehatan.index', ['upaya_kesehatan' => $upaya_kesehatan]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.profile.upayakesehatan.create');
   
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
            'judul'                       => 'required',
            'upaya_kesehatan'             => 'required',

        ]);

        
        $id_upaya_kesehatanlast = DB::table('upaya_kesehatan')->select('id_upaya_kesehatan')->latest('id_upaya_kesehatan')->first();
        if($id_upaya_kesehatanlast){
            $id_upaya_kesehatanlastplus1 = $id_upaya_kesehatanlast->id_upaya_kesehatan + 1;
        }else{
            $id_upaya_kesehatanlastplus1 = 1;
        }
        

        Upaya_Kesehatan::create([
            'judul'                       => $request->judul,
            'upaya_kesehatan'             => $request->upaya_kesehatan,
        ]);

        return redirect()->to('/admin/profile/upayakesehatan')->with('status','Data upaya kesehatan berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upaya_Kesehatan  $upaya_Kesehatan
     * @return \Illuminate\Http\Response
     */
    public function show(Upaya_Kesehatan $upaya_kesehatan)
    {
        return view('admins.profile.upayakesehatan.show', compact('upaya_kesehatan')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upaya_Kesehatan  $upaya_kesehatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Upaya_Kesehatan $upaya_kesehatan)
    {
        return view('admins.profile.upayakesehatan.edit', compact('upaya_kesehatan'));

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
         $request->validate([
            'judul'                   => 'required',
            'upaya_kesehatan'         => 'required'
        ]);

        
        Upaya_Kesehatan::where('id_upaya_kesehatan', $upaya_kesehatan->id_upaya_kesehatan)
            ->update([
                'judul'                   =>$request->judul, 
                'upaya_kesehatan'        => $request->upaya_kesehatan
            ]);

        return redirect()->to('/admin/profile/upayakesehatan')->with('status','Data upaya kesehatan berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upaya_Kesehatan  $upaya_Kesehatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upaya_Kesehatan $upaya_kesehatan)
    {
        Upaya_Kesehatan::destroy($upaya_kesehatan->id_upaya_kesehatan);
        return redirect('/admin/profile/upayakesehatan')->with('status','Data upaya kesehatan berhasil dihapus');

    }
}
