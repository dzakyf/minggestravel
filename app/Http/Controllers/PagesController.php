<?php

namespace App\Http\Controllers;
use App\JenisPelayanan;
use App\KategoriPelayanan;
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
use App\Kontak;
use App\Mitra;
use App\Sertifikat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $mitra      = Mitra::all();
        $sertifikat = Sertifikat::all();
        $beritanz    = Berita::orderBy('id_berita', 'DESC')->get();
        $jenispelayanan = JenisPelayanan::orderBy('nama', 'DESC')->get();
        return view('index')->with(compact('jenispelayanan', 'beritanz', 'sertifikat', 'mitra'));
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
        $penelitian     = Penelitian::orderBy('id_penelitian', 'DESC')->paginate(3);
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

    public function layanan(JenisPelayanan $jenispelayanan){
        $id_pelayanan   = $jenispelayanan->id_pelayanan;

        $nama_pelayanan = $jenispelayanan->nama;

        $query = DB::table('kategori_pelayanan')
                    ->join('jenis_pelayanan', 'kategori_pelayanan.id_pelayanan', '=', 'jenis_pelayanan.id_pelayanan')
                    ->select('kategori_pelayanan.nama')
                    ->where('kategori_pelayanan.id_pelayanan', $id_pelayanan)
                    ->orderBy('kategori_pelayanan.nama', 'ASC')->get();

        return view('layanan', ['query' => $query, 'nama_pelayanan' => $nama_pelayanan]);
    }

    public function tarif(){
        $query = DB::table('kategori_pelayanan')
                    ->join('jenis_pelayanan', 'kategori_pelayanan.id_pelayanan', '=', 'jenis_pelayanan.id_pelayanan')
                    ->select('kategori_pelayanan.nama', 'kategori_pelayanan.total', 'jenis_pelayanan.nama as namas')
                    ->orderBy('kategori_pelayanan.id_pelayanan', 'ASC')->get();
        return view('tarif', ['query' => $query]);
    }
}
