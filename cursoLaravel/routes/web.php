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
    return 'Home';
});

Route::get('Pablo', function () {
    return 'Home';
});

Route::get('usuarios', function () {
    return 'Usuarios';
});

Route::get('usuarios/detalles', function () {
    return 'Mostrando detalle del usuario '.$_GET['id'];
    //escribir /?id=5 despues de la ruta
});

Route::get('usuarios/{id}', function ($id) {
    return "Mostrando detalle del usuario: {$id}";
    //escribir /id=5 despues de la ruta
})->where('id', '[0-9]+'); //where('id', '\d+'); d para numeros; w para letras y numeros

Route::get('usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
});

Route::get('saludo/{name}/{nickname?}', function ($name, $nickname=null) {
    //nickname? significa que es opcional
    if ($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}, no tienes apodo";
    }
});