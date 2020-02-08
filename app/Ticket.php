<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ticket extends Model
{
    protected $table = 'ticket';

    public static function TicketActivo($fecha)
    {
        $respuesta = DB::select('call sp_ticket_obtenerXDia(?)',[$fecha]);
        return $respuesta;
    }
    //
}
