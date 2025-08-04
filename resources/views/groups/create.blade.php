@extends('layouts.app')

@section('content')
<h1>Crear grupo</h1>

<form method="POST" action="{{ route('groups.store') }}">
    @csrf
    <label for="name">Nombre del grupo:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Guardar</button>
</form>

<a href="{{ route('groups.index') }}">Volver</a>
@endsection
