<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Artikel;
use Illuminate\Http\Request;

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

}
