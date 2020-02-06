<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $table = 'sertifikat';
    protected $fillable = ['nama', 'gambar'];

    protected $primaryKey = 'id_sertifikat';
}
