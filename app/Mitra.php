<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitra';
    protected $fillable = ['nama', 'gambar'];

    protected $primaryKey = 'id_mitra';
}
