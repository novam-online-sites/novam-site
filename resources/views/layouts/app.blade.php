
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Novam Online :: {{ $Title or 'Welcome' }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

  <!-- Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
  @yield('styles')
  <link rel="apple-touch-icon" sizes="57x57" href="/ico/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/ico/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/ico/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/ico/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/ico/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/ico/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/ico/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/ico/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/ico/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/ico/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/ico/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/ico/favicon-16x16.png">
  <link rel="icon" href="/favicon.ico">
  <link rel="manifest" href="/ico/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ico/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <style type="text/css">
  @stack('styles')
  .logo-img{

    max-height: 3rem;
  }
  .cursor{
    cursor: pointer; }
  .btn-rounded{
  padding-left: 1.25rem; padding-right: 1.25rem; border-radius: 1.25rem; }
  .bg-trans{
    background: transparent; }
  .bg-rounded {
    border-radius: 1rem; padding-left: 1rem; padding-right: 1rem;}
  .rounded-circle {
    margin-top: -2rem; }
  .text-white {
    color: white !important; }
  #testimonials .carousel-control.right,
  #testimonials .carousel-control.left{
    background-image: none !important;
    background: transparent !important;
  }
  .nav-link{
    font-size: 0.8rem; font-weight: bold;
  }
  .nav-link:hover,.active .nav-link{
    border-bottom: 5px solid #8cc63e;
  }
  .shadow-1{
  box-shadow: 1px 1px 15px 1px #ccc;
  }
  .square {
    position: relative; max-width: 175px; margin-left:auto;margin-right:auto;}
  .square:after {
    content: " "; display: block; padding-bottom: 100%; }
  .content {
    position: absolute; width: 100%; height: 100%; top: 0; bottom: 0; text-align: center; border-radius: 50%;}
  .parallax-window {
      min-height: 300px; background-color: transparent; width:100%; }
  .parallax-mirror {
        z-index:1
    }

  #homeSlides .carousel-item{
    max-height: 600px;
  }
  #homeSlides .carousel-item img{
    width: 100%;
    height: auto;
  }
  </style>
</head>
<body>
  <header>
    @include('includes.app.header')
  </header>
<main>
  @yield('content')
</main>

  <footer class="bg-inverse">
    @include('includes.app.footer')
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/2.1.3/parallax.min.js"></script>
@yield('scripts')
<script type="text/javascript">
@stack('scripts')
</script>
</body>
</html>
