<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Artikel;
use App\JenisPelayanan;
use App\KategoriPelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

class MenuController extends Controller
{

    public function dashboard(){
        return view('admins.index');
    }

    function beritadanartikel(){
        $berita     = Berita::orderBy('id_berita', 'DESC')->get();
        $artikel    = Artikel::orderBy('id_artikel', 'DESC')->get();
        return view('admins.beritadanartikel.index', ['berita' => $berita, 'artikel' => $artikel]);
    }

    function layanandantarif(){
        $query = DB::table('kategori_pelayanan')
                    ->join('jenis_pelayanan', 'kategori_pelayanan.id_pelayanan', '=', 'jenis_pelayanan.id_pelayanan')
                    ->select('kategori_pelayanan.id_kategori', 'kategori_pelayanan.id_pelayanan','kategori_pelayanan.nama', 'kategori_pelayanan.jasa_sarana','kategori_pelayanan.jasa_pelayanan', 'kategori_pelayanan.total', 'jenis_pelayanan.nama as namas', 'jenis_pelayanan.id_pelayanan as id_pelayanans')
                    ->orderBy('id_kategori', 'DESC')->get();
        $jenis_pelayanan    = JenisPelayanan::orderBy('id_pelayanan', 'DESC')->get();
        return view('admins.layanandantarif.index', ['query' => $query, 'jenis_pelayanan' => $jenis_pelayanan]);
    }

}
