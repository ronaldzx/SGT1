@extends('sgt_menu')
@section('sub-cabecera')
<a class="breadcrumb-item">Administrar Conductores</a>
<span class="breadcrumb-item active">Validación de tickets</span>
@endsection
@section('cabecera')
<h4><span class="font-weight-semibold">Tesoreria</span> - Validación de tickets</h4>
@endsection
@section('seccion')
<div class="card">
    <div class="card-header header-elements-inline">

        <div class="col-sm-2">
            <button type="button" onclick="nuevoTicket()" class="btn btn-primary">Nuevo ticket</button>
        </div>
        <div class="col-sm-2">
            <button type="button" onclick="actualizarTicket()" class="btn btn-primary">Actualizar Tickets</button>
        </div>
        <div class="col-sm-3">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" value="01/01/2020">
            </div>
        </div>

    </div>
    <div class="card-body">
        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-center">Conductor</th>
                    <th class="text-center">N° vuelta</th>
                    <th class="text-center">Ruta</th>
                    <th class="text-center">Unidad</th>
                    <th class="text-center">Hora de salida</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>T-0001</td>
                    <td>Juan Vargas</td>
                    <td>3</td>
                    <td>Ruta 1 - B</td>
                    <td>U-326</td>
                    <td>08:10:26</td>
                    <td><span class="badge badge-success">En ruta</span></td>
                    <td class="text-center">
                        <a title="Editar" onclick="nuevoTicket(1)"><i style="color:#EEA40F;"
                                class="icon-pencil5"></i></a>
                        <a title="Eliminar" onclick="eliminarTicket()"><i style="color:#EE2D0F;"
                                class="icon-trash"></i></a>
                        <a title="Confirmar" onclick="confirmarTicket()"><i style="color:#32B01C;"
                                class="icon-checkmark4"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>T-0002</td>
                    <td>Benito Perez</td>
                    <td>1</td>
                    <td>Ruta 1 - A</td>
                    <td>U-120</td>
                    <td>08:12:28</td>
                    <td><span class="badge badge-warning">Pendiente de pago</span></td>
                    <td class="text-center">
                        <a href="#" onclick="confirmarTicket()"><i style="color:#0FCCEE;" class="icon-eye8"></i></a>
                        <!-- <a href="#" onclick="nuevoTicket()"><i style="color:#EEA40F;"  class="icon-pencil5"></i></a> -->
                        <!-- <a href="#" onclick="eliminarTicket()"><i style="color:#EE2D0F;"  class="icon-trash"></i></a> -->
                        <!-- <a href="#" onclick="confirmarTicket()"><i style="color:#32B01C;" class="icon-checkmark4"></i></a> -->
                    </td>
                </tr>
                <tr>
                    <td>T-0003</td>
                    <td>Pepito</td>
                    <td>7</td>
                    <td>Ruta 2 - B1</td>
                    <td>U-526</td>
                    <td>08:30:26</td>
                    <td><span class="badge badge-secondary">Cerrado</span></td>
                    <td class="text-center">
                        <a title="Exportar PDF" onclick="ExportarPDF()"><i style="color:#EE2D0F;"
                                class="icon-file-pdf"></i></a>
                        <a href="#" onclick="Visualizar()"><i style="color:#0FCCEE;" class="icon-eye8"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>T-0004</td>
                    <td>Jose Loloy</td>
                    <td>5</td>
                    <td>Ruta 3 - C</td>
                    <td>U-226</td>
                    <td>08:40:26</td>
                    <td><span class="badge badge-success">En ruta</span></td>
                    <td class="text-center">
                        <a href="#" onclick="nuevoTicket(4)"><i style="color:#EEA40F;" class="icon-pencil5"></i></a>
                        <a href="#" onclick="eliminarTicket()"><i style="color:#EE2D0F;" class="icon-trash"></i></a>
                        <a href="#" onclick="confirmarTicket()"><i style="color:#32B01C;"
                                class="icon-checkmark4"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>T-0005</td>
                    <td>Mario</td>
                    <td>4</td>
                    <td>Ruta 4 - A1</td>
                    <td>U-526</td>
                    <td>08:50:26</td>
                    <td><span class="badge badge-success">En ruta</span></td>
                    <td class="text-center">
                        <a href="#" onclick="nuevoTicket(5)"><i style="color:#EEA40F;" class="icon-pencil5"></i></a>
                        <a href="#" onclick="eliminarTicket()"><i style="color:#EE2D0F;" class="icon-trash"></i></a>
                        <a href="#" onclick="confirmarTicket()"><i style="color:#32B01C;"
                                class="icon-checkmark4"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>T-0006</td>
                    <td>Luigi</td>
                    <td>3</td>
                    <td>Ruta 1 - B</td>
                    <td>U-336</td>
                    <td>09:00:11</td>
                    <td><span class="badge badge-secondary">Cerrado</span></td>
                    <td class="text-center">
                        <a title="Exportar PDF" onclick="ExportarPDF()"><i style="color:#EE2D0F;"
                                class="icon-file-pdf"></i></a>
                        <a title="Visualizar" onclick="Visualizar()"><i style="color:#0FCCEE;"
                                class="icon-eye8"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection