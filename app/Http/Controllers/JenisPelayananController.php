<?php

namespace App\Http\Controllers;

use App\JenisPelayanan;
use Illuminate\Http\Request;

class JenisPelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ditampilkan melalui MenuController
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
            'nama'             => 'required',
        ]);

        JenisPelayanan::create([
            'nama'             => $request->nama,
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
