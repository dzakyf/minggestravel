<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak    = Kontak::orderBy('id_kontak', 'DESC')->get();
        return view('admins.kontakdanpesan.kontak.index', ['kontak' => $kontak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.kontakdanpesan.kontak.create');
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
            'alamat'            => 'required',
            'telepon'           => 'required',
            'fax'               => 'required',
            'email'             => 'required|email'
            
        ]);

        Kontak::create([
            'alamat'            => $request->alamat,
            'telepon'           => $request->telepon,
            'fax'               => $request->fax,
            'email'             => $request->email
        ]);

        return redirect()->to('/admin/kontakdanpesan/kontak')->with('status','Data kontak berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        return view('admins.kontakdanpesan.kontak.show', compact('kontak')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak)
    {
        return view('admins.kontakdanpesan.kontak.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'alamat'        => 'required',
            'telepon'       => 'required',
            'fax'           => 'required',
            'email'         => 'required|email'
        ]);

        Kontak::where('id_kontak', $kontak->id_kontak)
            ->update([
                'alamat'        => $request->alamat,
                'telepon'       => $request->telepon,
                'fax'           => $request->fax,
                'email'         => $request->email
            ]);

        return redirect()->to('/admin/kontakdanpesan/kontak')->with('status','Data Kontak Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {
        Kontak::destroy($kontak->id_kontak);
        return redirect('/admin/kontakdanpesan/kontak')->with('status','Data Kontak Berhasil Dihapus');
    }
}
