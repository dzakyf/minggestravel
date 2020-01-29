<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    protected $table = 'visi';
    protected $fillable = ['visi'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_visi';

}