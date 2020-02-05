<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TicketController extends Controller
{
    //
    public function obtener_ticket_activo()
    {
        $ticket = App\Ticket::TicketActivoXdia();
        return $ticket;
    }
}
