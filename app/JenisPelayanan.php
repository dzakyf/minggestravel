<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPelayanan extends Model
{
    protected $table = 'jenis_pelayanan';
    protected $fillable = ['nama'];

    //memberi tahu model kalau primary key-nya yaitu id_pelayanan
    protected $primaryKey = 'id_pelayanan';
}
