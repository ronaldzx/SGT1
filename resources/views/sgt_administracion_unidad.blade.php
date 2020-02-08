@extends('sgt_menu')
@section('sub-cabecera')
<a class="breadcrumb-item">Administrar Unidades</a>
<span class="breadcrumb-item active">Administrar Unidades</span>
@endsection
@section('cabecera')
<h4><span class="font-weight-semibold">Administración</span> - Unidades</h4>
@endsection
@section('seccion')
<div id="windowUnidad" class="card">
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
        </table>
    </div>

</div>
<!-- Vertical form modal -->
<div id="unidadModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title">Datos de las Unidades</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Nombre de unidad</label>
                            <input id="txtUnidad" type="text" placeholder="Ingrese Nombre de Unidad" class="form-control">
                        </div>

                        <div class="col-sm-6">
                            <label>Socio</label>
                            <select id="cboSocio" class="form-control select-search" data-fouc>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Placa</label>
                            <input id="txtPlaca" type="text" placeholder="Ingresar Placa" class="form-control">
                        </div>

                        <div class="col-sm-6">
                            <label>Modelo</label>
                            <input id="txtModelo" type="text" placeholder="Año de producción" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Marca</label>
                            <input id="txtMarca" type="text" placeholder="Marca del vehiculo" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Soat Vence</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                </span>
                                <input onchange="obtenerTicketXFecha()" id="txtSoatVence" type="text" class="form-control daterange-single" placeholder="yyyy/mm/dd">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Estado</label>
                            <select id="cboEstado" class="form-control select-search" data-fouc>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-link" data-dismiss="modal">Cerrar</button>
                <button onclick="guardarUnidad()" class="btn bg-primary">Agregar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var idUnidad = null;
    $(document).ready(function() {
        DateTimePickers.init();
        Select2Selects.init();
        var editar = '';
        var eliminar = '';
        var penalidad = '';
        $.ajax({
            type: 'GET',
            url: "{{ route('obtener_unidad_activo') }}",
            beforeSend: function() {
                loaderWindow('windowUnidad');
            },
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
                            "data": "estado_descripcion",
                            "width": "80px",
                            "sClass": "text-center"
                        },
                        {
                            "data": "id",
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
                loaderWindowClose('windowUnidad');
            }
        });
    });

    function obtenerTicketXFecha() {

    }

    function nuevoConductor(id) {
        var btnNuevo = '';
        $('#unidadModal').modal('show');
        if (id) {
            idUnidad = id;
            // btnNuevo += '<div class="card-header"><div class="form-group">';
            // btnNuevo += '<button onclick="agregarPenalidad()" type="button" class="btn bg-primary btn-labeled btn-labeled-left rounded-round"><b><i class="icon-plus2"></i></b>Nueva penalidad</button>';
            // btnNuevo += '</div></div>';
            // btnNuevo += '<div class="card-body" id="bodyPenalidades"></div>'
        }else{
            idUnidad = null;
        }
        $('#cardPenalidades').html(btnNuevo);
        obtenerConfiguracionesUnidad();
    }

    function obtenerConfiguracionesUnidad() {
        $.ajax({
            type: 'GET',
            url: "{{ route('obtener_configuracion_unidad') }}",
            beforeSend: function() {
                loaderWindow('unidadModal');
            },
            success: function(data) {
                var socios = data[0];
                var estados = data[1];
                cargarSelect('cboSocio', 'id', 'socio', socios);
                cargarSelect('cboEstado', 'id', 'descripcion', estados);
                loaderWindowClose('unidadModal');
            }
        });
    }

    function guardarUnidad() {
        var id = idUnidad;
        var nombre = $('#txtNombre').val();
        var socio = $('cboSocio').val();
        var placa = $('txtPlaca').val();
        var modelo = $('txtModelo').val();
        var marca = $('txtMarca').val();
        var soatVence = $('txtSoatVence').val();
        var estado = $('cboEstado').val();
        $.ajax({
            data: {
                id:id,
                nombre: nombre,
                socio:socio,
                placa:placa,
                modelo:modelo,
                marca:marca,
                soatVence:soatVence,
                estado:estado
            },
            dataType: 'json',
            method: 'post',
            url: "{{ route('guardar_unidad') }}",
            beforeSend: function() {
                loaderWindow('windowTicket');
            },
            success: function(data) {      
                console.log(data);      
                loaderWindowClose('windowTicket');
            }
        });
    }
</script>

<!-- /vertical form modal -->
<!-- <script src="../resources/js/global_assets/js/planilla/administracion_conductor.js"></script> -->
@endsection