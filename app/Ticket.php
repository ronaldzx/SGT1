<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ticket extends Model
{
    protected $table = 'ticket';

    public function scopeTicketActivo()
    {
        $respuesta = DB::select("SELECT t.id,
                                    t.codigo,
                                    t.numero_vuelta,
                                    t.fecha_salida, 
                                    u.nombre as unidad, 
                                    concat(c.nombre,' ',c.apellido) as conductor,r.nombre as ruta,
                                    e.descripcion as estado
                                from ticket t 
                                inner join unidad u on t.unidad_id = u.id
                                inner join conductor c on c.id = t.conductor_id
                                inner join ruta r on r.id = t.ruta_id
                                inner join estado e on e.id = t.estado_id;", array(1));
        return $respuesta;
    }
    //
}
