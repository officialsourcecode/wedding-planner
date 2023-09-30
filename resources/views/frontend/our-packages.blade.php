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
                        <h2>Our Package</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Our Package</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->
    
    <!-- start wpo-pricing-section -->
    <section class="wpo-pricing-section section-padding">
        <div class="container">
            <div class="wpo-section-title">
                <span>Best Pricing</span>
                <h2>Choose Your Packages</h2>
            </div>
            <div class="wpo-pricing-wrap">
                <div class="row justify-content-center">
                    <div class="col col-lg-3 col-md-3 col-12 package-section">
                        <div class="wpo-pricing-item">
                            <div class="wpo-pricing-item-inner">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-text">
                                        <h4>Feedback Management Package</h4>
                                        <h2><small>₹</small>15,000<span>3 Month</span></h2>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul><br>
                                            <li> - Non-Personalized Matchmaking</li>
                                            <li> - Non-Personalized</li>
                                            <li> - Service for 3 Months</li>
                                        </ul>
                                        <a class="theme-btn" href="{{url('/contact-us')}}">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-3 col-12 package-section">
                        <div class="wpo-pricing-item">
                            <div class="wpo-pricing-item-inner">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-text">
                                        <h4>Premium Package</h4>
                                        <h2><small>₹</small>31,000<span>6 Monthly</span></h2>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li> - Personalized Matchmaking.</li>
                                            <li> - Dedicated Relationship Manager</li>
                                            <li> - Weekly profile shortlisting</li>
                                            <li> - Prospect communication</li>
                                        </ul>
                                        <a class="theme-btn" href="{{url('/contact-us')}}">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col col-lg-3 col-md-3 col-12 package-section">
                        <div class="wpo-pricing-item">
                            <div class="wpo-pricing-item-inner">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-text">
                                        <h4>Gold Package</h4>
                                        <h2><small>₹</small>51,000<span>1 year</span></h2>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li> - Personalized Matchmaking</li>
                                            <li> - Dedicated Relationship Manager</li>
                                            <li> - Weekly Profile Shortlisting</li>
                                            <li> - Prospect Communication</li>
                                            <li> - Feedback Management</li>
                                            <li> - Extended Membership for a year</li>
                                        </ul>
                                        <a class="theme-btn" href="{{url('/contact-us')}}">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-3 col-12 package-section">
                        <div class="wpo-pricing-item">
                            <div class="wpo-pricing-item-inner">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-text">
                                        <h4>Fastrack Package</h4>
                                        <h2><small>₹</small>71,000<span>Till Marry</span></h2>
                                    </div>
                                </div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li><strong>Services Included</strong></li>
                                            <li> - Personalized matchmaking</li>
                                            <li> - Dedicated Relationship Manager</li>
                                            <li> - Weekly profile shortlisting</li>
                                            <li> - Prospect communication</li>
                                            <li> - Feedback management</li> 
                                        </ul><br>
                                        <a class="theme-btn" href="{{url('/contact-us')}}">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="shape-1"><img src="{{asset('frontend/assets/images/pricing/shape-1.svg')}}" alt=""></div>
                            <div class="shape-2"><img src="{{asset('frontend/assets/images/pricing/shape-2.svg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-shape"><img src="{{asset('frontend/assets/images/pricing/shape-3.svg')}}" alt=""></div>
        <div class="right-shape"><img src="{{asset('frontend/assets/images/pricing/shape-4.svg')}}" alt=""></div>
    </section>
    <!-- start wpo-pricing-section -->
@endsection