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
    'odd' => true, 'heading' => 'Web analysis & SEO marketing',
    'content' => '
    <p>
        We diagnose existing websites for security vulnerabilities, bugs, perfomance issues and possible enhancements.
    </p>
    <p>
        We analyze existing websites and web applications for search engine optimizations and offer guarantee to increase ranking through a series of optimization tools.
    </p>
    <p>
        For new sites or web apps, we take your ideas, templates, vision and offer blueprint for success in security, performance and seo marketing.
    </p>'
    ])
    <!-- Container -->
</section>

<section style="background-image:url(/images/network-security.jpg)"
    class="footer-call-to-action wow fadeIn bg-image"
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
    'odd' => false, 'heading' => 'Web Design (UI/UX) & Development',
    'content' => '
        <p>
            We take your ideas and visions and explore all technologies to design a rich user experience (UX) blueprint - wireframes, mockups, templates.
        </p>
        <p>
            We use templates (from us or you) and transform them into a professional user interface (UI) and add all the interactivity and HTML/CSS/JS code.
        </p>
        <p>
            Our development team adds functionality to the designs/templates for brand new and/or existing websites or web applications.
        </p>'
    ])
    <!-- Container -->
</section>

<section style="background-image:url(/images/network-security.jpg)" class="footer-call-to-action wow fadeIn bg-image"
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
    'odd' => true, 'heading' => 'Site Hosting & Maintanance',
    'content' => '
        <p>
            We provide cloud-based hosting and ongoing support and maintenance 24/7/365 and guarantee 100% uptime!
        </p>
        <p>
           Our cloud-based option offers your application high availability and speed optimization all across the globe.
        </p>
        <p>
            We automate error-checking and bug reporting on your site so you don\'t have to worry. We upgrade your application as soon as new technologies are available
        </p>'
    ])
    <!-- Container -->
</section>

<section style="background-image:url(/images/network-security.jpg)" class="footer-call-to-action wow fadeIn bg-image"
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

{{--  <section style="background-image: url(//placehold.it/200X300/000000)" class="footer-call-to-action bg-image">
    @include('content.promos.summary')
</section>  --}}


<section class="testimonials wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    @include('content.blog.summary')
</section>

<section style="background-image: url(/images/network-security.jpg)" class="footer-call-to-action bg-image">
    @include('content.promos.summary')
</section>

<section style="background: #f1f1f1" class="home-serivce sec-padding pb-0">
    @include('content.pricing.summary')
</section>


<section style="background-image: url(/images/network-security.jpg)" class="footer-call-to-action bg-image">

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
{{--
<section class="testimonials wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    @include('content.clients.reviews')
</section>  --}}

{{--  <section style="background-image: url(/images/network-security.jpg)" class="footer-call-to-action bg-image">
    @include('content.promos.summary')
</section>

<!--Blog Section-->
<section class="blog-section pt-60 pb-30">
@include('content.clients.reviews')
</section>


<!--Start call to action Area-->
<div class="footer-call-to-action">

</div>  --}}
@endsection
