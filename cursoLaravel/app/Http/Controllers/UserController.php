<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Usuarios';
    }

    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
        //escribir /id=5 despues de la ruta
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
