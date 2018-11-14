@extends('layouts.page')
@section('content')
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <a href="/" class="masthead-brand">
                <img height="40px" src="{{ config('app.logo') }}" class="img-rounded logo-img" alt="{{ config('app.name') }}">
            </a>
            <nav class="nav nav-masthead justify-content-center">
                {{--  <a class="nav-link active" href="#">Home</a>  --}}
                <a class="nav-link" href="#">Status</a>
                <a class="nav-link" href="#">Contact</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">Be Right Back</h1>
        <p class="lead">Our site is currently undergoing maintenance.</p>
        <p class="lead">
            <a href="tel:4353132246" class="btn btn-lg btn-secondary">Contact Us Instead</a>
        </p>
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            {{--  <p>Cover template for <a href="/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>  --}}
        </div>
    </footer>
</div>
@endsection
