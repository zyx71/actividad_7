@extends('layouts.app')

@section('content')
<h1>Detalles de Usuario</h1>

<p><strong>ID:</strong> {{ $user->id }}</p>
<p><strong>Nombre:</strong> {{ $user->name }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>
<p><strong>Rol:</strong> {{ ucfirst($user->role) }}</p>
<p><strong>Grupo:</strong> {{ $user->group->name ?? 'Sin grupo' }}</p>

<a href="{{ route('users.index') }}">Volver a la lista</a>
@endsection
