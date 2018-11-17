<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Authentication' }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>
<body class="auth">
    <main role="main jutify-content-center v-100" id="main">
        @yield('content')
    </main>
    <script src="{{ mix('js/main.js') }}"></script>
</body>
</html>
