<?php

namespace App\Http\Controllers;
use App\Sejarah;
use App\Visi;
use App\Misi;
use App\Struktur_Organisasi;
use App\Upaya_Kesehatan;
use App\Kompetensi_SDM;
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
}
