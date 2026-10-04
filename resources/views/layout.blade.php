<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — Новости</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <x-header />

    <main>
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
