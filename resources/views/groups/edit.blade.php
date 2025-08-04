@extends('layouts.app')

@section('content')
<h1>Editar grupo</h1>

<form method="POST" action="{{ route('groups.update', $group) }}">
    @csrf
    @method('PUT')
    <label for="name">Nombre del grupo:</label>
    <input type="text" id="name" name="name" value="{{ $group->name }}" required>
    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('groups.index') }}">Volver</a>
@endsection
