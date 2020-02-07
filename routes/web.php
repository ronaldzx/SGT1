<?php

Route::get('/','PageController@inicio')->name('/');

Route::get('ticket/','PageController@ticket')->name('ticket');

Route::get('socio','PageController@socio')->name('socio');

Route::get('reporte_ticket','PageController@reporte_ticket')->name('reporte_ticket');

Route::get('tesoreria','PageController@tesoreria')->name('tesoreria');

Route::get('ticket_confirmacion','PageController@confirmacion_ticket')->name('ticket_confirmacion');

Route::get('admin_conductor','PageController@administracion_conductor')->name('admin_conductor');


//rutas para obtener datos

Route::post('obtener_ticket_activoXdia}','TicketController@obtener_ticket_activoXdia')->name('obtener_ticket_activoXdia');

Route::get('obtener_conductor_activo','ConductorController@obtener_conductor_activo')->name('obtener_conductor_activo');
// Route::get('tesoreria', function () {
//     return view('sgt_tesoreria');
// })->name('tesoreria')