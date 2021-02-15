<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!--Icone da Aba-->
    <link rel="icon" href="/img/worship-events_logo.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Node Modules CSS-->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!--Styles-->
    <link rel="stylesheet" href="/css/styles.css">

    <!--Node Modules Scripts-->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/node_modules/ionicons/dist/ionicons.js"></script>

    <!--Scripts-->
    <script src="/js/scripts.js"></script>
</head>

<body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="/" class="navbar-brand">
                <img src="/img/worship-events_logo.png" alt="Worship Events">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Evento</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Evento</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')
    <footer>
        <p>Worship Events &copy; {{date('Y')}}</p>
    </footer>
</body>

</html>