@extends('frontend.default.layouts.app')


<style>
    .site-header {
        font-size: 16px;
        background-color: #4a90e2;
        border-bottom: 3px solid #3483de;
        height: 50%;
    }

    .dropdown-menu.show {
        display: block;
        padding: 0px;
    }

    .navbar {
        padding: 0px !important;
    }

    .dropdown-menu .dropdown-item {
        background-color: rgb(251, 251, 251);
        /* Set the background color to gray */

        padding: 10px;
        /* Add some padding for spacing */
        text-decoration: none;
        /* Remove underline from links */
        display: block;
        /* Ensure each item is a block element */
        border-top: 2px solid #f2f2f2;
        color: #4990e2;
        text-decoration: none;
    }

    /* Style the hover effect */
    .dropdown-menu .dropdown-item:hover {
        background-color: #ececec;
        /* Change the background color on hover */
        color: #4990e2 !important;
    }

    .nav-link.dropdown-toggle {
        color: white !important;
        border: 0;
        font-weight: bold;
        padding: 0.8rem 1rem;
    }

    .icon-gray {
        color: gray;
        /* Set the icon color to gray */
        margin-right: 5px;
        /* Add margin from the right */
    }

    /* Custom styles for the button */
    .my-custom-button {
        background-color: #4990e2 !important;
        /* Set your desired background color */
        color: white;
        /* Set text color */
        padding: 10px 20px;
        /* Add padding as needed */
        border: none !important;
        /* Remove the default button border */
        margin-right: 5px;
        height: 50px;

    }

    /* Hover effect */
    .my-custom-button:hover {
        background-color: #4279e8 !important;
        /* Change color on hover */
    }

    .my-custom-btn-postjob {
        background-color: #4990e2 !important;
        /* Set your desired background color */
        color: white;
        /* Set text color */
        padding-left: 10px;
        padding-right: 10px;
        /* Add padding as needed */
        border: 2px solid white;
        /* Set a white border */
        margin-right: 5px;
        height: 40px;
        border-radius: 5px;
        /* Add border radius */
        text-align: center;
        margin-left: 300px;
    }

    .icon-div {
        margin-left: 300px;
    }

    /* Hover effect */
    .my-custom-btn-postjob:hover {
        background-color: #4279e8 !important;
        /* Change color on hover */
    }

    .menu_div {
        margin-left: 10px;

    }

    .overlay {
        position: absolute;
        /* width: 63% !important; */
        height: 100% !important;
        top: 0;
        left: -210px !important;
        right: 0;
        bottom: 0;
        transform: skew(-5deg);
        z-index: 1;
        background-color: rgba(255, 255, 255, 0.926) !important;
        overflow: hidden;
    }

    .lp-header__content {
        margin-left: 400px;
        margin-top: 100px;
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

    .btn--lp {
        font-weight: normal;
        font-size: 24px;
        line-height: 1em;
        font-family: 'sofia_probold', "Trebuchet MS", "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", Verdana, "Verdana Ref", sans-serif;
        padding: 0.6em 1.25em 0.7em;
        -webkit-border-radius: 0.25em;
        -moz-border-radius: .25em;
        border-radius: 0.25em;
        background-color: #51c57d;
        color: #fff;
        display: inline-block;
        border: 2px solid #51c57d;
        transition: color ease 100ms, border-color ease 100ms;
    }

    .btn--lp:hover {
        background-color: rgb(98, 208, 142) !important;
        color: white !important;
    }

    .btn--hollow {
        font-weight: normal;
        font-size: 24px;
        line-height: 1em;
        font-family: 'sofia_probold', "Trebuchet MS", "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", Verdana, "Verdana Ref", sans-serif;
        padding: 0.6em 1.25em 0.7em;
        -webkit-border-radius: 0.25em;
        -moz-border-radius: .25em;
        border-radius: 0.25em;
        background: transparent;
        border: 2px solid #c6c6c6;
        color: #51c57d;
        display: inline-block;
        transition: color ease 100ms, border-color ease 100ms;
        margin-left: 10px;
    }

    .btn--hollow:hover {
        border: 2px solid #51c57d !important;
        color: #51c57d !important;
    }

    .backcover {
        background-image: url('https://www.mybuilder.com/assets/bdabfd5/bundles/mybuilderhomepage/images/top-spot/bricklayer.jpg');
        background-size: cover;
        background-position: center;
        height: 90vh;
        /* 100% of viewport height */
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
        /* Use Flexbox for centering */
        align-items: center;
        /* Center vertically */

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
        /* Center horizontally */
        align-items: center;
        /* Center vertically */
        /* Optionally, to make the parent full-height */
        background: #eef2f6;
    }



    .inner-div {
        background-color: #eef2f6;
        height: 60px;

        justify-content: center;
        /* Center horizontally */
    }




    .hp-how-it-works {
        background-color: #eef2f6;
        padding: 40px 0;
        text-align: center;
    }

    .hp-how-it-works h1 {
        font-size: 28px;
        font-weight: bold;
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
        /* background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */
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
        /* Adjust the size as needed */
        height: 80px !important;
        /* Adjust the size as needed */
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0.7;
        /* Adjust the opacity as needed */
        transition: opacity 0.3s ease;
        margin-top: 10%;
    }

    .custom-carousel-control:hover {
        opacity: 1;
    }

    .custom-carousel-control-icon {
        color: white;
        /* Color of the icon */
        font-size: 24px;
        /* Adjust the font size as needed */
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
        width: 100%;
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
        width: 100%;
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        margin-bottom: 10px;
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
        background: #eef2f6 ";

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
        /* Center horizontally */
        text-align: center;
        /* Center text within the container */

    }

    /* ///bulider for any job style */
    /* Style the overall section */
    .hp-trades {
        background-color: #eef2f6;
        padding: 50px;
        text-align: center;
    }

    /* Style the heading */
    .hp-trades .heading {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    /* Style the trade list containers */
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
        height: 180px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    /* Style each trade list */
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


    /* Style each trade item
.hp-trades .hp-trades__trade {
    margin: 10px 0;
    font-size: 18px;
}

/* Style links within trade items */
    .hp-trades .hp-trades__trade a {
        color: #007BFF;
        text-decoration: none;
    }

    */

    /* Style links on hover */
    .hp-trades .hp-trades__trade a:hover {
        text-decoration: underline;
        color: #0056b3;
    }

    /* /////bottom slider */



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
        left: -4rem;
    }

    .side-controls a[data-slide=next] {
        right: -4rem;
    }



    /* ///bottom slider content// */




    .card {
        height: 400px;
        background-color: white;
    }




    .review-card-body {
        -ms-flex: 1 1 auto;
        height: 200px !important;
        widows: 200px !important;
        flex: 1 1 auto;
        min-height: 1px;
        padding: 0.25rem;
        width: 100%;
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 0px;
        box-shadow: 0 1px 0 0 rgba(125, 132, 139, 0.4);
        margin-bottom: 0px !important;
        padding: 16px 8px !important;
        border-radius: 4px !important;
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

    .review-item__posted {
        position: absolute;
        bottom: 0;
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
</style>
@section('content')
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://www.mybuilder.com/assets/24c10e5/bundles/mybuilderapplication/images/mybuilder.svg"
                        alt="MyBuilder - A new way to find and hire tradespeople" width="150" height="50">
                </a>

                <!-- Add the responsive toggler button for mobile -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> Post</span>
                </button>

                <div class="menu_div collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <!-- Your navigation links here -->
                        <li class="nav-item dropdown">
                            <button class=" dropdown-toggle my-custom-button" type="button" id="navbarDropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Homeowners
                            </button>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuButton">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-book icon-gray" aria-hidden="true"></i> Post a job
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cog icon-gray"></i> How it works
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-flag icon-gray" aria-hidden="true"></i> About us
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-lightbulb-o icon-gray" aria-hidden="true"></i> Project advice
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-search icon-gray" aria-hidden="true"></i> Find trades
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <button class=" dropdown-toggle my-custom-button" type="button" id="navbarDropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Trade members
                            </button>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuButton">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-book icon-gray" aria-hidden="true"></i> Trade sign up
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-book icon-gray" aria-hidden="true"></i> How it works
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-book icon-gray" aria-hidden="true"></i> Trade academy
                                </a>
                            </div>
                        </li>
                    </ul>


                    <button class=" my-custom-button" type="button">
                        Login
                    </button>
                </div>
            </div>
        </nav>
    </header>


    @if (get_setting('slider_section_show') == 'on')
        <section class="position-relative " style="min-height: 550px;">

            <div class="row">
                <div class="backcover col-md-12">



                    <div class="overlay col-md-8">
                        <div class="lp-header__content">
                            <h1 class="lp-header__heading">The better way to find a builder</h1>
                            <p class="lp-header__subheading">MyBuilder makes it easy to find quality local tradespeople,
                                reviewed by other homeowners, all across the UK.</p>
                            <a title="Post a job today and we'll alert the relevant tradespeople." href="/postajob"
                                class="btn--lp">Post a job</a>
                            <a title="Start winning more work" href="/register-as-tradesman" class="btn--hollow">Trade sign
                                up</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="post_btn-box">
                <div class="col-md-7 star-content">
                    <h1 class="heading heading--x-large">Don't just take our word for it</h1>
                </div>
                <div class="col-md-3 star-rating ">

                    <img src="{{ asset('public\assets\frontend\default\img\rating.png') }}" />

                </div>
                <div class="col-md-3 rated-icon">
                    <img height="125" alt="Mumsnet rated 2019"
                        src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/mumsnet.png"
                        data-lazyimg=""
                        data-src="https://www.mybuilder.com/assets/2d01362/bundles/mybuilderhomepage/images/mumsnet.png">
                </div>
            </div>
        </section @endif
        @if (get_setting('client_logo_show') == 'on')
            <section class="bg-white py-4">
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
                                    <p>Tell us about your job, and we'll alert suitable tradespeople in your area. It’s
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
                                    <p>Once your job is posted, you'll get responses from interested tradespeople through
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
                                    <p>Browse profiles, work history, and feedback, then choose who you wish to share your
                                        details with.</p>
                                </li>
                            </ol>
                            <a class="btn--lp" href="/how-it-works">See how it works</a>

                        </section>

                    </div>
                </div>



                <div class="post_btn-box" style="background: #eef2f6 ">
                    <div class="col-md-12 Fanatical-content">
                        <h2 class="heading heading--x-large">Fanatical about&nbsp;feedback</h2>
                        <div>

                            <p>The best way to know a tradesperson is to listen to their customers.<br>
                                Feedback isn't just a feature on MyBuilder. We've built our whole business on it.</p>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 d-flex justify-content-center align-items-center" style="background: #eef2f6 ">

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
                                            for all payment up front and paid as the work was completed, so clean and
                                            tidy I didn’t even know we had...</span>
                                        <br>
                                        <span class="feedback-item__posted">Received
                                            <span class="feedback-item__time timeago" title="2023-10-04T06:52:31+01:00">2
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
                                            for all payment up front and paid as the work was completed, so clean and
                                            tidy I didn’t even know we had...</span>
                                        <br>
                                        <span class="feedback-item__posted">Received
                                            <span class="feedback-item__time timeago" title="2023-10-04T06:52:31+01:00">2
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
                                        <span class="feedback-item__comment">Really great work thank you. Didn’t ask
                                            for all payment up front and paid as the work was completed, so clean and
                                            tidy I didn’t even know we had...</span>
                                        <br>
                                        <span class="feedback-item__posted">Received
                                            <span class="feedback-item__time timeago" title="2023-10-04T06:52:31+01:00">2
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
                                        <span class="feedback-item__comment">Really great work thank you. Didn’t ask
                                            for all payment up front and paid as the work was completed, so clean and
                                            tidy I didn’t even know we had...</span>
                                        <br>
                                        <span class="feedback-item__posted">Received
                                            <span class="feedback-item__time timeago" title="2023-10-04T06:52:31+01:00">2
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
                                        <span class="feedback-item__comment">Really great work thank you. Didn’t ask
                                            for all payment up front and paid as the work was completed, so clean and
                                            tidy I didn’t even know we had...</span>
                                        <br>
                                        <span class="feedback-item__posted">Received
                                            <span class="feedback-item__time timeago" title="2023-10-04T06:52:31+01:00">2
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
                                        <span class="feedback-item__comment">Really great work thank you. Didn’t ask
                                            for all payment up front and paid as the work was completed, so clean and
                                            tidy I didn’t even know we had...</span>
                                        <br>
                                        <span class="feedback-item__posted">Received
                                            <span class="feedback-item__time timeago" title="2023-10-04T06:52:31+01:00">2
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

            </section>

            {{-- Builder FOR  any JOB --}}

            <div class="col-md-12 d-flex justify-content-center align-items-center" style="background: #eef2f6 ">
                <section class="hp-trades">
                    <h1 class="heading heading--x-large">Builders for any job</h1>

                    <div class="row-fluid">
                        <ul class="hp-trades__trade-list span6 unstyled">
                            <li class="hp-trades__trade">
                                <a title="Find the right architectural designer for your project in UK."
                                    href="/architects/in/uk">Architectural Designers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right bathroom fitter for your project in UK."
                                    href="/bathroom-fitters/in/uk">Bathroom Fitters</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right bricklayer for your project in UK."
                                    href="/bricklayers/in/uk">Bricklayers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right builder for your project in UK."
                                    href="/builders/in/uk">Builders</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right carpenter &amp; joiner for your project in UK."
                                    href="/carpenters-and-joiners/in/uk">Carpenters &amp; Joiners</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right carpet &amp; lino fitter for your project in UK."
                                    href="/carpet-fitters/in/uk">Carpet &amp; Lino Fitters</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right chimney &amp; fireplace specialist for your project in UK."
                                    href="/chimney-fireplace-specialists/in/uk">Chimney &amp; Fireplace Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right conservatory installer for your project in UK."
                                    href="/conservatories-specialists/in/uk">Conservatory Installers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right conversion specialist for your project in UK."
                                    href="/conversions/in/uk">Conversion Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right damp proofing specialist for your project in UK."
                                    href="/damp-proofing-specialists/in/uk">Damp Proofing Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right decking specialist for your project in UK."
                                    href="/decking-specialists/in/uk">Decking Specialists</a>
                            </li>
                        </ul>
                        <ul class="hp-trades__trade-list span6 unstyled">
                            <li class="hp-trades__trade">
                                <a title="Find the right demolition specialist for your project in UK."
                                    href="/demolition-specialists/in/uk">Demolition Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right driveway paver for your project in UK."
                                    href="/driveway-specialists/in/uk">Driveway Pavers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right electrician for your project in UK."
                                    href="/electricians/in/uk">Electricians</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right extension builder for your project in UK."
                                    href="/extension-specialists/in/uk">Extension Builders</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right fascias &amp; soffits specialist for your project in UK."
                                    href="/fascias-soffits-specialists/in/uk">Fascias &amp; Soffits Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right fencer for your project in UK." href="/fencers/in/uk">Fencers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right flooring fitter for your project in UK."
                                    href="/flooring-fitters/in/uk">Flooring Fitters</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right gardener for your project in UK."
                                    href="/gardeners/in/uk">Gardeners</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right gas engineer for your project in UK."
                                    href="/gas-engineers/in/uk">Gas Engineers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right groundworker for your project in UK."
                                    href="/groundwork-and-foundations-specialists/in/uk">Groundworkers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right guttering installer for your project in UK."
                                    href="/guttering-installers/in/uk">Guttering Installers</a>
                            </li>
                        </ul>
                        <ul class="hp-trades__trade-list span6 unstyled">
                            <li class="hp-trades__trade">
                                <a title="Find the right handyman for your project in UK."
                                    href="/handymen/in/uk">Handymen</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right heating engineer for your project in UK."
                                    href="/heating-engineers/in/uk">Heating Engineers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right insulation installer for your project in UK."
                                    href="/insulation-specialists/in/uk">Insulation Installers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right kitchen fitter for your project in UK."
                                    href="/kitchen-fitters/in/uk">Kitchen Fitters</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right landscape gardener for your project in UK."
                                    href="/landscape-gardeners/in/uk">Landscape Gardeners</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right locksmith for your project in UK."
                                    href="/locksmiths/in/uk">Locksmiths</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right loft conversion specialist for your project in UK."
                                    href="/loft-conversion-specialists/in/uk">Loft Conversion Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right new home builder for your project in UK."
                                    href="/new-builds-specialists/in/uk">New Home Builders</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right painter &amp; decorator for your project in UK."
                                    href="/painters-and-decorators/in/uk">Painters &amp; Decorators</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right plasterer for your project in UK."
                                    href="/plasterers/in/uk">Plasterers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right plumber for your project in UK."
                                    href="/plumbers/in/uk">Plumbers</a>
                            </li>
                        </ul>
                        <ul class="hp-trades__trade-list span6 unstyled">
                            <li class="hp-trades__trade">
                                <a title="Find the right repointing specialist for your project in UK."
                                    href="/repointing-specialists/in/uk">Repointing Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right restoration &amp; refurb specialist for your project in UK."
                                    href="/restoration-and-refurbishment-specialists/in/uk">Restoration &amp; Refurb
                                    Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right roofer for your project in UK." href="/roofers/in/uk">Roofers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right security system installer for your project in UK."
                                    href="/security-system-installers/in/uk">Security System Installers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right stonemason for your project in UK."
                                    href="/stonemasons/in/uk">Stonemasons</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right tarmac driveway specialist for your project in UK."
                                    href="/driveway-tarmac-specialists/in/uk">Tarmac Driveway Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right tiler for your project in UK." href="/tilers/in/uk">Tilers</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right tradesman for your project in UK."
                                    href="/tradesmen/in/uk">Tradesmen</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right tree surgeon for your project in UK."
                                    href="/tree-surgeons/in/uk">Tree Surgeons</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right waste clearance specialist for your project in UK."
                                    href="/clearance-specialists/in/uk">Waste Clearance Specialists</a>
                            </li>
                            <li class="hp-trades__trade">
                                <a title="Find the right window &amp; door fitter for your project in UK."
                                    href="/window-fitters/in/uk">Window &amp; Door Fitters</a>
                            </li>
                        </ul>
                    </div>

                </section>
            </div>

            <div class="post_btn-box ">
                <div class="col-md-8 star-content">
                    <h1 class="sub-heading heading--x-large">Start your next home improvement project today</h1>
                    <div style="margin-left:20px">
                        <a rel="nofollow" title="Post a job today and we'll alert the relevant tradespeople."
                            href="/postajob" class="btn--lp">Post a job</a>
                    </div>

                </div>


            </div>

            {{-- /////bottomSLIDER// --}}
            <div class="bottom-slider col-md-12 ">
                <div class="bottom-slider-heading col-md-4 pt-2" >
                    <h1 class="heading heading--x-large">Our customers love&nbsp;us</h1>
                </div>
                <div class="containerr">
                    <div class="col-md-12 mt-5">

                        <!-- Multiple Slider -->
                        <div id="multi-slider" class="carousel" data-ride="carousel" data-interval="false">

                            <!-- Controls -->
                            <div class="text-center mb-4 side-controls">
                                <a href="#multi-slider" data-slide="prev">
                                    <i class="fas fa-chevron-circle-left"></i>
                                </a>
                                <a href="#multi-slider" data-slide="next">
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a>
                            </div>

                            <!-- Slideshow -->
                            <div class="carousel-inner">

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

                                                    Received  feedback

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
                            class="btn btn btn-primary rounded-1">{{ translate('Check All Projects') }}</a>
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
                                class="btn bg-white text-primary rounded-1">{{ translate('Browse More Categories') }}</a>
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
    @endsection
