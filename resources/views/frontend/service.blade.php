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
                        <h2>Service</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Service</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start service-section -->
    <section class="wpo-service-section-s2 section-padding pt-120" id="Service">
        <div class="container-fluid">
            <div class="wpo-section-title-s2">
                <span>Our Services</span>
                <h2>What We Offer For You</h2>
            </div>
            <div class="wpo-service-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="wpo-service-item wow fadeInUp" data-wow-duration="1000ms">
                            <div class="wpo-service-img">
                                <a href="{{url('/our-service/premium-matrimony-service')}}"><img src="{{asset('frontend/assets/images/service-single/premium- matrimony/1.jpg')}}" alt=""></a>
                            </div>
                            <div class="wpo-service-text">
                                <a href="{{url('/our-service/premium-matrimony-service')}}">Premium Matrimony Service</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="wpo-service-item wow fadeInUp" data-wow-duration="1200ms">
                            <div class="wpo-service-img">
                                <a href="{{url('/our-service/fastrack-matrimony-service')}}"><img src="{{asset('frontend/assets/images/service-single/fasttrack-matrimony/1.webp')}}" alt=""></a>
                            </div>
                            <div class="wpo-service-text">
                                <a href="{{url('/our-service/fastrack-matrimony-service')}}">Fasttrack Matrimony Service</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="wpo-service-item wow fadeInUp" data-wow-duration="1400ms">
                            <div class="wpo-service-img">
                                <a href="{{url('/our-service/personalized-matrimony-service')}}"><img src="{{asset('frontend/assets/images/service-single/personalized-matrimony/1.webp')}}" alt=""></a>
                            </div>
                            <div class="wpo-service-text">
                                <a href="{{url('/our-service/personalized-matrimony-service')}}">Personalized Matrimony Service</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="wpo-service-item wow fadeInUp" data-wow-duration="1600ms">
                            <div class="wpo-service-img">
                                <a href="{{url('/our-service/gold-matrimony-service')}}"><img src="{{asset('frontend/assets/images/service-single/gold-matrimony/1.webp')}}" alt=""></a>
                            </div>
                            <div class="wpo-service-text">
                                <a href="{{url('/our-service/gold-matrimony-service')}}">Gold Matrimony Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section><br><br>
    <!-- end Service-section -->

    <!-- start story-section -->
    <section class="wpo-story-section-s2 section-padding" id="story">
        <div class="container">
            <div class="wpo-section-title">
                <span>Our Story</span>
                <h2>How it Happened</h2>
            </div>
            <div class="wpo-story-wrap">
                <div class="wpo-story-item">
                    <div class="row">
                        <div class="col col-lg-6 col-12">
                            <div class="wpo-story-img">
                                <img src="{{asset('frontend/assets/images/service-single/premium- matrimony/1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col col-lg-6 col-12">
                            <div class="wpo-story-content wow flipInX" data-wow-duration="1000ms">
                                <a href="{{url('/our-service/premium-matrimony-service')}}"><h3>Premium Matrimony Service</h3></a><br>
                                <p>
                                    "Elevate your matrimonial journey with our Premium Service. Six months of personalized matchmaking, a dedicated Relationship Manager, and weekly profile recommendations await you."
                                </p><br>
                                <a href="{{url('/our-service/premium-matrimony-service')}}" class="read-more"><strong>READ MORE...</strong></a>
                                <div class="flower">
                                    <img src="{{asset('frontend/assets/images/story/flower.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ring-wrap">
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                    </div>
                </div>

                <div class="wpo-story-item">
                    <div class="row">
                        <div class="col col-lg-6 col-12 order-lg-2 order-1">
                            <div class="wpo-story-img">
                                <img src="{{asset('frontend/assets/images/service-single/fasttrack-matrimony/1.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="col col-lg-6 col-12">
                            <div class="wpo-story-content wow flipInX" data-wow-duration="1000ms">
                                <a href="{{url('/our-service/premium-matrimony-service')}}"><h3>Fasttrack Matrimony Service</h3></a><br>
                                <p>
                                    "Elevate your matrimonial journey with our Premium Service. Six months of personalized matchmaking, a dedicated Relationship Manager, and weekly profile recommendations await you."
                                </p><br>
                                <a href="{{url('/our-service/premium-matrimony-service')}}" class="read-more"><strong>READ MORE...</strong></a>
                                <div class="flower">
                                    <img src="{{asset('frontend/assets/images/story/flower.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ring-wrap">
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                    </div>
                </div>

                <div class="wpo-story-item">
                    <div class="row">
                        <div class="col col-lg-6 col-12">
                            <div class="wpo-story-img">
                                <img src="{{asset('frontend/assets/images/service-single/personalized-matrimony/1.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="col col-lg-6 col-12 order-lg-1 order-2">
                            <div class="wpo-story-content wow flipInX" data-wow-duration="1000ms">
                                <a href="{{url('/our-service/personalized-matrimony-service')}}"><h3>Personalized Matrimony Service</h3></a><br>
                                <p>
                                    "Experience Nimantaran's Personalized Matrimony – Four months of dedicated matchmaking, weekly profile recommendations, and expert Relationship Manager support."

                                </p><br>
                                <a href="{{url('/our-service/personalized-matrimony-service')}}" class="read-more"><strong>READ MORE...</strong></a>
                                <div class="flower">
                                    <img src="{{asset('frontend/assets/images/story/flower-2.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ring-wrap">
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                    </div>
                </div>

                <div class="wpo-story-item">
                    <div class="row">
                        <div class="col col-lg-6 col-12 order-lg-2 order-1">
                            <div class="wpo-story-img">
                                <img src="{{asset('frontend/assets/images/service-single/gold-matrimony/1.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="col col-lg-6 col-12 order-lg-1 order-2">
                            <div class="wpo-story-content wow flipInX" data-wow-duration="1000ms">
                                <a href="{{url('/our-service/gold-matrimony-service')}}"><h3>Gold Matrimony Service</h3></a><br>
                                <p>
                                    "Unlock a year of personalized matchmaking, Relationship Manager support, and weekly profile recommendations with Nimantaran's Gold Membership Plan."
                                </p><br>
                                <a href="{{url('/our-service/gold-matrimony-service')}}" class="read-more"><strong>READ MORE...</strong></a>
                                <div class="flower">
                                    <img src="{{asset('frontend/assets/images/story/flower-2.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ring-wrap">
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                        <div class="ring"><img src="{{asset('frontend/assets/images/story/ring.svg')}}" alt=""></div>
                    </div>
                </div>

            </div>
        </div> <!-- end container -->
        <div class="flower-shape-1">
            <img src="{{asset('frontend/assets/images/story/flower-shape1.svg')}}" alt="">
        </div>
        <div class="flower-shape-2">
            <img src="{{asset('frontend/assets/images/story/flower-shape2.svg')}}" alt="">
        </div>
        <div class="flower-shape-3">
            <img src="{{asset('frontend/assets/images/story/flower-shape3.svg')}}" alt="">
        </div>
        <div class="flower-shape-4">
            <img src="{{asset('frontend/assets/images/story/flower-shape4.svg')}}" alt="">
        </div>
    </section>
    <!-- end story-section -->

  <!-- start of wpo-contact-section -->
  <section class="wpo-contact-section-s3 section-padding  pt-120" id="rsvp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="wpo-contact-section-wrapper wow fadeInLeftSlow" data-wow-duration="1700ms">
                    <div class="wpo-contact-form-area">
                        <div class="wpo-section-title">
                            <h2>Are You Attending?</h2>
                        </div>
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Name">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email">
                            </div>

                            <div>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Phone No.">
                            </div>

                            <div class="fullwidth">
                                <textarea class="form-control" name="note" id="note"
                                    placeholder="Message..."></textarea>
                            </div>

                            <div class="submit-area">
                                <button type="submit" class="theme-btn">Submit</button>
                                <div id="c-loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="contact-img wow fadeInRightSlow" data-wow-duration="1700ms">
                    <div class="contact-img-left">
                        <img src="{{asset('frontend/assets/images/service-single/1.jpg')}}" alt="">
                        <img src="{{asset('frontend/assets/images/service-single/2.jpg')}}" alt="">
                    </div>
                    <div class="contact-img-right">
                        <img src="{{asset('frontend/assets/images/service-single/3.jpg')}}" alt="">
                        <img src="{{asset('frontend/assets/images/service-single/4.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- end of wpo-contact-section -->

@endsection