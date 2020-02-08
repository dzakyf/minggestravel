<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul', 'kategori', 'berita', 'gambar'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_berita';
}
