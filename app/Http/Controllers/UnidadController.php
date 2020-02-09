<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Socio;
use App\Unidad;
use Carbon\Carbon;

class UnidadController extends Controller
{
    //
    public function obtener_unidad_activo()
    {
        $unidad = App\Unidad::UnidadActivo();
        return $unidad;
    }
    public function obtenerConfiguracionesUnidad(Request $data){
        $id = $data['id'];
        $socios = App\Socio::obtenerSociosActivos();
        $estados = App\Unidad::obtenerEstadoUnidad();
        $unidad = App\Unidad::obtenerUnidadXId($id);
        return array($socios,$estados,$unidad);
    }

    public function guardar_unidad(Request $data){
        $id = $data['id'];
        $nombre = $data['nombre'];
        $socio = $data['socio'];
        $placa = $data['placa'];
        $modelo = $data['modelo'];
        $marca = $data['marca'];
        $soatVence = Carbon::createFromFormat('d/m/Y', $data['soatVence']);
        $estado = $data['estado'];
        $respuesta = App\Unidad::guardarUnidad($id,$nombre,$socio,$placa,$modelo,$marca,$soatVence,$estado);
        return $respuesta;
    }

    public function eliminar_unidad(Request $data){
        $id = $data['id'];

        $respuesta = App\Unidad::eliminarUnidad($id);
        return $respuesta;
    }
}
