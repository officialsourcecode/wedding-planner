@extends('frontend.layouts.main')

@section('main-container')

    <head>
        <meta charset="UTF-8">
        <meta name="title" content=" Personalized Matrimony Service - Nimantaran's 4-Month Matchmaking ">

        <meta name="description" content=" Discover Nimantaran's Personalized Matrimony Service, offering four months of personalized matchmaking, expert Relationship Manager support, and weekly profile recommendations.">

        <meta name="keywords" content=" Personalized Matrimony Service, 4-Month Matchmaking, Relationship Manager, Weekly Profile Recommendations, Matrimonial Services, Marriage Matchmaking, Nimantaran Matrimony, ">

        <meta name="author" content="Nimantaran Matrimony">
    </head>

  <!-- start wpo-page-title -->
  <section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Personalized Service (4 months) Matrimony Details</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/our-service')}}">Our Service</a></li>
                        <li>Personalized Service (4 months) Matrimony Details</li>
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
                        <img src="{{asset('frontend/assets/images/service-single/personalized-matrimony/1.webp')}}" alt="Personalized Service (4 months) Matrimony Details Image">
                    </div> 
                </div>
                <div class="wpo-p-details-section">
                    <h5>Personalized Service (4 months) Matrimony</h5>
                    <p>
                        "Experience Nimantaran's Personalized Matrimony – Four months of dedicated matchmaking, weekly profile recommendations, and expert Relationship Manager support."
                    </p>
                    <p>
                        At Nimantaran Matrimony, we understand that every journey to finding the perfect life partner is as unique as the individuals embarking on it. The Personalized Service is meticulously designed to cater to those who seek a more hands-on approach to their matrimonial search. It strikes the perfect balance between expert guidance and a time-bound commitment, offering you four months of dedicated support and tailored matchmaking.
                    </p>
                    <p>
                        This service is for individuals who appreciate the value of personalized attention in their quest for a life partner. With the Personalized Service, you'll receive the expertise of a dedicated Relationship Manager who will closely understand your preferences and expectations. They will curate weekly profile recommendations, ensuring that each match is in line with your criteria.
                    </p>

                    <p>
                        <strong>Understanding Your Expectations : </strong> Our journey begins by diving deep into your preferences and expectations. We believe that understanding your unique desires is the cornerstone of effective matchmaking.
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="wpo-p-details-img">
                                <img src="{{asset('frontend/assets/images/service-single/personalized-matrimony/2.jpg')}}" alt="Personalized Service (4 months) Matrimony Details Image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="wpo-p-details-img">
                                <img src="{{asset('frontend/assets/images/service-single/personalized-matrimony/3.jpg')}}" alt="Personalized Service (4 months) Matrimony Details Image">
                            </div>
                        </div>
                    </div>
                    <p>
                        <strong>Dedicated Relationship Manager : </strong> A dedicated Relationship Manager is assigned to you, providing expert guidance and support throughout your four-month journey. They will be your trusted advisor and point of contact for any assistance you may require.
                    </p>
                    <p>
                        <strong> Weekly Profile Recommendations : </strong> To keep your search proactive and dynamic, we present you with two of the most suitable profiles every week. Our Relationship Managers take great care to ensure that the profiles align closely with your expectations.
                    </p>
                    <p>
                        <strong>Prospect Communication : </strong> We take the initiative to establish contact with prospects on your behalf. Our Relationship Managers facilitate effective communication and provide you with timely responses from potential matches.
                    </p>
                    <p>
                        <strong>Feedback Management :</strong> Your feedback is an essential component of our matchmaking process. We actively manage and incorporate your feedback to refine our recommendations and make them even more tailored to your preferences.
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
                                        What makes the Personalized Service different from other packages?
                                    </button>
                                  </h3>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <p>
                                        The Personalized Service offers a more hands-on approach to matchmaking, with a dedicated Relationship Manager and weekly profile recommendations.
                                    </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is there an option to extend the Personalized Service if needed?
                                    </button>
                                  </h3>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, we provide flexibility in extending your membership to ensure you have ample time to find your ideal match.
                                        </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What happens if I don't find a suitable match within the four-month duration?
                                    </button>
                                  </h3>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            We will continue to support your search until you find your ideal match, even if it takes longer than four months.
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
                                            We encourage your feedback as it helps us improve our matchmaking recommendations to better align with your preferences.
                                        </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingFour">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                        Is my personal information kept confidential throughout the process?
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