<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventaris extends Model
{
    //
    protected $table = 'inventaris';

    protected $fillable = [
    	'jenis_barang','jumlah_barang','merek_barang'
    ];

    public $timestamps = false;
}
