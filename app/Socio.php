<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Socio extends Model
{
    protected $table = 'socio';

    public static function obtenerSociosActivos()
    {
        $respuesta = DB::select('select id, concat(nombre," ",apellido) as socio, dni, 
                                acciones, telefono from socio;');
        return $respuesta;
    }
    //
}