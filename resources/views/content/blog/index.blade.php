@extends("layouts.main")
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
<section class="blog-section sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 featured-blog-post pull-left">
                <div class="row">
                    <div class="col-sm-6">
                        <article class="inner-box  pb-30">
                            <figure class="image">
                                <a href="/blog/1"><img src="https://picsum.photos/300/200?image=1" alt=""></a>
                            </figure>
                            <div class="post-lower">
                                <div class="post-header">
                                    <div class="date"><span class="day">18</span>
                                        <br>APR</div>
                                    <h3 class="title"><a href="/blog/1">Digital Photography</a></h3>
                                    <ul class="post-info fs-13 pl-0">
                                        <li><span class="icon fa fa-user"></span> <a href="#">Jonathan Doe</a></li>
                                        <li><span class="icon fa fa-tag pl-5"></span> <a href="#">CEO Village</a></li>
                                    </ul>
                                </div>
                                <div class="post-desc">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                    <div class="text-right">
                                        <a href="/blog/1" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6">
                        <article class="inner-box pb-30">
                            <figure class="image">
                                <a href="/blog/1"><img src="https://picsum.photos/300/200?image=2" alt=""></a>
                            </figure>
                            <div class="post-lower">
                                <div class="post-header">
                                    <div class="date"><span class="day">15</span>
                                        <br>APR</div>
                                    <h3 class="title"><a href="/blog/1">Outsourcing Tips</a></h3>
                                    <ul class="post-info fs-13 pl-0">
                                        <li><span class="icon fa fa-user"></span> <a href="#">Jonathan Doe</a></li>
                                        <li><span class="icon fa fa-tag pl-5"></span> <a href="#">CEO Village</a></li>
                                    </ul>
                                </div>
                                <div class="post-desc">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                    <div class="text-right">
                                        <a href="/blog/1" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6">
                        <article class="inner-box pb-30">
                            <figure class="image">
                                <a href="/blog/1"><img src="https://picsum.photos/300/200?image=3" alt=""></a>
                            </figure>
                            <div class="post-lower">
                                <div class="post-header">
                                    <div class="date"><span class="day">09</span>
                                        <br>APR</div>
                                    <h3 class="title"><a href="/blog/1">Digital Marketing</a></h3>
                                    <ul class="post-info fs-13 pl-0">
                                        <li><span class="icon fa fa-user"></span> <a href="#">Jonathan Doe</a></li>
                                        <li><span class="icon fa fa-tag pl-5"></span> <a href="#">CEO Village</a></li>
                                    </ul>
                                </div>
                                <div class="post-desc">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                    <div class="text-right">
                                        <a href="/blog/1" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6">
                        <article class="inner-box pb-30">
                            <figure class="image">
                                <a href="/blog/1"><img src="https://picsum.photos/300/200?image=4" alt=""></a>
                            </figure>
                            <div class="post-lower">
                                <div class="post-header">
                                    <div class="date"><span class="day">09</span>
                                        <br>APR</div>
                                    <h3 class="title"><a href="/blog/1">Blog post with image</a></h3>
                                    <ul class="post-info fs-13 pl-0">
                                        <li><span class="icon fa fa-user"></span> <a href="#">Jonathan Doe</a></li>
                                        <li><span class="icon fa fa-tag pl-5"></span> <a href="#">CEO Village</a></li>
                                    </ul>
                                </div>
                                <div class="post-desc">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam era...</p>
                                    <div class="text-right">
                                        <a href="/blog/1" class="text-thm fs-14">Read more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <!--Pagination-->
                <div class="pager-outer clearfix mt_30 mb_0">
                    <ul class="pagination mb_0">
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">-</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 pull-right">
                @include('content.blog.sidebar')
                {{-- <div class="side-bar-widget">
                    <div class="single-sidebar-widget search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="single-sidebar-widget category">
                        <h3 class="title">Catagories</h3>
                        <ul>
                            <li><a href="#">Gym</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Fitness</a></li>
                            <li><a href="#">yoga</a></li>
                        </ul>
                    </div>
                    <div class="single-sidebar-widget popular-post">
                        <h3 class="title">Popular Posts</h3>
                        <ul>
                            <li>
                                <div class="img-box">
                                    <div class="inner-box">
                                        <img src="images/blog-page/s1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="content-box">
                                    <a href="#">
                                        <h4>Lorem Ipsum is simply dumm textand somthing more here</h4>
                                    </a>
                                    <span>17 jun, 2015</span>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <div class="inner-box">
                                        <img src="images/blog-page/s2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="content-box">
                                    <a href="#">
                                        <h4>Lorem Ipsum is simply dumm textand somthing more here</h4>
                                    </a>
                                    <span>17 jun, 2015</span>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <div class="inner-box">
                                        <img src="images/blog-page/s3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="content-box">
                                    <a href="#">
                                        <h4>Lorem Ipsum is simply dumm textand somthing more here</h4>
                                    </a>
                                    <span>17 jun, 2015</span>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <div class="inner-box">
                                        <img src="images/blog-page/s4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="content-box">
                                    <a href="#">
                                        <h4>Lorem Ipsum is simply dumm textand somthing more here</h4>
                                    </a>
                                    <span>17 jun, 2015</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="single-sidebar-widget category">
                        <h3 class="title">Twitter Feed</h3>
                        <div class="twitter" data-twitter-query-count="1" data-twitter-name="envato" data-slide-count="2"
                            data-enable-slide="false">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection
