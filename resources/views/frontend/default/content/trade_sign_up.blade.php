@extends('frontend.default.layouts.app')
<style>
    .custom-content-inner h1 {
        margin: 0;
        color: #ffffff;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;


    }

    .header-text h2 {
        color: #fff;
        font-size: 2.5rem;
        font-weight: 700;
        line-height: 1;
    }
    @media only screen and (min-width: 800px) and (max-width: 2400px) {
        .background-image  {
          height: 100vh !important;
        }
    }
    @media only screen and (min-width: 300px) and (max-width: 600px) {
        .header-text h2 {
        
            font-size: 1.5rem;
        }
    }

    @media only screen and (min-width: 300px) and (max-width: 600px) {
        .content {
            top: 70% !important;
        }
    }

    @media only screen and (min-width: 300px) and (max-width: 600px) {
        .header-text p {
            margin: 10px 0px 20px !important;
        }
    }



    .header-text h2 span {
        color: #64c976;
    }

    .header-text p {
        color: #fff !important;
        font-size: 15px;
        font-weight: 500;
        margin: 30px 0 60px;
        letter-spacing: 0.5px;
    }





    .about {
        padding: 0px 0 100px;
        background-color: #ececec;
    }

    .about-content {
        padding-top: 30px;
    }

    .section-heading h2 {
        font-size: 24px;
        font-weight: 600;

        padding-bottom: 50px;
        border-bottom: 1px solid #e5ebf2;
        color: #64c976;
    }

    .single-about-txt h3 {
        font-size: 18px;
        color: #3c4258;
        text-transform: initial;
        line-height: 1.8;
    }

    .single-about-txt p {
        font-size: 16px;
        color: #999fb3;
        padding: 35px 0 43px;
        border-bottom: 1px solid #999fb3;
    }

    .single-about-img:before {
        position: absolute;
        content: " ";
        top: 0;
        left: 0;
        width: 109%;
        height: 100%;
        /* background: rgba(31,44,108,.3); */
    }

    .single-about-img img {
        max-width: 500px;
        height: 200px;
    }

    .education {
        background: #f9fbfd;
        padding-top: 50px;
    }

    .background-image:before {
      position: absolute;
      content: " ";
      top: 0;
      left: 0;
      background: rgb(80 94 79 / 42%);
      width: 100%;
      height: 100%;
    }


    .background-image {
        background: url('/public/assets/frontend/default/img/slider_img/c1.jpg') no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        height: 400px;
        /* Set the height of your background image */
    }

    .content {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        padding: 20px;
    }
</style>
@section('content')
    <section id="welcome-hero" class="welcome-hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="background-image">
                        <div class="content text-center">

                            <div class="header-text">
                                <h2>
                                    Sign Up <span>,</span> as a
                                    tradesperson for free <span>.</span>
                                </h2>
                                <p>
                                    A trade membership with Builders’ Valley means you can contact
                                    potential <br />
                                    customers across the country. Sign up now for better business
                                    opportunities.
                                </p>
                                <a class='btn--lp'href={{ route('register') }}>Trade Signup</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.container-->
    </section>
    <!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--about start -->
    <section id="about" class="about d-flex justify-content-center">
        <div class="container about-content">
            <div class="row" style="justify-content: center;">
                <div class="col-sm-8 text-center">
                    <div class="single-about-img">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\b2.png') }}" />
                        <!-- /.about-list-icon -->
                    </div>

                    <div class="section-heading about-content">
                        <h2>Reach more customers today</h2>
                    </div>
                    <div class="single-about-txt">
                        <h3>
                            With our competitive fixed prices, gives more equal
                            opportunities to sole traders as well to big businesses to
                            find a new range of potential customers. There are no
                            membership fees, you will be charged only once you are
                            short-listed. Sign-up is completely free with no charges.
                        </h3>
                    </div>

                    <div class="row  justify-content-center">
                        <div class="col-sm-12 text-center about-content d-flex justify-content-center">
                            <div class="col-sm-4 text-center lable_price">
                                Our best fixed price in the market
                            </div>

                            <div class="col-sm-3 text-center lable_fee" style=" margin-left: 10px;">
                                Short-listed fee: £10
                            </div>
                        </div>
                        <div class="about-content">

                            <a class='btn--lp 'href={{ route('register') }}>SIGN UP TODAY</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--/.about-->
    <!--about end -->

    <!--education start -->
    {{-- <section id="education" class="education">
        <div class="section-heading text-center">
            <h2>education</h2>
        </div>
        <div class="container">
            <div class="education-horizontal-timeline">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>2008 - 2010</h2>
                                <h3>master <span>of </span> computer science</h3>
                            </div>
                            <!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <span class="single-timeline-horizontal"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="title">university of north carolina</h4>
                                    <h5>north carolina, USA</h5>
                                    <p class="description">
                                        Duis aute irure dolor in reprehenderit in vol patate velit
                                        esse cillum dolore eu fugiat nulla pari. Excepteur sint
                                        occana inna tecat cupidatat non proident.
                                    </p>
                                </div>
                                <!--/.timeline-content-->
                            </div>
                            <!--/.timeline-->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>2004 - 2008</h2>
                                <h3>bachelor <span>of </span> computer science</h3>
                            </div>
                            <!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <span class="single-timeline-horizontal"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="title">university of north carolina</h4>
                                    <h5>north carolina, USA</h5>
                                    <p class="description">
                                        Duis aute irure dolor in reprehenderit in vol patate velit
                                        esse cillum dolore eu fugiat nulla pari. Excepteur sint
                                        occana inna tecat cupidatat non proident.
                                    </p>
                                </div>
                                <!--/.timeline-content-->
                            </div>
                            <!--/.timeline-->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h2>2004 - 2008</h2>
                                <h3>bachelor <span>of </span> creative design</h3>
                            </div>
                            <!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <span class="single-timeline-horizontal spacial-horizontal-line"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <h4 class="title">university of bolton</h4>
                                    <h5>bolton, united kingdome</h5>
                                    <p class="description">
                                        Duis aute irure dolor in reprehenderit in vol patate velit
                                        esse cillum dolore eu fugiat nulla pari. Excepteur sint
                                        occana inna tecat cupidatat non proident.
                                    </p>
                                </div>
                                <!--/.timeline-content-->
                            </div>
                            <!--/.timeline-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--/.education-->
    <!--education end -->

    <!--/.footer-copyright-->
    <!--footer-copyright end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->
@endsection
