<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Unidad extends Model
{
    //
    protected $table='unidad';
    public function scopeUnidadActivo()
    {
        $respuesta = DB::select("SELECT u.id, u.nombre, concat(s.nombre,' ',s.apellido) as socio, u.placa, u.modelo, u.marca, u.soat_vence, u.estado 
        FROM unidad u
        inner join socio s on s.id=u.socio_id;", array(1));
        return $respuesta;
    }
}
