<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upaya_Kesehatan extends Model
{
    protected $table = 'upaya_kesehatan';
    protected $fillable = ['judul', 'deskripsi', 'upaya_kesehatan', 'gambar'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_upaya_kesehatan';
}
