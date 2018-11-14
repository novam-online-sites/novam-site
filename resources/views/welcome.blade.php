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

{{--  <div class="featured-three-column mt-sm-70 mt-40 pb-70">
    @include('content.process.summary')
</div>

<section id="our-volenteer-area" class="anim-5-all home">
    @include('content.about.our-team')
</section>


<section style="background: #f1f1f1" class="pricingTable-1 pt-50 pb-70">
    @include('content.services.summary')
</section>  --}}


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
    @include('content.clients.testimonials')
</section>

<section style="background: #f1f1f1" class="home-serivce sec-padding pb-0">
    @include('content.pricing.summary')
</section>

<!--Blog Section-->
<section class="blog-section pt-60 pb-30">
    @include('content.blog.summary')
</section>

{{--  <!--Start Our Gallery Areas-->
<div style="background: #f1f1f1" class="gallery-section full-width pt-70 pb-0 wow fadeIn" data-wow-delay="250ms"
    data-wow-duration="1500ms">
    <div class="container">
        <div class="sec-title text-center" style="margin-bottom:20px;">
            <span class="double-line"></span> &ensp;
            <h2>Our Gallery</h2> &ensp; <span class="double-line"></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. </p>
        </div>
        <!--Filter-->
        <div class="filters">
            <ul class="filter-tabs style-one clearfix anim-3-all">
                <li class="filter" data-role="button" data-filter="all">All</li>
                <li class="filter" data-role="button" data-filter=".child">Identity</li>
                <li class="filter" data-role="button" data-filter=".charity"> Web Design</li>
                <li class="filter" data-role="button" data-filter=".sponsorship">Domain</li>
            </ul>
        </div>
    </div>
    <div class="images-container">
        <div class="filter-list clearfix">
            <!--Image Box-->
            <div class="image-box mix mix_all charity sponsorship volunteering">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/s8.jpg" class="lightbox-image"><img src="images/gallery/s8.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/s8.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                            class="icon fa fa-search"></span></a>
                </div>
            </div>
            <!--Image Box-->
            <div class="image-box mix mix_all charity sponsorship volunteering">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/s3.jpg" class="lightbox-image"><img src="images/gallery/s3.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/s3.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                            class="icon fa fa-search"></span></a>
                </div>
            </div>
            <!--Image Box-->
            <div class="image-box mix mix_all child charity">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/s2.jpg" class="lightbox-image"><img src="images/gallery/s2.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/s2.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                            class="icon fa fa-search"></span></a>
                </div>
            </div>
            <!--Image Box-->
            <div class="image-box mix mix_all child charity sponsorship">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/s4.jpg" class="lightbox-image"><img src="images/gallery/s4.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/s4.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                            class="icon fa fa-search"></span></a>
                </div>
            </div>
            <!--Image Box-->
            <div class="image-box mix mix_all child sponsorship volunteering">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/s5.jpg" class="lightbox-image"><img src="images/gallery/s5.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/s5.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                            class="icon fa fa-search"></span></a>
                </div>
            </div>
            <!--Image Box-->
            <div class="image-box mix mix_all child charity">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/s6.jpg" class="lightbox-image"><img src="images/gallery/s6.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/s6.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                            class="icon fa fa-search"></span></a>
                </div>
            </div>
            <!--Image Box-->
            <div class="image-box mix mix_all child charity sponsorship volunteering">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/s9.jpg" class="lightbox-image"><img src="images/gallery/s9.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/s9.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                            class="icon fa fa-search"></span></a>
                </div>
            </div>
            <!--Image Box-->
            <div class="image-box mix mix_all charity sponsorship volunteering">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/s7.jpg" class="lightbox-image"><img src="images/gallery/s7.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/s7.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span
                            class="icon fa fa-search"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>  --}}

<!--Client logo div-->
{{--  <div class="p-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clients-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="img-box">
                            <img src="//placehold.it/32X32" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="//placehold.it/32X32" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="//placehold.it/32X32" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img style="margin:0 2rem" src="//placehold.it/32X32" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="//placehold.it/32X32" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="//placehold.it/32X32" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="//placehold.it/32X32" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-box">
                            <img src="//placehold.it/32X32" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}


<!--Start call to action Area-->
<div class="footer-call-to-action">
    @include('content.promos.summary')
</div>
@endsection
