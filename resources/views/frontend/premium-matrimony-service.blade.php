@extends('frontend.layouts.main')

@section('main-container')

    <head>
        <meta charset="UTF-8">
        <meta name="title" content="Premium Matrimony Service by Nimantaran - Personalized Matchmaking">

        <meta name="description" content="Discover the Premium Matrimony Service by Nimantaran, offering personalized           matchmaking, a dedicated Relationship Manager, and weekly profile recommendations over six months.">

        <meta name="keywords" content="Premium Matrimony Service, Personalized Matchmaking, Dedicated Relationship Manager, Weekly Profile Recommendations, Matrimonial Services, Marriage Matchmaking, Nimantaran Matrimony">

        <meta name="author" content="Nimantaran Matrimony">
    </head>

  <!-- start wpo-page-title -->
  <section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Premium Matrimony Service Details</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/our-service')}}">Our Service</a></li>
                        <li>Premium Matrimony Service Details</li>
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
                        <img src="{{asset('frontend/assets/images/service-single/premium- matrimony/1.jpg')}}" alt="Premium Matrimony Service Details Image">
                    </div> 
                </div>
                <div class="wpo-p-details-section">
                    <h5>Premium Matrimony Service </h5>
                    <p>
                        "Elevate your matrimonial journey with our Premium Service. Six months of personalized matchmaking, a dedicated Relationship Manager, and weekly profile recommendations await you."
                    </p>
                    <p>
                        The Nimantaran Matrimony Premium Service is designed to provide a comprehensive and personalized approach to your matrimonial journey. We understand that finding the perfect life partner is a significant and life-changing decision. This service offers you six months of dedicated support, expert matchmaking, and the assurance of a trusted Relationship Manager by your side.
                    </p>

                    <p>
                        At Nimantaran Matrimony, we believe in making your journey to 'happily ever after' as seamless as possible. With the Premium Service, you can expect a deeply personalized experience, tailored to your unique preferences. We recognize that every individual and family is unique, and that's why our service is committed to understanding your expectations in detail.
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="wpo-p-details-img">
                                <img src="{{asset('frontend/assets/images/service-single/premium- matrimony/2.jpeg')}}" alt="Premium Matrimony Service Details Image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="wpo-p-details-img">
                                <img src="{{asset('frontend/assets/images/service-single/premium- matrimony/3.jpg')}}" alt="Premium Matrimony Service Details Image">
                            </div>
                        </div>
                    </div>
                    <p>
                        <strong>Understanding Your Expectations : </strong> Our journey begins by understanding your preferences and expectations in depth. We believe in the power of personalized matchmaking, and this starts with a thorough understanding of your desires.
                    </p>
                    <p>
                        <strong>Expert Profile Search : </strong> Our team of experts, well-versed in the intricacies of matchmaking, scours thousands of profiles to find those that align most closely with your criteria.
                    </p>
                    <p>
                        <strong>Weekly Profile Shortlisting : </strong> To keep your search dynamic and active, we provide you with two of the most suitable profiles every week. We take great care in ensuring that the profiles match your expectations.
                    </p>
                    <p>
                        <strong>Prospect Communication : </strong> Once you accept a profile, we take the initiative to establish contact with the prospects. Our Relationship Managers facilitate this process, ensuring effective communication.
                    </p>
                    <p>
                        <strong>Feedback Management : </strong> Your feedback is invaluable to us. We actively manage and incorporate your feedback into our matchmaking process, making it more refined and tailored to your preferences.
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
                                        Is the Premium Service suitable for me if I have specific preferences for my life partner?
                                    </button>
                                  </h3>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <p>
                                        Absolutely! The Premium Service is designed to cater to your unique preferences and requirements, ensuring a tailored matchmaking experience.
                                    </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What if I don't find a suitable match within the six-month duration?
                                    </button>
                                  </h3>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Your happiness is our priority. We will continue to support your search until you find your ideal match, even if it takes longer than six months.
                                        </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I provide feedback on the profiles you recommend?
                                    </button>
                                  </h3>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            We highly encourage your feedback, as it helps us refine our recommendations and improve the matchmaking process.
                                        </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Is my information kept confidential throughout the process?
                                    </button>
                                  </h3>
                                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, we prioritize the security and confidentiality of your information at every step of the journey.
                                        </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingFour">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                        Can I extend the Premium Service beyond the initial six months if needed?
                                      </button>
                                    </h3>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                            <p>
                                                Yes, we offer flexibility in extending your Premium membership to ensure you find your perfect match.
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