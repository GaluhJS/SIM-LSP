<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailUnit extends Model
{
    //
    protected $table = 'detail_unit';

    protected $fillable = [
    	'id_unit', 'elemen_kompetensi', 'pertanyaan'
    ];
}
