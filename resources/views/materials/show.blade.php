@extends('layouts.app')

@section('content')
<h1>Material Didáctico</h1>

<p><strong>Nombre:</strong> {{ $material->material_name }}</p>
<p><strong>Archivo:</strong> {{ $material->file_path }}</p>
<p><strong>Curso:</strong> {{ $material->course->title ?? 'Sin curso' }}</p>

<a href="{{ route('materials.edit', $material) }}">Editar</a> |
<a href="{{ route('materials.index') }}">Volver a la lista</a>
@endsection
