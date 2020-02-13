<?php

namespace App\Http\Controllers;

use App\Layananaduan;
use Illuminate\Http\Request;

class LayananAduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layananaduan = LayananAduan::orderBy('id_layananaduan', 'DESC')->get();
        return view('admins.layananaduan.index', ['layananaduan' => $layananaduan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ga ada hehe
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //buka PagesController yang methodnya layananaduanstore
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Layananaduan  $layananaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Layananaduan $layananaduan)
    {
        return view('admins.layananaduan.show', compact('layananaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Layananaduan  $layananaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layananaduan $layananaduan)
    {
        return view('admins.layananaduan.edit', compact('layananaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Layananaduan  $layananaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layananaduan $layananaduan)
    {
        $request->validate([
            'jawaban'   => 'required'
        ]);

        if($layananaduan->status == 'off'){
            $keterangan = 'Dijawab';
        }else{
            $keterangan = "Dihapus";
        }

        Layananaduan::where('id_layananaduan', $layananaduan->id_layananaduan)
            ->update([
                'jawaban'   => $request->jawaban,
                'status'    => 'on'
            ]);
        
        if($keterangan == "Dijawab"){
            return redirect()->to('/admin/layananaduan')->with('status','Data Layanan Aduan Berhasil Dijawab');
        }else{
            return redirect()->to('/admin/layananaduan')->with('status','Data Layanan Aduan Berhasil Diubah');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Layananaduan  $layananaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layananaduan $layananaduan)
    {
        Layananaduan::destroy($layananaduan->id_layananaduan);
        return redirect('/admin/layananaduan')->with('status', 'Data Layanan Aduan Berhasil Dihapus');
    }
}
