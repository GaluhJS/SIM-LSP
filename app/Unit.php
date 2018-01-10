<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $table = 'unit';

    protected $fillable = [
    	'id_unit', 'judul_unit', 'jenis_standar'
    ];
}
