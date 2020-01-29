<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    protected $table = 'misi';
    protected $fillable = ['misi'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_misi';

}