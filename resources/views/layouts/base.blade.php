<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="google-site-verification" content="{{ config('services.google.verify') }}" />
    <link rel="icon" href="images/resources/favico.ico" sizes="16x16">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
    <link rel="stylesheet" href="{{ mix('css/styles.css') }}" />
    @stack('styles')
</head>

<body>
    <div class="se-pre-con"></div>

   <main class="main" id="app">
        @hasSection ('layout')
        @yield("layout")
        @else
        <div id="app">
            @yield('content')
        </div>
        @endif
   </main>


    <!--Scroll to top-->
    <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

    <!-- main jQuery -->
    <script src="{{ mix('js/main.js') }}"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    @stack('scripts')
    <script defer>
        (function ($) {
            $(window).on('load', function () {
                $('.se-pre-con', document).fadeOut();
            });
        })(jQuery);
    </script>
</body>

</html>
