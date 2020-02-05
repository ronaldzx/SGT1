$(document).ready(function() {

});

function nuevoConductor(id) {
    var btnNuevo = '';
    $('#ticketModal').modal('show');
    if (id) {
        btnNuevo += '<div class="card-header"><div class="form-group">';
        btnNuevo += '<button onclick="agregarPenalidad()" type="button" class="btn bg-primary btn-labeled btn-labeled-left rounded-round"><b><i class="icon-plus2"></i></b>Nueva penalidad</button>';
        btnNuevo += '</div></div>';
        btnNuevo += '<div class="card-body" id="bodyPenalidades"></div>'
    }
    $('#cardPenalidades').html(btnNuevo);
}
