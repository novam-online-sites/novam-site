@extends('layouts.main')
@section('layout')
<div class="container" id="app">
    <div class="row">
        <div class="offset-md-1 col-md-10">
            @yield('content')
        </div>
    </div>
</div>
@endsection
