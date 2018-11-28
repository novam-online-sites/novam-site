{{-- <nav class="mainmenu-area stricky">
    <div class="container">
        <div class="navigation">
            <div class="nav-header d-flex">
                <ul class="d-block d-md-none mr-auto">
                    <li class="donate-btn">
                        <a class="thm-btn m-1 p-1" href="/test">
                            <img style="max-height:2.5rem;" src="{{ asset('images/logo.png') }}" />
                        </a>
                    </li>
                </ul>
                <ul class="mr-auto">
                    <li class="d-block d-md-none mr-auto"></li>
                    <li><a href="/">About Us</a></li>
                    <li><a href="/services">Our Services</a></li>
                    <li><a href="/technologies">Technologies</a></li>
                    <li class="dropdown">
                        <a href="#">Porftolio</a>
                        <ul class="submenu">
                            <li><a href="gallery-style-one.html">Gallery Style One</a></li>
                            <li><a href="gallery-style-two.html">Gallery Style Two</a></li>
                            <li><a href="gallery-style-three.html">Gallery Style three</a></li>
                        </ul>
                    </li>
                    <li class="d-block d-md-none mr-auto"></li>
                </ul>
                <ul class="ml-auto">
                    <li class="donate-btn">
                        @auth
                        <form action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="thm-btn m-1 p-1" href="/login">Logout</button>
                        </form>
                        @else
                        <a class="thm-btn m-1 p-1" href="/login">Clients</a>
                        @endauth
                        <div class="nav-footer float-left">
                            <button><i class="fa fa-bars"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}
<nav class="mainmenu-area stricky">
    <div class="container">
        @if (Route::is('home'))
        <div class="my-3 pt-3">
            <f class="container">
                <h1 class="h2 d-flex">
                    <a href="/" class="btn btn-primary dropdown-toggle float-left" id="siteNavMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-back"></i> Back to site
                    </a>
                    <div class="dropdown-menu" aria-labelledby="siteNavMenuButton">
                        @include('_partials.main.siteNav', ['class' => ' class="dropdown-item"'])
                    </div>
                    <span class="d-inline-block mx-auto">Dashboard</span>
                    <div class="dropdown float-right">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="userNavMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNavMenuButton">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Account</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type='submit' class="dropdown-item cursor btn btn-primary"><i class="fa fa-power-off"></i>
                                    LOGOUT</button>
                            </form>
                        </div>
                    </div>

                </h1>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="navigation" id="navbar-menu">
                <div class="nav-header pull-left">
                    @include('_partials.main.siteNav')
                </div>
            </div>
        </div>
        <div class="donate-col col-xs-12 col-sm-12 col-lg-3 col-md-3">
            <div class="donate-btn clearfix">
                <a class="thm-btn pull-right" href="/home">
                    Clients
                </a>
                <div class="nav-footer pull-left">
                    <button type="button" onclick="$('#navbar-menu .nav-header').slideToggle();" <i class="fa fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>

    @endif
    </div>
</nav>
