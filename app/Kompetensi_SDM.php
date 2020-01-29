<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi_SDM extends Model
{
    protected $table = 'kompetensi_sdm';
    protected $fillable = ['judul', 'kompetensi_sdm'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_kompetensi_sdm';
}
