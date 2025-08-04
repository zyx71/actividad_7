@extends('layouts.app')

@section('content')
<h1>Editar Curso</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('courses.update', $course) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Clave del curso:</label><br>
    <input type="text" name="course_key" value="{{ old('course_key', $course->course_key) }}" required><br><br>

    <label>Título:</label><br>
    <input type="text" name="title" value="{{ old('title', $course->title) }}" required><br><br>

    <label>Imagen de portada (URL):</label><br>
    <input type="text" name="cover_image" value="{{ old('cover_image', $course->cover_image) }}"><br><br>

    <label>Contenido:</label><br>
    <textarea name="content">{{ old('content', $course->content) }}</textarea><br><br>

    <label>Kit robótico:</label><br>
    <input type="text" name="robotics_kit" value="{{ old('robotics_kit', $course->robotics_kit) }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('courses.index') }}">Volver a la lista</a>
@endsection
