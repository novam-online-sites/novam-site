<header class="header">
<div class="top-bar hidden-xs ">
    @include('_partials.main.topBar')
</div>
<!-- /.top-bar -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <a href="/">
                        <div class="logo">
                            <h1 class="text-inverse text-left" style=" color:#000; font-weight: bold;">
                                <img src="{{ asset('images/logo.png') }}" alt="Awesome Image" class="logo-img" />
                                <span class="text-thm">Novam</span> Online
                            </h1>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 hidden-xs">
                    @include('_partials.main.search')
                </div>
            </div>
        </div>
    </header>
