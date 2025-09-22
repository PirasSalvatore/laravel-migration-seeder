<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Share+Tech+Mono&display=swap" rel="stylesheet">

    @vite('resources/sass/app.scss', 'resources/js/app.js')

    <title>@yield('title')</title>
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    
</body>
</html>