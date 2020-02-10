<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesan';
    protected $fillable = ['nama', 'email', 'pesan'];

    //memberi tahu model kalau primary key-nya yaitu id_pesan
    protected $primaryKey = 'id_pesan';
}
