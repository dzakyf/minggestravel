<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur_Organisasi extends Model
{
    protected $table = 'struktur_organisasi';
    protected $fillable = ['gambar','deskripsi'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_struktur_organisasi';
}
