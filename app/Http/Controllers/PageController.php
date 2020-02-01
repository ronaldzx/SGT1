<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function inicio(){
        return view('sgt_menu');
    }

    public function ticket(){
        return view('sgt_ticket');
    }

    public function socio(){
        return view('sgt_administracion_socio');
    }
}
