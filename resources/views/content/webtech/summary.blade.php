<div class="container">
{{--  <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
    <span class="double-line"></span> &ensp;
    <h2>Technologies </h2> &ensp; <span class="double-line"></span>
    <p>__('We use the best technologies to build the best web tools for your business')</p>
</div>  --}}
<div class="sec-content" data-editor="html-container">
    <!-- Row -->
    <div class="row">
        @if(isset($odd) && $odd)
            <div class="col-md-6 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img alt="Case" class="img-Yoga" src="{{ $image ?? asset('images/web-app-tech.png') }}">
            </div>
        @endif
        <!-- Column -->
        <div class="col-md-6 wow zoomIn" data-wow-delay="200ms" data-wow-duration="1500ms">
            <!-- Title -->
            <div class="about title-container text-left sm">
                <div class="title-wrap">
                    <h3 class="text-dark mt-0 pb-20 text-uppercase font-weight-700 double-line-bottom font-weight-700">
                        {{ $heading ?? 'best web technologies for yourbusiness' }}
                    </h3>
                    <span class="separator line-separator"></span>
                </div>
                {!! $content ?? '' !!}
            </div>
            <!-- Title -->
            <p><a class="mt-20 btn thm-btn inverse" href="about.html">Read More</a></p>
        </div>
        <!-- Column -->
        @if(!isset($odd) || !$odd)
         <div class="col-md-6 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img alt="Case" class="img-Yoga" src="{{ $image ?? asset('images/web-app-tech.png') }}">
        </div>
        @endif
    </div>
    <!-- Row -->
</div>
</div>

