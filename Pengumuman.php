<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = ['judul','gambar', 'pengumuman'];

    //memberi tahu model kalau primary key-nya yaitu id_pegumuman
    protected $primaryKey = 'id_pengumuman';
}
