@extends('frontend.layouts.main')

@section('main-container')

    <head>
        <meta charset="UTF-8">
        <meta name="title" content=" Gold Membership Plan - Nimantaran's 1-Year Matrimony Service ">

        <meta name="description" content=" Explore Nimantaran's Gold Membership Plan, offering one year of personalized matchmaking, dedicated Relationship Manager support, and weekly profile recommendations.">

        <meta name="keywords" content=" Gold Membership Plan, 1-Year Matrimony Service, Relationship Manager, Weekly Profile Recommendations, Matrimonial Services, Marriage Matchmaking, Nimantaran Matrimony, Extended Membership ">

        <meta name="author" content="Nimantaran Matrimony">
    </head>

  <!-- start wpo-page-title -->
  <section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Gold Membership Plan (1 year) Matrimony Details</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/our-service')}}">Our Service</a></li>
                        <li>Gold Membership Plan (1 year) Matrimony Details</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <!-- end page-title -->

  <!-- start wpo-Service-single -->
  <div class="wpo-service-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="wpo-minimal-wrap">
                    <div class="wpo-minimal-img">
                        <img src="{{asset('frontend/assets/images/service-single/gold-matrimony/1.webp')}}" alt="Gold Membership Plan (1 year) Matrimony Details Image">
                    </div> 
                </div>
                <div class="wpo-p-details-section">
                    <h5>Gold Membership Plan (1 year) Matrimony Details</h5>
                    <p>
                        "Unlock a year of personalized matchmaking, Relationship Manager support, and weekly profile recommendations with Nimantaran's Gold Membership Plan."
                    </p>
                    <p>
                        The Gold Membership Plan by Nimantaran Matrimony is the pinnacle of matrimonial services, offering a comprehensive and personalized approach to your quest for a life partner. It's designed for those who understand that finding true love can sometimes take time and require expert guidance. With this plan, you gain access to a full year of unwavering support, dedicated matchmaking, and the expertise of a trusted Relationship Manager.
                    </p>
                    <p>
                        At Nimantaran Matrimony, we believe that love should not be rushed. We offer you an entire year to explore, connect, and build meaningful connections with potential life partners. Our commitment is to provide you with the tools, guidance, and personalized service you need to make the most important decision of your life.
                    </p>

                    <p>
                        <strong>Understanding Your Expectations : </strong> Our journey begins by comprehensively understanding your preferences and expectations. We believe in the power of personalized matchmaking, and this starts with a deep dive into your desires.
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="wpo-p-details-img">
                                <img src="{{asset('frontend/assets/images/service-single/gold-matrimony/2.jpg')}}" alt="Gold Membership Plan (1 year) Matrimony Details Image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="wpo-p-details-img">
                                <img src="{{asset('frontend/assets/images/service-single/gold-matrimony/3.jpg')}}" alt="Gold Membership Plan (1 year) Matrimony Details Image">
                            </div>
                        </div>
                    </div>
                    <p>
                        <strong>Dedicated Relationship Manager : </strong> A dedicated Relationship Manager is assigned to you, becoming your trusted partner in your quest for love. They provide expert guidance and unwavering support throughout your one-year journey.
                    </p>
                    <p>
                        <strong> Weekly Profile Recommendations : </strong> To keep your search dynamic and results-oriented, we present you with two of the most suitable profiles every week. Each recommendation is carefully curated to match your criteria
                    </p>
                    <p>
                        <strong>Prospect Communication : </strong> We take the initiative to establish contact with prospects on your behalf. Our Relationship Managers facilitate effective communication and ensure you receive timely responses from potential matches.
                    </p>
                    <p>
                        <strong>Feedback Management :</strong> Your feedback is of paramount importance to us. We actively manage and incorporate your feedback into our matchmaking process, ensuring that our recommendations align more closely with your preferences over time.
                    </p>
                </div>
                <div class="wpo-faq-section">
                    <h4>Frequently Asked Questions (FAQ)</h4>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What sets the Gold Membership Plan apart from other packages?
                                    </button>
                                  </h3>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <p>
                                        The Gold Membership Plan offers an extended commitment of one year, providing ample time for you to find your perfect match.
                                    </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is it possible to extend the Gold Membership Plan beyond one year?
                                    </button>
                                  </h3>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Absolutely, we offer flexibility in extending your membership if you feel more time is needed.
                                        </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What if I don't find a suitable match within the first year?
                                    </button>
                                  </h3>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            We are committed to supporting your search until you find your ideal match, even if it takes longer than one year.
                                        </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Can I provide feedback on the profiles you recommend?
                                    </button>
                                  </h3>
                                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            We highly encourage your feedback to further refine our recommendations and improve the matchmaking process.
                                        </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingFour">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                        Is my information kept confidential throughout the process?
                                      </button>
                                    </h3>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                            <p>
                                                Yes, we prioritize the security and confidentiality of your information at all stages of the journey.
                                          </p>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end wpo-faq-section -->
            </div>
            <div class="col-lg-4 col-12">
                <div class="blog-sidebar">
                    <div class="widget category-widget">
                        <h3>Our Services</h3>
                        <ul>
                            <li>
                                <a href="{{url('/our-service/premium-matrimony-service')}}"><strong>Premium Matrimony Service</strong></a>
                            </li>

                            <li>
                                <a href="{{url('/our-service/fastrack-matrimony-service')}}"><strong>Fasttrack Matrimony Service</strong> </a>
                            </li>

                            <li>
                                <a href="{{url('/our-service/personalized-matrimony-service')}}"><strong>Personalized Matrimony Service</strong></a>
                            </li>

                            <li>
                                <a href="{{url('/our-service/gold-matrimony-service')}}"><strong>Gold Matrimony Service</strong></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget wpo-instagram-widget">
                        <div class="widget-title">
                            <h3>Our Gallery</h3>
                        </div>
                        <ul class="d-flex">
                            <li>
                                <a href="{{url('/our-gallery')}}"><img src="{{asset('frontend/assets/images/instragram/1.webp')}}" alt="Our Gallery Image"></a>
                            </li>
                            <li>
                                <a href="{{url('/our-gallery')}}"><img src="{{asset('frontend/assets/images/instragram/2.webp')}}" alt="Our Gallery Image"></a>
                            </li>
                            <li>
                                <a href="{{url('/our-gallery')}}"><img src="{{asset('frontend/assets/images/instragram/3.webp')}}" alt="Our Gallery Image"></a>
                            </li>
                            <li>
                                <a href="{{url('/our-gallery')}}"><img src="{{asset('frontend/assets/images/instragram/4.webp')}}" alt="Our Gallery Image"></a>
                            </li>
                            <li>
                                <a href="{{url('/our-gallery')}}"><img src="{{asset('frontend/assets/images/instragram/5.webp')}}" alt="Our Gallery Image"></a>
                            </li>
                            <li>
                                <a href="{{url('/our-gallery')}}"><img src="{{asset('frontend/assets/images/instragram/6.webp')}}" alt="Our Gallery Image"></a>
                            </li>
                            <li>
                                <a href="{{url('/our-gallery')}}"><img src="{{asset('frontend/assets/images/instragram/8.webp')}}" alt="Our Gallery Image"></a>
                            </li>
                            <li>
                                <a href="{{url('/our-gallery')}}"><img src="{{asset('frontend/assets/images/instragram/7.webp')}}" alt="Our Gallery Image"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- end Service-single -->

@endsection