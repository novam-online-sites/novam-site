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
    <link rel="icon" href="images/resources/favico.ico" sizes="16x16">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css" />
    <link rel="stylesheet" href="{{ mix('css/styles.css') }}" />
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="top-bar hidden-xs ">
        @include('_partials.main.topBar')
    </div>
    <!-- /.top-bar -->
    @include('_partials.main.header')
    <!-- /.header -->

    @include('_partials.main.navBar')
    <!-- /.mainmenu-area -->

    @yield('content')

    <!--Footer div-->
    @include('_partials.main.footer')

    {{--  <!-- switch color -->
    <div class="config open">
        <div class="config-options">
            <h4>Colors</h4>
            <ul>
                <li><a style="background: #37aecc;color: #37aecc" class="changecolor blue-text" href="#" title="Blue color">---</a></li>
                <li><a style="background: #cbebf7;color: #cbebf7" class="changecolor light-blue-text" href="#" title="light Blue color">---</a></li>
                <li><a style="background: #32374b;color: #32374b" class="changecolor oxford-text" href="#" title="Oxford color">---</a></li>
                <li><a style="background: #a1cf68;color: #a1cf68" class="changecolor green-text" href="#" title="Green color">---</a></li>
                <li><a style="background: #FF7619;color: #FF7619" class="changecolor orange-text" href="#" title="Orange color">---</a></li>
                <li><a style="background: #7300ab;color: #7300ab" class="changecolor purple-text" href="#" title="Purple color">---</a></li>
            </ul>
        </div>
        <a class="show-theme-options" href="#"><i class="fa fa-cog"></i></a>
    </div>
  --}}

    <!--Scroll to top-->
    <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

    <!-- main jQuery -->
    <script src="{{ mix('js/main.js') }}"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- bx slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <!-- validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate-js/2.0.1/validate.min.js"></script>
    <!-- mixit up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <!-- fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js"></script>
    <!-- easing -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- circle progress -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    <!-- appear js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.4.1/jquery.appear.min.js"></script>
    <!-- count to -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
    <!-- isotope script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <!-- jQuery ui js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- thm custom script -->
    <script src="{{ mix('js/scripts.js') }}"></script>
    <script defer>
        (function ($) {

            $(function () {
                $('.owl-carousel', document).owlCarousel();
            });



            $(window).on("load", function () {
                $('.show-theme-options').delay(2000).trigger('click');
            });
            $(window).on('load', function () {
                $('.se-pre-con', document).fadeOut();
                new WOW().init();
            });
        })(jQuery);
    </script>
</body>

</html>
