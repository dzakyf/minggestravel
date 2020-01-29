<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upaya_Kesehatan extends Model
{
    protected $table = 'upaya_kesehatan';
    protected $fillable = ['judul', 'upaya_kesehatan'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_upaya_kesehatan';
}
