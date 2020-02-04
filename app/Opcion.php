<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    protected $table = 'opcion';


    public function scopeOpcionesActivas($query){
        return $query->where('estado','=',1);
    }
    //
}
