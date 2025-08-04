@extends('layouts.app')

@section('content')
<h1>Grupos</h1>

<a href="{{ route('groups.create') }}">Crear nuevo grupo</a>

@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($groups as $group)
        <tr>
            <td>{{ $group->id }}</td>
            <td>{{ $group->name }}</td>
            <td>
                <a href="{{ route('groups.show', $group) }}">Ver</a> |
                <a href="{{ route('groups.edit', $group) }}">Editar</a> |
                <form action="{{ route('groups.destroy', $group) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('¿Seguro quieres eliminar este grupo?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
