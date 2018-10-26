@extends('layouts.base')
@section('styles')
  <style>
          html, body {
              background-color: #fff;
              font-family: 'Raleway', sans-serif;
              font-weight: 100;
              height: 100vh;
              margin: 0;
              background-image: url(http://cdn.akamai.steamstatic.com/steamcommunity/public/images/items/307170/4cbb91e30c91152c0b3bc1ce2f3e46e125ab6042.png);
              /* background-image: url(http://www.psdgraphics.com/file/binary-code.jpg); */
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
          }
          .full-height {
              height: 85vh;
          }

          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }

          .position-ref {
              position: relative;
          }

          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }

          .content {
              text-align: center;
          }

          .title {
              font-size: 80px;
              line-height: 1;
          }
          .title.small{
            margin-top:0.5rem;
            font-size: 30px;
          }
          .title.small img{
            max-height:40px;
          }

          .links > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 12px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }

          .m-b-md {
              margin-bottom: 30px;
          }
          .tab-pane{
            display:none;
          }
          .tab-pane.active{
            display:block;
          }
      </style>
@endsection
@section('content')
  <main class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ route('login') }}">Login</a>
                      <a href="{{ route('register') }}">Register</a>
                  @endauth
              </div>
          @endif

          <div class="content">
              <div class="title m-b-md text-white">
                  <img src="//placehold.it/70X70" alt=""> {{config('app.name')}}
              </div>
              <h1 class="h2 text-white">
                <span>Internet Marketing</span>
                <span class="d-sm-inline d-block"> + </span>
                <span>Online User Experience</span>
                <span class="d-sm-inline d-block"> + </span>
                <span>Web &amp; Mobile Apps</span>
              </h1>
              <br />
              <ul class="links text-white nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="/" role="tab">WELCOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link tab" data-url="/about" data-toggle="tab" href="#about" role="tab">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link tab" data-url="/more" data-toggle="tab" href="#more" role="tab">MORE INFO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link tab" data-url="/work" data-toggle="tab" href="#work" role="tab">OUR WORk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link tab" data-url="/client" data-toggle="tab" href="#client" role="tab">GET STARTED</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link tab" data-url="/contact" data-toggle="tab" href="#contact" role="tab">CONTACT US</a>
                </li>
              </ul>
              {{-- <div class="links text-white nav nav-tabs" role="tablist">
                <a href="/">WELCOME</a>
                  <a href="#about" data-url="/about" class="nav-link tab d-sm-inline d-block">ABOUT US</a>
                  <a href="#more" data-url="/more" class="nav-link tab d-sm-inline d-block">LEARN MORE</a>
                  <a href="#work" data-url="/work" class="nav-link tab d-sm-inline d-block">OUR WORk</a>
                  <a href="#client" data-url="/client" class="nav-link tab d-sm-inline d-block">GET STARTED</a>
                  <a href="#contact" data-url="/contact" class="nav-link tab d-sm-inline d-block">CONTACT US</a>
              </div> --}}
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-3">Fluid jumbotron</h1>
                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                  </div>
                </div>
              <div class="tab-content">
                <div class="tab-pane active"></div>
                <div class="tab-pane" id="about"></div>
                <div class="tab-pane" id="more"></div>
                <div class="tab-pane" id="work"></div>
                <div class="tab-pane" id="client"></div>
                <div class="tab-pane" id="contact"></div>
              </div>

          </div>
      </main>
@endsection
@section('scripts')
<script>
 (function($){
   $(function(){
    $('.tab').click(function(evt){
      evt.preventDefault();

      $('.flex-center').removeClass('flex-center');
      $("h1,.jumbotron").slideUp();
      $('.title').removeClass('small').addClass('small');

      var target = this.hash || this.href;


      $('.tab-pane').removeClass('active');
      $(target, document).addClass('active');

      if($(this).data('url') === undefined) return;
      $(target, document).load($(this).data('url'), function(){
      });
    });

    $(function(){
      $(document).on('show.bs.modal', '#preview', function (e) {
        // do something...

        var $url = $(e.relatedTarget).data('url');
        var $body = $(this).find(".modal-body");
        console.log(this, $url, $body);
        $(this).find('.modal-body > img').attr('src', $url);
      });
    });
   });
 })(jQuery);
</script>
@endsection
