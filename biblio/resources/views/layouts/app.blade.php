<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Gestion des Ouvrages</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand">Gestion des Ouvrages</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('books.index') }}">Liste des Ouvrages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('authors.index') }}">Voir les auteurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index') }}">Voir les categories</a>
                        </li>
                        </ul>

                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <footer class="bg-light py-3 mt-4 text-center">
            <div class="container">
                <p>&copy; {{ date('Y') }} - Gestion des Ouvrages</p>
                </div>
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')
</body>
</html>