<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table    = 'banner';
    protected $fillable = ['nama', 'banner'];

    protected $primaryKey   = 'id_banner';
}
