@extends('layouts.base')
@section('content')
<div class="container pt-3">
<div class="jumbotron text-center mt-3">
    <h1 class="display-3">503</h1>
    <p class="lead">Undergoing Maintenance. Be right back!</p>
    <hr class="my-2">
    <p>
        You can add your ip address to our list and request limited access below
    </p>
    <form action="/account/request" class="form-inline" method="POST">
        @csrf
        <div class="ml-auto form-group">
            <label for="" class="col-form-label mr-2">IP Address</label>
            <input type="text" class="form-control" name="ip">
        </div>
        <div class="mr-auto form-group">
            <button type="submit" class="btn btn-primary">Request Access</button>
        </div>
    </form>
</div>
</div>
@endsection
