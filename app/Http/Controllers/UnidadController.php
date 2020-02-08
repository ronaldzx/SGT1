<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class UnidadController extends Controller
{
    //
    public function obtener_unidad_activo()
    {
        $unidad = App\Unidad::UnidadActivo();
        return $unidad;
    }
}
