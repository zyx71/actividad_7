@extends('layouts.app')

@section('content')
<h1>Grupo: {{ $group->name }}</h1>

<p>ID: {{ $group->id }}</p>

<a href="{{ route('groups.index') }}">Volver</a>
@endsection
