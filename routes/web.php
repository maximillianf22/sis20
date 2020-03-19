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

Route::get('/', 'HomeController@frontPage');

Auth::routes();

Route::post('/api/event', 'ApiController@newEvent');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('tipos-proyectos', function () {
    return view('tipoProyecto');
});

Route::get('municipio-proyectos', function () {
    return view('municipioProyecto');
});

Route::get('proyecto', function () {
    return view('proyecto');
});

Route::get('diagrama', function () {
    return view('diagrama');
});

Route::get('proyecto-mapa', function () {
    return view('proyectoMapa');
});
