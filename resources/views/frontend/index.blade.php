@extends('frontend.layouts.main')

@section('main-container')      
        
    <!-- start of hero -->
    <section class="static-hero-s7">
        <div class="hero-container">
            <div class="hero-inner">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col col-xl-4 col-lg-4 col-12">
                            <div class="wpo-static-hero-inner">
                                <div class="slide-sub-title wow fadeInUp" data-wow-duration="1500ms">
                                    <span>Nimantaran Matrimony</span>
                                </div>
                                <div class="slide-title wow fadeInUp wpo-section-title" data-wow-duration="1500ms">
                                    <h2>Making Your Dream Long Lasting.</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text wow fadeInUp"
                                    data-wow-duration="1600ms">
                                    <p>Best wishes to your big day of life. Congratulation its your wedding time. We
                                        are happy to see you here. We must want that your dreamy wedding will made
                                        with us.</p>
                                </div>
                                <div class="shape wow fadeInUp" data-wow-duration="1400ms">
                                    <a href="{{url('/contact-us')}}" class="theme-btn-s2">Book An Appointment</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col col-xl-8 col-lg-8 col-12">
                            <div class="wpo-hero-img-wrap">
                                <div class="wpo-hero-img-item">
                                    <div class="wpo-hero-img">
                                        <img src="{{asset('frontend/assets/images/slider/hero-7.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="wpo-hero-img-item">
                                    <div class="wpo-hero-img">
                                        <img src="{{asset('frontend/assets/images/slider/hero-8.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="wpo-hero-img-topper">
                                    <div class="wpo-hero-img-topper-inner">
                                        <span>
                                            <img src="{{asset('frontend/assets/images/slider/vector.svg')}}" alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-vector">
            <img src="{{asset('frontend/assets/images/slider/shape-vector.png')}}" alt="">
        </div>
    </section>
    <!-- end of hero slider -->

    <!-- start couple-section -->
    <section class="wpo-couple-section-s2 section-padding" id="couple">
        <div class="container-fluid">
            <div class="couple-area clearfix">
                <div class="row align-items-center">
                    <div class="col col-md-12 col-12">
                        <div class="couple-item-wrap pointparallax">
                            <div class="couple-img-wrap">
                                <div class="couple-common point__item" data-position="left-top" data-point="middle"
                                    data-path="280">
                                    <div class="couple-img">
                                        <img src="{{asset('frontend/assets/images/couple/bride.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="couple-common point__item" data-position="right" data-point="middle"
                                    data-path="280">
                                    <div class="couple-img">
                                        <img src="{{asset('frontend/assets/images/couple/groom.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="couple-common couple-text-wrap">
                                <div class="couple-text-l-item">
                                    <div class="couple-text-bg point__item top" data-position="center-top"
                                        data-point="left" data-path="280">
                                        <svg class="shape-bg" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 667 413" fill="none">
                                            <path
                                                d="M666.082 212.859C663.967 197.547 655.652 181.032 639.387 163.277C611.196 132.471 572.902 114.388 538.985 92.1488C479.066 52.8841 411.743 4.50513 339.423 0.968758C247.811 -3.51551 167.797 56.4934 90.7001 101.19C56.2727 121.096 -3.09998 147.382 0.838745 199.188C2.55282 221.646 18.016 239.801 33.1874 255.369C86.1049 309.727 143.362 364.668 211.779 395.22C305.908 437.218 403.975 392.157 491.867 353.913C542.669 331.82 677.424 294.232 666.082 212.859Z"
                                                fill="" />
                                        </svg>
                                        <div class="outer-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 669 424"
                                                fill="none">
                                                <path
                                                    d="M291.648 424C273.96 424 255.689 421.703 236.761 416.526C175.383 399.829 119.475 365.85 72.9029 334.825C69.4018 332.492 65.7548 330.159 62.0349 327.752C42.4872 315.211 20.3136 300.993 8.31507 280.175C-3.68345 259.395 -2.6623 234.166 11.1232 210.979C23.3406 190.49 42.3778 174.266 57.6586 161.215C75.784 145.757 92.9248 130.189 111.853 112.909C148.942 79.0397 190.992 40.65 241.83 17.9735C292.013 -4.37495 347.483 -5.94262 411.305 13.1611C440.846 22.0202 469.766 33.8324 497.738 45.2801L498.832 45.7176C511.196 50.7852 523.96 55.4517 536.323 60.0089C553.099 66.1702 570.495 72.5502 587.126 79.9511C588.949 80.7532 589.788 82.9406 588.986 84.7635C588.183 86.6228 586.031 87.4249 584.172 86.6228C567.76 79.2949 550.51 72.9877 533.807 66.8629C521.371 62.3057 508.533 57.6027 496.061 52.4986L494.967 52.0612C467.14 40.6864 438.402 28.9107 409.19 20.1609C347.082 1.56762 293.326 3.02591 244.785 24.6452C195.003 46.8113 153.428 84.7999 116.739 118.304C98.4681 135.002 80.5615 151.262 62.3632 166.756C47.4835 179.443 28.9569 195.23 17.3596 214.698C4.95986 235.515 3.93871 258.046 14.6243 276.493C25.7476 295.743 46.2071 308.867 65.9737 321.591C69.6936 323.997 73.377 326.367 76.951 328.7C123.049 359.397 178.3 393.011 238.694 409.417C337.418 436.286 418.563 382.438 497.009 330.377C507.512 323.414 518.38 316.195 529.066 309.341C533.734 306.352 538.949 303.107 544.492 299.644C596.972 266.978 684.791 212.365 655.907 146.048C651.604 136.168 644.164 126.507 633.807 117.284C632.311 115.935 632.166 113.638 633.515 112.143C634.864 110.648 637.162 110.502 638.657 111.851C649.817 121.768 657.877 132.304 662.581 143.132C693.982 215.208 602.807 271.936 548.358 305.841C542.815 309.268 537.673 312.513 533.005 315.503C522.355 322.32 511.524 329.539 501.057 336.502C436.032 379.668 369.256 424 291.648 424Z"
                                                    fill="" />
                                            </svg>
                                        </div>
                                        <div class="couple-text">
                                            <h3>Mayuri Mishra</h3>
                                            <p>
                                                The quality of profiles on Nimantaran Matrimony is exceptional, and I was able to connect with someone who not only shared my interests but also understood my values and dreams. We started chatting, and our connection grew stronger with each conversation.
                                            </p>
                                        </div>
                                        <div class="round-shape">
                                            <div class="inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="couple-text-r-item">
                                    <div class="couple-text-bg point__item" data-position="left-bottom"
                                        data-point="right-bottom" data-path="280">
                                        <svg class="shape-bg" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 667 413" fill="none">
                                            <path
                                                d="M666.082 212.859C663.967 197.547 655.652 181.032 639.387 163.277C611.196 132.471 572.902 114.388 538.985 92.1488C479.066 52.8841 411.743 4.50513 339.423 0.968758C247.811 -3.51551 167.797 56.4934 90.7001 101.19C56.2727 121.096 -3.09998 147.382 0.838745 199.188C2.55282 221.646 18.016 239.801 33.1874 255.369C86.1049 309.727 143.362 364.668 211.779 395.22C305.908 437.218 403.975 392.157 491.867 353.913C542.669 331.82 677.424 294.232 666.082 212.859Z"
                                                fill="" />
                                        </svg>
                                        <div class="outer-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 669 424"
                                                fill="none">
                                                <path
                                                    d="M291.648 424C273.96 424 255.689 421.703 236.761 416.526C175.383 399.829 119.475 365.85 72.9029 334.825C69.4018 332.492 65.7548 330.159 62.0349 327.752C42.4872 315.211 20.3136 300.993 8.31507 280.175C-3.68345 259.395 -2.6623 234.166 11.1232 210.979C23.3406 190.49 42.3778 174.266 57.6586 161.215C75.784 145.757 92.9248 130.189 111.853 112.909C148.942 79.0397 190.992 40.65 241.83 17.9735C292.013 -4.37495 347.483 -5.94262 411.305 13.1611C440.846 22.0202 469.766 33.8324 497.738 45.2801L498.832 45.7176C511.196 50.7852 523.96 55.4517 536.323 60.0089C553.099 66.1702 570.495 72.5502 587.126 79.9511C588.949 80.7532 589.788 82.9406 588.986 84.7635C588.183 86.6228 586.031 87.4249 584.172 86.6228C567.76 79.2949 550.51 72.9877 533.807 66.8629C521.371 62.3057 508.533 57.6027 496.061 52.4986L494.967 52.0612C467.14 40.6864 438.402 28.9107 409.19 20.1609C347.082 1.56762 293.326 3.02591 244.785 24.6452C195.003 46.8113 153.428 84.7999 116.739 118.304C98.4681 135.002 80.5615 151.262 62.3632 166.756C47.4835 179.443 28.9569 195.23 17.3596 214.698C4.95986 235.515 3.93871 258.046 14.6243 276.493C25.7476 295.743 46.2071 308.867 65.9737 321.591C69.6936 323.997 73.377 326.367 76.951 328.7C123.049 359.397 178.3 393.011 238.694 409.417C337.418 436.286 418.563 382.438 497.009 330.377C507.512 323.414 518.38 316.195 529.066 309.341C533.734 306.352 538.949 303.107 544.492 299.644C596.972 266.978 684.791 212.365 655.907 146.048C651.604 136.168 644.164 126.507 633.807 117.284C632.311 115.935 632.166 113.638 633.515 112.143C634.864 110.648 637.162 110.502 638.657 111.851C649.817 121.768 657.877 132.304 662.581 143.132C693.982 215.208 602.807 271.936 548.358 305.841C542.815 309.268 537.673 312.513 533.005 315.503C522.355 322.32 511.524 329.539 501.057 336.502C436.032 379.668 369.256 424 291.648 424Z"
                                                    fill="" />
                                            </svg>
                                        </div>
                                        <div class="couple-text">
                                            <h3>Rajeev Mishra</h3>
                                            <p>
                                                I would like to thank the entire Nimantaran Matrimony team for their outstanding support and services. You have made a significant difference in my life, and I will be forever grateful for helping me find my soulmate.
                                            </p>
                                        </div>
                                        <div class="round-shape">
                                            <div class="inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
        <div class="left-shape">
            <img src="{{asset('frontend/assets/images/couple/left.svg')}}" alt="">
        </div>
        <div class="right-shape">
            <img src="{{asset('frontend/assets/images/couple/right.svg')}}" alt="">
        </div>
    </section>
    <!-- end couple-section -->

    <!-- start who we section -->
    <section class="wpo-about-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                    <div class="wpo-section-title">
                        <span>Who We Are?</span>
                        <h2>We are The World Best Wedding Agency</h2>
                    </div>
                </div>
            </div>
            <div class="wpo-about-wrap">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-text wow fadeInLeftSlow" data-wow-duration="1000ms">
                            <p>
                                <small>N</small>imantaran <small>M</small>atrimony is your trusted partner in the sacred journey of matrimony. We understand that marriage is a moment of commitment, hope, and happiness. As parents, choosing the perfect life partner for your child is a significant responsibility. Nimantaran Matrimony was created to make this fulfilling journey more joyous than stressful for caring parents like you.
                            </p>
                            <p>
                                Our unique offline matrimonial service allows you to search for the ideal match for your child from anywhere in India or the world, all from the comfort of your city. You don't need computer skills; simply visit your nearest Nimantaran Matrimony matrimonial service center, where our well-trained staff will guide you. 
                            </p>
                            <p>
                                Trust Nimantaran Matrimony, the world's largest chain of matrimonial service centers, to assist you in finding the perfect match with the help of our highly involved Relationship Managers.

                            </p>
                            <div class="shape wow fadeInUp" data-wow-duration="1400ms">
                                <a href="#" class="theme-btn-s2">Download Broture</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-img wow fadeInRightSlow" data-wow-duration="1000ms">
                            <div class="about-right-img">
                                <img src="{{asset('frontend/assets/images/about/img-2.jpg')}}" alt="">

                                <div class="about-right-img-inner">
                                    <img src="{{asset('frontend/assets/images/about/img-1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end who we section -->

    <!-- start number done -->
    <section class="wpo-fun-fact-section section-padding ">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12 justify-content-center">
                    <div class="wpo-fun-fact-grids clearfix">
                        <div class="grid">
                            <div class="info">
                                <div class="flower"><img src="{{asset('frontend/assets/images/funfact/1.svg')}}" alt=""></div>
                                <h3><span class="odometer" data-count="1000">00</span>+</h3>
                                <p>Happy Couples</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <div class="flower"><img src="{{asset('frontend/assets/images/funfact/2.svg')}}" alt=""></div>
                                <h3><span class="odometer" data-count="1000">00</span>+</h3>
                                <p>Location</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <div class="flower"><img src="{{asset('frontend/assets/images/funfact/3.svg')}}" alt=""></div>
                                <h3><span class="odometer" data-count="1000">00</span>+</h3>
                                <p>Wedding</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end number done -->

    <!-- start service-section -->
    <section class="wpo-service-section-s2 section-padding" id="Service">
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
                                <img src="{{asset('frontend/assets/images/service-single/premium- matrimony/1.jpg')}}" alt="">
                            </div>
                            <div class="wpo-service-text">
                                <a href="{{url('/our-service/premium-matrimony-service')}}">Premium Matrimony Service</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="wpo-service-item wow fadeInUp" data-wow-duration="1200ms">
                            <div class="wpo-service-img">
                                <img src="{{asset('frontend/assets/images/service-single/fasttrack-matrimony/1.webp')}}" alt="">
                            </div>
                            <div class="wpo-service-text">
                                <a href="{{url('/our-service/fastrack-matrimony-service')}}">Fasttrack Matrimony Service</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="wpo-service-item wow fadeInUp" data-wow-duration="1400ms">
                            <div class="wpo-service-img">
                                <img src="{{asset('frontend/assets/images/service-single/personalized-matrimony/1.webp')}}" alt="">
                            </div>
                            <div class="wpo-service-text">
                                <a href="{{url('/our-service/personalized-matrimony-service')}}">Personalized Matrimony Service</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="wpo-service-item wow fadeInUp" data-wow-duration="1600ms">
                            <div class="wpo-service-img">
                                <img src="{{asset('frontend/assets/images/service-single/gold-matrimony/1.webp')}}" alt="">
                            </div>
                            <div class="wpo-service-text">
                                <a href="{{url('/our-service/gold-matrimony-service')}}">Gold Matrimony Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end Service-section -->

    <!-- start gallery-section -->
    <section class="wpo-portfolio-section-s4 section-padding pb-0">
        <h2 class="hidden">some</h2>
        <div class="container-fluid">
            <div class="wpo-section-title">
                <span>Our Gallery</span>
                <h2>Our Latest Wedding Gallery</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-grids gallery-container clearfix gallery-slide">
                        <div class="grid s1">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/18.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/18.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s2">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/19.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/19.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s3">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/20.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/20.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s4">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/21.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/21.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s5">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/22.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/22.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s6">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/23.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/23.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s7">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/24.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/24.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s8">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/25.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/25.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s9">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/29.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/29.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-grids gallery-container clearfix gallery-slide2">
                        <div class="grid s10">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/24.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/24.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s11">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/25.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/25.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s12">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/26.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/26.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s13">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/27.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/27.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s14">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/28.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/28.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s15">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/29.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/29.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s16">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/18.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/18.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s17">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/19.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/19.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="grid s18">
                            <div class="img-holder">
                                <a href="{{asset('frontend/assets/images/portfolio/20.webp')}}" class="fancybox"
                                    data-fancybox-group="gall-1">
                                    <img src="{{asset('frontend/assets/images/portfolio/20.webp')}}" alt class="img img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end gallery-section -->

    <!-- start contact-section -->
    <section class="wpo-contact-section-s6 section-padding" id="rsvp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-12 col-md-12 col-12">
                    <div class="wpo-contact-section-wrapper">
                        <div class="wpo-contact-section-inner">
                            <div class="wpo-contact-form-area">
                                <div class="wpo-section-title">
                                    <h2>Make an Inquiry</h2>
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
                                            placeholder="Phone">
                                    </div>
                                    <div class="fullwidth">
                                        <textarea class="form-control" name="note" id="note"
                                            placeholder="Message..."></textarea>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn">Send An Inquiry</button>
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
                </div>
            </div>
        </div>
        <div class="left-img"><img src="{{asset('frontend/assets/images/contact/img-1.jpg')}}" alt=""></div>
        <div class="right-img"><img src="{{asset('frontend/assets/images/contact/img-2.jpg')}}" alt=""></div>
    </section>
    <!-- end contact-section -->

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

    <!-- start blog-section -->
    <section class="wpo-blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="wpo-section-title">
                    <span>Our Blog</span>
                    <h2>Our Latest Wedding News</h2>
                </div>
            </div>
            <div class="wpo-blog-items">
                <div class="row">
                    <div class="col col-lg-3 col-md-6 col-12">
                        <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1000ms">
                            <div class="wpo-blog-img">
                                <a href="{{url('/blog/blog-details')}}"><img src="{{asset('frontend/assets/images/blog/img-1.jpeg')}}" alt=""></a>
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By Nimantaran Matrimony</li>
                                    <li>15 Aug 2023</li>
                                </ul>
                                <h5><a href="{{url('/blog/blog-details')}}">Nimantaran Matrimony: The Essence of Bonding Hearts</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-12">
                        <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1200ms">
                            <div class="wpo-blog-img">
                                <a href="{{url('/blog/blog-details-2')}}"><img src="{{asset('frontend/assets/images/blog/img-2.jpeg')}}" alt=""></a>
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By Nimantaran Matrimony</a></li>
                                    <li>23 Aug 2023</li>
                                </ul>
                                <h5><a href="{{url('/blog/blog-details-2')}}">Nimantaran Matrimony's Guide to a Blissful Marriage.</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-12">
                        <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1400ms">
                            <div class="wpo-blog-img">
                                <a href="{{url('/blog/blog-details-3')}}"><img src="{{asset('frontend/assets/images/blog/img-3.jpeg')}}" alt=""></a>
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By Nimantaran Matrimony</a></li>
                                    <li>03 AUG 2023</li>
                                </ul>
                                <h5><a href="{{url('/blog/blog-details-3')}}">Nimantaran Matrimony: Your Partner in the Quest for a Perfect Match</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-12">
                        <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1400ms">
                            <div class="wpo-blog-img">
                                <a href="{{url('/blog/blog-details-4')}}"><img src="{{asset('frontend/assets/images/blog/img-4.jpeg')}}" alt=""></a>
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By Nimantaran Matrimony</a></li>
                                    <li>24 JULY 2023</li>
                                </ul>
                                <h5><a href="{{url('/blog/blog-details-4')}}">"Nimantaran Matrimony: Pioneering the Path to Your Happily Ever After"</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="b-shape-2">
                    <img src="{{asset('frontend/assets/images/blog/shape-2.svg')}}" alt="">
                </div>
            </div>
        </div> <!-- end container -->
        <div class="b-shape">
            <img src="{{asset('frontend/assets/images/blog/shape-1.svg')}}" alt="">
        </div>
    </section>
    <!-- end blog-section -->

@endsection