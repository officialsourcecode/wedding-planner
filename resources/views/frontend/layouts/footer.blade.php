<!-- start of wpo-site-footer-section -->
<footer class="wpo-site-footer-s2">
    <div class="wpo-upper-footer">
        <div class="container">
            <div class="row align-items-center">

                <div class="col col-xl-4 col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="widget about-widget">
                        <div class="logo widget-title">
                            
                            <a class="logo" href="{{url('/')}}">
                                <img src="{{asset('frontend/assets/images/logo/footer-logo.png')}}" alt="">
                            </a>
                        </div>
                        <p>
                            Nimantaran Matrimony is your Trusted Partner in the Sacred Journey of Matrimony. We Understand That Marriage is a Moment.
                        </p>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Nimantaran" target="_blank">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col col-xl-2  col-lg-2 col-md-2 col-sm-12 col-12">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="link-wrap">
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>

                                <li>
                                    <a href="{{url('/about-us')}}">About Us</a>
                                </li>

                                <li>
                                    <a href="{{url('/our-service')}}">Our Service</a>
                                </li>

                                <li>
                                    <a href="{{url('/our-packages')}}">Our Package</a>
                                </li>

                                <li>
                                    <a href="{{url('/our-gallery')}}">Gallery</a>
                                </li>

                                <li>
                                    <a href="{{url('/blog')}}">Blog</a>
                                </li>

                                <li>
                                    <a href="{{url('/contact-us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-xl-2  col-lg-2 col-md-2 col-sm-12 col-12">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>Customer Policy</h3>
                        </div>
                        <div class="link-wrap">
                            <ul>
                                <li>
                                    <a href="{{url('/term-and-conditions')}}">Term And Condition</a>
                                </li>

                                <li>
                                    <a href="{{url('/privacy-and-policy')}}">Privacy And Policy</a>
                                </li>

                                <li>
                                    <a href="{{url('/faq')}}">FAQ</a>
                                </li>

                                <li>
                                    <a href="{{url('/our-service/premium-matrimony-service')}}">Premium Matrimony</a>
                                </li>

                                <li>
                                    <a href="{{url('/our-service/fastrack-matrimony-service')}}">Fasttrack Matrimony</a>
                                </li>

                                <li>
                                    <a href="{{url('/our-service/personalized-matrimony-service')}}">Personalized Matrimony</a>
                                </li>

                                <li>
                                    <a href="{{url('/our-service/gold-matrimony-service')}}">Gold Matrimony</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-xl-4  col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="widget wpo-service-link-widget">
                        <div class="widget-title">
                            <h3>Get in Touch ! </h3>
                        </div>
                        <div class="contact-ft">
                            <p>
                                19A, Jawaharlal Nehru Road, <br>3rd Floor Suite No. - C, Kolkata 700087<br>nimantaranmatrimony@gmail.com<br>+91-8910914253
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div>
    <div class="wpo-lower-footer">
        <div class="container">
            <div class="row">
                <div class="col col-xs-6">
                    <p class="copyright"> &copy; Copyright 2023 | Nimantaran Matrimony | All right
                        reserved.</p>
                </div>

                <div class="col col-xs-6">
                    <p class="copyright">Design & Developed By <a href="https://valktechnologies.com/" target="_blank">Valk Technologies & Solutions</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end of wpo-site-footer-section -->

</div>
<!-- end of page-wrapper -->

<!-- Toastr js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}

<script>
    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break; 
        }
    @endif 
</script>

<!-- All JavaScript files
================================================== -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugins for this template -->
<script src="{{asset('frontend/assets/js/modernizr.custom.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.pointparallax.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-plugin-collection.js')}}"></script>
<script src="{{asset('frontend/assets/js/moving-animation.js')}}"></script>
<script src="{{asset('frontend/assets/js/tilt.jquery.min.js')}}"></script>
<!-- Custom script for this template -->
<script src="{{asset('frontend/assets/js/script.js')}}"></script>
</body>


<!-- Mirrored from wpocean.com/html/tf/habibi/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2023 15:54:21 GMT -->
</html>