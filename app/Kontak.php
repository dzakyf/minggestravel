<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontak';
    protected $fillable = ['email'];

    //memberi tahu model kalau primary key-nya yaitu id_kontak
    protected $primaryKey = 'id_kontak';
}
