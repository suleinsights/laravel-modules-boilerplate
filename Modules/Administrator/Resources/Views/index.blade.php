@extends('webmaster::master')

@section('content')
    <!-- Content-->
    <div class="md-content">

        <!-- hero -->
        <div class="hero md-skin-dark">

            <!-- header -->
            <div class="header">
                <div class="header__left"><span>Workmood, Abuja</span><span>contact@haqqman.com</span>
                </div>
                <div class="header__social">

                    <!-- social-icon -->
                    <a class="social-icon social-icon__rounded" href="https://instagram.com/haqqmanhq" target="_blank"><i class="fa fa-instagram"></i>
                    </a><!-- End / social-icon -->

                    <!-- social-icon -->
                    <a class="social-icon social-icon__rounded" href="https://twitter.com/haqqmanhq" target="_blank"><i class="fa fa-twitter"></i>
                    </a><!-- End / social-icon -->

                    <!-- social-icon -->
                    <a class="social-icon social-icon__rounded" href="https://wa.me/2348060088104"><i class="fa fa-whatsapp"></i>
                    </a><!-- End / social-icon -->

                </div>
            </div><!-- End / header -->

            <div class="container">
                <div class="hero__wrapper">
                    <div class="row">
                        <div class="col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 ">
                            <div class="hero__title_inner"><img src="{{ URL::to('webmaster-assets/assets/img/haqqman-logomark.svg') }}" alt="Webmaster by Haqqman">
                                <h1 class="hero__title">Hi! We want to help.</h1>
                                <p class="hero__text">Provide us with performance report and get help if you encounter issues with any digital project managed by Haqqman. <br>We will share your feedback with the product owner and prioritize a fix.</p>
                            </div>
                        </div>
                    </div>

                    <div class="service-wrapper"><hr>

                        <!-- service -->
                        <div class="service">
                            <h2 class="service__title">Chat with an Expert</h2>
                            <p class="service__text">We've got 24/7 online chat support. Our smart, friendly customer champions are available to provide quick help. <br><a href="https://#"><b>Start Chatting</b> <i class="fa fa-comments"></i></a></p>
                        </div><!-- End / service -->


                        <!-- service -->
                        <div class="service">
                            <h2 class="service__title">Website Design Service</h2>
                            <p class="service__text">Hire our experts to develop a mobile-friendly and effective personal or business website that reflects your brand. <br><a href="https://haqqman.com/request-a-quote"><b>Request a Quote</b> <i class="fa fa-user"></i></a></p>
                        </div><!-- End / service -->


                        <!-- service -->
                        <div class="service">
                            <h2 class="service__title">Quick Links</h2>
                            <p class="service__text"><a href="https://haqqman.com"><b>Visit Haqqman Website</b> <i class="fa fa-arrow-right"></i></a><br>
                                <a href="https://haqqman.com/website-design-packages"><b>Website Design Packages</b> <i class="fa fa-arrow-right"></i></a><br>
                                <a href="https://haqqman.com/branding-packages"><b>Branding Packages</b> <i class="fa fa-arrow-right"></i></a></p>
                        </div><!-- End / service -->

                    </div>
                </div>
            </div>
        </div><!-- End / hero -->


        <!-- smoky -->
        <div class="smoky" id="smoky-bg">
            <canvas>Your browser does not support HTML5 canvas.</canvas>
        </div><!-- End / smoky -->

    </div>
    <!-- End / Content-->
@stop
