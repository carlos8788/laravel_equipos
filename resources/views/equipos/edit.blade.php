{{-- resources/views/equipos/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Equipo</h1>
    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $equipo->nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="abreviacion">Abreviación:</label>
            <input type="text" class="form-control" id="abreviacion" name="abreviacion" value="{{ old('abreviacion', $equipo->abreviacion) }}" required>
        </div>

        <div class="form-group">
            <label for="estadio">Estadio:</label>
            <input type="text" class="form-control" id="estadio" name="estadio" value="{{ old('estadio', $equipo->estadio) }}" required>
        </div>

        <div class="form-group">
            <label for="alias">Alias:</label>
            <input type="text" class="form-control" id="alias" name="alias" value="{{ old('alias', $equipo->alias) }}">
        </div>

        <div class="form-group">
            <label for="anios_fundacion">Año de Fundación:</label>
            <input type="number" class="form-control" id="anios_fundacion" name="anios_fundacion" value="{{ old('anios_fundacion', $equipo->anios_fundacion) }}" required>
        </div>

        <div class="form-group">
            <label for="campeonatos">Campeonatos:</label>
            <input type="number" class="form-control" id="campeonatos" name="campeonatos" value="{{ old('campeonatos', $equipo->campeonatos) }}" required>
        </div>

        <div class="form-group">
            <label for="url">URL del Escudo:</label>
            <input type="url" class="form-control" id="url" name="url" value="{{ old('url', $equipo->url) }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Equipo</button>
    </form>
</div>
@endsection
