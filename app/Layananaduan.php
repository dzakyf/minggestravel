<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layananaduan extends Model
{
    protected $table = 'layananaduan';
    protected $fillable = ['nama', 'email', 'telepon', 'alamat', 'topik', 'pesan', 'jawaban', 'status'];

    //memberi tahu model kalau primary key-nya yaitu id_pesan
    protected $primaryKey = 'id_layananaduan';
}
