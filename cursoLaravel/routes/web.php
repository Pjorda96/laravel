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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Pablo', function () {
    return 'Hola Pablo';
});

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/detalles', function () {
    return 'Mostrando detalle del usuario '.$_GET['id'];
    //escribir /?id=5 despues de la ruta
});

Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id', '[0-9]+'); //where('id', '\d+'); d para numeros; w para letras y numeros

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');
    //nickname? significa que es opcional