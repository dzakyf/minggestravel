<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $table = 'sejarah';
    protected $fillable = ['sejarah'];

    //memberi tahu model kalau primary key-nya yaitu event_id
    protected $primaryKey = 'id_sejarah';
}
