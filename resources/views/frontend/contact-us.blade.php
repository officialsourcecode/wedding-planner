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
                    <h2>Contact Us</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <!-- end page-title -->
  <!-- start wpo-contact-pg-section -->
  <section class="wpo-contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">
                <div class="office-info">
                    <div class="row">
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-maps-and-flags"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Address</h2>
                                    <p>
                                        <a href="https://maps.app.goo.gl/37bsHW98z4hnvsie9" target="_blank">
                                        19A, Jawaharlal Nehru Road, 3rd Floor Suite No. - C, Kolkata 700087
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Email Us</h2>
                                    <p>
                                        <a href="mailto:nimantaranmatrimony@gmail.com">nimantaranmatrimony@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Call Now</h2>
                                    <p><a href="tel:8910914253">+91-8910914253</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-contact-title">
                    <h2>Have Any Question?</h2>
                    <p>It is a long established fact that a reader will be distracted
                        content of a page when looking.</p>
                </div>

                {{-- ERROR START --}}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- ERROR END --}}

                <div class="wpo-contact-form-area">
                    <form method="post" action="{{ route('contact.save') }}" class="contact-validation-active">
                        @csrf
                        <div>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Your Name*">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email*">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Phone No.*">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="address" id="adress"
                                placeholder="Address">
                        </div>
                        <div class="fullwidth">
                            <textarea class="form-control" name="message" id="note"
                                placeholder="Message..."></textarea>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn-s4">Get in Touch</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
  </section>
  <!-- end wpo-contact-pg-section -->

  <!--  start wpo-contact-map -->
  <section class="wpo-contact-map-section">
    <h2 class="hidden">Contact map</h2>
    <div class="wpo-contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d230.28173806317318!2d88.3512258!3d22.5601031!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02770959a2b433%3A0xabed6f892cc5fc00!2sNimantaran%20Matrimony!5e0!3m2!1sen!2sin!4v1695299600776!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
  </section>
  <!-- end wpo-contact-map -->

@endsection