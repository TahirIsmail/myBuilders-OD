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

    /* @media only screen and (min-width: 300px) and (max-width: 600px) {
        .background-image {
            padding-top: 90.65% !important;
        }

    } */

    .background-image:before {
        position: absolute;
        content: " ";
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
    }

    .content {

        position: absolute;
        z-index: 1;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
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
        width: 100% ;
        height: auto;
    }
</style>
@section('content')
    <section id="welcome-hero" class="welcome-hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0 custom-slider">
                    <div class="background-image">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\con4.jpg') }}" class="stretch-img"
                            alt="Responsive image" />
                        <div class="custom-content">

                            <div class="custom-content-inner">
                                <h1>
                                    Talented tradesperson? Check out our job vacancies
                                </h1>
                                <h5>
                                    Builders’ Valley works with companies across the country and internationally to advertise jobs for skilled industry professionals. Check out our vacancies today.
                                </h5>
                                <div class="lp-header__content">
                                    <a class='btn--lp'href={{ route('trade_career') }}>Advertise Job Vacancies</a>
                                        <a class='btn--lp'href={{ route('trade_career') }}>Job Seekers</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

      
    </section>



    {{-- <section id="about" class="about d-flex justify-content-center">
        <div class="container about-content">
            <div class="row" style="justify-content: center;">
                <div class="col-sm-8 text-center">
                    <div class="single-about-img">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\b2.png') }}" />
               
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
                        <div class="col-sm-12 text-center about-content  justify-content-center our_cont"
                            style="display:flex">
                            <div class=" col-sm-12 col-md-6 col-xxl-4 text-center lable_price">
                                Our best fixed price in the market
                            </div>
                       
                        </div>
                        <div class="about-content">

                            <a class='btn--lp 'href={{ route('register') }}>SIGN UP TODAY</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

@endsection
