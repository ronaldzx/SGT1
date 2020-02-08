<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Carbon\Carbon;

class TicketController extends Controller
{
    //
    public function obtener_ticket_activoXdia(Request $data)
    {                    
        $fecha = $data['fecha'];    
        // $newDate = date("Y-m-d", strtotime($fecha));
        $newDate = Carbon::createFromFormat('d/m/Y', $fecha);
        $ticket = App\Ticket::TicketActivo($newDate);
        return $ticket;
    }
}   
