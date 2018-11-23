@extends('layouts.main')
@section('content')
<section class="inner-header" style="background-iamge:url(https://html.spidertrixcons.net/pixxles/images/resources/inner-header-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>Products</h2>
                <ul class="breadcumb">
                    <li><a href="index1.html">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>Products</span></li>
                </ul>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>
    </div>
</section>
@include('content.products.summary')
@endsection
