<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="images/resources/favico.ico" sizes="16x16">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css" />
    <link rel="stylesheet" href="{{ mix('css/styles.css') }}" />
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="top-bar hidden-xs ">
        @include('_partials.main.topBar')
    </div>
    <!-- /.top-bar -->
    @include('_partials.main.header')
    <!-- /.header -->

    @include('_partials.main.navBar')
    <!-- /.mainmenu-area -->

    <!--Rev Slider Wrapper Column-->
    <div class="rev_slider_wrapper bannercontainer" id="app">
        <div id="slider1" class="rev_slider" data-version="5.0">
            @include('_partials.main.slider')
        </div>
    </div>

    <div class="search">
        @include('_partials.main.search')
    </div>

    <!--Featured Three Column-->
    <div class="featured-three-column mt-sm-70 mt-40 pb-70">
        <div class="container">
            <div class="row clearfix">
                <div class="col">
                    <div class="sec-title text-center wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                        style="margin-bottom:20px;">
                        <span class="double-line"></span> &ensp; <h2>Why Choose Us</h2> &ensp; <span class="double-line"></span>
                        <p class="text-center pb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <!--Column-->
                <div class="card p-0 col-sm-12 col-md-4 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <article class="inner-box dark-overlay bg-img-cover" style="background-image: url(//placehold.it/300X300);">
                        <div class="content">
                            <h3>99.9% Uptime </h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="link"><a href="global-projects.html" class="thm-btn inverse"><i class="fa fa-caret-right text-text-thmed"></i>
                                    READ MORE</a></div>
                        </div>
                    </article>
                </div>
                <!--Column-->
                <div class="card p-0 col-sm-12 col-md-4 column wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <article class="inner-box bg-img-cover" style="background-image: url(//placehold.it/300X300);">
                        <div class="content">
                            <h3>Ultra Fast Services </h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="link"><a href="events.html" class="read-more thm-btn normal-btn"><span class="fa fa-caret-right"></span>
                                    Join Now</a></div>
                        </div>
                    </article>
                </div>
                <!--Column-->
                <div class="card p-0 col-sm-12 col-md-4 column wow fadeInRight" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <article class="inner-box dark-overlay bg-img-cover" style="background-image: url(//placehold.it/300X300);">
                        <div class="content">
                            <h3>Managed and Secured</h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="link"><a href="global-projects.html" class="read-more thm-btn inverse"><span
                                        class="fa fa-caret-right"></span> Join Now</a></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Table -->
    <section style="background: #f1f1f1" class="pricingTable-1 pt-50 pb-70">
        <div class="container">
            <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                <span class="double-line"></span> &ensp;
                <h2>Pricing For You </h2> &ensp; <span class="double-line"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum.</p>
            </div>
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2500ms">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <div class="heading">
                                    <h3>Start Up</h3>
                                </div>
                                <span class="price-value"><span class="currency">$</span>$9.99<span class="mo"> month</span></span>
                            </div>

                            <div class="pricingContent">
                                <ul>
                                    <li>10 GB Ram</li>
                                    <li>7/24 Support</li>
                                    <li>50 GB SSD storage </li>
                                    <li>Monthly Backup</li>
                                    <li>Unlimited Bandwidth</li>
                                </ul>
                            </div><!-- /  CONTENT BOX-->

                            <div class="pricingTable-sign-up">
                                <a href="#" class="thm-btn normal-btn">sign up</a>
                            </div><!-- BUTTON BOX-->
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <div class="heading">
                                    <h3>Standard</h3>
                                </div>
                                <span class="price-value"><span class="currency">$</span>29.99<span class="mo"> month</span></span>
                            </div>

                            <div class="pricingContent">
                                <ul>
                                    <li>10 GB Ram</li>
                                    <li>7/24 Support</li>
                                    <li>50 GB SSD storage </li>
                                    <li>Monthly Backup</li>
                                    <li>Unlimited Bandwidth</li>
                                </ul>
                            </div><!-- /  CONTENT BOX-->

                            <div class="pricingTable-sign-up">
                                <a href="#" class="thm-btn normal-btn">sign up</a>
                            </div><!-- BUTTON BOX-->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <div class="heading">
                                    <h3>Premium</h3>
                                </div>
                                <span class="price-value"><span class="currency">$</span>39.99<span class="mo"> month</span></span>
                            </div>

                            <div class="pricingContent">
                                <ul>
                                    <li>10 GB Ram</li>
                                    <li>7/24 Support</li>
                                    <li>50 GB SSD storage </li>
                                    <li>Monthly Backup</li>
                                    <li>Unlimited Bandwidth</li>
                                </ul>
                            </div><!-- /  CONTENT BOX-->

                            <div class="pricingTable-sign-up">
                                <a href="#" class="thm-btn normal-btn">sign up</a>
                            </div><!-- BUTTON BOX-->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="pricingTable">
                            <div class="pricingTable-header">
                                <div class="heading">
                                    <h3>Unlimited</h3>
                                </div>
                                <span class="price-value"><span class="currency">$</span>69.99<span class="mo"> month</span></span>
                            </div>

                            <div class="pricingContent">
                                <ul>
                                    <li>10 GB Ram</li>
                                    <li>7/24 Support</li>
                                    <li>50 GB SSD storage </li>
                                    <li>Monthly Backup</li>
                                    <li>Unlimited Bandwidth</li>
                                </ul>
                            </div><!-- /  CONTENT BOX-->

                            <div class="pricingTable-sign-up">
                                <a href="#" class="thm-btn normal-btn">sign up</a>
                            </div><!-- BUTTON BOX-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Table End -->

    <!-- Start about area -->
    <section class="about sec-padding">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-5 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img alt="Case" class="img-Yoga" src="images/hosting/about.png">
                </div>
                <!-- Column -->
                <div class="col-md-7 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <!-- Title -->
                    <div class="about title-container text-left sm">
                        <div class="title-wrap">
                            <h3 class="text-dark mt-0 pb-20 text-uppercase font-weight-700 double-line-bottom font-weight-700">best
                                hosting solution for your business </h3>
                            <span class="separator line-separator"></span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing industry. We work with clients to help them
                            have a thorough look about their financial situations, make better decisions, get those
                            decisions translated.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing industry. We work with clients to help them
                            have a thorough look about their financial situations, make better decisions, get those
                            decisions translated.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing industry. We work with clients to help them
                            have a thorough look about their financial situations, make better decisions, get those
                            decisions translated.</p>
                    </div>
                    <!-- Title -->
                    <p><a class="mt-20 btn thm-btn inverse" href="about.html">Read More</a></p>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
        </div>
        <!-- Container -->
    </section>
    <!-- End about area -->

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

    <section id="our-volenteer-area" class="anim-5-all home">
        <div class="container">
            <div class="sec-title wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <span class="double-line"></span> &ensp;
                <h2>Our Team</h2> &ensp; <span class="double-line"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</p>
            </div>
            <div class="sec-content">
                <div class="our-volenteer">
                    <div class="row">
                        <!--Start Single volenteer-->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 wow slideInUp" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="single-volenteer pb-sm-30">
                                <div class="volenteer-image-holder">
                                    <img src="images/hosting/team/1.jpg" alt="">
                                    <div class="volenteer-overlay">
                                        <div class="social-links">
                                            <a href=""><i class="fa fa-facebook mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-twitter mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-google-plus mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-linkedin mysocial_style"></i></a>
                                        </div>
                                        <div class="volenteer-minus-icon">
                                            <img src="images/team/volenteer-plus-icon-blank.png" alt="">
                                        </div>
                                    </div>
                                    <div class="volenteer-plus-icon">
                                        <img src="images/team/volenteer-plus-icon-blank.png" alt="">
                                    </div>
                                </div>
                                <div class="volenteer-name text-center">
                                    <h5>Raymer</h5>
                                    <p>Engineer</p>
                                </div>
                            </div>
                        </div>
                        <!--Start Single volenteer-->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 wow slideInUp" data-wow-delay="250ms"
                            data-wow-duration="1500ms">
                            <div class="single-volenteer pb-sm-30">
                                <div class="volenteer-image-holder">
                                    <img src="images/hosting/team/2.jpg" alt="">
                                    <div class="volenteer-overlay">
                                        <div class="social-links">
                                            <a href=""><i class="fa fa-facebook mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-twitter mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-google-plus mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-linkedin mysocial_style"></i></a>
                                        </div>
                                        <div class="volenteer-minus-icon">
                                            <img src="images/team/volenteer-plus-icon-blank.png" alt="">
                                        </div>
                                    </div>
                                    <div class="volenteer-plus-icon">
                                        <img src="images/team/volenteer-plus-icon-blank.png" alt="">
                                    </div>
                                </div>
                                <div class="volenteer-name text-center">
                                    <h5>Alexander</h5>
                                    <p>Developer</p>
                                </div>
                            </div>
                        </div>
                        <!--Start Single volenteer-->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 wow slideInUp" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="single-volenteer pb-sm-30">
                                <div class="volenteer-image-holder">
                                    <img src="images/hosting/team/3.jpg" alt="">
                                    <div class="volenteer-overlay">
                                        <div class="social-links">
                                            <a href=""><i class="fa fa-facebook mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-twitter mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-google-plus mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-linkedin mysocial_style"></i></a>
                                        </div>
                                        <div class="volenteer-minus-icon">
                                            <img src="images/team/volenteer-plus-icon-blank.png" alt="">
                                        </div>
                                    </div>
                                    <div class="volenteer-plus-icon">
                                        <img src="images/team/volenteer-plus-icon-blank.png" alt="">
                                    </div>
                                </div>
                                <div class="volenteer-name text-center">
                                    <h5>Chris Lewis</h5>
                                    <p>Manger</p>
                                </div>
                            </div>
                        </div>
                        <!--Start Single volenteer-->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 wow slideInUp" data-wow-delay="350ms"
                            data-wow-duration="1500ms">
                            <div class="single-volenteer pb-sm-30">
                                <div class="volenteer-image-holder">
                                    <img src="images/hosting/team/4.jpg" alt="">
                                    <div class="volenteer-overlay">
                                        <div class="social-links">
                                            <a href=""><i class="fa fa-facebook mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-twitter mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-google-plus mysocial_style"></i></a>
                                            <a href=""><i class="fa fa-linkedin mysocial_style"></i></a>
                                        </div>
                                        <div class="volenteer-minus-icon">
                                            <img src="images/team/volenteer-plus-icon-blank.png" alt="">
                                        </div>
                                    </div>
                                    <div class="volenteer-plus-icon">
                                        <img src="images/team/volenteer-plus-icon-blank.png" alt="">
                                    </div>
                                </div>
                                <div class="volenteer-name text-center">
                                    <h5>Robinson</h5>
                                    <p>Designer</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single volenteer-->
                    </div>
                </div>
            </div>
        </div>
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
        <div class="container">
            <div class="sec-title text-center">
                <span class="double-line"></span> &ensp;
                <h2>Our Goals </h2> &ensp; <span class="double-line"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum.</p>
            </div>
            <div class="sec-content">
                <div class="row">
                    <div class="col-sm-12 col-sm-6 col-md-4  wow fadeIn" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="single-service-home">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Complete Analysis</h3>
                                <p>There are many variations of lorem
                                    <br>passagei of Lorem Ipsum available </p>
                                <a href="service-details.html">Read More <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-4 wow fadeIn" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="single-service-home">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="fa fa-exchange"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Domain Transfer</h3>
                                <p>There are many variations of lorem
                                    <br>passagei of Lorem Ipsum available </p>
                                <a href="service-details.html">Read More <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-4 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="single-service-home">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Proper Monitoring</h3>
                                <p>There are many variations of lorem
                                    <br>passagei of Lorem Ipsum available </p>
                                <a href="service-details.html">Read More <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-4 wow fadeIn" data-wow-delay="350ms" data-wow-duration="1500ms">
                        <div class="single-service-home">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="fa fa-hdd-o"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Unlimited Storage</h3>
                                <p>There are many variations of lorem
                                    <br>passagei of Lorem Ipsum available </p>
                                <a href="service-details.html">Read More <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-4 wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="single-service-home">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="fa fa-headphones"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>24/7 Live Support</h3>
                                <p>There are many variations of lorem
                                    <br>passagei of Lorem Ipsum available </p>
                                <a href="service-details.html">Read More <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-4 wow fadeIn" data-wow-delay="450ms" data-wow-duration="1500ms">
                        <div class="single-service-home">
                            <div class="icon-box">
                                <div class="inner-box">
                                    <i class="fa fa-rocket"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h3>99.9% Uptime</h3>
                                <p>There are many variations of lorem
                                    <br>passagei of Lorem Ipsum available </p>
                                <a href="service-details.html">Read More <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <!--Footer div-->
    @include('_partials.main.footer')

    <!-- switch color -->
    <div class="config open">
        <div class="config-options">
            <h4>Colors</h4>
            <ul>
                <li><a style="background: #37aecc;color: #37aecc" class="changecolor blue-text" href="#" title="Blue color">---</a></li>
                <li><a style="background: #cbebf7;color: #cbebf7" class="changecolor light-blue-text" href="#" title="light Blue color">---</a></li>
                <li><a style="background: #32374b;color: #32374b" class="changecolor oxford-text" href="#" title="Oxford color">---</a></li>
                <li><a style="background: #a1cf68;color: #a1cf68" class="changecolor green-text" href="#" title="Green color">---</a></li>
                <li><a style="background: #FF7619;color: #FF7619" class="changecolor orange-text" href="#" title="Orange color">---</a></li>
                <li><a style="background: #7300ab;color: #7300ab" class="changecolor purple-text" href="#" title="Purple color">---</a></li>
            </ul>
        </div>
        <a class="show-theme-options" href="#"><i class="fa fa-cog"></i></a>
    </div>


    <!--Scroll to top-->
    <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

    <!-- main jQuery -->
    <script src="{{ mix('js/main.js') }}"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- bx slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <!-- validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate-js/2.0.1/validate.min.js"></script>
    <!-- mixit up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <!-- fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js"></script>
    <!-- easing -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- circle progress -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    <!-- appear js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.4.1/jquery.appear.min.js"></script>
    <!-- count to -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
    <!-- isotope script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <!-- jQuery ui js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- thm custom script -->
    <script src="{{ mix('js/scripts.js') }}"></script>
    <script defer>
        (function ($) {

            $(function () {
                $('.owl-carousel', document).owlCarousel();
            });

            $(document).ready(function () {
                $(".changecolor").switchstylesheet({
                    seperator: "color"
                });
                $('.show-theme-options').click(function () {
                    $(this).parent().toggleClass('open');
                    return false;
                });
            });

            $(window).on("load", function () {
                $('.show-theme-options').delay(2000).trigger('click');
            });
            $(window).on('load', function () {
                $('.se-pre-con', document).fadeOut();
                new WOW().init();
            });
        })(jQuery);
    </script>
</body>

</html>
