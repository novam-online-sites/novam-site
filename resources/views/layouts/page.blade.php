<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>{{  config("app.name") }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ mix('css/page.css') }}" rel="stylesheet">
</head>

<body class="text-center">

    @yield('content')


  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
