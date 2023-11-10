@extends('frontend.default.layouts.app')


<style>
    .site-header {
        font-size: 16px;
        background-color: black;
        border-bottom: 3px solid #3483de;
        height: 50%;
    }









    .backcover {
        background-image: url('https://www.mybuilder.com/assets/bdabfd5/bundles/mybuilderhomepage/images/top-spot/bricklayer.jpg');
        background-size: cover;
        background-position: center;
        height: 90vh;
    }

    .rating-box {
        background-color: #ffffff;
    }



    .star-rating {
        height: 180px;

        display: flex;
        align-items: center;
    }


    .Start-your {
        height: 180px;

        display: flex;
        align-items: center;
    }

    .rated-icon {
        height: 180px;
        display: flex;
        align-items: center;

    }

    .heading.heading-hero,
    .heading.heading-x-large,
    .heading.heading--x-large,
    .heading.heading-large,
    .heading.heading--large,
    .heading.heading-medium,
    .heading.heading--medium,
    .heading.heading-small-alt {
        font-family: 'sofia_probold', "Trebuchet MS", "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", Verdana, "Verdana Ref", sans-serif !important;
        font-weight: bold !important;
    }


    .hire-exc-content {
        display: flex;
        justify-content: center;
        align-items: center;
        background: #eef2f6;
    }



    .inner-div {
        background-color: #eef2f6;
        height: 60px;
        justify-content: center;
    }




    .hp-how-it-works {
        background-color: #eef2f6;
        padding: 40px 0;
        text-align: center;
    }

    .hp-how-it-works h1 {
        font-size: 30px;
        font-weight: bolder;
    }

    .hp-how-it-works__steps {
        list-style: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
    }

    .hp-how-it-works__steps li {
        flex: 0 1 calc(33.33% - 20px);
        max-width: calc(33.33% - 20px);
        margin: 10px;
        padding: 20px;
        text-align: center;
    }

    .hp-how-it-works__steps .image-wrapper {
        margin-bottom: 20px;
    }

    .hp-how-it-works__steps img {
        max-width: 100%;
        height: auto;
    }

    .hp-how-it-works__steps h2 {
        font-size: 20px;
        font-weight: bold;
    }

    .hp-how-it-works__steps p {
        font-size: 16px;
        margin-bottom: 20px;
    }




    .custom-carousel-control {
        background-color: black;
        border-radius: 50%;
        width: 80px !important;
        height: 80px !important;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0.7;
        transition: opacity 0.3s ease;
        margin-top: 10%;
    }

    .custom-carousel-control:hover {
        opacity: 1;
    }

    .custom-carousel-control-icon {
        color: white;
        font-size: 24px;

    }









    .card {
        height: 400px;
        background-color: white;
    }

    .card .card-body {
        padding: 16px 8px !important;
        border-radius: 4px !important;
    }

    .card-body {
        width: 100% !important;
        background-color: white;
        border-radius: 10px;
        padding: 0px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        margin-bottom: 0px !important;
    }

    .feedback-item__rating {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #4CAF50;
        font-weight: bold;
        font-size: medium;
        padding: 5px;
        border-top: 3px solid #51c57d;
        border-bottom: 3px solid #51c57d;
        color: #51c57d;
    }


    .h3,
    h3 {
        font-size: 1rem !important;
    }

    .feedback-item__jobs,
    .feedback-item__feedback {
        color: #b0c0d3;
        font-size: small;
    }

    .feedback-item__feedback {
        color: #4CAF50;
        font-weight: bold;
    }




    .feedback-item__body {
        color: #333;
    }

    .feedback-item__comment {
        font-weight: semibold;
        font-size: large;
        font-style: italic;
        margin-bottom: 1em;
        margin-top: 1em;
        display: flex;

    }

    .text-center {
        text-align: center;
    }

    .feedback-item__posted {
        color: #b0c0d3;
        font-size: revert;
    }

    .slider {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
    }


    .card-body {
        width: 80%;
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        margin-bottom: 10px;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card-body:hover {
        transform: scale(1.02);
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
    }








    .slider-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 410px;
        width: 90vw;
        perspective: 1000px;
        position: relative;
        transform-style: preserve-3d;
        overflow-x: hidden;
        overflow-y: visible;
        background: " #eef2f6";

    }

    .slide {
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 5px;
        width: 20%;
        height: 400px;
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
        width: calc(20% - 20px);
        z-index: 1000;
        transition: all 0.3s ease-in-out;
        opacity: 0;
    }

    .slide .content {
        background-color: #fff;
        padding: 10px 10px;
        text-align: center;
        margin-top: 200px;
        height: 200px;
    }

    .slide.slide-1 {
        transform-origin: right;
        transform: scale(0.95) rotateY(-20deg);
        left: 1.5% !important;
        z-index: 1;
        opacity: 1;
    }

    .slide.slide-2 {
        transform-origin: right;
        transform: rotateY(-10deg);
        left: 20% !important;
        z-index: 2;
        opacity: 1;
    }

    .slide.slide-3 {
        left: 40% !important;
        z-index: 2;
        opacity: 1;
    }

    .slide.slide-4 {
        transform-origin: left;
        transform: rotateY(10deg);
        left: 60% !important;
        z-index: 2;
        opacity: 1;
    }

    .slide.slide-5 {
        transform-origin: left;
        transform: scale(0.95) rotateY(20deg);
        margin-left: 0;
        left: 78.5% !important;
        z-index: 1;
        opacity: 1;
    }

    h2 {
        margin: -40px 0 0;
    }

    img.circle {
        object-fit: cover;
        width: 75px;
        height: 75px;
        border-radius: 50%;
        transform: translateY(calc(-50% - 10px));
    }

    .buttons-container {
        position: absolute;
        bottom: 0;
    }

    .arrow {

        border-radius: 50%;
        border: 1px solid #180000e3;
        cursor: pointer;
        color: #ffffff;
        width: 50px;
        height: 50px;
        margin: 30px 20px 0;
        background: #343944;
    }

    .arrow:hover {
        background: #4c6282 !important;
    }


    .Fanatical-content {
        padding-top: 50px;
        height: 180px;
        display: block;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .hp-trades {
        background-color: #eef2f6;
        /* padding: 50px; */
        text-align: center;
    }

    .hp-trades .heading {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .hp-trades .row-fluid {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: 0 auto;
    }

    .post_btn-box {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .star-content {
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hp-trades .hp-trades__trade-list {
        list-style: none;
        padding: 0;
        text-align: left;
    }

    .span6 {
        width: 248px;
    }

    .hp-trades__trade {
        padding: 0;
        list-style: none;
        line-height: 2em;
        color: #4990e2;
        font-weight: bold;
        margin: 5px 0;
        font-size: normal;
    }


    .hp-trades .hp-trades__trade a {
        color: #007BFF;
        text-decoration: none;
    }


    .hp-trades .hp-trades__trade a:hover {
        text-decoration: underline;
        color: #0056b3;
    }




    .carousel-inner img {
        width: 100%;
        height: 100%;

    }

    .side-controls a {
        font-size: 3rem;
        text-decoration: none;
        display: inline-block;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
    }

    .side-controls a[data-slide=prev] {
        left: -3.1rem;
    }

    .side-controls a[data-slide=next] {
        right: -3.1rem;
    }








    .card {
        height: 400px;
        background-color: white;
    }






    .review_title {
        height: 25px !important;
        padding: 2px;
        width: 100%;
        color: #1f2936;
        font-size: larger;
        font-weight: bolder;
        height: 16px;
        margin-bottom: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .h3,
    h3 {
        font-size: 1rem !important;
    }






    .feedback-item__body {
        color: #333;
    }

    .review_item_comment {
        color: #191919;
        font-size: normal;
        line-height: 16px;
        max-height: 50px;
        overflow: hidden;
        word-wrap: break-word;

    }

    .item_comment {

        color: #191919;
        font-size: 13px;
        line-height: 16px;
        max-height: 50px;
        overflow: hidden;
        word-wrap: break-word;
    }

    .text-center {
        text-align: center;
    }

    .review-card-body {
        height: 200px;
        width: 100%;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
        transition: transform 0.3s ease-in-out;
    }

    .review-card-body:hover {
        transform: translateY(-1px);
    }


    .review-item__posted {
        position: absolute;
        bottom: 10;
        left: 25px;
        height: 30px !important;
        font-weight: 700;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: rgba(0, 0, 0, .6);
    }

    .carousel-item {
        position: relative;
        min-height: 100%;
    }

    .bottom-slider {
        background-color: #eef2f6;
        padding: 20px;
        display: block;
        justify-content: center;
        align-items: center;
    }

    .containerr {
        max-width: 900px;
        width: 100%;
        padding: 15px;

        margin-right: auto;
        margin-left: auto;
    }

    .bottom-slider-heading {

        margin-right: auto;
        margin-left: auto;
    }

    .carousel-inner img {
        width: 100%;
        height: 100%;
    }

    .slider-controls a {
        font-size: 3rem;
        text-decoration: none;
        display: inline-block;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
    }

    .slider-controls a[data-slide=prev] {
        left: -4rem;
    }

    .slider-controls a[data-slide=next] {
        right: -4rem;
    }

    .container {
        background-color: rgba(255, 255, 255, 0.8) !important;
        /* Change the alpha value (0.8) to control the transparency */
    }













    .cascade-slider_container {
        position: relative;
        max-width: 1000px;
        height: 40vh;
        margin: 0 auto;
    }

    .cascade-slider_item {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%) scale(0.3);
        transition: all 1s ease;
        opacity: 0;
        z-index: -1;
    }

    .cascade-slider_item.next {
        left: 50%;
        transform: translateY(-50%) translateX(-120%) scale(0.6);
        opacity: 1;
        z-index: 4 !important;
    }

    .cascade-slider_item.prev {
        left: 50%;
        transform: translateY(-50%) translateX(20%) scale(0.6);
        opacity: 1;
        z-index: 2 !important;
    }

    .cascade-slider_item.now {
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%) scale(1);
        opacity: 1;
        z-index: 5;
    }

    .cascade-slider_arrow {
        display: inline-block;
        position: absolute;
        top: 50%;
        cursor: pointer;
        z-index: 5;
        transform: translate(0, -50%);
        color: #fff;
        font-size: 30px;
    }

    .cascade-slider_arrow-left {
        left: -4%;
    }

    .cascade-slider_arrow-right {
        right: -4%;
    }

    .cascade-slider_nav {
        position: absolute;
        bottom: -120px;
        width: 100%;
        text-align: center;
        z-index: 5;
    }

    .cascade-slider_dot {
        display: inline-block;
        width: 1em;
        height: 1em;
        margin: 1em;
        background: #ddd;
        list-style: none;
        cursor: pointer;
    }

    .cascade-slider_dot:hover {
        background: #555;
    }

    .cascade-slider_dot.cur {
        background: #555;
    }

    .cascade-slider_slides img {
        max-width: 150px;
        border-radius: 35px;
    }

    .cascade-slider_item:not(.now) img {
        filter: grayscale(0.95);
    }

    .cascade-slider_arrow img {
        width: 25px;
    }

    @media screen and (min-width: 414px) {
        .cascade-slider_container {
            height: 50vh;
        }

        .cascade-slider_slides img {
            max-width: 200px;
        }
    }

    @media screen and (min-width: 576px) {
        .cascade-slider_container {
            height: 60vh;
        }

        .cascade-slider_slides img {
            max-width: 270px;
        }
    }

    @media screen and (min-width: 768px) {
        .cascade-slider_item.next {
            left: 50%;
            transform: translateY(-50%) translateX(-125%) scale(0.6);
            opacity: 1;
            z-index: 1;
        }

        .cascade-slider_item.prev {
            left: 50%;
            transform: translateY(-50%) translateX(25%) scale(0.6);
            opacity: 1;
            z-index: 1;
        }

        .cascade-slider_slides img {
            max-width: 250px;
        }
    }

    @media screen and (min-width: 991px) {
        .cascade-slider_item.next {
            left: 50%;
            transform: translateY(-50%) translateX(-115%) scale(0.55);
            opacity: 1;
            z-index: 4 !important;
        }

        .cascade-slider_item.prev {
            left: 50%;
            transform: translateY(-50%) translateX(15%) scale(0.55);
            opacity: 1;
            z-index: 4 !important;
        }

        .cascade-slider_item.next2 {
            left: 50%;
            transform: translateY(-50%) translateX(-150%) scale(0.37);
            opacity: 1;
            z-index: 1 !important;
        }

        .cascade-slider_item.prev2 {
            left: 50%;
            transform: translateY(-50%) translateX(50%) scale(0.37);
            opacity: 1;
            z-index: 2 !important;
        }

        .cascade-slider_slides img {
            max-width: 300px;
        }

        .cascade-slider_container {
            height: 67vh;
        }
    }

    @media screen and (min-width: 1100px) {
        .cascade-slider_item.next {
            left: 50%;
            transform: translateY(-50%) translateX(-130%) scale(0.55);
            opacity: 1;
            z-index: 4 !important;
        }

        .cascade-slider_item.prev {
            left: 50%;
            transform: translateY(-50%) translateX(30%) scale(0.55);
            opacity: 1;
            z-index: 4 !important;
        }

        .cascade-slider_item.next2 {
            left: 50%;
            transform: translateY(-50%) translateX(-180%) scale(0.37);
            opacity: 1;
            z-index: 1 !important;
        }

        .cascade-slider_item.prev2 {
            left: 50%;
            transform: translateY(-50%) translateX(80%) scale(0.37);
            opacity: 1;
            z-index: 2 !important;
        }

        .cascade-slider_slides img {
            max-width: 350px;
        }
    }

    .cascade-slider_arrow i {
        color: red;
        /* Change 'red' to your desired arrow color */
    }




    /* //////bottom/.//////////////// */


    .bottom-box {
        display: flex;
        justify-content: center;
        align-items: center;


    }

    .parallelogram-bottom {
        width: 500px;
        height: 300px;
        transform: skew(-10deg);
        background-image: url('https://www.mybuilder.com/assets/bdabfd5/bundles/mybuilderhomepage/images/top-spot/bricklayer.jpg');
        background-size: cover;
        background-position: center;
    }


    .background-element {
        background: url(../bundles/mybuilderhomepage/images/trade-footer.jpg);
        /* Additional background properties, e.g., background-size, background-position, etc. */
    }

    .aiz-main-wrapper {
        background: white !important;
    }
















    .custom-slider {
        position: relative;

        /* Change this height as needed */
        overflow: hidden;
        height: 600px;

    }

    @media only screen and (min-width: 376px) and (max-width: 600px) {
        .custom-slider {
            height: 500px;
        }
    }

    @media only screen and (min-width: 601px) and (max-width: 1024px) {
        .custom-slider {
            height: 700px;
        }
    }


    @media only screen and (min-width: 1025px) and (max-width: 1440px) {
        .custom-slider {
            height: 800px;
        }
    }

    @media only screen and (min-width: 1441px) {
        .custom-slider {
            height: 900px;
        }
    }

    /* .custom-slide {
        display: none;
        position: absolute;
        width: 100%;
        height: 100%;
    } */
    .custom-slide {
        position: absolute;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        width: 100%;
        height: 100%;
        padding: 0px !important;
    }

    .custom-slide.active {
        opacity: 1;
    }

    /* .custom-slide img {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            object-fit: cover;
        
        } */

    .custom-slide img {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;


    }

    .custom-content {
        position: absolute;
        background: rgba(0, 0, 0, 0.5);

        z-index: 1;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;

    }

    .custom-content-inner {
        position: absolute;
        margin-bottom: 20px;
        color: #fff;
        z-index: 1;
        bottom: 0;
        left: 0;
        width: 100%;

        display: flex;
        flex-direction: column;
        /* Set the flex direction to column to stack the elements vertically */
        justify-content: center;
        align-items: center;
    }

    /* Media query for small screens (full width) */
    @media (max-width: 768px) {
        .custom-content-inner h1 {
            width: 100%;
        }
    }

    /* Media query for medium and large screens (50% width) */
    @media (min-width: 769px) {
        .custom-content-inner h1 {
            width: 50%;
        }
    }




    /* Media query for small screens (full width) */
    @media (max-width: 768px) {
        .custom-content-inner h2 {
            width: 100%;

        }
    }

    /* Media query for medium and large screens (50% width) */
    @media (min-width: 769px) {
        .custom-content-inner h2 {
            width: 50%;

        }
    }

    .custom-content-inner h1 {
        margin: 0;
        /* Remove any default margins on the h3 element */
        color: #ffffff;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        /* letter-spacing: 2px; */

    }

    .custom-content-inner h5 {
        margin: 0;

        color: #ffffff;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        /* letter-spacing: 2px; */

    }

    .overlay {
        height: 75px !important;
        opacity: 0.84 !important;
        fill: rgb(255, 255, 255) !important;
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 1;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        margin-top: auto;
        display: flex;
        justify-content: center;
        align-items: center;

    }




    .lp-header__heading {
        font-size: 60px;
        font-weight: bold;
        line-height: 1.1em;
        font-family: 'sofia_probold', "Trebuchet MS", "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", Verdana, "Verdana Ref", sans-serif;

        margin-bottom: 0.4em
    }

    .sub-heading {
        font-weight: bold;
        font-size: 24px;
        font-family: 'sofia_probold', "Trebuchet MS", "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", Verdana, "Verdana Ref", sans-serif;
        margin-right: 28px;
        color: #343944;
    }

    .lp-header__subheading {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 1.5em;
    }



    .p-4 h2 {
        font-weight: bolder !important;
        font-size: 21px !important;
        margin-bottom: 15px !important;
        text-align: center !important;

    }

    .p-4 p {
        font-size: 15px !important;
        line-height: 1.5 !important;
        text-align: center !important;
        color: #333 !important;
    }


    .rounded {

        border: 2px solid #dadee6;
        border-radius: 6%;

    }


    .sign_backcover {
        background-image: url("{{ asset('public/assets/frontend/default/img/how_its_work_mge/mobile_use.jpg') }}");
        background-size: cover;
        background-position: center;
        width: 150px !important;
        border-radius: 50%;
        height: 150px !important;



    }


    .respond_backcover {
        background-image: url("{{ asset('public/assets/frontend/default/img/how_its_work_mge/feedback.jpg') }}");
        background-size: cover;
        background-position: center;
        width: 150px !important;
        height: 150px;
        border-radius: 50%;

    }

    .postjob_backcover {
        background-image: url("{{ asset('public/assets/frontend/default/img/how_its_work_mge/laptop_use.jpg') }}");
        background-size: cover;
        background-position: center;
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }
</style>



















@section('content')


    @if (get_setting('slider_section_show') == 'on')
        <section class="position-relative " >



            <div class="row">
                <div class="custom-slider col-md-12">
                    <div class="custom-slide">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\global 2.jpg') }}" />

                        <div class="custom-content">
                            <div class="custom-content-inner">

                                <h1>We are Everywhere</h1>
                                <h5>Builder’s Valley offers a complete solution if you're looking for a new project or
                                    searching

                                    <div class=" lp-header__content">
                                        <a title="Post a job today and we'll alert the relevant tradespeople."
                                            href="{{ route('register') }}" class="btn--lp">Post a job</a>
                                        <a title="Start winning more work" href="{{ route('register') }}"
                                            class="btn--hollow">Trade sign
                                            up</a>

                                        <a title="Start winning more work" href="{{ route('register') }}"
                                            class="btn--hollow">
                                            Trade Career</a>

                                        <a title="Start winning more work" href="{{ route('register') }}"
                                            class="btn--hollow">Employee Trade Worker</a>

                                    </div>

                            </div>

                        </div>
                    </div>
                    <div class="custom-slide">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\slider2.jpg') }}" />
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <h1>We are all here.</h1>
                                <h5>Now you don't need your neighbor's recommendations. We're providing the complete
                                    solution.
                                </h5>
                                <div class="lp-header__content">
                                    <a title="Post a job today and we'll alert the relevant tradespeople."
                                        href="{{ route('register') }}" class="btn--lp">Post a job</a>
                                    <a title="Start winning more work" href="{{ route('register') }}"
                                        class="btn--hollow">Trade
                                        sign
                                        up</a>

                                    <a title="Start winning more work" href="{{ route('register') }}" class="btn--hollow">
                                        Trade Career</a>

                                    <a title="Start winning more work" href="{{ route('register') }}"
                                        class="btn--hollow">Employee Trade Worker</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-slide">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\slider3.jpg') }}" />
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <h1>Join today and become a proud member of the Builder's Valley community.</h1>
                                <h5>If you are recruiting people across the country , internationally
                                    or you are looking for a new career, join today.</h5>

                                <div class="lp-header__content">
                                    <a title="Post a job today and we'll alert the relevant tradespeople."
                                        href="{{ route('register') }}" class="btn--lp">Post a job</a>
                                    <a title="Start winning more work" href="{{ route('register') }}"
                                        class="btn--hollow">Trade
                                        sign
                                        up</a>

                                    <a title="Start winning more work" href="{{ route('register') }}" class="btn--hollow">
                                        Trade Career</a>

                                    <a title="Start winning more work" href="{{ route('register') }}"
                                        class="btn--hollow">Employee Trade Worker</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-slide">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\slider4.jpg') }}" />
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <h1>Builder's Valley now makes it easier for you to find a local professional trade worker
                                    in
                                    your area</h1>
                                <div class="lp-header__content">
                                    <a title="Post a job today and we'll alert the relevant tradespeople."
                                        href="{{ route('register') }}" class="btn--lp">Post a job</a>
                                    <a title="Start winning more work" href="{{ route('register') }}"
                                        class="btn--hollow">Trade
                                        sign
                                        up</a>

                                    <a title="Start winning more work" href="{{ route('register') }}" class="btn--hollow">
                                        Trade Career</a>

                                    <a title="Start winning more work" href="{{ route('register') }}"
                                        class="btn--hollow">Employee Trade Worker</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="overlay">
                        <div class="lp-header__content">
                            <a title="Post a job today and we'll alert the relevant tradespeople."
                                href="{{ route('register') }}" class="btn--lp">Post a job</a>
                            <a title="Start winning more work" href="{{ route('register') }}" class="btn--hollow">Trade sign
                                up</a>
                        </div>
                    </div> --}}
                </div>
            </div>






            {{-- <div class="container">
                <div class="post_btn-box">
                    <div class="col-md-7 star-content">
                        <h1 class="heading heading--x-large">Don't just take our word for it</h1>
                    </div>
                    <div class="col-md-3 star-rating ">

                        <img src="{{ my_asset('assets\frontend\default\img\rating.png') }}" />

                    </div>
                    <div class="col-md-3 rated-icon">
                        <img height="125" alt="Mumsnet rated 2019"
                            src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/mumsnet.png"
                            data-lazyimg=""
                            data-src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/mumsnet.png">
                    </div>
                </div>
            </div> --}}
        </section @endif
        @if (get_setting('client_logo_show') == 'on')
            <section class="bg-white py-4 ">
                {{-- <div class ="container">
                    <div class="hire-exc-content ">

                        <div class="col-md-8">

                            <section class="hp-how-it-works ">

                                <h1 class="heading heading--x-large">Hire an exceptional tradesperson</h1>

                                <ol class="row-fluid hp-how-it-works__steps">
                                    <li title="Post a job today and we'll alert the relevant tradespeople." class="span8">
                                        <div class="image-wrapper">
                                            <img class="svg-img"
                                                src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/step1@2x.png"
                                                data-lazyimg=""
                                                data-src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/step1@2x.png"
                                                alt="Step 1 Illustration of some one posting a job on their phone">
                                        </div>
                                        <h2 class="heading heading--medium">
                                            Post a job today
                                        </h2>
                                        <p>Tell us about your job, and we'll alert suitable<br> tradespeople in your area.
                                            It’s
                                            simple and free.</p>
                                    </li>
                                    <li class="span8">
                                        <div class="image-wrapper">
                                            <img class="svg-img"
                                                src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/step2@2x.png"
                                                data-lazyimg=""
                                                data-src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/step2@2x.png"
                                                alt="Step 2 Illustration of a tradesperson responding to a posted job">
                                        </div>
                                        <h2 class="heading heading--medium">
                                            Tradespeople respond
                                        </h2>
                                        <p>Once your job is posted, you'll get responses from<br> interested tradespeople
                                            through
                                            the website.</p>
                                    </li>
                                    <li class="span8">
                                        <div class="image-wrapper">
                                            <img class="svg-img"
                                                src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/step3-@2x.png"
                                                data-lazyimg=""
                                                data-src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/step3-@2x.png"
                                                alt="Step 3 Illustration of a list of trade profiles to choose from">
                                        </div>
                                        <h2 class="heading heading--medium">
                                            Review and choose
                                        </h2>
                                        <p>Browse profiles, work history, and feedback, then <br>choose who you wish to
                                            share your
                                            details with.</p>
                                    </li>
                                </ol>
                                <a class="btn--lp" href="/how-it-works">See how it works</a>

                            </section>

                        </div>
                    </div>

                </div> --}}




                <div class="container" style="height: auto ;">
                    <div class="py-3">

                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-md-6 " style="margin-bottom: 10px;position: relative;">
                                <div class="px-xl-5 px-md-3 mb-4 text-center rounded"
                                    style="height: 100%; display: flex; flex-direction: column;">

                                    <div class="p-4" style="height: 70%;">
                                        <h2>Post your job</h2>
                                        <p>Sign up to our online platform to start posting your home improvement projects
                                            and connect with trustworthy tradespeople.</p>
                                    </div>

                                    <div style="text-align: center;">
                                        <a title="Post a job today and we'll alert the relevant tradespeople."
                                            href="http://localhost/mybuilder/register" class="btn--lp">Post a job</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6" style="margin-bottom: 10px;position: relative;">
                                <div class="px-xl-5 px-md-3 mb-4 text-center rounded"
                                    style="height: 100%; display: flex; flex-direction: column;">

                                    <div class="p-4" style="height: 70%;">
                                        <h2>Trade sign up</h2>
                                        <p>Once your business is registered, you can choose from the many jobs available
                                            across the country.</p>
                                    </div>

                                    <div style="text-align: center;">
                                        <a title="Post a job today and we'll alert the relevant tradespeople."
                                            href="http://localhost/mybuilder/register" class="btn--lp1 ">Join Our Site</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-md-6" style="margin-bottom: 10px;position: relative;">
                                <div class="px-xl-5 px-md-3 mb-4 text-center rounded"
                                    style="height: 100%; display: flex; flex-direction: column; ;">

                                    <div class="p-4" style="height: 70%;">
                                        <h2>Find Employment</h2>
                                        <p>Businesses across the country & internationally are searching for skilled people
                                            to join their team. Find your next role here.</p>
                                    </div>

                                    <div style="text-align: center;">
                                        <a title="Post a job today and we'll alert the relevant tradespeople."
                                            href="http://localhost/mybuilder/register" class="btn--lp2">Career
                                            Opportunities</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>









                {{-- 
ADVETISMENT SLIDER --}}


                {{--                
                <div class="bottom-slider col-md-12 ">
                    <div class="container" style="  background-color: #eef2f6 !important;">


                        <div class="col-md-12 mt-5">

                            <!-- Multiple Slider -->
                            <div id="adv-slider" class="carousel" data-ride="carousel" data-interval="5000">


                                <!-- Slideshow -->
                                <div class="carousel-inner"
                                    style=" justify-content: center; align-items: center; height: 200px;">

                                    <!-- First item -->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="review-card-body ">
                                                    <div class="top-row">
                                                        <h3 class="feedback-row-title">
                                                            <a href="/profile/view/broderick_building_services">Broderick
                                                                Building
                                                                Services</a>
                                                        </h3>

                                                    </div>

                                                    <div class="review_title">

                                                        Received positive feedback

                                                    </div>
                                                    <div class="item_comment">
                                                        <p class="feedback-item__body text-center">
                                                            <span class="review_item_comment">Really great work thank you.
                                                                Didn’t ask
                                                                for all payment up front and paid as the work was
                                                                completed</span>
                                                        </p>
                                                    </div>
                                                    <div class="review-item__posted ">
                                                        <span>Received
                                                            <span>2 hours 5 minutes ago</span></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Rest of the items -->
                                    <div class="carousel-item ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="review-card-body ">
                                                    <div class="top-row">
                                                        <h3 class="feedback-row-title">
                                                            <a href="/profile/view/broderick_building_services">Broderick
                                                                Building
                                                                Services</a>
                                                        </h3>

                                                    </div>

                                                    <div class="review_title">

                                                        Received positive feedback

                                                    </div>
                                                    <div class="item_comment">
                                                        <p class="feedback-item__body text-center">
                                                            <span class="review_item_comment">Really great work thank you.
                                                                Didn’t ask
                                                                for all payment up front and paid as the work was
                                                                completed</span>
                                                        </p>
                                                    </div>
                                                    <div class="review-item__posted ">
                                                        <span>Received
                                                            <span>2 hours 5 minutes ago</span></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="review-card-body ">
                                                    <div class="top-row">
                                                        <h3 class="feedback-row-title">
                                                            <a href="/profile/view/broderick_building_services">Broderick

                                                                Services</a>
                                                        </h3>

                                                    </div>

                                                    <div class="review_title">

                                                        Received positive feedback

                                                    </div>
                                                    <div class="item_comment">
                                                        <p class="feedback-item__body text-center">
                                                            <span class="review_item_comment">Really great work thank you.
                                                                Didn’t ask
                                                                for all payment up front and paid as the work was
                                                                completed</span>
                                                        </p>
                                                    </div>
                                                    <div class="review-item__posted ">
                                                        <span>Received
                                                            <span>2 hours 5 minutes ago</span></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="review-card-body ">
                                                    <div class="top-row">
                                                        <h3 class="feedback-row-title">
                                                            <a href="/profile/view/broderick_building_services">Broderick
                                                                Building
                                                            </a>
                                                        </h3>

                                                    </div>

                                                    <div class="review_title">

                                                        Received positive feedback

                                                    </div>
                                                    <div class="item_comment">
                                                        <p class="feedback-item__body text-center">
                                                            <span class="review_item_comment">Really great work thank you.
                                                                Didn’t ask
                                                                for all payment up front and paid as the work was
                                                                completed</span>
                                                        </p>
                                                    </div>
                                                    <div class="review-item__posted ">
                                                        <span>Received
                                                            <span>2 hours 5 minutes ago</span></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="review-card-body ">
                                                    <div class="top-row">
                                                        <h3 class="feedback-row-title">
                                                            <a href="/profile/view/broderick_building_services">Broderick
                                                                Building
                                                                Services</a>
                                                        </h3>

                                                    </div>

                                                    <div class="review_title">

                                                        Received feedback

                                                    </div>
                                                    <div class="item_comment">
                                                        <p class="feedback-item__body text-center">
                                                            <span class="review_item_comment">Really great work thank you.
                                                                Didn’t ask
                                                                for all payment up front and paid as the work was
                                                                completed</span>
                                                        </p>
                                                    </div>
                                                    <div class="review-item__posted ">
                                                        <span>Received
                                                            <span>2 hours 5 minutes ago</span></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="review-card-body ">
                                                    <div class="top-row">
                                                        <h3 class="feedback-row-title">
                                                            <a href="/profile/view/broderick_building_services">
                                                                Building
                                                                Services</a>
                                                        </h3>

                                                    </div>

                                                    <div class="review_title">

                                                        Received positive feedback

                                                    </div>
                                                    <div class="item_comment">
                                                        <p class="feedback-item__body text-center">
                                                            <span class="review_item_comment">Really great work thank you.
                                                                Didn’t ask
                                                                for all payment up front and paid as the work was
                                                                completed</span>
                                                        </p>
                                                    </div>
                                                    <div class="review-item__posted ">
                                                        <span>Received
                                                            <span>2 hours 5 minutes ago</span></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div> --}}













                <div class="container" style="height: auto ; ">
                    <div class="py-3">

                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-md-6 " style="margin-bottom: 10px;position: relative;">
                                <div class="px-xl-5 px-md-3 mb-4 text-center "
                                    style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">

                                    <div class="p-4 text-center">
                                        <h2 style="color: green !important">Find the right tradespeople for your job!</h2>
                                        <p>Builder’s valley understands that finding tradespeople you can trust is a
                                            challenge.</p>
                                        <div class="col-md-7 mx-auto">
                                            <p>Our site is an online platform for a variety of tradespeople. You can post
                                                your job, tradespeople will respond, and then you can review each business
                                                and choose the right one for you!</p>
                                        </div>
                                    </div>


                                    <div style="text-align: center;margin-bottom: 15px !important;">
                                        <a title="Post a job today and we'll alert the relevant tradespeople."
                                            href="http://localhost/mybuilder/register" class="btn--hollow">CONTACT US </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-md-12 bg_content">


                    <div class="container bg_content" style="padding:0px">
                        <div class="py-3 bg_content">
                            <div class="w-xl-50 w-lg-75 mx-auto my-5 text-center">
                                <h2 class="fw-700 fs-30">How it Works</h2>

                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-md-6">
                                    <div class="col-md-12"
                                        style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <div class="sign_backcover">
                                            <!-- Content of sign_backcover -->
                                        </div>

                                        <div class="p-4" style="height: 250px !important;">
                                            <h2><span style="color: green;">1</span> Sign up</h2>
                                            <p>Joining as a homeowner/customer is a competitively priced way for you to
                                                access skilled tradespeople across the country.</p>
                                            <p>Only approved members can post in our forums.</p>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-xl-4 col-md-6">
                                    <div class="col-md-12"
                                        style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <div class="postjob_backcover ">

                                        </div>

                                        <div class="p-4" style="height:250px !important ;">
                                            <h2><span style="color: green;">2</span> Post a job </h2>
                                            <p>Once you’ve joined our site, you’ll be able to post the details for the
                                                project you need to hire a tradesperson for remember to include your
                                                location, photos and if you have one a budget.</p>
                                        </div>
                                    </div>


                                </div>


                                <div class="col-xl-4 col-md-6">
                                    <div class="col-md-12"
                                        style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <div class="respond_backcover ">

                                        </div>

                                        <div class="p-4">
                                            <h2><span style="color: green;">3</span> Respond to messages </h2>
                                            <p>Companies that have joined our site will be able to see your job postings.
                                                You can then contact them directly to arrange a quote.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>







                        </div>
                    </div>
                </div>
                </div>
                {{-- <div class="post_btn-box" style="background: #eef2f6 ">
                    <div class="col-md-12 Fanatical-content">
                        <h2 class="heading heading--x-large">Fanatical about&nbsp;feedback</h2>
                        <div>

                            <p>The best way to know a tradesperson is to listen to<br> their customers.<br>
                                Feedback isn't just a feature on<br> MyBuilder. We've built our whole business on it.</p>
                        </div>
                    </div>

                </div> --}}

                {{-- ////try////////////////////////////////////////////////////////////////////////// --}}

                {{-- <div class="container p-mainContainer overflow-hidden">
                    <div class="mainContent ">
                        <!-- Start of 3D Slider -->
                        <section class="sliders mt-5 pt-3">
                            <!-- 3d Slider -->
                            <div class="cascade-slider_container" id="cascade-slider">
                                <div class="cascade-slider_slides">
                                    <div class="cascade-slider_item ">
                                        <a href="javvascript:void(0)">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cascade-slider_item ">
                                        <a href="javvascript:void(0)">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>

                                        </a>
                                    </div>
                                    <div class="cascade-slider_item ">
                                        <a href="javvascript:void(0)">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cascade-slider_item ">
                                        <a href="javvascript:void(0)">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cascade-slider_item">
                                        <a href="javvascript:void(0)">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cascade-slider_item ">
                                        <a href="javvascript:void(0)">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cascade-slider_item ">
                                        <a href="javvascript:void(0)">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </span>
                                <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </div>
                        </section>
                        <!-- End of 3D Slider and TNC -->
                    </div>
                </div> --}}
                {{-- ///////////////////////////////feedback slider//////////////////// --}}
                {{-- <div class="row">
                    <div class="   col-md-12 d-flex justify-content-center align-items-center" style="background: #eef2f6 ">

                        <div>
                            <button class="arrow left">
                                <i class="fa fa-arrow-left fa-2x"></i>
                            </button>
                        </div>
                        <div class="slider-container">



                            <div class="slide slide-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="feedback-item__header">
                                            <h3 class="feedback-item__username">
                                                <a href="/profile/view/broderick_building_services">Broderick Building
                                                    Services</a>
                                            </h3>
                                            <p>
                                                <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                            </p>
                                        </div>

                                        <div class="feedback-item__rating">

                                            Received positive feedback

                                        </div>

                                        <p class="feedback-item__body text-center">
                                            <span class="feedback-item__comment">Really great work thank you. Didn’t ask
                                                for all payment up front and paid as the work was completed, so clean
                                                and
                                                tidy I didn’t even know we had...</span>
                                            <br>
                                            <span class="feedback-item__posted">Received
                                                <span class="feedback-item__time timeago"
                                                    title="2023-10-04T06:52:31+01:00">2
                                                    hours 5
                                                    minutes ago</span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="slide slide-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="feedback-item__header">
                                            <h3 class="feedback-item__username">
                                                <a href="/profile/view/broderick_building_services">Broderick Building
                                                    Services</a>
                                            </h3>
                                            <p>
                                                <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                            </p>
                                        </div>

                                        <div class="feedback-item__rating">

                                            Received positive feedback

                                        </div>

                                        <p class="feedback-item__body text-center">
                                            <span class="feedback-item__comment">Really great work thank you. Didn’t ask
                                                for all payment up front and paid as the work was completed, so clean
                                                and
                                                tidy I didn’t even know we had...</span>
                                            <br>
                                            <span class="feedback-item__posted">Received
                                                <span class="feedback-item__time timeago"
                                                    title="2023-10-04T06:52:31+01:00">2
                                                    hours 5
                                                    minutes ago</span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="slide slide-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="feedback-item__header">
                                            <h3 class="feedback-item__username">
                                                <a href="/profile/view/broderick_building_services">Broderick Building
                                                    Services</a>
                                            </h3>
                                            <p>
                                                <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                            </p>
                                        </div>

                                        <div class="feedback-item__rating">

                                            Received positive feedback

                                        </div>

                                        <p class="feedback-item__body text-center">
                                            <span class="feedback-item__comment">Really great work thank you. Didn’t
                                                ask
                                                for all payment up front and paid as the work was completed, so clean
                                                and
                                                tidy I didn’t even know we had...</span>
                                            <br>
                                            <span class="feedback-item__posted">Received
                                                <span class="feedback-item__time timeago"
                                                    title="2023-10-04T06:52:31+01:00">2
                                                    hours 5
                                                    minutes ago</span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="slide slide-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="feedback-item__header">
                                            <h3 class="feedback-item__username">
                                                <a href="/profile/view/broderick_building_services">Broderick Building
                                                    Services</a>
                                            </h3>
                                            <p>
                                                <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                            </p>
                                        </div>

                                        <div class="feedback-item__rating">

                                            Received positive feedback

                                        </div>

                                        <p class="feedback-item__body text-center">
                                            <span class="feedback-item__comment">Really great work thank you. Didn’t
                                                ask
                                                for all payment up front and paid as the work was completed, so clean
                                                and
                                                tidy I didn’t even know we had...</span>
                                            <br>
                                            <span class="feedback-item__posted">Received
                                                <span class="feedback-item__time timeago"
                                                    title="2023-10-04T06:52:31+01:00">2
                                                    hours 5
                                                    minutes ago</span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="slide slide-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="feedback-item__header">
                                            <h3 class="feedback-item__username">
                                                <a href="/profile/view/broderick_building_services">Broderick Building
                                                    Services</a>
                                            </h3>
                                            <p>
                                                <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                            </p>
                                        </div>

                                        <div class="feedback-item__rating">

                                            Received positive feedback

                                        </div>

                                        <p class="feedback-item__body text-center">
                                            <span class="feedback-item__comment">Really great work thank you. Didn’t
                                                ask
                                                for all payment up front and paid as the work was completed, so clean
                                                and
                                                tidy I didn’t even know we had...</span>
                                            <br>
                                            <span class="feedback-item__posted">Received
                                                <span class="feedback-item__time timeago"
                                                    title="2023-10-04T06:52:31+01:00">2
                                                    hours 5
                                                    minutes ago</span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="slide slide-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="feedback-item__header">
                                            <h3 class="feedback-item__username">
                                                <a href="/profile/view/broderick_building_services">Broderick Building
                                                    Services</a>
                                            </h3>
                                            <p>
                                                <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                            </p>
                                        </div>

                                        <div class="feedback-item__rating">

                                            Received positive feedback

                                        </div>

                                        <p class="feedback-item__body text-center">
                                            <span class="feedback-item__comment">Really great work thank you. Didn’t
                                                ask
                                                for all payment up front and paid as the work was completed, so clean
                                                and
                                                tidy I didn’t even know we had...</span>
                                            <br>
                                            <span class="feedback-item__posted">Received
                                                <span class="feedback-item__time timeago"
                                                    title="2023-10-04T06:52:31+01:00">2
                                                    hours 5
                                                    minutes ago</span></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="arrow right">
                                <i class="fa fa-arrow-right fa-2x"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="container">
                    <div class="col-md-10 mt-5">

                  
                        <div id="custom-slider" class="carousel" data-ride="carousel">

                     
                            <div class="text-center mb-4 slider-controls">
                                <a href="#custom-slider" data-slide="prev">
                                    <i class="fas fa-chevron-circle-left"></i>
                                </a>
                                <a href="#custom-slider" data-slide="next">
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a>
                            </div>

                  
                            <div class="carousel-inner">

                   
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                       
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">Broderick
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">Broderick
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">Broderick
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">Broderick
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t
                                                        ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <div class="feedback-item__header">
                                                    <h3 class="feedback-item__username">
                                                        <a href="/profile/view/broderick_building_services">Broderick
                                                            Building
                                                            Services</a>
                                                    </h3>
                                                    <p>
                                                        <span class="feedback-item__jobs">77&nbsp;feedback,</span>
                                                        <span class="feedback-item__feedback">99%&nbsp;positive</span>
                                                    </p>
                                                </div>

                                                <div class="feedback-item__rating">

                                                    Received positive feedback

                                                </div>

                                                <p class="feedback-item__body text-center">
                                                    <span class="feedback-item__comment">Really great work thank you.
                                                        Didn’t ask
                                                        for all payment up front and paid as the work was completed, so
                                                        clean
                                                        and
                                                        tidy I didn’t even know we had...</span>
                                                    <br>
                                                    <span class="feedback-item__posted">Received
                                                        <span class="feedback-item__time timeago"
                                                            title="2023-10-04T06:52:31+01:00">2
                                                            hours 5
                                                            minutes ago</span></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </section>

            {{-- Builder FOR  any JOB --}}
            <div class="col-md-12" style="background:#eef2f6">
                <div class="container" style ="padding: 0px">
                    <div class="col-md-12 d-flex justify-content-center align-items-center" style="background: #eef2f6 ">
                        <section class="hp-trades">
                            <h2 class="fw-700 fs-30"> Our line directory is the perfect place to find </h2>

                            <div class="row-fluid">
                                <div class="row">
                                    @isset($categories)
                                        @php
                                            $categoriesCount = count($categories);
                                            $columnsCount = 4; // Set the number of columns to 4
                                            $itemsPerColumn = ceil($categoriesCount / $columnsCount); // Calculate items per column dynamically
                                            $currentCategoryIndex = 0; // Initialize the current category index
                                        @endphp

                                        @for ($i = 0; $i < $columnsCount; $i++)
                                            <div class="col-md-3 data1">
                                                <ul class="hp-trades__trade-list span6 unstyled">
                                                    @for ($j = 0; $j < $itemsPerColumn; $j++)
                                                        @if ($currentCategoryIndex < $categoriesCount)
                                                            @php
                                                                $category = $categories[$currentCategoryIndex];
                                                                $currentCategoryIndex++;
                                                            @endphp
                                                            <li class="hp-trades__trade">
                                                                <a title="Find the right architectural designer for your project in UK."
                                                                    @php $cat_url = route('services.category',['category_slug' => $category->slug]) @endphp
                                                                    href="{{ $cat_url }}"> {{ $category->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endfor
                                                </ul>
                                            </div>
                                        @endfor
                                    @endisset
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            </section>
            </div>


            {{-- <div class="container" style="background: white !important">
                <div class="post_btn-box ">
                    <div class="col-md-9 star-content">
                        <h1 class="sub-heading heading--x-large">Start your next home improvement project today</h1>
                        <div class ="col-md-3" style="margin-left:20px">
                            <a rel="nofollow" title="Post a job today and we'll alert the relevant tradespeople."
                                href="{{ route('register') }}" class="btn--lp">Post a job</a>
                        </div>

                    </div>


                </div>
            </div> --}}
            {{-- /////bottomSLIDER// --}}
            <div class="bottom-slider col-md-12 ">
                <div class="container" style="  background-color: #eef2f6 !important;">
                    <div class="bottom-slider-heading col-md-4  col-lg-5 pt-2 text-center">
                        <h2 class="fw-700 fs-30">Our customers love&nbsp;us</h2>
                    </div>

                    <div class="col-md-12 mt-5">

                        <!-- Multiple Slider -->
                        <div id="multi-slider" class="carousel" data-ride="carousel">

                            <!-- Controls -->
                            <div class="text-center mb-4 side-controls">
                                <a href="#multi-slider" data-slide="prev">
                                    <i class="fas fa-chevron-circle-left fa-sm"></i>
                                </a>
                                <a href="#multi-slider" data-slide="next">
                                    <i class="fas fa-chevron-circle-right fa-sm"></i>
                                </a>
                            </div>

                            <!-- Slideshow -->
                            <div class="carousel-inner"
                                style=" justify-content: center; align-items: center; height: 200px;">

                                <!-- First item -->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="review-card-body ">
                                                <div class="top-row">
                                                    <h3 class="feedback-row-title">
                                                        <a href="/profile/view/broderick_building_services">Broderick
                                                            Building
                                                            Services</a>
                                                    </h3>

                                                </div>

                                                <div class="review_title">

                                                    Received positive feedback

                                                </div>
                                                <div class="item_comment">
                                                    <p class="feedback-item__body text-center">
                                                        <span class="review_item_comment">Really great work thank you.
                                                            Didn’t ask
                                                            for all payment up front and paid as the work was
                                                            completed</span>
                                                    </p>
                                                </div>
                                                <div class="review-item__posted ">
                                                    <span>Received
                                                        <span>2 hours 5 minutes ago</span></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Rest of the items -->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="review-card-body ">
                                                <div class="top-row">
                                                    <h3 class="feedback-row-title">
                                                        <a href="/profile/view/broderick_building_services">Broderick
                                                            Building
                                                            Services</a>
                                                    </h3>

                                                </div>

                                                <div class="review_title">

                                                    Received positive feedback

                                                </div>
                                                <div class="item_comment">
                                                    <p class="feedback-item__body text-center">
                                                        <span class="review_item_comment">Really great work thank you.
                                                            Didn’t ask
                                                            for all payment up front and paid as the work was
                                                            completed</span>
                                                    </p>
                                                </div>
                                                <div class="review-item__posted ">
                                                    <span>Received
                                                        <span>2 hours 5 minutes ago</span></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="review-card-body ">
                                                <div class="top-row">
                                                    <h3 class="feedback-row-title">
                                                        <a href="/profile/view/broderick_building_services">Broderick

                                                            Services</a>
                                                    </h3>

                                                </div>

                                                <div class="review_title">

                                                    Received positive feedback

                                                </div>
                                                <div class="item_comment">
                                                    <p class="feedback-item__body text-center">
                                                        <span class="review_item_comment">Really great work thank you.
                                                            Didn’t ask
                                                            for all payment up front and paid as the work was
                                                            completed</span>
                                                    </p>
                                                </div>
                                                <div class="review-item__posted ">
                                                    <span>Received
                                                        <span>2 hours 5 minutes ago</span></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="review-card-body ">
                                                <div class="top-row">
                                                    <h3 class="feedback-row-title">
                                                        <a href="/profile/view/broderick_building_services">Broderick
                                                            Building
                                                        </a>
                                                    </h3>

                                                </div>

                                                <div class="review_title">

                                                    Received positive feedback

                                                </div>
                                                <div class="item_comment">
                                                    <p class="feedback-item__body text-center">
                                                        <span class="review_item_comment">Really great work thank you.
                                                            Didn’t ask
                                                            for all payment up front and paid as the work was
                                                            completed</span>
                                                    </p>
                                                </div>
                                                <div class="review-item__posted ">
                                                    <span>Received
                                                        <span>2 hours 5 minutes ago</span></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="review-card-body ">
                                                <div class="top-row">
                                                    <h3 class="feedback-row-title">
                                                        <a href="/profile/view/broderick_building_services">Broderick
                                                            Building
                                                            Services</a>
                                                    </h3>

                                                </div>

                                                <div class="review_title">

                                                    Received feedback

                                                </div>
                                                <div class="item_comment">
                                                    <p class="feedback-item__body text-center">
                                                        <span class="review_item_comment">Really great work thank you.
                                                            Didn’t ask
                                                            for all payment up front and paid as the work was
                                                            completed</span>
                                                    </p>
                                                </div>
                                                <div class="review-item__posted ">
                                                    <span>Received
                                                        <span>2 hours 5 minutes ago</span></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="review-card-body ">
                                                <div class="top-row">
                                                    <h3 class="feedback-row-title">
                                                        <a href="/profile/view/broderick_building_services">
                                                            Building
                                                            Services</a>
                                                    </h3>

                                                </div>

                                                <div class="review_title">

                                                    Received positive feedback

                                                </div>
                                                <div class="item_comment">
                                                    <p class="feedback-item__body text-center">
                                                        <span class="review_item_comment">Really great work thank you.
                                                            Didn’t ask
                                                            for all payment up front and paid as the work was
                                                            completed</span>
                                                    </p>
                                                </div>
                                                <div class="review-item__posted ">
                                                    <span>Received
                                                        <span>2 hours 5 minutes ago</span></span>
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
            {{-- <div class=" col-md-12 " style="background: white">
                <div class="container">

                    <div class="bottom-box">
                        <div class="parallelogram-bottom">


                        </div>

                        <div class="hp-trade-sign-up__content containers " style="margin-left: 30px">
                            <p class=" " style="font-size:large ; font-weight:bold">Become a trade member</p>
                            <h2 class="heading heading--x-large">Start winning more work</h2>
                            <a href={{ route('register') }} class="btn--lp">Apply now</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        @endif
        @if (get_setting('how_it_works_show') == 'on')
            <section class="bg-white py-4">
                <div class="container">
                    <div class="py-3 rounded-2 border-1 border-primary bg-hov-soft-primary">
                        <div class="w-xl-50 w-lg-75 mx-auto my-5 text-center">
                            <h2 class="fw-700 fs-40">{{ get_setting('how_it_works_title') }}</h2>
                            <p class="fs-17 text-secondary">{{ get_setting('how_it_works_subtitle') }}</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-md-6">
                                <div class="px-xl-5 px-md-3 mb-4 text-center">
                                    <img src="{{ get_setting('how_it_works_banner_1') ? custom_asset(get_setting('how_it_works_banner_1')) : my_asset('assets/placeholder.jpg') }}"
                                        class="img-fluid mx-auto">
                                    <div class="p-4">
                                        @php
                                            echo get_setting('how_it_works_description_1');
                                        @endphp
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="px-xl-5 px-md-3 mb-4 text-center">
                                    <img src="{{ get_setting('how_it_works_banner_2') ? custom_asset(get_setting('how_it_works_banner_2')) : my_asset('assets/placeholder.jpg') }}"
                                        class="img-fluid mx-auto">
                                    <div class="p-4">
                                        @php
                                            echo get_setting('how_it_works_description_2');
                                        @endphp
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="px-xl-5 px-md-3 mb-4 text-center">
                                    <img src="{{ get_setting('how_it_works_banner_3') ? custom_asset(get_setting('how_it_works_banner_3')) : my_asset('assets/placeholder.jpg') }}"
                                        class="img-fluid mx-auto">
                                    <div class="p-4">
                                        @php
                                            echo get_setting('how_it_works_description_3');
                                        @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if (get_setting('latest_project_show') == 'on')
            <section class="bg-white py-7">
                <div class="container">
                    <div class="w-lg-75 w-xl-50 lh-1-8 mx-auto mb-5 text-center">
                        <h2 class="fw-700 fs-40">{{ get_setting('latest_project_title') }}</h2>
                        <p class="fs-17 text-secondary">{{ get_setting('latest_project_subtitle') }}</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            @if (\App\Models\SystemConfiguration::where('type', 'project_approval')->first()->value == 1)
                                @php
                                    $projects = \App\Models\Project::biddable()
                                        ->notcancel()
                                        ->open()
                                        ->where('project_approval', 1)
                                        ->latest()
                                        ->get()
                                        ->take(3);
                                @endphp
                            @else
                                @php
                                    $projects = \App\Models\Project::biddable()
                                        ->notcancel()
                                        ->open()
                                        ->latest()
                                        ->get()
                                        ->take(3);
                                @endphp
                            @endif
                            @foreach ($projects as $key => $project)
                                <a href="{{ route('project.details', $project->slug) }}"
                                    class="d-block card-project-rounded card mb-3 text-inherit">
                                    <div class="row">
                                        {{-- card row --}}
                                        {{-- card row --}}
                                        <div class="col-8">
                                            <h5 class="h6 fw-600 lh-1-5">
                                                {{ $project->name }}
                                            </h5>
                                            <ul class="list-inline fs-12 mb-0 opacity-70">
                                                <li class="list-inline-item mr-3">
                                                    {{-- <i class="las la-clock opacity-40"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        viewBox="0 0 12 12">
                                                        <g id="Group_22" data-name="Group 22"
                                                            transform="translate(-365 -1963)">
                                                            <path id="Subtraction_5" data-name="Subtraction 5"
                                                                d="M-13,12a6.007,6.007,0,0,1-6-6,6.007,6.007,0,0,1,6-6A6.007,6.007,0,0,1-7,6,6.006,6.006,0,0,1-13,12Zm-.5-9V7h.013l2.109,2.109.707-.706L-12.5,6.572V3Z"
                                                                transform="translate(384 1963)" fill="#989ea8" />
                                                        </g>
                                                    </svg>
                                                    <span
                                                        class="ml-1">{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</span>
                                                </li>
                                                <li class="list-inline-item mr-3">
                                                    {{-- <i class="las la-stream opacity-40"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11"
                                                        viewBox="0 0 12 11">
                                                        <g id="Group_23" data-name="Group 23"
                                                            transform="translate(-498 -1963)">
                                                            <path id="Subtraction_2" data-name="Subtraction 2"
                                                                d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z"
                                                                transform="translate(498 1963)" fill="#989ea8" />
                                                            <path id="Subtraction_4" data-name="Subtraction 4"
                                                                d="M1.5,0h5a1.5,1.5,0,0,1,0,3h-5a1.5,1.5,0,0,1,0-3Z"
                                                                transform="translate(498 1971)" fill="#989ea8" />
                                                            <path id="Subtraction_3" data-name="Subtraction 3"
                                                                d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z"
                                                                transform="translate(500 1967)" fill="#989ea8" />
                                                        </g>
                                                    </svg>
                                                    <span class="ml-1">{{ $project->project_category->name }}</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    {{-- <i class="las la-handshake"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.643" height="12"
                                                        viewBox="0 0 7.643 12">
                                                        <g id="Group_24" data-name="Group 24"
                                                            transform="translate(-131 -59.8)">
                                                            <path id="Path_9" data-name="Path 9"
                                                                d="M136.142,161.028,133.614,161A3.381,3.381,0,0,0,131,164.281v4.708a.92.92,0,0,0,.917.917h5.809a.92.92,0,0,0,.917-.917v-4.708A3.361,3.361,0,0,0,136.142,161.028Zm-1.321,4.488a1.122,1.122,0,0,1,.306,2.2v.248a.306.306,0,0,1-.611,0v-.248a1.123,1.123,0,0,1-.816-1.079.306.306,0,0,1,.611,0,.511.511,0,1,0,.511-.511,1.122,1.122,0,0,1-.306-2.2v-.183a.306.306,0,1,1,.611,0v.183a1.123,1.123,0,0,1,.816,1.079.306.306,0,1,1-.611,0,.511.511,0,1,0-.511.511Z"
                                                                transform="translate(0 -98.106)" fill="#989ea8" />
                                                            <path id="Path_10" data-name="Path 10"
                                                                d="M219.424,124.641l.15-.52L217.1,124.1l.171.52Z"
                                                                transform="translate(-83.468 -62.334)" fill="#989ea8" />
                                                            <path id="Path_11" data-name="Path 11"
                                                                d="M199.1,61.179l.4-1.379h-3.7l.449,1.351Z"
                                                                transform="translate(-62.819)" fill="#989ea8" />
                                                        </g>
                                                    </svg>
                                                    <span class="ml-1">{{ translate($project->type) }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="fs-30 fw-600">{{ single_price($project->price) }}</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="pt-4 text-center">
                        <a href="{{ route('search') }}?keyword=&type=project"
                            class="btn--lp rounded-1">{{ translate('Check All Projects') }}</a>
                    </div>
                </div>
            </section>
        @endif

        @if (get_setting('featured_category_show') == 'on')
            <section class="bg-white pt-5 pb-4">
                <div class="container">
                    <div class="bg-primary py-7 px-6 rounded-2">
                        <div class="lh-1-8 mx-auto mb-5">
                            <h2 class="fw-700 fs-40 text-white">{{ get_setting('featured_category_title') }}</h2>
                            <p class="fs-17 text-white">{{ get_setting('featured_category_subtitle') }}</p>
                        </div>
                        <div class="row gutters-10">

                            @if (get_setting('featured_category_list') != null)
                                @foreach (json_decode(get_setting('featured_category_list'), true) as $key => $category_id)
                                    @if (($category = \App\Models\ProjectCategory::find($category_id)) != null)
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <a class="featured_category d-block card bg-transparent py-5 px-2 text-center text-inherit shadow-none rounded-2 bg-transparent"
                                                href="{{ route('projects.category', $category->slug) }}"
                                                style="height: 176px;border: 1px solid #ced2d9;">
                                                <img src="{{ custom_asset($category->photo) }}"
                                                    class="mw-100 h-50px mb-2">
                                                <p class="fs-16 fw-600 text-white mb-0">{{ $category->name }}</p>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        {{-- <div class="row gutters-10 mt-5">
                        <div class="col-lg-6">
                            <img src="{{ custom_asset(get_setting('featured_category_left_banner')) }}"
                                class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ custom_asset(get_setting('featured_category_right_banner')) }}"
                                class="img-fluid">
                        </div>
                    </div> --}}
                        <div class="mt-5">
                            <a href="{{ route('search') }}?category="
                                class="btn bg-white
                                text-primary rounded-1">{{ translate('Browse More Categories') }}</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if (get_setting('service_section_show') == 'on')
            <section class="pt-8 pb-2 bg-white">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-xl-6 col-md-8 mx-auto">
                            <div class="text-center">
                                <h2 class="fw-700 fs-40">{{ get_setting('service_section_title') }}</h2>
                                <p class="fs-17 text-secondary">{{ get_setting('service_section_subtitle') }}</p>
                            </div>
                        </div>
                    </div>
                    @php
                        $user_ids = \App\Models\UserPackage::where('package_invalid_at', '!=', null)
                            ->where('package_invalid_at', '>', Carbon\Carbon::now()->format('Y-m-d'))
                            ->pluck('user_id');

                        $services = \App\Models\Service::inRandomOrder()
                            ->whereIn('user_id', $user_ids)
                            ->take(get_setting('max_service_show_homepage'))
                            ->get();
                    @endphp
                    <div class="row">
                        <div class="aiz-carousel gutters-15 w-100" data-items="4" data-xl-items="3" data-md-items="2"
                            data-sm-items="1" data-arrows='true'>
                            @foreach ($services as $service)
                                <div class="caorusel-box">
                                    <div class="card bg-transparent rounded-2 border-gray-light hov-box overflow-hidden">
                                        <a href="{{ route('service.show', $service->slug) }}">
                                            @if ($service->image != null)
                                                <img src="{{ custom_asset($service->image) }}"
                                                    class="card-img-top img-fit" alt="service_image" height="212">
                                            @else
                                                <img src="{{ my_asset('assets/frontend/default/img/placeholder-service.jpg') }}"
                                                    class="card-img-top img-fit" alt="{{ translate('Service Image') }}"
                                                    height="212">
                                            @endif
                                        </a>
                                        <div class="card-body hov-box-body">
                                            <div class="d-flex mb-2">
                                                <span class="mr-2">
                                                    @if ($service->user->photo != null)
                                                        <img src="{{ custom_asset($service->user->photo) }}"
                                                            alt="{{ translate('image') }}" height="35" width="35"
                                                            class="rounded-circle">
                                                    @else
                                                        <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                                                            alt="{{ translate('image') }}" height="35" width="35"
                                                            class="rounded-circle">
                                                    @endif
                                                </span>
                                                <span class="d-flex flex-column justify-content-center">
                                                    <a href="{{ route('freelancer.details', $service->user->user_name) }}"
                                                        class="text-secondary fs-14"><span
                                                            class="font-weight-bold">{{ $service->user->name }}</span></a>
                                                </span>
                                            </div>

                                            <a href="{{ route('service.show', $service->slug) }}" class="text-dark"
                                                title="{{ $service->title }}">
                                                <h5 class="card-title fs-16 fw-700 h-40px">
                                                    {{ \Illuminate\Support\Str::limit($service->title, 45, $end = '...') }}
                                                </h5>
                                            </a>
                                            <div class="text-warning">
                                                <span class="rating rating-lg rating-mr-1">
                                                    {{ renderStarRating(getAverageRating($service->user->id)) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="pt-5 text-center">
                        <a href="{{ route('search') }}?keyword=&type=service"
                            class="btn btn-primary rounded-1">{{ translate('Explore More Services') }}</a>
                    </div>
                </div>
            </section>
        @endif


        @if (get_setting('cta_section_show') == 'on')
            <section class="cta_section py-8 bg-white">
                <div class="container">
                    <div class="bg-white">
                        <div class="row mx-0 sm-no-gutters rounded-2 overflow-hidden">
                            <div class="col-lg-6 px-0">
                                <img src="{{ get_setting('cta_section_banner') ? custom_asset(get_setting('cta_section_banner')) : my_asset('assets/placeholder.jpg') }}"
                                    alt="" class="w-100 h-100">
                            </div>
                            <div class="col-lg-6 px-0">
                                <div class="bg-primary py-6 px-4 h-100">
                                    <nav class="nav mb-3">
                                        <a class="nav-link text-white opacity-50 active" href="#nav-client"
                                            data-toggle="tab">{{ translate('Client') }}</a>
                                        <a class="nav-link text-white opacity-50" href="#nav-freelancer"
                                            data-toggle="tab">{{ translate('Freelancer') }}</a>
                                    </nav>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active " id="nav-client">
                                            <div class="lh-1-8 mx-auto mb-5">
                                                <h2 class="fw-700 fs-40 text-white">
                                                    {{ get_setting('cta_section_title_client') }}</h2>
                                                <p class="fs-16 text-white mt-3">{!! get_setting('cta_section_subtitle_client') !!}</p>
                                            </div>
                                            <div>
                                                <div><a href="{{ route('login') }}"
                                                        class="text-white hov-text-light">{{ translate('Already a Client') }},
                                                        <strong>{{ translate('Login to Get Started') }} <i
                                                                class="las la-long-arrow-alt-right"></i></strong></a></div>
                                                <a href="{{ route('register') }}?type=2"
                                                    class="btn bg-white text-primary hov-text-soft-primary rounded-1 mt-3">{{ translate('Or, Create an Account to Get Started') }}</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="nav-freelancer">
                                            <div class="lh-1-8 mx-auto mb-5">
                                                <h2 class="fw-700 fs-40 text-white">
                                                    {{ get_setting('cta_section_title_freelancer') }}</h2>
                                                <p class="fs-16 text-white mt-3">{!! get_setting('cta_section_subtitle_freelancer') !!}</p>
                                            </div>
                                            <div>
                                                <div><a href="{{ route('login') }}"
                                                        class="text-white hov-text-light">{{ translate('Already a Freelancer') }},
                                                        <strong>{{ translate('Login to Get Started') }} <i
                                                                class="las la-long-arrow-alt-right"></i></strong></a></div>
                                                <a href="{{ route('register') }}?type=1"
                                                    class="btn bg-white text-primary rounded-1 mt-3">{{ translate('Or, Create an Account to Get Started') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if (get_setting('blog_section_show') == 'on')
            <section class="bg-white pt-4 pb-7 text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
                            <div class="section-title mb-5 text-center">
                                <h2 class="fw-700 fs-40 text-dark">{{ get_setting('blog_section_title') }}</h2>
                                <p class="fs-17 text-secondary">{{ get_setting('blog_section_subtitle') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="aiz-carousel gutters-15 w-100" data-items="4" data-xl-items="3" data-md-items="2"
                            data-sm-items="1" data-arrows='true'>
                            @php
                                $blogs = \App\Models\Blog::where('status', 1)
                                    ->latest()
                                    ->limit(get_setting('max_blog_show_homepage'))
                                    ->get();
                            @endphp
                            @foreach ($blogs as $key => $blog)
                                <div class="caorusel-box">
                                    <div class="card text-dark mb-3 overflow-hidden rounded-2 border-gray-light hov-box">
                                        <a href="{{ route('blog.details', $blog->slug) }}" class="text-reset d-block">
                                            <img src="{{ custom_asset($blog->banner) }}" alt="{{ $blog->title }}"
                                                class="card-img-top img-fit" height="212">
                                        </a>
                                        <div class="p-4">
                                            <h2 class="fs-18 fw-600 mb-1 h-45px">
                                                <a href="{{ route('blog.details', $blog->slug) }}"
                                                    class="text-dark fs-16 fw-700" title="{{ $blog->title }}">
                                                    {{ \Illuminate\Support\Str::limit($blog->title, 45, $end = '...') }}
                                                </a>
                                            </h2>
                                            @if ($blog->category != null)
                                                <p class="mt-3 mb-0 text-primary fs-14 fw-700">
                                                    {{ $blog->category->category_name }}</p>
                                            @endif
                                            <p class="mb-4 fs-14 text-secondary opacity-70">
                                                {{ $blog->created_at ? date('d.m.Y', strtotime($blog->created_at)) : '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('blog') }}" class="btn btn-primary rounded-1">{{ translate('View More') }}</a>
                    </div>
                </div>
            </section>
        @endif
    @endsection




    @section('modal')
        @if (
            (Session::has('new_user') && Session::get('new_user') == true) ||
                (auth()->check() && auth()->user()->user_type == null))
            <div class="modal fade" id="show_new_user_modal">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ translate('Choose your account Type') }}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="show_modal_body">
                            <form action="{{ route('user.account.type') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="user_type">{{ translate('User Type') }}</label>
                                    <select name="user_type" id="user_type" class="form-control aiz-selectpicker">
                                        <option value="client">{{ translate('Client') }}</option>
                                        <option value="freelancer">{{ translate('Freelancer') }}</option>
                                    </select>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">{{ translate('Proceed') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endsection




    @section('script')
        @if (
            (Session::has('new_user') && Session::get('new_user') == true) ||
                (auth()->check() && auth()->user()->user_type == null))
            <script>
                $('#show_new_user_modal').modal({
                    show: true
                });
            </script>
        @endif
        <script>
            const leftButton = document.querySelector('.arrow.left');
            const rightButton = document.querySelector('.arrow.right');

            leftButton.addEventListener('click', () => {
                turnSlider('left');
            });

            rightButton.addEventListener('click', () => {
                turnSlider('right');
            });

            function turnSlider(direction) {
                const slides = document.querySelectorAll(`.slide`);
                slides.forEach(slide => {
                    let currentSlide = +(slide.classList + '').split('-')[1];
                    let slideToBe;
                    switch (direction) {
                        case 'left': {
                            slideToBe = currentSlide - 1;
                            if (slideToBe < 1) {
                                slideToBe = slides.length;
                                slide.style.left = '-500px';
                            }
                            break;
                        }
                        case 'right': {
                            slideToBe = currentSlide + 1;
                            if (slideToBe > slides.length) {
                                slideToBe = 1;
                                slide.style.left = '2000px';
                            }
                            break;
                        }
                    }
                    slide.classList.remove(`slide-${currentSlide}`);
                    slide.classList.add(`slide-${slideToBe}`);
                });
            }
        </script>





        <script>
            $(document).ready(function() {

                var opcionesnav = $('.navoption').length;
                var clickhamb = 0;

                $("#hamburger").click(function() {
                    clickhamb = 1;
                    var header = $("#myTopnav");
                    if (header[0].classList.length == 1) {
                        header.addClass("responsive");
                        $("header").height((opcionesnav + 1) * 48);
                        $(".navlist a:not(.icon)").css("display", "block");
                        setTimeout(
                            function() {
                                $(".navlist a:not(.icon)").css("transform", "translateX(0px)");
                            }, 50);

                    } else {
                        $(".navlist a:not(.icon)").css("transform", "translateX(600px)");
                        header.height(48);
                        setTimeout(
                            function() {
                                header.removeClass("responsive");
                                header.height(48);
                                $(".navlist a:not(.icon)").css("display", "none");
                            }, 1600);
                    }
                });


                $(window).on('resize', function() {
                    console.log(clickhamb);
                    if (($(window).width() > 600) && (clickhamb == 1)) {
                        console.log(clickhamb + "     " + $(window).width());
                        $("#myTopnav").height(48);
                        $(".navlist a:not(.icon)").css("display", "block");
                        setTimeout(
                            function() {
                                $(".navlist a:not(.icon)").css("transform", "translateX(0px)");
                            }, 500);
                    }
                });

            });
        </script>

        <script>
            $(document).ready(function() {
                $('#myCustomCarousel').carousel({
                    interval: 3000 // Set the interval for auto-sliding in milliseconds
                });
            });
        </script>
        {{-- <script>
            $(document).ready(function() {
                // Add two other images to the 3-image set of a carousel-item
                $('#adv-slider .carousel-item').each(function() {
                    var next = $(this).next();

                    for (var i = 0; i < 2; i++) {
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }
                        next.children(':first').children(':first').clone().addClass('d-none d-md-block')
                            .appendTo($(this).children(':first'));

                        next = next.next();
                    }
                });
            });
        </script> --}}

        <script>
            //Add two other images to the 3-image set of a carousel-item
            $('#multi-slider .carousel-item').each(function() {
                var next = $(this).next();

                for (var i = 0; i < 2; i++) {
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    next.children(':first').children(':first').clone().addClass('d-none d-md-block').appendTo($(this)
                        .children(':first'));

                    next = next.next();
                }
            });
        </script>

        <script>
            (function($) {
                $.fn.cascadeSlider = function(opt) {
                    var $this = this,
                        itemClass = opt.itemClass || 'cascade-slider_item',
                        arrowClass = opt.arrowClass || 'cascade-slider_arrow',
                        $item = $this.find('.' + itemClass),
                        $arrow = $this.find('.' + arrowClass),
                        itemCount = $item.length;
                    items = opt.itemCount;

                    // Additional option for autoplay
                    autoplayDelay = opt.delay;
                    if (autoplayDelay == null || autoplayDelay == 0) {
                        autoplayDelay = 3;
                    }
                    pohClass = '.cascade-slider_item, .cascade-slider_arrow, .cascade-slider_dot';
                    if (opt.autoplay == true) {
                        autoPlay();
                        if (opt.pauseOnHover == true) {
                            $this.find(pohClass).on('mouseenter', function() {
                                clearInterval(effectInterval);
                            }).on('mouseleave', function() {
                                autoPlay();
                            })
                        }
                    }

                    function autoPlay() {
                        effectInterval = setInterval(function() {
                            var action = 'next',
                                nowIndex = $item.index($this.find('.now'));

                            if (action == 'next') {
                                if (nowIndex == itemCount - 1) {
                                    changeIndex(0);
                                } else {
                                    changeIndex(nowIndex + 1);
                                }
                            } else if (action == 'prev') {
                                if (nowIndex == 0) {
                                    changeIndex(itemCount - 1);
                                } else {
                                    changeIndex(nowIndex - 1);
                                }
                            }
                            var slideCount = $('.cascade-slider_item.now').attr('data-slide-number');
                            $('.cascade-slider_dot').removeClass('cur');
                            $('.cascade-slider_dot').eq(slideCount).addClass('cur');
                        }, autoplayDelay * 1000000000000);
                    }
                    // END of Additional option for autoplay

                    var defaultIndex = 0;

                    changeIndex(defaultIndex);

                    $arrow.on('click', function() {
                        var action = $(this).data('action'),
                            nowIndex = $item.index($this.find('.now'));

                        if (action == 'next') {
                            if (nowIndex == itemCount - 1) {
                                changeIndex(0);
                            } else {
                                changeIndex(nowIndex + 1);
                            }
                        } else if (action == 'prev') {
                            if (nowIndex == 0) {
                                changeIndex(itemCount - 1);
                            } else {
                                changeIndex(nowIndex - 1);
                            }
                        }
                        var slideCount = $('.cascade-slider_item.now').attr('data-slide-number');
                        $('.cascade-slider_dot').removeClass('cur');
                        $('.cascade-slider_dot').eq(slideCount).addClass('cur');

                    });

                    // add data attributes
                    for (var i = 0; i < itemCount; i++) {
                        $('.cascade-slider_item').each(function(i) {
                            $(this).attr('data-slide-number', [i]);
                        });
                    }

                    // dots
                    $('.cascade-slider_dot').bind('click', function() {
                        // add class to current dot on click
                        $('.cascade-slider_dot').removeClass('cur');
                        $(this).addClass('cur');

                        var index = $(this).index();

                        $('.cascade-slider_item').removeClass('now prev next');
                        var slide = $('.cascade-slider_slides').find('[data-slide-number=' + index + ']');
                        slide.prev().addClass('prev');
                        slide.addClass('now');
                        slide.next().addClass('next');

                        if (slide.next().length == 0) {
                            $('.cascade-slider_item:first-child').addClass('next');
                        }

                        if (slide.prev().length == 0) {
                            $('.cascade-slider_item:last-child').addClass('prev');
                        }
                    });

                    function changeIndex(nowIndex) {
                        // clern all class
                        $this.find('.now').removeClass('now');
                        $this.find('.next').removeClass('next');
                        $this.find('.prev').removeClass('prev');
                        $this.find('.next2').removeClass('next2');
                        $this.find('.prev2').removeClass('prev2');

                        if (nowIndex == itemCount - 1) {
                            $item.eq(0).addClass('next');
                        }
                        if (nowIndex == 0) {
                            $item.eq(itemCount - 1).addClass('prev');
                        }

                        $item.each(function(index) {
                            if (index == nowIndex) {
                                $item.eq(index).addClass('now');
                            }
                            if (index == nowIndex + 1) {
                                $item.eq(index).addClass('next');
                            }
                            if (index == nowIndex - 1) {
                                $item.eq(index).addClass('prev');
                            }
                        });

                        if (items == 5) {
                            otherIndex();
                        }

                    }

                    function otherIndex() {
                        var slideItemsCount = $this.find('.cascade-slider_item').length - 1;
                        var nextSlide = $this.find('.next').index()
                        var prevSlide = $this.find('.prev').index()

                        if (nextSlide + 1 <= slideItemsCount) {
                            $this.find('.cascade-slider_item').eq(nextSlide + 1).addClass('next2');
                        } else if (nextSlide + 1 > slideItemsCount) {
                            $this.find('.cascade-slider_item').eq(0).addClass('next2');
                        }
                        if (prevSlide - 1 <= slideItemsCount) {
                            $this.find('.cascade-slider_item').eq(prevSlide - 1).addClass('prev2');
                        } else if (prevSlide - 1 > slideItemsCount) {
                            $this.find('.cascade-slider_item').eq(slideItemsCount).addClass('prev2');
                        }

                    }

                };
            })(jQuery);



            $('#cascade-slider').cascadeSlider({
                itemClass: 'cascade-slider_item',
                arrowClass: 'cascade-slider_arrow',
                autoplay: true,
                delay: 5,
                pauseOnHover: true,
                itemCount: 5
            });
        </script>




        <script>
            $(document).ready(function() {
                let currentIndex = 0;
                const slides = $(".custom-slider .custom-slide");
                const numSlides = slides.length;

                function showSlide(index) {
                    slides.removeClass('active');
                    slides.eq(index).addClass('active');
                }

                function nextSlide() {
                    currentIndex = (currentIndex + 1) % numSlides;
                    showSlide(currentIndex);
                }

                setInterval(nextSlide, 5000); // Change slide every 5 seconds

                showSlide(currentIndex);
            });
        </script>
    @endsection
