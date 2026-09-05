<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Meu Sistema')</title>
</head>
<body>

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>