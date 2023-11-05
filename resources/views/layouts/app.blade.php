{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Laravel</title>
    <!-- Aquí puedes incluir enlaces a hojas de estilo -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <header>
        <h1>Encabezado de la Aplicación</h1>
        <!-- Aquí podrías incluir tu barra de navegación -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2023 Tu Aplicación. Todos los derechos reservados.</p>
    </footer>

    <!-- Aquí puedes incluir scripts JS -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>
