<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Conductor extends Model
{
    //
    protected $table='conductor';
    public function scopeConductorActivo()
    {
        $respuesta = DB::select("SELECT 
                                c.id, concat (c.nombre,' ', c.apellido) as conductor, c.dni, c.edad,
                                 c.telefono, c.estado, if(cp.id is not null,1,0) as tiene_penalidad
                                FROM conductor c
                                left join conductor_penalidad cp on cp.conductor_id = c.id
                                left join penalidad p on p.id = cp.penalidad_id;", array(1));
        return $respuesta;
    }
}
