@extends('layouts.app')

@section('content')
<h1>Cursos</h1>

<a href="{{ route('courses.create') }}">Crear nuevo curso</a>

@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Clave</th>
            <th>Título</th>
            <th>Kit de robótica</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->course_key }}</td>
            <td>{{ $course->title }}</td>
            <td>{{ $course->robotics_kit }}</td>
            <td>
                <a href="{{ route('courses.show', $course) }}">Ver</a> |
                <a href="{{ route('courses.edit', $course) }}">Editar</a> |
                <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('¿Seguro quieres eliminar este curso?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
