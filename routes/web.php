<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','PageController@inicio')->name('/');

Route::get('ticket','PageController@ticket')->name('ticket');

Route::get('socio','PageController@socio')->name('socio');

Route::get('reporte_ticket','PageController@reporte_ticket')->name('reporte_ticket');

Route::get('tesoreria','PageController@tesoreria')->name('tesoreria');

// Route::get('tesoreria', function () {
//     return view('sgt_tesoreria');
// })->name('tesoreria');