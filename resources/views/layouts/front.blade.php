<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Defarsci')</title>

    <meta name="description" content="@yield('meta', 'Articles lunaires et articles heureux sur ce blog merveilleux')">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('scripts')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('style')
</head>
<body class="font-sans antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-4 shadow-lg">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand font-weight-bold text-dark  d-flex justify-content-center align-items-center gap-2" href="/">
               DEFARSCI FORM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('liste.candidat') }}">Candidatures</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('liste.module') }}">Modules</a>
                        </li>
                        @if(Auth::user()->admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Déconnecté</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Connecté</a>
                            
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="mt-5 pt-5">
        @yield('content')
    </main>

    <!-- Bootstrap JS, jQuery, Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
