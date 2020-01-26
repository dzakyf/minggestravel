<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['judul', 'deskripsi', 'artikel', 'gambar'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_artikel';

}
