@extends('frontend.default.layouts.app')


<style>
    .education {
        background: #f9fbfd;
        padding-top: 50px;
    }

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




    @media only screen and (min-width: 300px) and (max-width: 600px) {
        .header-text h2 {

            font-size: 1.2rem;
        }

        .content {
            top: 70% !important;
        }

        .our_cont {
            display: block !important;

        }

        .single-about-img img {
            max-width: 500px !important;
            height: 80px !important;
        }

        .lable_fee {
            padding: 1em 1em 1em !important;
            margin-left: 0px !important;
            margin-top: 20px
        }

        .header-text p {
            margin: 8px 0px 8px !important;
            font-size: 10px !important;
            font-weight: 400 !important;
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

        padding-bottom: 10px;
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
        width: 100%;
        height: 100%;

        /* padding-top: 53.25%;
        position: relative;
        background-size: cover; */
        /* width: 100%;
        height: 0;
        padding-top: 56.25%;
        position: relative;
        background-size: cover; */
        /* background-position: center; */
        /* background-image: url('/public/assets/frontend/default/img/slider_img/c15.png'); */

    }

    .background-image img {

        background-size: cover;
        background-position: center;
    }


    .custom-slider {
        position: relative;

        /* Change this height as needed */
        overflow: hidden;
        height: 600px;

    }


    @media only screen and (min-width: 300px) and (max-width: 600px) {
        .custom-slider {
            height: 500px;
        }

        .custom-content-inner h1 {
            width: 100% !important;
        }

        .custom-content-inner h5 {
            width: 100% !important;
        }

        .stretch-img {
            width: 100% !important;
            height: 100% !important;
        }
    }

    .stretch-img {
        width: 100%;
        height: auto;
    }
</style>
@section('content')
    <section id="welcome-hero" class="welcome-hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0 custom-slider">
                    <div class="background-image">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\con2.jpg') }}" class="stretch-img"
                            alt="Responsive image" />
                        <div class="custom-content">

                            <div class="custom-content-inner">
                                <h1>
                                    Find a tradesman now
                                </h1>
                                <h5>Builders’ Valley helps people across the country for their home improvement projects and
                                    find tradesmen they can trust.
                                </h5>
                                <div class="lp-header__content">
                                    <a class='btn--lp'href={{ route('post_project') }}> POST A JOB NOW</a>

                                </div>
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
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\house.png') }}" />
                        <!-- /.about-list-icon -->
                    </div>

                    <div class="section-heading about-content">
                        <h2>
                            Matching tradespeople and homeowners across the country</h2>
                    </div>
                    <div class="single-about-txt">
                        <h3>
                            When you’re searching for a company to help you with your home improvement project, there are so
                            many sources of information it can be hard to know where to start. Builders’ Valley is the home
                            of trusted tradespeople and our mission is to connect them with you. Once you post the job,
                            professional trades people from your area will respond to your post as soon as possible. Posting
                            a job is completely free; you don’t have to pay anything at any point.
                        </h3>
                    </div>



                </div>
            </div>


        </div>
    </section>

    <!--/.about-->
    <!--about end -->

    <!--education start -->
    <section id="education  " class="education about">
        <div class="container about-content">
            <div class="row" style="justify-content: center;">
                <div class="col-sm-8 text-center">


                    <div class="section-heading about-content">
                        <h2>Sign up to post a job today</h2>
                    </div>
                    <div class="single-about-txt">
                        <h3>
                            Signing up as a member give you exclusive access to our forums and allows you to start posting
                            right away. Need any help signing up? Contact our friendly team today.


                        </h3>
                    </div>

                    <div class="row  justify-content-center">

                        <div class="about-content">

                            <a class='btn--lp 'href={{ route('post_project') }}>SIGN UP TODAY</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        {{-- 
        <div class="row justify-content-center about-content">
            <div class="col-xl-4 col-xxl-3 col-md-4 " style="margin-bottom: 10px;position: relative;">
                <div class="card5">
                    <div class="card-content5">
                        <div class="icon-container5">
                            <img src="{{ asset('public\assets\frontend\default\img\slider_img\con1.png') }}" />
                        </div>
                    </div>
                    <div class="card-description5">

                        <a href={{ route('trade_signup') }}><span class="category5">LOOKING FOR A JOB VACANCY?</span></a>
                        <p> If you’re skilled in a particular trade and you’re looking for your next job role, our careers
                            page is the place to head. Companies from across the UK are advertising for skilled
                            professionals to join their team.</p>

                        <span class="title5"><i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"
                                style="color: white;"></i></span>
                    </div>
                </div>
            </div>



        </div> --}}
    </section>
    <!--/.education-->
    <!--education end -->

    <!--/.footer-copyright-->
    <!--footer-copyright end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->
@endsection
