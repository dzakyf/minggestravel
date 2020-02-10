<?php

namespace App\Http\Controllers;
use App\Banner;
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
use App\Layananaduan;
use App\Kontak;
use App\Pesan;
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
        $banner = Banner::all();
        $pengumuman = Pengumuman::orderBy('id_pengumuman', 'DESC')->get();
        return view('index')->with(compact('banner', 'pengumuman', 'jenispelayanan', 'beritanz', 'sertifikat', 'mitra'));
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

    public function layananaduan(){
        $layananaduan = Layananaduan::all();
        return view('layananaduan')->with(compact('layananaduan'));
    }

    public function layananaduanstore(Request $request){
        $request->validate([
            'nama'      => 'required',
            'email'     => 'required|email',
            'telepon'   => 'required|numeric',
            'alamat'    => 'required',
            'topik'     => 'required',
            'pesan'     => 'required'
        ],[
            'nama.required'         => 'Nama tidak boleh kosong',
            'email.required'        => 'Email tidak boleh kosong',
            'email.email'           => 'Email bukan alamat email yang valid',
            'telepon.required'      => 'Telepon tidak boleh kosong',
            'telepon.numeric'       => 'Nomor telepon harus berupa integer',
            'alamat.required'       => 'Alamat tidak boleh kosong',
            'topik.required'        => 'Topik tidak boleh kosong',
            'pesan.required'        => 'Pesan tidak boleh kosong',
            'email.email'           => 'Email bukan alamat email yang valid',
            'pesan'                 => 'Pesan tidak boleh kosong'
        ]);

        Layananaduan::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'telepon'   => $request->telepon,
            'alamat'     => $request->alamat,
            'topik'     => $request->topik,
            'pesan'     => $request->pesan,
            'jawaban'   => '',
            'status'    => 'off'
        ]);

        return redirect()->to('/layananaduan')->with('status', 'Data Layanan Aduan berhasil dikirim, administrator akan segera memprosesnya');
    }

    public function kontak(){
        $kontak     = Kontak::all();
        return view('kontak')->with(compact('kontak'));
    }

    public function kontakstore(Request $request){
        $request->validate([
            'nama'      => 'required',
            'email'     => 'required|email',
            'pesan'     => 'required'
        ],[
            'nama.required'         => 'Nama tidak boleh kosong',
            'email.required'        => 'Email tidak boleh kosong',
            'email.email'           => 'Email bukan alamat email yang valid',
            'pesan'                 => 'Pesan tidak boleh kosong'
        ]);

        Pesan::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'pesan'     => $request->pesan
        ]);

        return redirect()->to('/kontak')->with('status', 'Data Pesan berhasil dikirim');
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

    public function pengumuman(){
        $pengumuman = Pengumuman::orderBy('id_pengumuman', 'DESC')->paginate(10);
        return view('pengumuman', compact('pengumuman'));
    }

    public function showpengumuman(Pengumuman $pengumuman){
        $beritans     = Berita::orderBy('id_berita', 'DESC')->get();
        $artikels     = Artikel::orderBy('id_artikel', 'DESC')->get();
        $pengumumans  = Pengumuman::orderBy('id_pengumuman', 'DESC')->get();
        return view('showpengumuman', compact('pengumuman', 'beritans', 'artikels', 'pengumumans'));
    }
}
