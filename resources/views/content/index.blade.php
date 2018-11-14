@extends('layouts.main')
@section('content')

<!--Rev Slider Wrapper Column-->
<div class="rev_slider_wrapper bannercontainer" id="app">
    <div id="slider1" class="rev_slider" data-version="5.0">
        @include('_partials.main.slider')
    </div>
</div>

<div class="search">
    @include('_partials.main.search')
</div>


<section class="about sec-padding">
    @include('content.webtech.summary', [
    'odd' => true, 'heading' => 'Web analysis and marketing'
    ])
    <!-- Container -->
</section>

<section style="background-url(//placehold.it/2000X300/000000)" class="footer-call-to-action wow fadeIn bg-image"
    data-wow-delay="200ms" data-wow-duration="1500ms">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Here will be any kind lorem ipsum heading</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have lorem</p>
                <a href="#" class="thm-btn inverse mt-15 mr-15">Join Now</a> &nbsp;
                <a href="#" class="thm-btn normal-btn mt-15">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<section class="about sec-padding">
    @include('content.webtech.summary', [
    'odd' => false, 'heading' => 'Web Design (UI/UX) & Development'
    ])
    <!-- Container -->
</section>

<section style="background-url: url(//placehold.it/200X300/000000)" class="footer-call-to-action bg-image">

    <div class="container">
        <div class="row">

            <div class="col-md-4 sm-text-center">
                <h3>Sign up for Updates </h3>
                <p>By subscribing to our mailing list you will always be updated. </p>
            </div>
            <div class="col-md-8 text-right sm-text-center">
                <input type="text" name="name" placeholder="Full Name">
                <input type="text" name="email" placeholder="Email Address">
                <a href="#" class="thm-btn inverse mt-sm-15">Subscribe Now</a>
            </div>

        </div>
    </div>
</section>

<section class="about sec-padding">
    @include('content.webtech.summary', [
    'odd' => true, 'heading' => 'Site Hosting & Maintanance'
    ])
    <!-- Container -->
</section>

<section style="background-url: url(//placehold.it/200X300/000000)" class="footer-call-to-action bg-image">

    @include('content.promos.summary')
</section>


<section class="testimonials wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    @include('content.clients.reviews')
</section>

<section style="background: #f1f1f1" class="home-serivce sec-padding pb-0">
    @include('content.pricing.summary')
</section>

<!--Blog Section-->
<section class="blog-section pt-60 pb-30">
    @include('content.blog.summary')
</section>


<!--Start call to action Area-->
<div class="footer-call-to-action">
    @include('content.promos.summary')
</div>
@endsection
