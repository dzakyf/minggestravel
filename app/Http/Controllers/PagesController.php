<?php

namespace App\Http\Controllers;
use App\Sejarah;
use App\Visi;
use App\Misi;
use App\Struktur_Organisasi;
use App\Upaya_Kesehatan;
use App\Kompetensi_SDM;
use App\Berita;
use App\Artikel;
use App\Pengumuman;
use App\Penelitian;
use App\Perpustakaan;
use App\Galeri;
use App\Download;
USE App\Kontak;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function sejarah(){
        $sejarah = Sejarah::all();
        return view('sejarah')->with(compact('sejarah'));
    }

    public function visidanmisi(){
        $visi = Visi::all();
        $misi = Misi::all();
        return view('visidanmisi')->with(compact('visi', 'misi'));
    }

    public function strukturorganisasi(){
        $struktur_organisasi = Struktur_Organisasi::all();
        return view('strukturorganisasi')->with(compact('struktur_organisasi'));
    }

    public function upayakesehatan(){
        $upaya_kesehatan = Upaya_Kesehatan::orderBy('id_upaya_kesehatan', 'DESC')->paginate(6);
        return view('upayakesehatan')->with(compact('upaya_kesehatan'));
    }

    public function kompetensisdm(){
        $kompetensi_SDM = Kompetensi_SDM::all();
        return view('kompetensisdm')->with(compact('kompetensi_SDM'));
    }

    public function berita(){
        $berita = Berita::orderBy('id_berita', 'DESC')->paginate(6);
        return view('berita')->with(compact('berita'));
    }

    public function showberita(Berita $berita){
        $beritans     = Berita::orderBy('id_berita', 'DESC')->get();
        $artikels     = Artikel::orderBy('id_artikel', 'DESC')->get();
        $pengumumans  = Pengumuman::orderBy('id_pengumuman', 'DESC')->get();
        return view('showberita', compact('berita', 'beritans', 'artikels', 'pengumumans'));
    }

    public function artikel(){
        $artikel = Artikel::orderBy('id_artikel', 'DESC')->paginate(6);
        return view('artikel')->with(compact('artikel'));
    }

    public function showartikel(Artikel $artikel){
        $beritans     = Berita::orderBy('id_berita', 'DESC')->get();
        $artikels     = Artikel::orderBy('id_artikel', 'DESC')->get();
        $pengumumans  = Pengumuman::orderBy('id_pengumuman', 'DESC')->get();
        return view('showartikel', compact('artikel', 'beritans', 'artikels', 'pengumumans'));
    }

    public function penelitian(){
        $penelitian     = Penelitian::orderBy('id_penelitian', 'DESC')->paginate(5);
        return view('penelitian', compact('penelitian'));
    }

    public function perpustakaan(){
        $perpustakaan   = Perpustakaan::orderBy('id_perpustakaan', 'DESC')->paginate(6);
        return view('perpustakaan', compact('perpustakaan'));
    }

    public function showperpustakaan(Perpustakaan $perpustakaan){
        return view('showperpustakaan', compact('perpustakaan'));
    }

    public function galeri(){
        $galeri         = Galeri::orderBy('id_galeri', 'DESC')->paginate(8);
        return view('galeri', compact('galeri'));
    }

    public function download(){
        $download = Download::orderBy('id_download', 'DESC')->paginate(10);
        return view('download')->with(compact('download'));
    }

    public function kontak(){
        $kontak     = Kontak::orderBy('id_kontak', 'DESC')->get();
        return view('kontak')->with(compact('kontak'));
    }
}
