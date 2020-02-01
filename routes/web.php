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

// use Illuminate\Routing\Route;

Route::get('/','PageController@inicio');

// Route::get('/', function () {
//     $opciones = ['ticket','tesoreria'];
    
//     return view('sgt_menu',compact('opciones'));
// })->name('/');

Route::get('ticket','PageController@ticket')->name('ticket');

Route::get('socio','PageController@socio')->name('socio');

Route::get('tesoreria', function () {
    return view('sgt_tesoreria');
})->name('tesoreria');