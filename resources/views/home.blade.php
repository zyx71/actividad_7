@extends('layouts.app')

@section('content')
    <h1>Escuela de Robótica</h1>
    <p>Bienvenido al sistema de gestión. Elige una sección:</p>

    <ul>
        <li><a href="{{ route('users.index') }}">Usuarios</a></li>
        <li><a href="{{ route('groups.index') }}">Grupos</a></li>
        <li><a href="{{ route('courses.index') }}">Cursos</a></li>
        <li><a href="{{ route('materials.index') }}">Materiales Didácticos</a></li>
    </ul>
@endsection
