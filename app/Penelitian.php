<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    protected $table = 'penelitian';
    protected $fillable = ['judul', 'peneliti', 'deskripsi', 'tanggal'];

    //memberi tahu model kalau primary key-nya yaitu id_penelitian
    protected $primaryKey = 'id_penelitian';
}
