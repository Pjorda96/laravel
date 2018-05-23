<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        request('data');

        if (request()->has('empty')){
            $users = [];
        } else {
            $users = ['Joel', 'Ellie', 'Tess', 'Tommy', 'Bill',];
        }

        $title='Listado de usuarios';

        //parecido al var_dump()
        //dd(compact('title', 'users'));

        /*return view('users', [
            'users' => $users,
            'title' => 'Listado de usuarios'
        ]);*/
        /*return view('users')
            ->with('users', $users)
            ->with('title', 'Listado de usuarios');*/

        return view('users', compact('title', 'users'));
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
