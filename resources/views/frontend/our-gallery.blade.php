@extends('frontend.layouts.main')

@section('main-container')

    <head>
        <meta charset="UTF-8">
        <meta name="title" content="Nimantaran Matrimony - Wedding & Wedding Planner">
        <meta name="description" content="Nimantaran Matrimony - Wedding & Wedding Planner">
        <meta name="keywords" content="Nimantaran Matrimony - Wedding & Wedding Planner, Nimantaran Matrimony, ">
        <meta name="author" content="Nimantaran Matrimony">
    </head>

    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Gallery</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Gallery</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->
    <!-- start wpo-portfolio-section -->
    <section class="wpo-portfolio-section-s2 section-padding pt-120" id="gallery">
        <h2 class="hidden">some</h2>
        <div class="container-fluid">
            <div class="wpo-section-title">
                <span>Our Gallery</span>
                <h2>Our Latest Wedding Gallery</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sortable-gallery">
                        <div class="gallery-filters"></div>
                        <div class="portfolio-grids gallery-container clearfix">
                            <div class="grid">
                                <div>
                                    <a href="{{asset('frontend/assets/images/portfolio/7.webp')}}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{asset('frontend/assets/images/portfolio/7.webp')}}" alt class="img img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div>
                                    <a href="{{asset('frontend/assets/images/portfolio/8.webp')}}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{asset('frontend/assets/images/portfolio/8.webp')}}" alt class="img img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div>
                                    <a href="{{asset('frontend/assets/images/portfolio/9.webp')}}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{asset('frontend/assets/images/portfolio/9.webp')}}" alt class="img img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div>
                                    <a href="{{asset('frontend/assets/images/portfolio/10.webp')}}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{asset('frontend/assets/images/portfolio/10.webp')}}" alt class="img img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div>
                                    <a href="{{asset('frontend/assets/images/portfolio/11.webp')}}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{asset('frontend/assets/images/portfolio/11.webp')}}" alt class="img img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-portfolio-section -->

@endsection