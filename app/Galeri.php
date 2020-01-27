<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = ['judul', 'deskripsi', 'gambar'];

    //memberi tahu model kalau primary key-nya yaitu id_galeri
    protected $primaryKey = 'id_galeri';
}
