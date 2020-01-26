<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    protected $table = 'perpustakaan';
    protected $fillable = ['judul', 'pengarang', 'edisi', 'tahun_terbit', 'jumlah_halaman', 'kategori', 'resensi', 'cover'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_perpustakaan';
}
