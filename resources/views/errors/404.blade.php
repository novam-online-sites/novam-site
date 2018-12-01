@extends('layouts.main')
@section('content')
<div class="container pt-3">
    <div class="jumbotron text-center mt-3">
        <h1 class="display-3">404</h1>
        <p class="lead">Page Not Found</p>
        <hr class="my-2">
        <p>
            Oh man, this is so embarassing, did we mess up or did you?
        </p>
        <form action="/search" class="form-inline" method="POST">
            @csrf
            <div class="ml-auto form-group">
                <label for="" class="col-form-label mr-2">Looking for</label>
                <input type="text" class="form-control" name="q">
            </div>
            <div class="mr-auto form-group">
                <button type="submit" class="btn btn-primary">Search it</button>
            </div>
        </form>
    </div>
</div>
@endsection
