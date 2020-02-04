<?php

Route::get('/','PageController@inicio')->name('/');

Route::get('ticket/','PageController@ticket')->name('ticket');

Route::get('socio','PageController@socio')->name('socio');

Route::get('reporte_ticket','PageController@reporte_ticket')->name('reporte_ticket');

Route::get('tesoreria','PageController@tesoreria')->name('tesoreria');

// Route::get('tesoreria', function () {
//     return view('sgt_tesoreria');
// })->name('tesoreria');