@extends('sgt_menu')
@section('sub-cabecera')
<a class="breadcrumb-item">Tickets</a>
<span class="breadcrumb-item active">Registro de tickets</span>
@endsection
@section('cabecera')
<h4><span class="font-weight-semibold">Tickets</span> - Registro de tickets</h4>
@endsection
@section('seccion')
<div id="windowTicket" class="card">
    <div class="card-header header-elements-inline">

        <div class="col-sm-9">
            <button type="button" onclick="nuevoTicket()" class="btn btn-primary">Nuevo ticket</button>
        </div>
        <div class="col-sm-3">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" value="03/18/2013">
            </div>
        </div>
        <div id="resultado"></div>

    </div>
    <div class="card-body">
        <table id="tickets" class="table datatable-basic">
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
        </table>
    </div>
</div>
<div id="ticketModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Ticket</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>Unidad</label>
                                <select class="form-control select-search" data-fouc>
                                    <option value="AZ">U-012</option>
                                    <option value="CO">U-013</option>
                                    <option value="ID">U-014</option>
                                    <option value="WY">U-015</option>
                                    <option value="AL">U-016</option>
                                    <option value="IA">U-017</option>
                                    <option value="KS">U-018</option>
                                    <option value="KY">U-019</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label>Conductor</label>
                                <select class="form-control select-search" data-fouc>
                                    <option value="CM">Carlos Marin</option>
                                    <option value="JC">Juan Castro</option>
                                    <option value="AC">Andre Cap</option>
                                    <option value="RR">Ronald Rodriguez</option>
                                    <option value="GM">George Misa</option>
                                    <option value="AR">Andres Rosales</option>
                                    <option value="JC">Julio Carrión</option>
                                    <option value="FF">Felipe Felix</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>Ruta</label>
                                <select class="form-control select-search" data-fouc>
                                    <option value="AZ">A</option>
                                    <option value="CO">B</option>
                                    <option value="ID">BC</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="cardPenalidades">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-primary">Guardar</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">cerrar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {        
        $.ajax({
           type:'GET',
           url:"{{ route('obtener_ticket_activoXdia') }}",      
           beforeSend: function () {               
               loaderWindow('windowTicket');                        
                },     
           success:function(data){
                $('#tickets').dataTable({
                    data: data,
                    "order": [0, "asc"],
                    "columns": [
                        {"data": "codigo", "width": "80px", "sClass": "text-center"},
                        {"data": "conductor", "width": "80px", "sClass": "text-center"},
                        {"data": "numero_vuelta", "width": "80px", "sClass": "text-center"},
                        {"data": "ruta", "width": "120px", "sClass": "text-center"},
                        {"data": "unidad", "width": "120px", "sClass": "text-center"},
                        {"data": "fecha_salida", "width": "120px", "sClass": "text-center"},
                        {"data": "estado", "width": "120px", "sClass": "text-center"},
                        {"data": "id", "width": "120px", "sClass": "text-center"}
                    ],
                    "destroy": true
                });
                loaderWindowClose('windowTicket');
                // $("#resultado").html('');
            }   
        });
    });

</script>
<script src="../resources/js/global_assets/js/planilla/ticket.js?v=<?php echo time();?>"></script>
@endsection