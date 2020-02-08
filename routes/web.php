<?php

// use Illuminate\Routing\Route;

Route::get('/','PageController@inicio')->name('/');
Route::get('ticket/','PageController@ticket')->name('ticket');
Route::get('socio','PageController@socio')->name('socio');
Route::get('reporte_ticket','PageController@reporte_ticket')->name('reporte_ticket');
Route::get('tesoreria','PageController@tesoreria')->name('tesoreria');
Route::get('ticket_confirmacion','PageController@confirmacion_ticket')->name('ticket_confirmacion');
Route::get('admin_conductor','PageController@administracion_conductor')->name('admin_conductor');
Route::get('admin_unidad','PageController@administracion_unidad')->name('admin_unidad');
Route::get('obtener_unidad_activo','UnidadController@obtener_unidad_activo')->name('obtener_unidad_activo');

//rutas para obtener datos
//get
Route::get('obtener_conductor_activo','ConductorController@obtener_conductor_activo')->name('obtener_conductor_activo');
Route::get('obtener_configuracion_unidad','UnidadController@obtenerConfiguracionesUnidad')->name('obtener_configuracion_unidad');
//post
Route::post('obtener_ticket_activoXdia','TicketController@obtener_ticket_activoXdia')->name('obtener_ticket_activoXdia');
Route::post('guardar_unidad','UnidadController@guardar_unidad')->name('guardar_unidad');


// Route::get('tesoreria', function () {
//     return view('sgt_tesoreria');
// })->name('tesoreria')