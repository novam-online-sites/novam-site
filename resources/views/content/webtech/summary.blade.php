<div class="container">
{{--  <div class="sec-title text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
    <span class="double-line"></span> &ensp;
    <h2>Technologies </h2> &ensp; <span class="double-line"></span>
    <p>__('We use the best technologies to build the best web tools for your business')</p>
</div>  --}}
<div class="sec-content">
    <!-- Row -->
    <div class="row">
        @empty($odd)
            <div class="col-md-6 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img alt="Case" class="img-Yoga" src="{{ asset('images/web-app-tech.png') }}">
        </div>
        @endempty
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
                <p>We don't just build websites and web applications for today's needs, we prepare you for the future.
                    We use the best of the latest technologies to make sure you stay ahead</p>
                <p>Have you ever built a site that becomes outdated, and updating it require you start from scratch?</p>
                <p>Have you ever wanted to add a few new features or update some portions of your site but you were
                    told you would have to start from scratch?</p>
            </div>
            <!-- Title -->
            <p><a class="mt-20 btn thm-btn inverse" href="about.html">Read More</a></p>
        </div>
        <!-- Column -->
        @isset($odd)
         <div class="col-md-6 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img alt="Case" class="img-Yoga" src="{{ asset('images/web-app-tech.png') }}">
        </div>
        @endisset
    </div>
    <!-- Row -->
</div>
</div>

