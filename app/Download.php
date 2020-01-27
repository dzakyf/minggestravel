<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = 'download';
    protected $fillable = ['nama_file', 'file'];

    //memberi tahu model kalau primary key-nya yaitu id_download
    protected $primaryKey = 'id_download';
}
