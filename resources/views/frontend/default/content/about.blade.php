@extends('frontend.default.layouts.app')
<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {}

    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }

    a,
    a:active,
    a:focus {
        color: #6f6f6f;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    section {
        padding: 60px 0;
        /* min-height: 100vh;*/
    }

    .sec-title {
        position: relative;
        z-index: 1;
        margin-bottom: 60px;
    }

    .sec-title .title {
        position: relative;
        display: block;
        font-size: 18px;
        line-height: 24px;
        color: #00aeef;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .sec-title h2 {
        position: relative;
        display: block;
        font-size: 40px;
        line-height: 1.28em;
        color: #222222;
        font-weight: 600;
        padding-bottom: 18px;
    }

    .sec-title h2:before {
        position: absolute;
        content: '';
        left: 0px;
        bottom: 0px;
        width: 50px;
        height: 3px;
        background-color: #d1d2d6;
    }

    .sec-title .text {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
        margin-top: 35px;
    }

    .sec-title.light h2 {
        color: #ffffff;
    }

    .sec-title.text-center h2:before {
        left: 50%;
        margin-left: -25px;
    }

    .list-style-one {
        position: relative;
    }

    .list-style-one li {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #222222;
        font-weight: 400;
        padding-left: 35px;
        margin-bottom: 12px;
    }

    .list-style-one li:before {
        content: "\f058";
        position: absolute;
        left: 0;
        top: 0px;
        display: block;
        font-size: 18px;
        padding: 0px;
        color: #ff2222;
        font-weight: 600;
        -moz-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1.6;
        font-family: "Font Awesome 5 Free";
    }

    .list-style-one li a:hover {
        color: #44bce2;
    }

    .btn-style-one {
        position: relative;
        display: inline-block;
        font-size: 17px;
        line-height: 30px;
        color: #ffffff;
        padding: 10px 30px;
        font-weight: 600;
        overflow: hidden;
        letter-spacing: 0.02em;
        background-color: #00aeef;
    }

    .btn-style-one:hover {
        background-color: #0794c9;
        color: #ffffff;
    }

    .about-section {
        position: relative;
        padding: 120px 0 70px;
    }

    .about-section .sec-title {
        margin-bottom: 45px;
    }

    .about-section .content-column {
        position: relative;
        margin-bottom: 50px;
    }

    .about-section .content-column .inner-column {
        position: relative;
        /* padding-left: 30px; */
    }

    .about-section .text {
        margin-bottom: 20px;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
    }

    .about-section .list-style-one {
        margin-bottom: 45px;
    }

    .about-section .btn-box {
        position: relative;
    }

    .about-section .btn-box a {
        padding: 15px 50px;
    }

    .about-section .image-column {
        position: relative;
    }

    .about-section .image-column .text-layer {
        position: absolute;
        right: -110px;
        top: 50%;
        font-size: 325px;
        line-height: 1em;
        color: #ffffff;
        margin-top: -175px;
        font-weight: 500;
    }

    .about-section .image-column .inner-column {
        position: relative;
        padding-left: 80px;
        padding-bottom: 0px;
    }

    .about-section .image-column .inner-column .author-desc {
        position: absolute;
        bottom: 16px;
        z-index: 1;
        background: orange;
        padding: 10px 15px;
        left: 96px;
        width: calc(100% - 152px);
        border-radius: 50px;
    }

    .about-section .image-column .inner-column .author-desc h2 {
        font-size: 21px;
        letter-spacing: 1px;
        text-align: center;
        color: #fff;
        margin: 0;
    }

    .about-section .image-column .inner-column .author-desc span {
        font-size: 16px;
        letter-spacing: 6px;
        text-align: center;
        color: #fff;
        display: block;
        font-weight: 400;
    }

    .about-section .image-column .inner-column:before {
        content: '';
        position: absolute;
        width: calc(50% + 80px);
        height: calc(100% + 160px);
        top: -80px;
        left: -3px;
        background: transparent;
        z-index: 0;
        border: 44px solid rgba(100, 201, 118, 1);
    }

    .about-section .image-column .image-1 {
        position: relative;
    }

    .about-section .image-column .image-2 {
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .about-section .image-column .image-2 img,
    .about-section .image-column .image-1 img {
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        width: 80%;
    }

    .about-section .image-column .video-link {
        position: absolute;
        left: 70px;
        top: 170px;
    }

    .about-section .image-column .video-link .link {
        position: relative;
        display: block;
        font-size: 22px;
        color: #191e34;
        font-weight: 400;
        text-align: center;
        height: 100px;
        width: 100px;
        line-height: 100px;
        background-color: #ffffff;
        border-radius: 50%;
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .about-section .image-column .video-link .link:hover {
        background-color: #191e34;
        color: #ff2222
    }



    @media only screen and (min-width: 300px) and (max-width: 991px) {
        .sec-title h2 {
            font-size: 20px !important;
            margin-top: 80px;
        }

        .data_pag2 {
            margin-top: 80px;
        }
    }
</style>
@section('content')
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">

                            <h2>Builders Valley.com</h2>
                        </div>
                        <div class="text">Finding a good trade person or looking for an appropriate work is a hectic job.
                            But Builders valley makes this process easier for the peoples through our unique match making
                            system. We provide a distinctive platform for the trade persons to get beneficial opportunity to
                            prove themselves.
                        </div>
                        <div class="text">
                            Builders valley team has been working since last 30 years in the construction industry. We have
                            a team of well-trained professionals who are well aware about the market needs and trends. Here
                            are not only the trade businesses but also Builder merchants can enhance their businesses.
                        </div>



                    </div>
                </div>


                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">

                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images">

                                <img src="{{ asset('public\assets\frontend\default\img\slider_img\c1.jpg') }}" /></a>
                        </figure>

                    </div>
                </div>

            </div>

        </div>
    </section>



    <section class="about-section">
        <div class="container">
            <div class="row">

                <div class="image-column col-lg-6 col-md-12 col-sm-12 order-lg-2 order-md-1 ml-auto">
                    <div class="inner-column wow fadeInRight">
                        <figure class="image-1">
                            <a href="#" class="lightbox-image" data-fancybox="images">
                                <img src="{{ asset('public\assets\frontend\default\img\slider_img\c2.jpg') }}" />
                            </a>
                        </figure>
                    </div>
                </div>



                <div class=" col-lg-5 col-md-12 col-sm-12 order-lg-first data_pag2">
                    <div class="inner-column">


                        <div class="text">
                            Once a customer post his job we alert the relevant trade person to get in touch , on the other
                            hand trade persons work history , feedback, and comments will help you to choose the best worker
                            for your project .
                        </div>
                        <div class="text">
                            Now a days construction industry suffering from the shortage of skilled labour, which causes a
                            delay in project completion and sometimes ends with very hefty penalties to the businesses. To
                            avoid this hassle, Builders valley welcome to the individual trade professionals and businesses
                            to use our platform to build a better team for their projects.
                        </div>
                        <div class="text">
                            Builders valley also provides a platform to small and big businesses for their financial growth.
                            Here is not only the trade businesses even the Builder merchants can grow their business by
                            advertising on this forum. By advertising you can enhance the chance to reach highly skilled
                            individuals, businesses and potential customers. At the Builders valley you can be the first to
                            find out recent Builder Merchants offers before the stock finish for your domestic and
                            commercial projects.
                        </div>
                        <div class="text">
                            In our journey towards excellence we are expanding our business to the different countries
                            around the globe. So next time don't forget to search BuildersValley.com in your home town for
                            your next project.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
