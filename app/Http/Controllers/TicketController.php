<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TicketController extends Controller
{
    //
    public function obtener_ticket_activoXdia()
    {
        $ticket = App\Ticket::TicketActivo();
        return $ticket;
    }
}
