<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Unidad extends Model
{
    //
    protected $table='unidad';
    public static function UnidadActivo()
    {
        $respuesta = DB::select("SELECT u.id, u.nombre, concat(s.nombre,' ',s.apellido) as socio, 
                                u.placa, u.modelo, u.marca, u.soat_vence, ue.descripcion as estado_descripcion 
                                FROM unidad u
                                inner join socio s on s.id=u.socio_id
                                inner join unidad_estado ue on ue.id = u.estado_id;", array(1));
        return $respuesta;
    }

    public static function obtenerEstadoUnidad(){
        $respuesta = DB::select('select id, descripcion from unidad_estado;');
        return $respuesta;
    }

    public static function guardarUnidad($id,$nombre,$socio,$placa,$modelo,$marca,$soatVence,$estado){
        // $respuesta = DB::select('call sp_ticket_guardar(?,?,?,?,?,?,?,?)',[$id],[$nombre],[$socio],[$placa],[$modelo],[$marca],[$soatVence],[$estado]);
        $respuesta = DB::select('call sp_unidad_guardar(?,?,?,?,?,?,?,?)',[$id,$nombre,$socio,$placa,$modelo,$marca,$soatVence,$estado]);
        return $respuesta;
    }

    public static function obtenerUnidadXId($id){
        $respuesta = DB::select('call sp_unidad_obtenerXId(?)',[$id]);
        return $respuesta;
    }

    public static function eliminarUnidad($id){
        $respuesta = DB::select('call sp_unidad_eliminar(?)',[$id]);
        return $respuesta;
    }
    
}
