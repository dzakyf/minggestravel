<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPelayanan extends Model
{
    protected $table = 'kategori_pelayanan';
    protected $fillable = ['id_pelayanan', 'nama', 'jasa_sarana', 'jasa_pelayanan', 'total'];

    //memberi tahu model kalau primary key-nya yaitu id_kategori
    protected $primaryKey = 'id_kategori';
}
