@extends('roofing.layout.master')

@section('style')
    <style>
      :root {
        --base-color: #c7062a;
      }  
    </style>
@endsection
@section('content')
    <section id="home" class="p-0 top-space-margin">
        <div class="swiper full-screen md-h-600px sm-h-500px swiper-number-pagination-style-01 magic-cursor drag-cursor"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-number", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'
            data-number-pagination="1">
            <div class="swiper-wrapper">
               
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/roofing/images/demo-roofing-slider-01.png') }}');">
                   
                </div>
                
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/roofing/images/demo-roofing-slider-02.png') }}');">
                   
                </div>
                
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/roofing/images/demo-roofing-slider-03.png') }}');">
                   
                </div>
                
            </div>
            
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 position-relative">
                        
                        <div
                            class="swiper-pagination left-0 text-start swiper-pagination-clickable swiper-number fs-14 alt-font ls-05px">
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 md-mb-50px position-relative"
                    data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <figure class="position-relative mb-0 overflow-hidden border-radius-6px">
                        <img src={{ asset('assets/roofing/images/demo-roofing-about.png') }} alt="" class="w-100">
                        
                    </figure>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6"
                    data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Online roofing marketplace</span>
                    <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none sm-w-85" data-shadow-animation="true"
                        data-animation-delay="700">Your Trusted  <span class="fw-700 text-highlight">Roofing Experts.<span
                                class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                    <p class="w-80 md-w-100">We provide top-quality roofing services for residential and commercial properties. Whether you need installation, repair, or maintenance, we’ve got you covered.</p>
                    <div class="mb-35px">
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08 mb-10px">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-base-color"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray">More than 15 years of experience.</span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-base-color"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray">Trusted by thousands of homeowners and businesses, our roofing solutions are built to last and ensure your safety and satisfaction.</span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                    <div class="d-inline-block">
                        <a href="#contact" class="btn btn-dark-gray btn-medium btn-round-edge me-25px">Contact US</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="ps-5 pt-2 pb-2 pe-5 lg-ps-2 lg-pe-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="image-gallery-style-02 gallery-wrapper grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large"
                        style="position: relative; height: 552.718px;">
                        <li class="grid-sizer"></li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 0px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/roofing/images/demo-roofing-gallery-01.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/roofing/images/demo-roofing-gallery-01.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 0px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/roofing/images/demo-roofing-gallery-02.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/roofing/images/demo-roofing-gallery-02.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/roofing/images/demo-roofing-gallery-03.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/roofing/images/demo-roofing-gallery-03.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/roofing/images/demo-roofing-gallery-04.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/roofing/images/demo-roofing-gallery-04.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 276.359px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/roofing/images/demo-roofing-gallery-05.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/roofing/images/demo-roofing-gallery-05.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 276.359px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/roofing/images/demo-roofing-gallery-06.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/roofing/images/demo-roofing-gallery-06.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 276.359px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/roofing/images/demo-roofing-gallery-07.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/roofing/images/demo-roofing-gallery-07.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 276.359px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/roofing/images/demo-roofing-gallery-08.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/roofing/images/demo-roofing-gallery-08.png') }} alt=""
                                                        data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services" style="padding-bottom: 0px">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-7">
                <div class="col-lg-5 md-mb-50px"
                    data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Why choose us our service</span>
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="700">Reliable and durable roofing solutions with <span
                            class="fw-700 text-highlight d-inline-block">expert craftsmanship<span
                                class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span>
                        details.</h3>
                    <div class="mt-50px mb-50px sm-mt-40px sm-mb-40px">
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08 mb-30px">
                            <div class="feature-box feature-box-left-icon overflow-hidden">
                                <div class="feature-box-icon">
                                    <img src={{ asset('assets/roofing/images/demo-roofing-services-01.png') }} class="w-80px" alt="">
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Most appreciated
                                        projects</span>
                                    <p class="w-80 lg-w-100">From residential homes to large commercial buildings, our completed projects showcase the quality and reliability of our roofing services. Explore our portfolio to see the difference we’ve made.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon overflow-hidden">
                                <div class="feature-box-icon">
                                    <img src={{ asset('assets/roofing/images/demo-roofing-services-02.png') }} class="w-80px" alt="">
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Long-Lasting Roofing Solutions</span>
                                    <p class="w-80 lg-w-100">We use premium materials to ensure your roof stands the test of time, providing lasting protection for your property while boosting its value.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                    <div class="d-inline-block">
                        <a href="#contact" class="btn btn-dark-gray btn-medium btn-round-edge me-15px xs-mb-10px">Contact
                            Us</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 position-relative"
                    data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <!-- start popup video -->
                    <figure class="position-relative mb-0 border-radius-6px overflow-hidden">
                        <img src={{ asset('assets/roofing/images/demo-roofing-services-03.png') }} class="w-100 border-radius-6px" alt="">
                        <a href="https://www.youtube.com/watch?v=UvYEXVfCScA"
                            class="absolute-middle-center text-center rounded-circle video-icon-box video-icon-large popup-vimeo">
                            <span>
                                <span class="video-icon bg-white">
                                    <i class="fa-solid fa-play text-dark-gray"></i>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr border border-color-white"></span>
                                    </span>
                                </span>
                            </span>
                        </a>

                    </figure>
                    <!-- end popup video -->
                </div>
            </div>

        </div>
    </section>

    <section class="position-relative overflow-hidden">
        <img src="images/demo-real-estate-07.png" alt=""
            class="position-absolute left-100px top-50px z-index-minus-1"
            data-bottom-top="transform: translate3d(80px, 0px, 0px);"
            data-top-bottom="transform: translate3d(-180px, 0px, 0px);" />
        <img src="images/demo-real-estate-08.png" alt=""
            class="position-absolute right-100px top-100px z-index-minus-1"
            data-bottom-top="transform:scale(1.4, 1.4) translate3d(0px, 0px, 0px);"
            data-top-bottom="transform:scale(1, 1) translate3d(-400px, 0px, 0px);" />
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-end md-mb-50px"
                    data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <figure class="position-relative m-0">
                        <img src={{ asset('assets/roofing/images/demo-roofing-testimonial.jpg') }} class="w-90 border-radius-6px" alt="">

                    </figure>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-10 text-center text-lg-start"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Clients feedback</span>
                    <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="700">Here is what our <span
                            class="fw-700 text-highlight d-inline-block">client's<span
                                class="bg-base-color h-10px bottom-4px opacity-3 separator-animation"></span></span> have
                        to say</h2>
                    <div class="swiper position-relative"
                        data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "fade" }'>
                        <div class="swiper-wrapper mb-40px">
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">Love the theme, really neat and super easy to use. But the
                                    customer support is what makes this an even greater theme! ThemeZaa solved all the
                                    problems. I had with my custom settings.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px"
                                        src={{ asset('assets/roofing/images/avtar-24.jpg') }} alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Alexander</span>
                                            harvard</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">I've purchased several themes over the years and this
                                    theme, by far is absolutely amazing. It's built extremely well the back end was well
                                    thought out the design options are endless.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px"
                                        src={{ asset('assets/roofing/images/avtar-25.jpg') }} alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Shoko</span>
                                            mugikura</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">The theme is very valid and offers many possibilities of
                                    customization to adapt it to your needs, but the thing I got the most out of it was the
                                    relationship with the support team.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px"
                                        src={{ asset('assets/roofing/images/avtar-26.jpg') }} alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Leonel</span>
                                            mooney</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                        </div>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <!-- start slider navigation -->
                            <div
                                class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray">
                                <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                            <div
                                class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray">
                                <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="big-section bg-gradient-very-light-gray">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-3 col-md-6 appear anime-complete"
                    data-anime="{ &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                    style="">
                    <div class="h-100 sm-h-500px xs-h-400px cover-background"
                        style="background-image: url('{{ asset('assets/roofing/images/demo-roofing-contact.png') }}')"></div>
                </div>
                <div class="col-lg-4 col-md-6 appear anime-complete"
                    data-anime="{ &quot;translateX&quot;: [15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                    style="">
                    <div class="p-18 lg-p-15 h-100" style="background-color: #c7062a">
                        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Keep in touch?</span>
                        <p class="text-white">9853 HAMLET LN S COTTAGE GROVE MN 55016 3898 USA</p>
                        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Toll free customer
                            care?</span>
                        <p><a href="tel:+1-(307)-204-0086" class="text-white">+1-(307)-204-0086</a></p>
                        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Need live
                            support?</span>
                        <a href="mailto:info@oveelabs.com" class="text-white d-block">info@oveelabs.com</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="pt-5 md-pt-45px contact-form-style-01 appear anime-complete"
                        data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                        style="">
                        <h4 class="d-inline-block fw-600 text-dark-gray ls-minus-1px mb-30px">How we can help?</h4>

                        <form action="email-templates/contact-form.php" method="post">
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                <input type="text" name="name" class="form-control required"
                                    placeholder="Your name*">
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control required"
                                    placeholder="Your email address*">
                            </div>
                            <div class="position-relative form-group form-textarea">
                                <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                <textarea placeholder="Your message" name="comment" class="form-control" rows="3"></textarea>
                               
                                <input type="hidden" name="redirect" value="">
                                <button
                                    class="btn btn-small btn-round-edge btn-dark-gray btn-box-shadow mt-20px m-auto submit"
                                    type="submit">Send message</button>
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5661.498854028235!2d-92.959768!3d44.806295!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f7cfddb42effd1%3A0xc8f4a00e9b8466f9!2s9853%20Hamlet%20Ln%20S%2C%20Cottage%20Grove%2C%20MN%2055016!5e0!3m2!1sen!2sus!4v1728542101752!5m2!1sen!2sus"  height="450" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
@endsection
