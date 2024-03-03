<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>NPS Blog | {{ $title }}</title>
</head>
<body>

    @include('partials.navbar')

    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-8">
        @yield('container')
    </div>
</body>
</html>