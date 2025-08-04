@extends('layouts.app')

@section('content')
<h1>Crear Material Didáctico</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('materials.store') }}" method="POST">
    @csrf
    <label>Nombre del material:</label><br>
    <input type="text" name="material_name" value="{{ old('material_name') }}"><br><br>

    <label>Archivo (ruta o url):</label><br>
    <input type="text" name="file_path" value="{{ old('file_path') }}"><br><br>

    <label>Curso:</label><br>
    <select name="course_id">
        <option value="">-- Selecciona un curso --</option>
        @foreach($courses as $course)
            <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                {{ $course->title }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('materials.index') }}">Volver a la lista</a>
@endsection

