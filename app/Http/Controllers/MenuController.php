<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Artikel;
use App\JenisPelayanan;
use App\KategoriPelayanan;
use App\Kontak;
use App\Penelitian;
use App\Perpustakaan;
use App\Galeri;
use App\Download;
use App\Visi;
use App\Misi;
use App\Sejarah;
use App\Struktur_Organisasi;
use App\Upaya_Kesehatan;
use App\Kompetensi_SDM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadTrait;

class MenuController extends Controller
{

    public function dashboard(){
        $berita         = DB::table('berita')->count();
        $artikel        = DB::table('artikel')->count();
        $jenispelayanan = DB::table('jenis_pelayanan')->count();
        $kategoripelayanan = DB::table('kategori_pelayanan')->count();
        $kontak         = DB::table('kontak')->select('email')->first();
        $penelitian     = DB::table('penelitian')->count();
        $perpustakaan   = DB::table('perpustakaan')->count();
        $galeri         = DB::table('galeri')->count();
        $download       = DB::table('download')->count();
        $sejarah        = DB::table('sejarah')->count();
        $visi           = DB::table('visi')->count();
        $misi           = DB::table('misi')->count();
        $struktur_organisasi    = DB::table('struktur_organisasi')->count();
        $upaya_kesehatan        = DB::table('upaya_kesehatan')->count();
        $kompetensi_sdm         = DB::table('kompetensi_sdm')->count();
        return view('admins.index')->with(compact('berita', 'artikel', 'jenispelayanan', 'kategoripelayanan', 'kontak', 'penelitian', 'perpustakaan', 'galeri', 'download', 'sejarah', 'visi', 'misi', 'struktur_organisasi', 'upaya_kesehatan', 'kompetensi_sdm'));
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

    function visidanmisi(){
        $visi   = Visi::orderBy('id_visi', 'DESC')->get();
        $misi   = Misi::orderBy('id_misi', 'DESC')->get();
        return view('admins.profile.visidanmisi.index', ['visi' => $visi, 'misi' => $misi]);
    }

}
