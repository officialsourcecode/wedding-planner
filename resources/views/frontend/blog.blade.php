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
                        <h2>Our Latest Blog</h2>
                        <ol class="wpo-breadcumb-wrap">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Blog</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{asset('frontend/assets/images/blog/details-1.webp')}}" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By Nimantaran Matrimony </li>
                                    <li><i class="fi flaticon-calendar-1"></i> 15 Aug 2023</li>
                                </ul>
                            </div>
                            <div class="entry-details">
                                <h3>
                                    <a href="{{url('/blog/blog-details')}}">Nimantaran Matrimony: The Essence of Bonding Hearts</a>
                                </h3>
                                <p>
                                    In a world filled with ever-changing trends and evolving relationship dynamics, finding a life partner who truly understands and complements your values and aspirations is nothing short of a blessing. At Nimantaran Matrimony, we recognize the significance of this sacred journey and are committed to helping you embark on it with grace, dignity, and the promise of lasting happiness..........
                                </p>
                                <a href="{{url('/blog/blog-details')}}" class="read-more"><strong>READ MORE...</strong></a>
                            </div>
                        </div>

                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{asset('frontend/assets/images/blog/details-2.webp')}}" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By Nimantaran Matrimony </li>
                                    <li><i class="fi flaticon-calendar-1"></i> 23 Aug 2023</li>
                                </ul>
                            </div>
                            <div class="entry-details">
                                <h3>
                                    <a href="{{url('/blog/blog-details-2')}}">Nimantaran Matrimony's Guide to a Blissful Marriage.</a>
                                </h3>
                                <p>
                                    Nimantaran Matrimony was established on the bedrock of trust and reliability. It recognizes that marriage is not merely a union of two individuals but a fusion of families, values, and cultures. With this understanding, it places the utmost importance on verifying and validating the profiles of its members. This meticulous screening process ensures that members can trust........
                                </p>
                                <a href="{{url('/blog/blog-details-2')}}" class="read-more"><strong>READ MORE...</strong></a>
                            </div>
                        </div>

                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{asset('frontend/assets/images/blog/details-3.webp')}}" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By Nimantaran Matrimony </li>
                                    <li><i class="fi flaticon-calendar-1"></i> 03 AUG 2023</li>
                                </ul>
                            </div>
                            <div class="entry-details">
                                <h3>
                                    <a href="{{url('/blog/blog-details-3')}}">Nimantaran Matrimony: Your Partner in the Quest for a Perfect Match</a>
                                </h3>
                                <p>
                                    Finding the right life partner is a significant journey in one's life, filled with excitement and hope. At Nimantaran Matrimony, we understand the significance of this quest and are dedicated to being your trusted partner in this heartwarming journey of discovering your perfect match.............
                                </p>
                                <a href="{{url('/blog/blog-details-3')}}" class="read-more"><strong>READ MORE...</strong></a>
                            </div>
                        </div>

                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{asset('frontend/assets/images/blog/details-4.webp')}}" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By Nimantaran Matrimony </li>
                                    <li><i class="fi flaticon-calendar-1"></i> 24 JULY 2023</li>
                                </ul>
                            </div>
                            <div class="entry-details">
                                <h3>
                                    <a href="{{url('/blog/blog-details-4')}}">"Nimantaran Matrimony: Pioneering the Path to Your Happily Ever After"</a>
                                </h3>
                                <p>
                                    In the grand tapestry of life, the search for a life partner is one of the most profound and transformative journeys. It's a quest for not just a companion but a soulmate who shares your dreams, values, and aspirations. Nimantaran Matrimony stands as a steadfast partner in your quest for a perfect match, dedicated to crafting enduring love stories........
                                </p>
                                <a href="{{url('/blog/blog-details-4')}}" class="read-more"><strong>READ MORE...</strong></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget about-widget">
                            <div class="img-holder">
                                <img src="{{asset('frontend/assets/images/logo/owner.png')}}" alt>
                            </div>
                            <h4>Nimantaran Matrimony</h4>
                            <p>Hi! beautiful people. I`m an authtor of this blog. Read our post - stay with us</p>
                            <div class="social">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/Nimantaran" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="aw-shape">
                                <img src="{{asset('frontend/assets/images/blog/ab.png')}}" alt="">
                            </div>
                        </div>
                        <div class="widget category-widget">
                            <h3>Our Services</h3>
                            <ul>
                                <li>
                                    <a href="{{url('/our-service/premium-matrimony-service')}}"><strong>Premium Matrimony Service</strong></a>
                                </li>
    
                                <li>
                                    <a href="{{url('/our-service/fastrack-matrimony-service')}}"><strong>Fasttrack Matrimony Service</strong></a>
                                </li>
    
                                <li>
                                    <a href="{{url('/our-service/personalized-matrimony-service')}}"><strong>Personalized Matrimony Service</strong></a>
                                </li>
    
                                <li>
                                    <a href="{{url('/our-service/gold-matrimony-service')}}"><strong>Gold Matrimony Service</strong></a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget tag-widget">
                            <h3>Tags</h3>
                            <ul>
                                <li><a>photography</a></li>
                                <li><a>Planning</a></li>
                                <li><a>wedding</a></li>
                                <li><a>events</a></li>
                                <li><a>creative</a></li>
                                <li><a>Solution</a></li>
                                <li><a>collection</a></li>
                                <li><a>Idea</a></li>
                                <li><a>bride & groom</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->

@endsection