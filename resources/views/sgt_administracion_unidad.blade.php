@extends('sgt_menu')
@section('sub-cabecera')
<a class="breadcrumb-item">Administrar Unidades</a>
<span class="breadcrumb-item active">Administrar Unidades</span>
@endsection
@section('cabecera')
<h4><span class="font-weight-semibold">Administración</span> - Unidades</h4>
@endsection
@section('seccion')
<div class="card">
    <div class="card-header header-elements-inline">

        <div class="col-sm-2">
            <button type="button" onclick="nuevoConductor()" class="btn btn-primary">Agregar Unidades</button>
        </div>
    </div>
    <div class="card-body">
        <table id="unidades" class="table datatable-basic">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Socio</th>
                    <th class="text-center">Placa</th>
                    <th class="text-center">Modelo</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Soat Vence</th>
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
            url: "{{ route('obtener_unidad_activo') }}",

            success: function(data) {
                $('#unidades').dataTable({
                    data: data,
                    "order": [0, "asc"],
                    "columns": [{
                            "data": "nombre",
                            "width": "120px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "socio",
                            "width": "120px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "placa",
                            "width": "80px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "modelo",
                            "width": "80px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "marca",
                            "width": "80px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "soat_vence",
                            "width": "120px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "estado",
                            "width": "80px",
                            "sClass": "text-center"
                        }
                    ],
                    "columnDefs": [{
                            "render": (data, type, row) => {
                                editar = '<a title="Editar" onclick="nuevoTicket(' + data + ')"><i style="color:#EEA40F;" class="icon-pencil5"></i></a>';
                                eliminar = '<a title="Eliminar" onclick="eliminarTicket(' + data + ')"><i style="color:#EE2D0F;" class="icon-trash"></i></a>';
                                return editar + ' ' + eliminar;
                            },
                            "targets": 7
                        },
                        
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