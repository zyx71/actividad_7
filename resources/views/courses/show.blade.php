@extends('layouts.app')

@section('content')
<h1>Detalle del Curso</h1>

<p><strong>Clave:</strong> {{ $course->course_key }}</p>
<p><strong>Título:</strong> {{ $course->title }}</p>
<p><strong>Imagen de portada:</strong> 
    @if($course->cover_image)
        <img src="{{ $course->cover_image }}" alt="Cover Image" style="max-width:200px;">
    @else
        No disponible
    @endif
</p>
<p><strong>Contenido:</strong> {!! nl2br(e($course->content)) !!}</p>
<p><strong>Kit robótico:</strong> {{ $course->robotics_kit ?? 'No especificado' }}</p>

<a href="{{ route('courses.index') }}">Volver a la lista</a>
@endsection
