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

Route::get('/', function () {
    return view('html.index');
});

Route::get('/index', function () {
    return view('html.index');
});

Route::get('/manejo-de-liquidos', function () {
    return view('html.manejo-de-liquidos');
});

Route::get('/material-volumetrico', function () {
    return view('html.material-volumetrico');
});

Route::get('/consumibles', function () {
    return view('html.consumibles');
});

Route::get('/reactivos', function () {
    return view('html.reactivos');
});

Route::get('/equipos', function () {
    return view('html.equipos');
});

Route::get('/mantenimiento-preventivo', function () {
    return view('html.mantenimiento-preventivo');
});

Route::get('/mobiliario', function () {
    return view('html.mobiliario');
});

Route::get('/promociones', function () {
    return view('html.promociones');
});

Route::get('/contacto', function () {
    return view('html.contacto');
});

Route::get('/acerca', function () {
    return view('html.acerca');
});