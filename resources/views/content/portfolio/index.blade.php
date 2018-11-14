@extends('layouts.main')
@section('content')
<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>Our Work</h2>
                <ul class="breadcumb">
                    <li><a href="index1.html">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>Gallery Style Two</span></li>
                </ul>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>
    </div>
</section>

<!--Gallery Section-->
<section class="gallery-section full-width pb_2">
    <div class="container">
        <!--Filter-->
        <div class="filters">
            <ul class="filter-tabs style-one clearfix anim-3-all">
                <li class="filter" data-role="button" data-filter="all">All</li>
                <li class="filter" data-role="button" data-filter=".child">Child</li>
                <li class="filter" data-role="button" data-filter=".charity">Charity</li>
                <li class="filter" data-role="button" data-filter=".sponsorship">Sponsorship</li>
                <li class="filter" data-role="button" data-filter=".volunteering">Volunteering</li>
            </ul>
        </div>
    </div>
    @include('content.portfolio.summary')
</section>
@endsection


{{--  <section class="p-40" data-bg-color="#eee">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clients-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="img-box">
                            <img src="images/clients/logo-6.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="images/clients/logo-7.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="images/clients/logo-1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="images/clients/logo-2.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="images/clients/logo-3.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="images/clients/logo-7.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="images/clients/logo-7.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="images/clients/logo-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  --}}
