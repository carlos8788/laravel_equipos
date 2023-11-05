{{-- resources/views/equipos/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Equipo</h1>
    <form action="{{ route('equipos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf {{-- Token CSRF para proteger tu formulario --}}
        
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="abreviacion">Abreviación:</label>
            <input type="text" class="form-control" id="abreviacion" name="abreviacion" required>
        </div>

        <div class="form-group">
            <label for="estadio">Estadio:</label>
            <input type="text" class="form-control" id="estadio" name="estadio" required>
        </div>

        <div class="form-group">
            <label for="alias">Alias:</label>
            <input type="text" class="form-control" id="alias" name="alias">
        </div>

        <div class="form-group">
            <label for="anios_fundacion">Año de Fundación:</label>
            <input type="number" class="form-control" id="anios_fundacion" name="anios_fundacion" required>
        </div>

        <div class="form-group">
            <label for="campeonatos">Campeonatos:</label>
            <input type="number" class="form-control" id="campeonatos" name="campeonatos" required>
        </div>

        <div class="form-group">
            <label for="url">URL del Escudo:</label>
            <input type="url" class="form-control" id="url" name="url">
        </div>

        <button type="submit" class="btn btn-primary">Agregar Equipo</button>
    </form>
</div>
@endsection
