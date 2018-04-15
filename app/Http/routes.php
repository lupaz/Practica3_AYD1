<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/inicio', function () {
    return View::make('general/inicio');
});

Route::get('/', function () {
    return View::make('general/inicio');
});

Route::get('/registro', function () {
    return View::make('general.registro');
});

//ruta para realizar el alamacnamiento de nuevo datos
Route::post('/registro/store','clientesController@store');

//ruta para redireccionar el login correcto
Route::post('/ingreso/index','clientesController@index');

//rutas user principal
Route::get('/usuario', function () {
    return View::make('usuario.main');
});

//rutas para las transacciones
Route::get('/usuario/credito', function () {
    return View::make('usuario.credito');
});

Route::get('/usuario/debito', function () {
    return View::make('usuario.debito');
});

Route::get('/usuario/transferencia', function () {
    return View::make('usuario.transferir');
});

//rutas post de clientes
Route::post('/usuario/acreditar','clientesController@acreditar');

Route::post('/usuario/debitar','clientesController@debitar');

Route::post('/usuario/transferir','clientesController@transferir');

//rutas de consulta de datos

Route::get('/usuario/saldo','clientesController@saldo');
//hitorial
Route::get('/usuario/historial','clientesController@historial');

//Salir
Route::get('/salir','clientesController@salir');
