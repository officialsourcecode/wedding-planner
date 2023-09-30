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
                    <h2>Frequently Asked Questions (FAQ)</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Frequently Asked Questions (FAQ)</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <!-- end page-title -->

  <!-- Start wpo-faq-section -->
  <section class="wpo-contact-pg-section section-padding">
      <div class="container">
          <div class="row">
              <div class="col col-lg-10 offset-lg-1">
                  <div class="office-info">
                      <div class="row">
                          <div class="wpo-faq-section">
                              <h4>Frequently Asked Questions (FAQ) About Nimantaran Matrimony</h4>
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
                                            <div id="collapseFour" class="accordion-collapse collapse"                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
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
                                            <div id="collapseFive" class="accordion-collapse collapse"                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    Yes, we offer flexibility in extending your Premium membership to ensure you find your perfect match.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
                                                How long does the Fastrack service last?
                                              </button>
                                            </h3>
                                            <div id="collapseSix" class="accordion-collapse collapse"                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    Fastrack continues until you find your life partner, so there's no fixed duration.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseFour">
                                                Is the unlimited profile recommendation truly unlimited?
                                              </button>
                                            </h3>
                                            <div id="collapseSeven" class="accordion-collapse collapse"                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    Yes, with Fastrack Matrimony, you can explore profiles without any limitations throughout your membership.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseFour">
                                                What if I decide to pause my search for a while?
                                              </button>
                                            </h3>
                                            <div id="collapseEight" class="accordion-collapse collapse"                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    Your membership remains active until you're ready to resume your search; you have complete control.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseFour">
                                                Can I switch from another package to Fastrack if I want to?
                                              </button>
                                            </h3>
                                            <div id="collapseNine" class="accordion-collapse collapse"                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    Yes, you can upgrade to Fastrack at any time if you feel it suits your needs better.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseFour">
                                                What if I want to extend my Fastrack membership beyond a year?
                                              </button>
                                            </h3>
                                            <div id="collapseTen" class="accordion-collapse collapse"                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    We can certainly assist with extending your membership if you feel more time is needed in your quest for the perfect match.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseFour">
                                                What makes the Personalized Service different from other packages?
                                              </button>
                                            </h3>
                                            <div id="collapseEleven" class="accordion-collapse collapse"                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    The Personalized Service offers a more hands-on approach to matchmaking, with a dedicated Relationship Manager and weekly profile recommendations.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseFour">
                                                Is there an option to extend the Personalized Service if needed?
                                              </button>
                                            </h3>
                                            <div id="collapseTwelve" class="accordion-collapse collapse"                        aria-labelledby="heading" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    Yes, we provide flexibility in extending your membership to ensure you have ample time to find your ideal match.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseFour">
                                                What happens if I don't find a suitable match within the four-month duration?
                                              </button>
                                            </h3>
                                            <div id="collapseThirteen" class="accordion-collapse collapse"                        aria-labelledby="heading" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    We will continue to support your search until you find your ideal match, even if it takes longer than four months.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFour">
                                                Can I provide feedback on the profiles you recommend?
                                              </button>
                                            </h3>
                                            <div id="collapseFourteen" class="accordion-collapse collapse"                        aria-labelledby="heading" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    We encourage your feedback as it helps us improve our matchmaking recommendations to better align with your preferences.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFour">
                                                Is my personal information kept confidential throughout the process?
                                              </button>
                                            </h3>
                                            <div id="collapseFifteen" class="accordion-collapse collapse"                        aria-labelledby="heading" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    Yes, we prioritize the security and confidentiality of your information at all stages of the journey.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseFour">
                                                What sets the Gold Membership Plan apart from other packages?
                                              </button>
                                            </h3>
                                            <div id="collapseSixteen" class="accordion-collapse collapse"                        aria-labelledby="heading" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    The Gold Membership Plan offers an extended commitment of one year, providing ample time for you to find your perfect match.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseFour">
                                                Is it possible to extend the Gold Membership Plan beyond one year?
                                              </button>
                                            </h3>
                                            <div id="collapseSeventeen" class="accordion-collapse collapse"                        aria-labelledby="heading" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    Absolutely, we offer flexibility in extending your membership if you feel more time is needed.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseFour">
                                                What if I don't find a suitable match within the first year?
                                              </button>
                                            </h3>
                                            <div id="collapseEighteen" class="accordion-collapse collapse"                        aria-labelledby="heading" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    We are committed to supporting your search until you find your ideal match, even if it takes longer than one year.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseFour">
                                                Can I provide feedback on the profiles you recommend?
                                              </button>
                                            </h3>
                                            <div id="collapseNineteen" class="accordion-collapse collapse"                        aria-labelledby="heading" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <p>
                                                    We highly encourage your feedback to further refine our recommendations and improve the matchmaking process.
                                                  </p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item">
                                            <h3 class="accordion-header" id="headingFour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseFour">
                                                Is my information kept confidential throughout the process?
                                              </button>
                                            </h3>
                                            <div id="collapseTwenty" class="accordion-collapse collapse"                        aria-labelledby="heading" data-bs-parent="#accordionExample">
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
                          </div> 
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end wpo-faq-section -->

@endsection