<?php

namespace App\Http\Controllers;

use App\Penelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

class PenelitianController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return redirect()->action('MenuController@dashboard');
        /*
        $penelitian = Penelitian::orderBy('id_penelitian', 'DESC')->get();
        return view('admins.kepustakaan.penelitian.index', ['penelitian' => $penelitian]);
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return redirect()->action('MenuController@dashboard');
        /*
        return view('admins.kepustakaan.penelitian.create');
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        /*
        $request->validate([
            'judul'             => 'required',
            'peneliti'          => 'required',
            'tanggal'           => 'required',
            'deskripsi'         => 'required',
        ]);

        Penelitian::create([
            'judul'             => $request->judul,
            'peneliti'          => $request->peneliti,
            'tanggal'           => $request->tanggal,
            'deskripsi'         => $request->deskripsi
        ]);

        return redirect()->to('/admin/kepustakaan/penelitian')->with('status','Data Penelitian berhasil ditambahkan');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function show(Penelitian $penelitian)
    {   
        /*
        return view('admins.kepustakaan.penelitian.show', compact('penelitian'));
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function edit(Penelitian $penelitian)
    {
        return view('admins.kepustakaan.penelitian.edit', compact('penelitian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penelitian $penelitian)
    {
        $request->validate([
            'judul'             => 'required',
            'peneliti'          => 'required',
            'tanggal'           => 'required',
            'deskripsi'         => 'required'
        ]);

        Penelitian::where('id_penelitian', $penelitian->id_penelitian)
            ->update([
                'judul'         => $request->judul,
                'peneliti'      => $request->peneliti,
                'tanggal'       => $request->tanggal,
                'deskripsi'     => $request->deskripsi
            ]);

        return redirect()->to('/admin/kepustakaan/penelitian')->with('status','Data Penelitian Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penelitian  $penelitian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penelitian $penelitian)
    {
        Penelitian::destroy($penelitian->id_penelitian);
        return redirect('/admin/kepustakaan/penelitian')->with('status','Data Penelitian Berhasil Dihapus');
    }
}
