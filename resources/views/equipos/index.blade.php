{{-- resources/views/equipos/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Lista de Equipos</h1>
    <ul>
        @foreach ($equipos as $equipo)
            <li>{{ $equipo->nombre }} - {{ $equipo->estadio }} <button id="{{ $equipo->id }}" class="btn btn-danger">Eliminar</button></li>
        @endforeach
    </ul>
    <script src="js/index.js"></script>
    {{-- <script src="{{ asset('js/index.js') }}"></script> --}}

@endsection
