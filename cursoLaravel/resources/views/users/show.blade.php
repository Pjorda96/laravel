@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <div class="card">
        <h1 class="card-header">Usuario #{{ $user->id }}</h1>
        <div class="card-body">
            <p>Nombre del usuario: {{ $user->name }}</p>
            <p>Correo electrónico: {{ $user->email }}</p>
        </div>
    </div>

    <div>
        <a href="{{ route('users.index') }}" class="btn btn-link">Volver</a>
    </div>
@endsection