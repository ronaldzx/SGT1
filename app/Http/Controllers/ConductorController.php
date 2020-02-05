<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ConductorController extends Controller
{
    //
    public function obtener_conductor_activo()
    {
        $conductor = App\Conductor::ConductorActivo();
        return $conductor;
    }
}
