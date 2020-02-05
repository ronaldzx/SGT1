@extends('sgt_menu')
@section('sub-cabecera')
<a class="breadcrumb-item">Administrar Conductores</a>
<span class="breadcrumb-item active">Administrar Conductor</span>
@endsection
@section('cabecera')
<h4><span class="font-weight-semibold">Administración</span> - Conductor</h4>
@endsection
@section('seccion')
<div class="card">
    <div class="card-header header-elements-inline">

        <div class="col-sm-2">
            <button type="button" onclick="nuevoConductor()" class="btn btn-primary">Agregar Conductor</button>
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
        <table id="conductores" class="table datatable-basic">
            <thead>
                <tr>
                    <th class="text-center">Conductor</th>
                    <th class="text-center">DNI</th>
                    <th class="text-center">Edad</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <!-- <tbody>
                <tr>
                    <td>01</td>
                    <td>xxxx</td>
                    <td>xxx</td>
                    <td>77777777</td>
                    <td>22</td>
                    <td><span class="badge badge-success">habilitado</span></td>
                    <td class="text-center">
                        <a title="Editar" onclick="nuevoTicket(1)"><i style="color:#EEA40F;" class="icon-pencil5"></i></a>
                        <a title="Eliminar" onclick="eliminarTicket()"><i style="color:#EE2D0F;" class="icon-trash"></i></a>
                        <a title="Confirmar" onclick="confirmarTicket()"><i style="color:#32B01C;" class="icon-checkmark4"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>xxxx</td>
                    <td>xxx</td>
                    <td>77777777</td>
                    <td>22</td>
                    <td><span class="badge badge-success">habilitado</span></td>
                    <td class="text-center">
                        <a title="Editar" onclick="nuevoTicket(1)"><i style="color:#EEA40F;" class="icon-pencil5"></i></a>
                        <a title="Eliminar" onclick="eliminarTicket()"><i style="color:#EE2D0F;" class="icon-trash"></i></a>
                        <a title="Confirmar" onclick="confirmarTicket()"><i style="color:#32B01C;" class="icon-checkmark4"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>xxxx</td>
                    <td>xxx</td>
                    <td>77777777</td>
                    <td>22</td>
                    <td><span class="badge badge-success">habilitado</span></td>
                    <td class="text-center">
                        <a title="Editar" onclick="nuevoTicket(1)"><i style="color:#EEA40F;" class="icon-pencil5"></i></a>
                        <a title="Eliminar" onclick="eliminarTicket()"><i style="color:#EE2D0F;" class="icon-trash"></i></a>
                        <a title="Confirmar" onclick="confirmarTicket()"><i style="color:#32B01C;" class="icon-checkmark4"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>xxxx</td>
                    <td>xxx</td>
                    <td>77777777</td>
                    <td>22</td>
                    <td><span class="badge badge-success">habilitado</span></td>
                    <td class="text-center">
                        <a title="Editar" onclick="nuevoTicket(1)"><i style="color:#EEA40F;" class="icon-pencil5"></i></a>
                        <a title="Eliminar" onclick="eliminarTicket()"><i style="color:#EE2D0F;" class="icon-trash"></i></a>
                        <a title="Confirmar" onclick="confirmarTicket()"><i style="color:#32B01C;" class="icon-checkmark4"></i></a>
                    </td>
                </tr>
            </tbody> -->
        </table>
    </div>

</div>
<!-- Vertical form modal -->
<div id="ticketModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title">Datos del Conductor</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Nombres</label>
                            <input type="text" placeholder="Ingrese Nombres" class="form-control">
                        </div>

                        <div class="col-sm-6">
                            <label>Apellidos</label>
                            <input type="text" placeholder="Ingrese Apellidos" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>DNI</label>
                            <input type="text" placeholder=" Numero de DNI" class="form-control">
                        </div>

                        <div class="col-sm-6">
                            <label>Edad</label>
                            <input type="text" placeholder="Ingrese Edad en #" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-6">
                        <label># Celular</label>
                        <input type="text" placeholder="+51-999-999-999" data-mask="+51-99-9999-9999" class="form-control">
                        <span class="form-text text-muted">+51-999-999-999</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn bg-primary">Enviar Cambios</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var editar = '';
        var eliminar = '';
        var penalidad = '';
        $.ajax({
            type: 'GET',
            url: "{{ route('obtener_conductor_activo') }}",

            success: function(data) {
                $('#conductores').dataTable({
                    data: data,
                    "order": [0, "asc"],
                    "columns": [{
                            "data": "conductor",
                            "width": "80px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "dni",
                            "width": "80px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "edad",
                            "width": "120px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "telefono",
                            "width": "120px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "tiene_penalidad",
                            "width": "120px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "id",
                            "width": "120px",
                            "sClass": "text-center"
                        }
                    ],
                    "columnDefs": [{
                            "render": (data, type, row) => {
                                editar = '<a title="Editar" onclick="nuevoTicket(' + data + ')"><i style="color:#EEA40F;" class="icon-pencil5"></i></a>';
                                eliminar = '<a title="Eliminar" onclick="eliminarTicket(' + data + ')"><i style="color:#EE2D0F;" class="icon-trash"></i></a>';
                                return editar + ' ' + eliminar;
                            },
                            "targets": 5
                        },
                        {
                            "render": (data, type, row) => {
                                switch (data) {
                                    case 1:
                                        penalidad = '<span class="badge badge-danger">Penalidad</span>'
                                        break;
                                    case 0:
                                        penalidad = '<span class="badge badge-success">Sin penalidad</span>'
                                        break;
                                }

                                return penalidad;
                            },
                            "targets": 4
                        }
                    ],
                    "destroy": true
                });

            }
        });
    });
</script>

<!-- /vertical form modal -->
<script src="../resources/js/global_assets/js/planilla/administracion_conductor.js"></script>
@endsection