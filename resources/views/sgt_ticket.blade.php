@extends('sgt_menu')
@section('seccion')
                <div class="card">
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
                                        <a title="Editar" onclick="nuevoTicket(1)"><i style="color:#EEA40F;" class="icon-pencil5"></i></a>
                                        <a title="Eliminar" onclick="eliminarTicket()"><i style="color:#EE2D0F;" class="icon-trash"></i></a>
                                        <a title="Confirmar" onclick="confirmarTicket()"><i style="color:#32B01C;" class="icon-checkmark4"></i></a>
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
                                        <a title="Exportar PDF" onclick="ExportarPDF()"><i style="color:#EE2D0F;" class="icon-file-pdf"></i></a>
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
                                        <a href="#" onclick="confirmarTicket()"><i style="color:#32B01C;" class="icon-checkmark4"></i></a>
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
                                        <a href="#" onclick="confirmarTicket()"><i style="color:#32B01C;" class="icon-checkmark4"></i></a>
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
                                        <a title="Exportar PDF" onclick="ExportarPDF()"><i style="color:#EE2D0F;" class="icon-file-pdf"></i></a>
                                        <a title="Visualizar" onclick="Visualizar()"><i style="color:#0FCCEE;" class="icon-eye8"></i></a>
                                    </td>
                                </tr>
                            </tbody>
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
                <script src="../resources/js/global_assets/js/planilla/ticket.js"></script>
                @endsection