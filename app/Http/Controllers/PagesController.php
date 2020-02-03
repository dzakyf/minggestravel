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
        $upaya_kesehatan = Upaya_Kesehatan::paginate(6);
        return view('upayakesehatan')->with(compact('upaya_kesehatan'));
    }

    public function kompetensisdm(){
        $kompetensi_SDM = Kompetensi_SDM::all();
        return view('kompetensisdm')->with(compact('kompetensi_SDM'));
    }

    public function berita(){
        $berita = Berita::paginate(6);
        return view('berita')->with(compact('berita'));
    }

    public function showberita(Berita $berita){
        $beritans     = Berita::orderBy('id_berita', 'DESC')->get();
        $artikels     = Artikel::orderBy('id_artikel', 'DESC')->get();
        $pengumumans  = Pengumuman::orderBy('id_pengumuman', 'DESC')->get();
        return view('showberita', compact('berita', 'beritans', 'artikels', 'pengumumans'));
    }

    public function artikel(){
        $artikel = Artikel::paginate(6);
        return view('artikel')->with(compact('artikel'));
    }

    public function showartikel(Artikel $artikel){
        $beritans     = Berita::orderBy('id_berita', 'DESC')->get();
        $artikels     = Artikel::orderBy('id_artikel', 'DESC')->get();
        $pengumumans  = Pengumuman::orderBy('id_pengumuman', 'DESC')->get();
        return view('showartikel', compact('artikel', 'beritans', 'artikels', 'pengumumans'));
    }
}
