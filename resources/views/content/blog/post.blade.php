@extends('layouts.main')
@section('content')
<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>Blog</h2>
                <ul class="breadcumb">
                    <li><a href="index1.html">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><span>Blog</span></li>
                </ul>
                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>
    </div>
</section>

<div class="blog-section sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 featured-blog-post pull-left">
                <article class="inner-box pb-30">
                    <figure class="image">
                        <a href="blog-details.html"><img src="//placehold.it/480X360" alt=""></a>
                    </figure>
                    <div class="post-lower">
                        <div class="post-header">
                            <div class="date"><span class="day">18</span>
                                <br>APR</div>
                            <h2 class="title"><a href="blog-details.html">Blog post with image</a></h2>
                            <ul class="post-info fs-13 pl-0">
                                <li><span class="icon fa fa-user"></span> <a href="#">Jonathan Doe</a></li>
                                <li><span class="icon fa fa-tag pl-5"></span> <a href="#">Yoga Trainer</a></li>
                            </ul>
                        </div>
                        <div class="content pt-20">
                            <p>Lorem ipsum dolor sit amet, his ea unum ponderum, detracto ponderum an vim. Equidem
                                evertitur vel ea, has ad inermis principes. Mentitum appareat conceptam id quo. Vis
                                evertitur referrentur ad, no laoreet consetetur reformidans pro, sit habeo omnes eu.
                            </p>
                            <br>
                            <p> Iisque quaeque propriae has no. Modo blandit tincidunt ne eos, diam periculis
                                disputationi usu cu. Ea eos suscipit expetendis. Vix ea quot modus, id novum vocibus
                                pro. Nec autem ullum albucius no, vel ne tritani omnesque omittantur. Pro fierent
                                hendrerit assueverit et, per quod luptatum comprehensam in.</p>
                            <br>
                            <p> No consulatu comprehensam nam. Ferri dolore sententiae te eum, nibh dictas definitiones
                                mea ei. Nec cu augue dicunt, est id verear labitur necessitatibus. Salutandi quaerendum
                                ex nec.</p>
                            <br>
                            <p> Cu quo audire apeirian. Dolore necessitatibus sea id, nihil mandamus an ius, per
                                recusabo interesset reprehendunt ea. In vix autem vituperatoribus, mei sint ipsum
                                dolorem ex, quodsi vitupera</p>
                            <div class="bottom-box clearfix mt-30">
                                <span class="pull-left">Tag: <a class="text-thm" href="#">Exercise, Workout</a></span>
                                <ul class="pull-right share">
                                    <li><span>Share: </span></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="media border-bottom pb-60">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="//placehold.it/64X64" alt="admin.jpg">
                        </a>
                    </div>
                    <div class="media-body pl-30">
                        <h3 class="text-dark mt-0">Div jaan</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s,</p>
                        <ul class="social pl-0">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                @include('content.blog.comment')
            </div>
            <div class="col-md-4 pull-right">
                @include('content.blog.sidebar')
            </div>
        </div>
    </div>
</div>

{{--  <div class="p-40" data-bg-color="#eee">
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
</div>  --}}
@endsection
