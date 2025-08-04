@extends('layouts.app')

@section('content')
<h1>Crear Usuario</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label>Nombre:</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email') }}"><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password"><br><br>

    <label>Confirmar Contraseña:</label><br>
    <input type="password" name="password_confirmation"><br><br>

    <label>Rol:</label><br>
    <select name="role">
        <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Estudiante</option>
        <option value="teacher" {{ old('role') == 'teacher' ? 'selected' : '' }}>Profesor</option>
        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Administrador</option>
    </select><br><br>

    <label>Grupo:</label><br>
    <select name="group_id">
        <option value="">-- Sin grupo --</option>
        @foreach($groups as $group)
            <option value="{{ $group->id }}" {{ old('group_id') == $group->id ? 'selected' : '' }}>
                {{ $group->name }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Guardar Usuario</button>
</form>
@endsection
