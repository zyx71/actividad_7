@extends('layouts.app')

@section('content')
<h1>Materiales Didácticos</h1>

<a href="{{ route('materials.create') }}">Crear nuevo material</a>

@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre del material</th>
            <th>Curso</th>
            <th>Archivo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($materials as $material)
        <tr>
            <td>{{ $material->id }}</td>
            <td>{{ $material->material_name }}</td>
            <td>{{ $material->course->title ?? 'Sin curso' }}</td>
            <td>{{ $material->file_path }}</td>
            <td>
                <a href="{{ route('materials.show', $material) }}">Ver</a> |
                <a href="{{ route('materials.edit', $material) }}">Editar</a> |
                <form action="{{ route('materials.destroy', $material) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('¿Seguro quieres eliminar este material?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
