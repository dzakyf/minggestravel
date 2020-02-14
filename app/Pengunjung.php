<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'pengunjung';
    protected $fillable = ['ip_address', 'tanggal', 'bulan', 'tahun'];

    //memberi tahu model kalau primary key-nya yaitu id_pengunjung
    protected $primaryKey = 'id_pengunjung';
}
