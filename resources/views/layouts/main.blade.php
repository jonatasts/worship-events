<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">

    <!--Scripts-->
    <script src="/js/scripts.js"></script>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">
    @yield('content')
    <footer>
        <p>Worship Events &copy; {{date('Y')}}</p>
    </footer>
</body>

</html>