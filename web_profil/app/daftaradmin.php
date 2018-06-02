<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftaradmin extends Model
{
    //
    protected $table = 'daftaradmin';

   	protected $fillable = [
   		'name_admin', 'foto_admin', 'NRP', 'jabatan_admin',
   	];
}
