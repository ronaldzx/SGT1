<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    //
    public function inicio()
    {
        $opcion = App\Opcion::opcionesActivas()->get();
        return view('sgt_menu', compact('opcion'));
    }

    public function ticket()
    {
        $ticket = App\Ticket::TicketActivo();
        $opcion = App\Opcion::opcionesActivas()->get();
        return view('sgt_ticket', compact('opcion','ticket'));
    }

    public function socio()
    {
        $opcion = App\Opcion::opcionesActivas()->get();
        return view('sgt_administracion_socio',compact('opcion'));
    }
    public function tesoreria()
    {
        $opcion = App\Opcion::opcionesActivas()->get();
        return view('sgt_tesoreria',compact('opcion'));
    }
    public function confirmacion_ticket()
    {
        $opcion = App\Opcion::opcionesActivas()->get();
        return view('sgt_confirmacion_ticket',compact('opcion'));
    }
    public function administracion_conductor()
    {
        $opcion = App\Opcion::opcionesActivas()->get();
        return view('sgt_administracion_conductor',compact('opcion'));
    }
    public function administracion_unidad()
    {
        $opcion = App\Opcion::opcionesActivas()->get();
        return view('sgt_administracion_unidad',compact('opcion'));
    }
}
