<?php

namespace App\Http\Controllers;

use App\Perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpustakaan = Perpustakaan::orderBy('perpustakaan_id', 'DESC')->get();
        return view('admins.perpustakaan.index', ['perpustakaan' => $perpustakaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perpustakaan $perpustakaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perpustakaan $perpustakaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perpustakaan $perpustakaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perpustakaan $perpustakaan)
    {
        //
    }
}
