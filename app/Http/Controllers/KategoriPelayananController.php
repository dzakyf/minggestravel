<?php

namespace App\Http\Controllers;

use App\KategoriPelayanan;
use App\JenisPelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriPelayananController extends Controller
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
        return view('admins.layanandantarif.kategoripelayanan.create');
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
            'kategoripelayanan' => 'required',
            'jenispelayanan'    => 'required',
            'jasa_sarana'       => 'required|numeric',
            'jasa_pelayanan'    => 'required|numeric',
        ]);

        $total = $request->jasa_sarana + $request->jasa_pelayanan;
        
        KategoriPelayanan::create([
            'id_pelayanan'      => $request->jenispelayanan,
            'nama'              => $request->kategoripelayanan,
            'jasa_sarana'       => $request->jasa_sarana,
            'jasa_pelayanan'    => $request->jasa_pelayanan,
            'total'             => $total
        ]);

        return redirect()->to('/admin/layanandantarif')->with('status','Data Jenis Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriPelayanan  $kategoriPelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriPelayanan $query)
    {
        $id_pelayanan = $query->id_pelayanan;

        $query = DB::table('kategori_pelayanan')
                    ->join('jenis_pelayanan', 'kategori_pelayanan.id_pelayanan', '=', 'jenis_pelayanan.id_pelayanan')
                    ->select('kategori_pelayanan.id_kategori', 'kategori_pelayanan.id_pelayanan','kategori_pelayanan.nama', 'kategori_pelayanan.jasa_sarana','kategori_pelayanan.jasa_pelayanan', 'kategori_pelayanan.total', 'kategori_pelayanan.created_at', 'kategori_pelayanan.updated_at', 'jenis_pelayanan.nama as namas', 'jenis_pelayanan.id_pelayanan as id_pelayanans')
                    ->where('kategori_pelayanan.id_pelayanan',  $id_pelayanan)
                    ->orderBy('id_kategori', 'DESC')->get();

        return view('admins.layanandantarif.kategoripelayanan.show', compact('query')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriPelayanan  $kategoriPelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriPelayanan $query)
    {
        $id_pelayanan = $query->id_pelayanan;

        $query = DB::table('kategori_pelayanan')
                    ->join('jenis_pelayanan', 'kategori_pelayanan.id_pelayanan', '=', 'jenis_pelayanan.id_pelayanan')
                    ->select('kategori_pelayanan.id_kategori', 'kategori_pelayanan.id_pelayanan','kategori_pelayanan.nama', 'kategori_pelayanan.jasa_sarana','kategori_pelayanan.jasa_pelayanan', 'kategori_pelayanan.total', 'kategori_pelayanan.created_at', 'kategori_pelayanan.updated_at', 'jenis_pelayanan.nama as namas', 'jenis_pelayanan.id_pelayanan as id_pelayanans')
                    ->where('kategori_pelayanan.id_pelayanan',  $id_pelayanan)
                    ->orderBy('id_kategori', 'DESC')->get();
        $jenis_pelayanan    = JenisPelayanan::orderBy('id_pelayanan', 'DESC')->get();

        return view('admins.layanandantarif.kategoripelayanan.edit', compact('query', 'jenis_pelayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriPelayanan  $kategoriPelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriPelayanan $query)
    {
        $request->validate([
            'jenispelayanan'        => 'required',
            'kategoripelayanan'     => 'required',
            'jasa_sarana'           => 'required',
            'jasa_pelayanan'        => 'required'
        ]);

        $total = $request->jasa_sarana + $request->jasa_pelayanan;

        KategoriPelayanan::where('id_kategori', $query->id_kategori)
            ->update([
                'id_pelayanan'          => $request->jenispelayanan,
                'nama'                  => $request->kategoripelayanan,
                'jasa_sarana'           => $request->jasa_sarana,
                'jasa_pelayanan'        => $request->jasa_pelayanan,
                'total'                 => $total
            ]);

        return redirect()->to('/admin/layanandantarif')->with('status','Data Kategori Pelayanan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriPelayanan  $kategoriPelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriPelayanan $query)
    {
        KategoriPelayanan::destroy($query->id_kategori);
        return redirect('/admin/layanandantarif')->with('status','Data Kategori Pelayanan Berhasil Dihapus');
    }
}
