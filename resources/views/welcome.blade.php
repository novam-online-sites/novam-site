@extends('layouts.main')
@section('content')


<!--Featured Three Column-->
<div class="featured-three-column mt-sm-70 mt-40 pb-70">
    @include('content.process.summary')
</div>

<!-- Pricing Table -->
<section style="background: #f1f1f1" class="pricingTable-1 pt-50 pb-70">
    @include('content.services.summary')
</section>

<section style="background-url: url(//placehold.it/200X300/000000)" class="footer-call-to-action bg-image">
    <div class="container">
        <div class="row">
            <div class="col-md-5 pt-30 pb-10 text-center wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="images/hosting/5.png" alt="">
            </div>
            <div class="col-md-7 pt-50 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <p><i>hosting this summer</i></p>
                <h2 class="mt-10 mb-10 text-white" style="text-transform: uppercase;font-weight: bold; font-size: 56px;line-height:56px">25%
                    Off</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have lorem</p>
                <a href="#" class="thm-btn inverse mt-15 mr-15">Register Now</a>
            </div>
        </div>
    </div>
</section>

<section class="about sec-padding">
    @include('content.webtech.summary')
    <!-- Container -->
</section>
<!-- End about area -->



<section id="our-volenteer-area" class="anim-5-all home">
    @include('content.about.our-team')
</section>

<section style="background-url(//placehold.it/2000X300/000000)" class="footer-call-to-action wow fadeIn bg-image"
    data-wow-delay="200ms" data-wow-duration="1500ms">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-70 pb-40">
                <h3>Here will be any kind lorem ipsum heading</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have lorem</p>
                <a href="#" class="thm-btn inverse mt-15 mr-15">Join Now</a> &nbsp;
                <a href="#" class="thm-btn normal-btn mt-15">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!--Start Our Testimonials Area-->
<section class="testimonials wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    <div class="container">
        <div class="row clearfix">
            <div class="col sec-title text-center">
                <span class="double-line"></span> &ensp;
                <h2>Testimonials</h2> &ensp; <span class="double-line"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi.</p>
            </div>
        </div>
        <div class="row clearfix">
            <!--Slider-->
            <div class="slider owl-carousel clearfix">
                <!--Slide Item-->
                <div class="slide-item anim-5-all">
                    <div class="avatar">
                        <img src="images/testimonials/1.jpg" alt="" title=""></div>
                    <div class="content">
                        <span class="curve"></span>
                        <div class="quote-text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable. If you are going to use a passage.</div>
                        <div class="quote-author"><strong class="text-thm">Grey White,</strong> CEO/Google Inc</div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item anim-5-all">
                    <figure class="avatar"><img src="images/testimonials/2.jpg" alt="" title=""></figure>
                    <div class="content">
                        <span class="curve"></span>
                        <div class="quote-text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable. If you are going to use a passage.</div>
                        <div class="quote-author"><strong class="text-thm">Grey White,</strong> CEO/Google Inc</div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item anim-5-all">
                    <figure class="avatar"><img src="images/testimonials/3.jpg" alt="" title=""></figure>
                    <div class="content">
                        <span class="curve"></span>
                        <div class="quote-text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable. If you are going to use a passage.</div>
                        <div class="quote-author"><strong class="text-thm">Grey White,</strong> CEO/Google Inc</div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item anim-5-all">
                    <figure class="avatar"><img src="images/testimonials/1.jpg" alt="" title=""></figure>
                    <div class="content">
                        <span class="curve"></span>
                        <div class="quote-text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable. If you are going to use a passage.</div>
                        <div class="quote-author"><strong class="text-thm">Grey White,</strong> CEO/Google Inc</div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item anim-5-all">
                    <figure class="avatar"><img src="images/testimonials/2.jpg" alt="" title=""></figure>
                    <div class="content">
                        <span class="curve"></span>
                        <div class="quote-text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable. If you are going to use a passage.</div>
                        <div class="quote-author"><strong class="text-thm">Grey White,</strong> CEO/Google Inc</div>
                    </div>
                </div>
                <!--Slide Item-->
                <div class="slide-item anim-5-all">
                    <figure class="avatar"><img src="images/testimonials/3.jpg" alt="" title=""></figure>
                    <div class="content">
                        <span class="curve"></span>
                        <div class="quote-text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable. If you are going to use a passage.</div>
                        <div class="quote-author"><strong class="text-thm">Grey White,</strong> CEO/Google Inc</div>
                    </div>
                </div>
            </div>
            <!--Slider End-->
        </div>
    </div>
</section>
<!--Start Our Mission Area-->
<section style="background: #f1f1f1" class="home-serivce sec-padding pb-0">
    @include('content.pricing.summary')
</section>

<!--Blog Section-->
<section class="blog-section pt-60 pb-30">
    <div class="container">
        <div class="sec-title mb-40">
            <div class="row">
                <div class="col-md-6 offset-md-3 wow fadeIn" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <span class="double-line"></span> &ensp;
                    <h2 class="text-thm">Latest NEWS</h2>
                    &ensp; <span class="double-line"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi.</p>
                </div>
            </div>
        </div>
        <div class="sec-content">
            <div class="row clearfix">
                <!--Blog Post-->
                <div class="col-xs-12 col-sm-6 col-md-4 featured-blog-post wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <article class="inner-box hvr-float-shadow">
                        <figure class="image">
                            {{-- <a href="blog-details.html"><img src="images/hosting/blog/1.jpg" alt=""></a> --}}
                        </figure>
                        <div class="post-lower">
                            <div class="post-header">
                                <div class="date"><span class="day">28</span>
                                    <br>APR</div>
                                <h3 class="title"><a href="blog-details.html">Digital Marketing</a></h3>
                                <ul class="post-info fs-13 pl-0">
                                    <li><span class="icon fa fa-user"></span> <a href="#">Jonathan Doe</a></li>
                                    <li><span class="icon fa fa-tag pl-5"></span> <a href="#">CEO Village</a></li>
                                </ul>
                            </div>
                            <div class="post-desc">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                <div class="text-right">
                                    <a href="blog-details.html" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!--Blog Post-->
                <div class="col-xs-12 col-sm-6 col-md-4 featured-blog-post wow fadeInUp" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <article class="inner-box hvr-float-shadow">
                        <figure class="image">
                            {{-- <a href="blog-details.html"><img src="images/hosting/blog/2.jpg" alt="" /></a>
                            --}}
                        </figure>
                        <div class="post-lower">
                            <div class="post-header">
                                <div class="date"><span class="day">15</span>
                                    <br>APR</div>
                                <h3 class="title"><a href="blog-details.html">Digital Photography</a></h3>
                                <ul class="post-info fs-13 pl-0">
                                    <li><span class="icon fa fa-user"></span> <a href="#">Jonathan Doe</a></li>
                                    <li><span class="icon fa fa-tag pl-5"></span> <a href="#">CEO Village</a></li>
                                </ul>
                            </div>
                            <div class="post-desc">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                <div class="text-right">
                                    <a href="blog-details.html" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!--Blog Post-->
                <div class="col-xs-12 col-sm-6 col-md-4 featured-blog-post wow fadeInRight" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <article class="inner-box hvr-float-shadow">
                        <figure class="image">
                            {{-- <a href="blog-details.html"><img src="images/hosting/blog/3.jpg" alt=""></a> --}}
                        </figure>
                        <div class="post-lower">
                            <div class="post-header">
                                <div class="date"><span class="day">09</span>
                                    <br>APR</div>
                                <h3 class="title"><a href="blog-details.html">Outsourcing Tips</a></h3>
                                <ul class="post-info fs-13 pl-0">
                                    <li><span class="icon fa fa-user"></span> <a href="#">Jonathan Doe</a></li>
                                    <li><span class="icon fa fa-tag pl-5"></span> <a href="#">CEO Village</a></li>
                                </ul>
                            </div>
                            <div class="post-desc">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                <div class="text-right">
                                    <a href="blog-details.html" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Start Our Gallery Areas-->
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
</div>

<!--Client logo div-->
<div class="p-40">
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
                    <div class="item">
                        <div class="img-box">
                            <img src="//placehold.it/32X32" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Start call to action Area-->
<div class="footer-call-to-action">
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
</div>
@endsection
