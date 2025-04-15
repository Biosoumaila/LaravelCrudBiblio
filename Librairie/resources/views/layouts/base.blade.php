<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel CRUD') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
</head>
<body class="bg-light">
    <div class="container py-5">
        <header class="bg-white shadow-sm rounded p-3 mb-4">
            @yield('header')
        </header>

        <main class="bg-white shadow-sm rounded p-3">
            @yield('content')
        </main>

        <footer class="py-3 mt-4 text-center text-muted">
            &copy; {{ date('Y') }}  lA LIBRAIRIE
        </footer>
    </div>
</body>
</html>