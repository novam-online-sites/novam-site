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
                        <a href="blog-details.html">
                            <single-image
                                id="{{ $id ?? 1 }}"
                                name="image"
                                edit="{{ request()->has('edit') }}"
                                api="{{ request()->url() }}">
                                {{ $Blog->image ?? "//placehold.it/480X360" }}
                            </single-image>
                        </a>
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
                        <wysiwyg-editor
                            id="{{ $id ?? 1 }}"
                            name="content"
                            edit="{{ request()->has('edit') }}"
                            api="{{ request()->url() }}">
                            {!! $Blog->content !!}
                        </wysiwyg-editor>
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
@endsection
