$(document).ready(function() {
    
});

function nuevoTicket(id) {
    console.log('{{$opcion}}');
    var btnNuevo = '';
    $('#ticketModal').modal('show');
    if (id) {
        btnNuevo += '<div class="card-header"><div class="form-group">';
        btnNuevo += '<button onclick="agregarPenalidad()" type="button" class="btn bg-primary btn-labeled btn-labeled-left rounded-round"><b><i class="icon-plus2"></i></b>Nueva penalidad</button>';
        btnNuevo += '</div></div>';
        btnNuevo += '<div class="card-body" id="bodyPenalidades"></div>'
    }
    $('#cardPenalidades').html(btnNuevo);
    $('#prueba').val('{{$opcion}}');
}

function agregarPenalidad() {
    var ultimo = obtenerUltimo() + 1;
    var incidencias = '';
    incidencias += '<div id="penalidad-' + ultimo + '" class="form-group row penalidad"><div class="col-sm-5"> <label>Penalidad</label>';
    incidencias += '<select class="form-control select-search" data-fouc> ';
    incidencias += '<option value="SM">Sobrepasar Minutos</option> <option value="SDS">Se Dejó Sobrepasar</option> <option value="UI">Uniforme Inapropiado</option> <option value="TC">Sin tarjeta de circulacion</option>';
    incidencias += '</select></div><div class="col-sm-6"><label>Obervación:</label>';
    incidencias += '<div class="form-group form-group-feedback form-group-feedback-left"><input type="text" class="form-control form-control-lg" placeholder="Ingrese Monto de Penalidad (S/.)">';
    incidencias += '<div class="form-control-feedback form-control-feedback-lg"><i class="icon-eye"></i></div>';
    incidencias += '</div></div><div class="col-sm-1">';
    incidencias += '<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><a onclick="eliminarPenalidad(' + ultimo + ')"><i style="color:red;" class="icon-trash"></i></a></div></div>';
    $('#bodyPenalidades').append(incidencias);
    $('.select-search').select2();
}

function obtenerUltimo() {
    var ultimo;
    var penalidades = $('.penalidad').map((i, item) => {
        return i;
    }).get();
    if (!isEmpty(penalidades)) {
        var ultimo = penalidades[penalidades.length - 1] + 1;
    } else {
        var ultimo = 0;
    }
    return ultimo;
}

function eliminarPenalidad(id) {
    $('#penalidad-' + id).remove();
}