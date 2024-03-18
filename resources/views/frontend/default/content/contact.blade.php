@extends('frontend.default.layouts.app')
<style>
    .contact_us {
        background-color: #f1f1f1;
        padding: 120px 0px;
    }

    .contact_inner {
        background-color: #fff;
        position: relative;
        box-shadow: 20px 22px 44px #cccc;
        border-radius: 25px;
    }

    .contact_field {
        padding: 30px 20px 90px 20px;
        /* Adjust padding for smaller screens */
    }

    .right_conatct_social_icon {
        height: 100%;
    }

    .contact_field h3 {
        color: #000;
        font-size: 40px;
        letter-spacing: 1px;
        font-weight: 600;
        margin-bottom: 10px
    }

    .contact_field p {
        color: #000;
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 1px;
        margin-bottom: 35px;
    }



    .contact_info_sec {

        background-color: #64c976c4;
        right: 1px;
        top: 18%;
        height: 100%;
        width: 100%;
        padding: 40px;
        border-radius: 25px 0 0 25px;
        color: white;
    }

    .contact_info_sec h4 {
        letter-spacing: 1px;
        padding-bottom: 15px;
    }

    .info_single {
        margin: 30px 0px;
    }

    .info_single i {
        margin-right: 15px;
    }

    .info_single span {
        font-size: 14px;
        letter-spacing: 1px;
    }
















    .contact-form .input-box {
        position: relative;
        width: 100%;
        margin-top: 10px;
    }

    .contact-form .input-box input,
    .contact-form .input-box textarea {
        width: 100%;
        padding: 5px 0;
        font-size: 15px;
        margin: 10px 0;
        border: none;
        border-bottom: 1px solid #ccc;
        outline: none;
        resize: none;
    }

    .contact-form .input-box span {
        position: absolute;
        left: 0;
        padding: 5px 0;
        font-size: 13px;
        margin: 10px 0;
        pointer-events: none;
        transition: 0.5s;
        color: #666;
    }

    .contact-form .input-box input:focus~span,
    .contact-form .input-box textarea:focus~span {
        color: #e91e63;
        font-size: 12px;
        transform: translateY(-20px);
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

    }


    .background-image img {
   
        background-size: cover;
        background-position: center;
    }

 

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


</style>
@section('content')
    <section id="welcome-hero" class="welcome-hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0 custom-slider">
                    <div class="background-image">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\c15.png') }}" class="stretch-img"
                            alt="Responsive image" />
                        <div class="custom-content">

                            <div class="custom-content-inner">
                                <h1>
                                    The trade directory you can trust
                                </h1>
                                <h5>
                                    Looking to find a reliable tradesperson? Or are you a company looking for a hassle-free
                                    way to contact new customers? Builders’ Valley is the place for you! Our trade directory
                                    team is based in Manchester, but we connect customers and companies across the UK. For
                                    any enquiries, contact us today using the details below.
                                </h5>
                                {{-- <div class="lp-header__content">
                                    <a class='btn--lp'href={{ route('trade_career') }}>Advertise Job Vacancies</a>
                                    <a class='btn--lp'href={{ route('trade_career') }}>Job Seekers</a>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="contact_info_sec">
                                    <h4>Contact Info</h4>
                                    <div class="d-flex info_single align-items-center">
                                        <i class="fas fa-headset"></i>
                                        <span>+44 7404 704169</span>
                                    </div>
                                    <div class="d-flex info_single align-items-center">
                                        <i class="fas fa-envelope-open-text"></i>
                                        <span>info@buildersvalley.com</span>
                                    </div>
                                    <div class="d-flex info_single align-items-center">
                                        <i class="fas fa-map-marked-alt"></i>
                                        <span>We accept payment for memberships via most major credit/debit cards.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="contact_form_inner">
                                    <div class="contact_field">
                                        <h3>Contact Us</h3>
                                        <p>Feel free to contact us any time. We will get back to you as soon as we can!</p>
                                        <form class="contact-form ">
                                            <div class="input-box">
                                                <input type="text" required="true" name="">
                                                <span>Full Name</span>
                                            </div>

                                            <div class="input-box">
                                                <input type="text" required="true" name="">
                                                <span>Email:</span>
                                            </div>

                                            <div class="input-box">
                                                <input type="text" required="true" name="">
                                                <span>Phone Number:</span>
                                            </div>


                                            <div class="input-box">
                                                <textarea required="true" name=""></textarea>
                                                <span>Type your Message...</span>
                                            </div>


                                            <div class="form-group">
                                                <h6
                                                    style="letter-spacing: 1px;
                                                padding-top: 15px; font-weight:bold">
                                                    Tell us who you are:</h6>
                                                <select id="user_type" name="user_type" class="form-control">
                                                    <option value="home_owner">HomeOwner</option>
                                                    <option value="tradesman">Tradesman</option>
                                                    <option value="recruiter">Recruiter</option>

                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="agree_terms"
                                                    name="agree_terms" />
                                                <label class="form-check-label" for="agree_terms">I have read and understood
                                                    the privacy notice and cookie policy, and I agree to the terms and
                                                    conditions.</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
