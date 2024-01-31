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
        background-color: white;
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
        font-size: 15px !important;
        line-height: 1.5 !important;
        text-align: center !important;
        color: #333 ;
    }


    .hp-trades .hp-trades__trade a:hover {
        text-decoration: underline;
        color: #37a002;
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
        -webkit-box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.3);

        /* box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2); */
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
        transition: transform 0.5s ease-in-out;
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



























    .rbd-review-slider .rbd-preloader {
        width: 36px;
        height: 36px;
        margin: 0 auto;
    }

    .rbd-review-slider .rbd-review.rbd-prev {
        transform: translate3d(-100px, 0, -50px);
        display: inline-block;
    }

    .rbd-review-slider .rbd-review.rbd-next {
        transform: translate3d(100px, 0, -50px);
        display: inline-block;
    }

    .rbd-review-slider .rbd-review.rbd-curr {
        z-index: 10;
        transform: translate3d(0, 0, 0) scale(1);
        opacity: 1;
        display: inline-block;
    }

    .rbd-review-slider .rbd-review {
        padding: 20px 30px;
        height: 300px font-size: 18px;
        line-height: 1.612;
        border-radius: 4px;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.3);

        display: none;
        vertical-align: top;
        transition: opacity .35s ease-out, transform .35s ease-out;
        ;
        opacity: 1;
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
        overflow: hidden;
        opacity: 0;

        background: #fff;
        max-width: 600px;
    }

    .rbd-review-slider .rbd-review.rbd-first {
        display: block;
    }

    .rbd-review-slider .rbd-heading {
        margin-top: 0;
        margin-bottom: 10px;
    }

    .rbd-review-slider svg {
        fill: #ffbb58;
        width: 24px;
        margin-right: 1px;
    }

    .rbd-review-slider .rbd-review-meta {
        font-size: 12px;
        color: #565656;
        margin-top: 12px;
        text-align: center;
    }

    .rbd-review-slider .rbd-gravatar {
        border-radius: 100%;
        width: 100px;
        float: left;
        margin-right: 15px;
        border: 6px solid transparent;
        box-shadow: 0 3px 12px -2px rgba(0, 0, 0, .35);
    }

    .rbd-footing {
        margin: 20px 0 0;
        text-align: center;
    }

    @keyframes round {
        25% {
            opacity: 1;
        }

        40% {
            opacity: 0;
        }
    }





































    /* Slider */

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -ms-touch-action: none;
        touch-action: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .slick-list {
        position: relative;
        overflow: hidden;
        display: block;
        margin: 0;
        padding: 0;

        &:focus {
            outline: none;
        }

        .slick-loading & {
            background: white url(./ajax-loader.gif) center center no-repeat;
        }

        &.dragging {
            cursor: pointer;
            cursor: hand;
        }
    }

    .slick-slider .slick-list,
    .slick-track,
    .slick-slide,
    .slick-slide img {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        left: 0;
        top: 0;
        display: block;
        zoom: 1;

        &:before,
        &:after {
            content: "";
            display: table;
        }

        &:after {
            clear: both;
        }

        .slick-loading & {
            visibility: hidden;
        }
    }

    .slick-slide {
        float: left;
        height: 100%;
        min-height: 1px;

        img {
            display: block;

            &.slick-loading {
                background: white url(./ajax-loader.gif) center center no-repeat;
                padding-bottom: 100%;
            }
        }

        display: none;

        &.dragging img {
            pointer-events: none;
        }

        .slick-initialized & {
            display: block;
        }

        .slick-loading & {
            visibility: hidden;
        }

        .slick-vertical & {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }
    }


    /* Arrows */

    .slick-prev,
    .slick-next {
        position: absolute;
        display: block;
        height: 20px;
        width: 20px;
        line-height: 0;
        font-size: 0;
        cursor: pointer;
        background: transparent;
        color: transparent;
        top: 50%;
        margin-top: -10px;
        padding: 0;
        border: none;
        outline: none;

        &:focus {
            outline: none;
        }

        &.slick-disabled:before {
            opacity: 0.25;
        }
    }

    .slick-prev:before,
    .slick-next:before {
        font-family: "slick";
        font-size: 20px;
        line-height: 1;
        color: white;
        opacity: 0.85;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .slick-prev {
        left: -25px;

        &:before {
            content: '\2190';
        }
    }

    .slick-next {
        right: -25px;

        &:before {
            content: '\2192';
        }
    }

    /* Dots */

    .slick-slider {
        margin-bottom: 30px;
    }

    .container {
        width: 80%;
        margin: auto;
    }

    .blue,
    html {
        background: #3498db;
        color: #fff;
    }

    /* .review-card {
       
        margin: 0 2rem;
    } */






    .slick-prev,
    .slick-next {
        display: none !important;
        /* Force hiding the arrows */
    }





    .card2 {
        display: block;
        top: 0px;
        position: relative;

        background-color: #f7fff6;
        border-radius: 4px;
        padding: 32px 24px;
        margin: 12px;
        text-decoration: none;
        z-index: 0;
        overflow: hidden;
        border: 1px solid #f2f8f9;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.3);

        &:hover {
            transition: all 0.2s ease-out;
            box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
            top: -4px;
            border: 1px solid #cccccc;
            background-color: white;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }


    }



    .hh3 {
        color: #262626;
        font-size: 17px;
        line-height: 24px;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .p11 {
        font-size: 17px;
        font-weight: 400;
        line-height: 20px;
        color: #666666;

        &.small {
            font-size: 14px;
        }
    }
</style>








@section('content')


    @if (get_setting('slider_section_show') == 'on')
        <section class="position-relative ">



            <div class="row">
                <div class="custom-slider col-md-12">
                    <div class="custom-slide">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\global2.jpg') }}" />

                        <div class="custom-content">
                            <div class="custom-content-inner">

                                <h1>We are Everywhere</h1>
                                <h5>Builder’s Valley offers a complete solution if you're looking for a new project or
                                    searching

                                    <div class=" lp-header__content">
                                        <a title="Post a job today and we'll alert the relevant tradespeople."
                                            href="{{ route('post_project') }}" class="btn--lp">Post a job</a>
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
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\sl1.jpg') }}" />
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <h1>We are all here.</h1>
                                <h5>Now you don't need your neighbor's recommendations. We're providing the complete
                                    solution.
                                </h5>
                                <div class="lp-header__content">
                                    <a title="Post a job today and we'll alert the relevant tradespeople."
                                        href="{{ route('post_project') }}" class="btn--lp">Post a job</a>
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
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\slider2.jpg') }}" />
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <h1>Join today and become a proud member of the Builder's Valley community.</h1>
                                <h5>If you are recruiting people across the country , internationally
                                    or you are looking for a new career, join today.</h5>

                                <div class="lp-header__content">
                                    <a title="Post a job today and we'll alert the relevant tradespeople."
                                        href="{{ route('post_project') }}" class="btn--lp">Post a job</a>
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
                                        href="{{ route('post_project') }}" class="btn--lp">Post a job</a>
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

                </div>
            </div>

            <div class="container" style="height: 300px ; padding-top:30px">

                <div class="rbd-core-ui">
                    <div class="rbd-review-slider">
                        <div class="rbd-review-container">
                            <div class="rbd-review review1.1 rbd-curr">
                                <h3 class="rbd-heading">Extremely Professional</h3>
                                <i class="renderSVG" data-icon="star" data-repeat="5"></i>
                                <div class="rbd-content"><img class="rbd-gravatar"
                                        src="https://en.gravatar.com/userimage/26363586/56972d52aba494b6f068d289c6d3d63d.jpg">Materials
                                    are top notch. People are top notch... they knew exactly how to handle my ignorance
                                    and turn it to a positive working business…</div>
                                <div class="rbd-footing">
                                    <a class="rbd-button rbd-small" href="#">Read More</a>
                                </div>
                                <div class="rbd-review-meta">Written by Mark P. on Feb. 18, 2018</div>
                            </div>
                            <div class="rbd-review review1.2 rbd-next">
                                <h3 class="rbd-heading">Test Company Marketing Delivers Such Great Service!</h3>
                                <i class="renderSVG" data-icon="star" data-repeat="5"></i>
                                <div class="rbd-content"><img class="rbd-gravatar"
                                        src="https://www.gravatar.com/avatar/ee304528491d860812f73d7d5cd0dc72?s=256">I'm
                                    a big fan of this test company. They really do the best work around, and their
                                    prices just can't be beat! I hear that Alex is a pretty cool guy…</div>
                                <div class="rbd-footing">
                                    <a class="rbd-button rbd-small" href="#">Read More</a>
                                </div>
                                <div class="rbd-review-meta">Written by Alex D. on Feb. 19, 2018</div>
                            </div>
                            <div class="rbd-review review1.3">
                                <h3 class="rbd-heading">Test Review </h3>
                                <i class="renderSVG" data-icon="star" data-repeat="5"></i>
                                <div class="rbd-content">No Gravatar but here's a review…No Gravatar but here's a
                                    review…No Gravatar but here's a review…No Gravatar but here's a review…</div>
                                <div class="rbd-footing">
                                    <a class="rbd-button rbd-small" href="#">Read More</a>
                                </div>
                                <div class="rbd-review-meta">Written by Anonymous. on Feb. 18, 2018</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>




        </section>
    @endif
    @if (get_setting('client_logo_show') == 'on')
        <section class="bg-white ">




            <div class="container" style="height: auto ;">
                <div class="py-3">

                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 " style="margin-bottom: 10px;position: relative;">
                            <div class="card2" style="height: 100%; display: flex; flex-direction: column;">

                                <div class="p-4" style="height: 70%;">
                                    <h2 class="hh3">Post your job</h2>
                                    <p class="p11 small ">
                                        Sign up to our online platform to start posting your home improvement projects and
                                        connect with trustworthy tradespeople.
                                    </p>

                                </div>

                                <div style="text-align: center;">
                                    <a title="Post a job today and we'll alert the relevant tradespeople."
                                        href="http://localhost/mybuilder/register" class="btn--lp">Post a job</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6" style="margin-bottom: 10px;position: relative;">
                            <div class="card2 " style="height: 100%; display: flex; flex-direction: column;">

                                <div class="p-4" style="height: 70%;">
                                    <h2 class="hh3">Trade sign up</h2>
                                    <p class="p11">Once your business is registered, you can choose from the many jobs
                                        available
                                        across the country.</p>
                                </div>

                                <div style="text-align: center;">
                                    <a title="Post a job today and we'll alert the relevant tradespeople."
                                        href="http://localhost/mybuilder/register" class="btn--lp1 ">Join Our Site</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6" style="margin-bottom: 10px;position: relative;">
                            <div class="card2" style="height: 100%; display: flex; flex-direction: column; ;">

                                <div class="p-4" style="height: 70%;">
                                    <h2 class="hh3">Find Employment</h2>
                                    <p class="p11">Businesses across the country & internationally are searching for
                                        skilled people
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

















            <div class="container" style="height: auto ; ">
                <div class="py-3">

                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-md-6 " style="margin-bottom: 10px;position: relative;">
                            <div class="px-xl-5 px-md-3 mb-4 text-center "
                                style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">

                                <div class="p-4 text-center">
                                    <h2 style="color: green !important">Find the right tradespeople for your job! 
                                    
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



        </section>


        <div class="col-md-12" style="background:white ;margin-top:70px;margin-bottom:70px">
            <div class="container" style ="padding: 0px">
                <div class="col-md-12 d-flex justify-content-center align-items-center" style="background: white ">
                    <section class="hp-trades">
                        <h2 class="fw-700 fs-30" style="color:#37a002;margin-bottom:30px"> Our line directory is the
                            perfect place to find 
                            <img src="{{ asset('public\assets\frontend\default\img\icons\magnifying-glass (1).png') }}"
                                        style="width:32px" ;height="32px" /></h2></h2>

                        <div class="row-fluid">
                            <div class="row">
                                @isset($categories)
                                    @php
                                        $categoriesCount = count($categories);
                                        $columnsCount = 4;
                                        $itemsPerColumn = ceil($categoriesCount / $columnsCount);
                                        $currentCategoryIndex = 0;
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



        {{-- /////bottomSLIDER// --}}
        {{-- <div class="bottom-slider col-md-12 ">
                <div class="container" style="  background-color: #eef2f6 !important;">
                    <div class="bottom-slider-heading col-md-4  col-lg-5 pt-2 text-center">
                        <h2 class="fw-700 fs-30">Our customers love&nbsp;us</h2>
                    </div>

                    <div class="col-md-12 mt-5">


                        <div id="multi-slider" class="carousel" data-ride="carousel">


                            <div class="text-center mb-4 side-controls">
                                <a href="#multi-slider" data-slide="prev">
                                    <i class="fas fa-chevron-circle-left fa-sm"></i>
                                </a>
                                <a href="#multi-slider" data-slide="next">
                                    <i class="fas fa-chevron-circle-right fa-sm"></i>
                                </a>
                            </div>


                            <div class="carousel-inner"
                                style=" justify-content: center; align-items: center; height: 200px;">


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
            </div> --}}

        <section style="  background-color: #eef2f6">
            <div class="container" style="padding-bottom: 60px;padding-top: 60px;background-color: #eef2f6 !important;">
                <div class="bottom-slider-heading col-md-4  col-lg-5 pt-2 text-center">
                    <h2 class="fw-700 fs-30" style="color: #37a002;margin-bottom:30px ">Our customers
                        love&nbsp;us</h2>
                </div>
                <div class=" col-md-12 slider review-slider" style="margin-bottom: 0px !important">


                    <div class="col-sm-12  col-md-4 review-card">
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
                    <div class="col-sm-12  col-md-4 review-card">
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
                    <div class="col-sm-12  col-md-4 review-card">
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
                    <div class="col-sm-12  col-md-4 review-card">
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
                    <div class="col-sm-12  col-md-4 review-card">
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





            
        </section>
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
    @if (get_setting('latest_project_show') == 'off')
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
    {{-- 
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

                        <div class="mt-5">
                            <a href="{{ route('search') }}?category="
                                class="btn bg-white
                                text-primary rounded-1">{{ translate('Browse More Categories') }}</a>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- 
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
                                        <img src="{{ custom_asset($service->image) }}" class="card-img-top img-fit"
                                            alt="service_image" height="212">
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
    </section> --}}

    {{-- <section class="cta_section py-8 bg-white">
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
    </section> --}}

    {{-- <section class="bg-white pt-4 pb-7 text-white">
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
                                        <a href="{{ route('blog.details', $blog->slug) }}" class="text-dark fs-16 fw-700"
                                            title="{{ $blog->title }}">
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
    </section> --}}

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


{{-- ////last --}}
    <script>

        // last slider
        $(document).ready(function() {

            $('.review-slider').slick({
                // dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        // centerMode: true,

                    }

                }, {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        dots: false,
                        infinite: true,

                    }


                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: false,
                        infinite: true,

                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        infinite: true,
                        autoplay: true,
                        autoplaySpeed: 2000,
                    }
                }]
            });


        });
    
        (function(factory) {
            'use strict';
            if (typeof define === 'function' && define.amd) {
                define(['jquery'], factory);
            } else if (typeof exports !== 'undefined') {
                module.exports = factory(require('jquery'));
            } else {
                factory(jQuery);
            }

        }(function($) {
            'use strict';
            var Slick = window.Slick || {};

            Slick = (function() {

                var instanceUid = 0;

                function Slick(element, settings) {

                    var _ = this,
                        dataSettings;

                    _.defaults = {
                        accessibility: true,
                        adaptiveHeight: false,
                        appendArrows: $(element),
                        appendDots: $(element),
                        arrows: true,
                        asNavFor: null,
                        prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                        nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
                        autoplay: false,
                        autoplaySpeed: 3000,
                        centerMode: false,
                        centerPadding: '50px',
                        cssEase: 'ease',
                        customPaging: function(slider, i) {
                            return $(
                                '<button type="button" data-role="none" role="button" tabindex="0" />'
                            ).text(i + 1);
                        },
                        dots: false,
                        dotsClass: 'slick-dots',
                        draggable: true,
                        easing: 'linear',
                        edgeFriction: 0.35,
                        fade: false,
                        focusOnSelect: false,
                        infinite: true,
                        initialSlide: 0,
                        lazyLoad: 'ondemand',
                        mobileFirst: false,
                        pauseOnHover: true,
                        pauseOnFocus: true,
                        pauseOnDotsHover: false,
                        respondTo: 'window',
                        responsive: null,
                        rows: 1,
                        rtl: false,
                        slide: '',
                        slidesPerRow: 1,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        speed: 500,
                        swipe: true,
                        swipeToSlide: false,
                        touchMove: true,
                        touchThreshold: 5,
                        useCSS: true,
                        useTransform: true,
                        variableWidth: false,
                        vertical: false,
                        verticalSwiping: false,
                        waitForAnimate: true,
                        zIndex: 1000
                    };

                    _.initials = {
                        animating: false,
                        dragging: false,
                        autoPlayTimer: null,
                        currentDirection: 0,
                        currentLeft: null,
                        currentSlide: 0,
                        direction: 1,
                        $dots: null,
                        listWidth: null,
                        listHeight: null,
                        loadIndex: 0,
                        $nextArrow: null,
                        $prevArrow: null,
                        slideCount: null,
                        slideWidth: null,
                        $slideTrack: null,
                        $slides: null,
                        sliding: false,
                        slideOffset: 0,
                        swipeLeft: null,
                        $list: null,
                        touchObject: {},
                        transformsEnabled: false,
                        unslicked: false
                    };

                    $.extend(_, _.initials);

                    _.activeBreakpoint = null;
                    _.animType = null;
                    _.animProp = null;
                    _.breakpoints = [];
                    _.breakpointSettings = [];
                    _.cssTransitions = false;
                    _.focussed = false;
                    _.interrupted = false;
                    _.hidden = 'hidden';
                    _.paused = true;
                    _.positionProp = null;
                    _.respondTo = null;
                    _.rowCount = 1;
                    _.shouldClick = true;
                    _.$slider = $(element);
                    _.$slidesCache = null;
                    _.transformType = null;
                    _.transitionType = null;
                    _.visibilityChange = 'visibilitychange';
                    _.windowWidth = 0;
                    _.windowTimer = null;

                    dataSettings = $(element).data('slick') || {};

                    _.options = $.extend({}, _.defaults, settings, dataSettings);

                    _.currentSlide = _.options.initialSlide;

                    _.originalSettings = _.options;

                    if (typeof document.mozHidden !== 'undefined') {
                        _.hidden = 'mozHidden';
                        _.visibilityChange = 'mozvisibilitychange';
                    } else if (typeof document.webkitHidden !== 'undefined') {
                        _.hidden = 'webkitHidden';
                        _.visibilityChange = 'webkitvisibilitychange';
                    }

                    _.autoPlay = $.proxy(_.autoPlay, _);
                    _.autoPlayClear = $.proxy(_.autoPlayClear, _);
                    _.autoPlayIterator = $.proxy(_.autoPlayIterator, _);
                    _.changeSlide = $.proxy(_.changeSlide, _);
                    _.clickHandler = $.proxy(_.clickHandler, _);
                    _.selectHandler = $.proxy(_.selectHandler, _);
                    _.setPosition = $.proxy(_.setPosition, _);
                    _.swipeHandler = $.proxy(_.swipeHandler, _);
                    _.dragHandler = $.proxy(_.dragHandler, _);
                    _.keyHandler = $.proxy(_.keyHandler, _);

                    _.instanceUid = instanceUid++;

                    // A simple way to check for HTML strings
                    // Strict HTML recognition (must start with <)
                    // Extracted from jQuery v1.11 source
                    _.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/;


                    _.registerBreakpoints();
                    _.init(true);

                }

                return Slick;

            }());

            Slick.prototype.activateADA = function() {
                var _ = this;

                _.$slideTrack.find('.slick-active').attr({
                    'aria-hidden': 'false'
                }).find('a, input, button, select').attr({
                    'tabindex': '0'
                });

            };

            Slick.prototype.addSlide = Slick.prototype.slickAdd = function(markup, index, addBefore) {

                var _ = this;

                if (typeof(index) === 'boolean') {
                    addBefore = index;
                    index = null;
                } else if (index < 0 || (index >= _.slideCount)) {
                    return false;
                }

                _.unload();

                if (typeof(index) === 'number') {
                    if (index === 0 && _.$slides.length === 0) {
                        $(markup).appendTo(_.$slideTrack);
                    } else if (addBefore) {
                        $(markup).insertBefore(_.$slides.eq(index));
                    } else {
                        $(markup).insertAfter(_.$slides.eq(index));
                    }
                } else {
                    if (addBefore === true) {
                        $(markup).prependTo(_.$slideTrack);
                    } else {
                        $(markup).appendTo(_.$slideTrack);
                    }
                }

                _.$slides = _.$slideTrack.children(this.options.slide);

                _.$slideTrack.children(this.options.slide).detach();

                _.$slideTrack.append(_.$slides);

                _.$slides.each(function(index, element) {
                    $(element).attr('data-slick-index', index);
                });

                _.$slidesCache = _.$slides;

                _.reinit();

            };

            Slick.prototype.animateHeight = function() {
                var _ = this;
                if (_.options.slidesToShow === 1 && _.options.adaptiveHeight === true && _.options.vertical ===
                    false) {
                    var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(true);
                    _.$list.animate({
                        height: targetHeight
                    }, _.options.speed);
                }
            };

            Slick.prototype.animateSlide = function(targetLeft, callback) {

                var animProps = {},
                    _ = this;

                _.animateHeight();

                if (_.options.rtl === true && _.options.vertical === false) {
                    targetLeft = -targetLeft;
                }
                if (_.transformsEnabled === false) {
                    if (_.options.vertical === false) {
                        _.$slideTrack.animate({
                            left: targetLeft
                        }, _.options.speed, _.options.easing, callback);
                    } else {
                        _.$slideTrack.animate({
                            top: targetLeft
                        }, _.options.speed, _.options.easing, callback);
                    }

                } else {

                    if (_.cssTransitions === false) {
                        if (_.options.rtl === true) {
                            _.currentLeft = -(_.currentLeft);
                        }
                        $({
                            animStart: _.currentLeft
                        }).animate({
                            animStart: targetLeft
                        }, {
                            duration: _.options.speed,
                            easing: _.options.easing,
                            step: function(now) {
                                now = Math.ceil(now);
                                if (_.options.vertical === false) {
                                    animProps[_.animType] = 'translate(' +
                                        now + 'px, 0px)';
                                    _.$slideTrack.css(animProps);
                                } else {
                                    animProps[_.animType] = 'translate(0px,' +
                                        now + 'px)';
                                    _.$slideTrack.css(animProps);
                                }
                            },
                            complete: function() {
                                if (callback) {
                                    callback.call();
                                }
                            }
                        });

                    } else {

                        _.applyTransition();
                        targetLeft = Math.ceil(targetLeft);

                        if (_.options.vertical === false) {
                            animProps[_.animType] = 'translate3d(' + targetLeft + 'px, 0px, 0px)';
                        } else {
                            animProps[_.animType] = 'translate3d(0px,' + targetLeft + 'px, 0px)';
                        }
                        _.$slideTrack.css(animProps);

                        if (callback) {
                            setTimeout(function() {

                                _.disableTransition();

                                callback.call();
                            }, _.options.speed);
                        }

                    }

                }

            };

            Slick.prototype.getNavTarget = function() {

                var _ = this,
                    asNavFor = _.options.asNavFor;

                if (asNavFor && asNavFor !== null) {
                    asNavFor = $(asNavFor).not(_.$slider);
                }

                return asNavFor;

            };

            Slick.prototype.asNavFor = function(index) {

                var _ = this,
                    asNavFor = _.getNavTarget();

                if (asNavFor !== null && typeof asNavFor === 'object') {
                    asNavFor.each(function() {
                        var target = $(this).slick('getSlick');
                        if (!target.unslicked) {
                            target.slideHandler(index, true);
                        }
                    });
                }

            };

            Slick.prototype.applyTransition = function(slide) {

                var _ = this,
                    transition = {};

                if (_.options.fade === false) {
                    transition[_.transitionType] = _.transformType + ' ' + _.options.speed + 'ms ' + _.options
                        .cssEase;
                } else {
                    transition[_.transitionType] = 'opacity ' + _.options.speed + 'ms ' + _.options.cssEase;
                }

                if (_.options.fade === false) {
                    _.$slideTrack.css(transition);
                } else {
                    _.$slides.eq(slide).css(transition);
                }

            };

            Slick.prototype.autoPlay = function() {

                var _ = this;

                _.autoPlayClear();

                if (_.slideCount > _.options.slidesToShow) {
                    _.autoPlayTimer = setInterval(_.autoPlayIterator, _.options.autoplaySpeed);
                }

            };

            Slick.prototype.autoPlayClear = function() {

                var _ = this;

                if (_.autoPlayTimer) {
                    clearInterval(_.autoPlayTimer);
                }

            };

            Slick.prototype.autoPlayIterator = function() {

                var _ = this,
                    slideTo = _.currentSlide + _.options.slidesToScroll;

                if (!_.paused && !_.interrupted && !_.focussed) {

                    if (_.options.infinite === false) {

                        if (_.direction === 1 && (_.currentSlide + 1) === (_.slideCount - 1)) {
                            _.direction = 0;
                        } else if (_.direction === 0) {

                            slideTo = _.currentSlide - _.options.slidesToScroll;

                            if (_.currentSlide - 1 === 0) {
                                _.direction = 1;
                            }

                        }

                    }

                    _.slideHandler(slideTo);

                }

            };

            Slick.prototype.buildArrows = function() {

                var _ = this;

                if (_.options.arrows === true) {

                    _.$prevArrow = $(_.options.prevArrow).addClass('slick-arrow');
                    _.$nextArrow = $(_.options.nextArrow).addClass('slick-arrow');

                    if (_.slideCount > _.options.slidesToShow) {

                        _.$prevArrow.removeClass('slick-hidden').removeAttr('aria-hidden tabindex');
                        _.$nextArrow.removeClass('slick-hidden').removeAttr('aria-hidden tabindex');

                        if (_.htmlExpr.test(_.options.prevArrow)) {
                            _.$prevArrow.prependTo(_.options.appendArrows);
                        }

                        if (_.htmlExpr.test(_.options.nextArrow)) {
                            _.$nextArrow.appendTo(_.options.appendArrows);
                        }

                        if (_.options.infinite !== true) {
                            _.$prevArrow
                                .addClass('slick-disabled')
                                .attr('aria-disabled', 'true');
                        }

                    } else {

                        _.$prevArrow.add(_.$nextArrow)

                            .addClass('slick-hidden')
                            .attr({
                                'aria-disabled': 'true',
                                'tabindex': '-1'
                            });

                    }

                }

            };

            Slick.prototype.buildDots = function() {

                var _ = this,
                    i, dot;

                if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {

                    _.$slider.addClass('slick-dotted');

                    dot = $('<ul />').addClass(_.options.dotsClass);

                    for (i = 0; i <= _.getDotCount(); i += 1) {
                        dot.append($('<li />').append(_.options.customPaging.call(this, _, i)));
                    }

                    _.$dots = dot.appendTo(_.options.appendDots);

                    _.$dots.find('li').first().addClass('slick-active').attr('aria-hidden', 'false');

                }

            };

            Slick.prototype.buildOut = function() {

                var _ = this;

                _.$slides =
                    _.$slider
                    .children(_.options.slide + ':not(.slick-cloned)')
                    .addClass('slick-slide');

                _.slideCount = _.$slides.length;

                _.$slides.each(function(index, element) {
                    $(element)
                        .attr('data-slick-index', index)
                        .data('originalStyling', $(element).attr('style') || '');
                });

                _.$slider.addClass('slick-slider');

                _.$slideTrack = (_.slideCount === 0) ?
                    $('<div class="slick-track"/>').appendTo(_.$slider) :
                    _.$slides.wrapAll('<div class="slick-track"/>').parent();

                _.$list = _.$slideTrack.wrap(
                    '<div aria-live="polite" class="slick-list"/>').parent();
                _.$slideTrack.css('opacity', 0);

                if (_.options.centerMode === true || _.options.swipeToSlide === true) {
                    _.options.slidesToScroll = 1;
                }

                $('img[data-lazy]', _.$slider).not('[src]').addClass('slick-loading');

                _.setupInfinite();

                _.buildArrows();

                _.buildDots();

                _.updateDots();


                _.setSlideClasses(typeof _.currentSlide === 'number' ? _.currentSlide : 0);

                if (_.options.draggable === true) {
                    _.$list.addClass('draggable');
                }

            };

            Slick.prototype.buildRows = function() {

                var _ = this,
                    a, b, c, newSlides, numOfSlides, originalSlides, slidesPerSection;

                newSlides = document.createDocumentFragment();
                originalSlides = _.$slider.children();

                if (_.options.rows > 1) {

                    slidesPerSection = _.options.slidesPerRow * _.options.rows;
                    numOfSlides = Math.ceil(
                        originalSlides.length / slidesPerSection
                    );

                    for (a = 0; a < numOfSlides; a++) {
                        var slide = document.createElement('div');
                        for (b = 0; b < _.options.rows; b++) {
                            var row = document.createElement('div');
                            for (c = 0; c < _.options.slidesPerRow; c++) {
                                var target = (a * slidesPerSection + ((b * _.options.slidesPerRow) + c));
                                if (originalSlides.get(target)) {
                                    row.appendChild(originalSlides.get(target));
                                }
                            }
                            slide.appendChild(row);
                        }
                        newSlides.appendChild(slide);
                    }

                    _.$slider.empty().append(newSlides);
                    _.$slider.children().children().children()
                        .css({
                            'width': (100 / _.options.slidesPerRow) + '%',
                            'display': 'inline-block'
                        });

                }

            };

            Slick.prototype.checkResponsive = function(initial, forceUpdate) {

                var _ = this,
                    breakpoint, targetBreakpoint, respondToWidth, triggerBreakpoint = false;
                var sliderWidth = _.$slider.width();
                var windowWidth = window.innerWidth || $(window).width();

                if (_.respondTo === 'window') {
                    respondToWidth = windowWidth;
                } else if (_.respondTo === 'slider') {
                    respondToWidth = sliderWidth;
                } else if (_.respondTo === 'min') {
                    respondToWidth = Math.min(windowWidth, sliderWidth);
                }

                if (_.options.responsive &&
                    _.options.responsive.length &&
                    _.options.responsive !== null) {

                    targetBreakpoint = null;

                    for (breakpoint in _.breakpoints) {
                        if (_.breakpoints.hasOwnProperty(breakpoint)) {
                            if (_.originalSettings.mobileFirst === false) {
                                if (respondToWidth < _.breakpoints[breakpoint]) {
                                    targetBreakpoint = _.breakpoints[breakpoint];
                                }
                            } else {
                                if (respondToWidth > _.breakpoints[breakpoint]) {
                                    targetBreakpoint = _.breakpoints[breakpoint];
                                }
                            }
                        }
                    }

                    if (targetBreakpoint !== null) {
                        if (_.activeBreakpoint !== null) {
                            if (targetBreakpoint !== _.activeBreakpoint || forceUpdate) {
                                _.activeBreakpoint =
                                    targetBreakpoint;
                                if (_.breakpointSettings[targetBreakpoint] === 'unslick') {
                                    _.unslick(targetBreakpoint);
                                } else {
                                    _.options = $.extend({}, _.originalSettings,
                                        _.breakpointSettings[
                                            targetBreakpoint]);
                                    if (initial === true) {
                                        _.currentSlide = _.options.initialSlide;
                                    }
                                    _.refresh(initial);
                                }
                                triggerBreakpoint = targetBreakpoint;
                            }
                        } else {
                            _.activeBreakpoint = targetBreakpoint;
                            if (_.breakpointSettings[targetBreakpoint] === 'unslick') {
                                _.unslick(targetBreakpoint);
                            } else {
                                _.options = $.extend({}, _.originalSettings,
                                    _.breakpointSettings[
                                        targetBreakpoint]);
                                if (initial === true) {
                                    _.currentSlide = _.options.initialSlide;
                                }
                                _.refresh(initial);
                            }
                            triggerBreakpoint = targetBreakpoint;
                        }
                    } else {
                        if (_.activeBreakpoint !== null) {
                            _.activeBreakpoint = null;
                            _.options = _.originalSettings;
                            if (initial === true) {
                                _.currentSlide = _.options.initialSlide;
                            }
                            _.refresh(initial);
                            triggerBreakpoint = targetBreakpoint;
                        }
                    }

                    // only trigger breakpoints during an actual break. not on initialize.
                    if (!initial && triggerBreakpoint !== false) {
                        _.$slider.trigger('breakpoint', [_, triggerBreakpoint]);
                    }
                }

            };

            Slick.prototype.changeSlide = function(event, dontAnimate) {

                var _ = this,
                    $target = $(event.currentTarget),
                    indexOffset, slideOffset, unevenOffset;

                // If target is a link, prevent default action.
                if ($target.is('a')) {
                    event.preventDefault();
                }

                // If target is not the <li> element (ie: a child), find the <li>.
                if (!$target.is('li')) {
                    $target = $target.closest('li');
                }

                unevenOffset = (_.slideCount % _.options.slidesToScroll !== 0);
                indexOffset = unevenOffset ? 0 : (_.slideCount - _.currentSlide) % _.options.slidesToScroll;

                switch (event.data.message) {

                    case 'previous':
                        slideOffset = indexOffset === 0 ? _.options.slidesToScroll : _.options.slidesToShow -
                            indexOffset;
                        if (_.slideCount > _.options.slidesToShow) {
                            _.slideHandler(_.currentSlide - slideOffset, false, dontAnimate);
                        }
                        break;

                    case 'next':
                        slideOffset = indexOffset === 0 ? _.options.slidesToScroll : indexOffset;
                        if (_.slideCount > _.options.slidesToShow) {
                            _.slideHandler(_.currentSlide + slideOffset, false, dontAnimate);
                        }
                        break;

                    case 'index':
                        var index = event.data.index === 0 ? 0 :
                            event.data.index || $target.index() * _.options.slidesToScroll;

                        _.slideHandler(_.checkNavigable(index), false, dontAnimate);
                        $target.children().trigger('focus');
                        break;

                    default:
                        return;
                }

            };

            Slick.prototype.checkNavigable = function(index) {

                var _ = this,
                    navigables, prevNavigable;

                navigables = _.getNavigableIndexes();
                prevNavigable = 0;
                if (index > navigables[navigables.length - 1]) {
                    index = navigables[navigables.length - 1];
                } else {
                    for (var n in navigables) {
                        if (index < navigables[n]) {
                            index = prevNavigable;
                            break;
                        }
                        prevNavigable = navigables[n];
                    }
                }

                return index;
            };

            Slick.prototype.cleanUpEvents = function() {

                var _ = this;

                if (_.options.dots && _.$dots !== null) {

                    $('li', _.$dots)
                        .off('click.slick', _.changeSlide)
                        .off('mouseenter.slick', $.proxy(_.interrupt, _, true))
                        .off('mouseleave.slick', $.proxy(_.interrupt, _, false));

                }

                _.$slider.off('focus.slick blur.slick');

                if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
                    _.$prevArrow && _.$prevArrow.off('click.slick', _.changeSlide);
                    _.$nextArrow && _.$nextArrow.off('click.slick', _.changeSlide);
                }

                _.$list.off('touchstart.slick mousedown.slick', _.swipeHandler);
                _.$list.off('touchmove.slick mousemove.slick', _.swipeHandler);
                _.$list.off('touchend.slick mouseup.slick', _.swipeHandler);
                _.$list.off('touchcancel.slick mouseleave.slick', _.swipeHandler);

                _.$list.off('click.slick', _.clickHandler);

                $(document).off(_.visibilityChange, _.visibility);

                _.cleanUpSlideEvents();

                if (_.options.accessibility === true) {
                    _.$list.off('keydown.slick', _.keyHandler);
                }

                if (_.options.focusOnSelect === true) {
                    $(_.$slideTrack).children().off('click.slick', _.selectHandler);
                }

                $(window).off('orientationchange.slick.slick-' + _.instanceUid, _.orientationChange);

                $(window).off('resize.slick.slick-' + _.instanceUid, _.resize);

                $('[draggable!=true]', _.$slideTrack).off('dragstart', _.preventDefault);

                $(window).off('load.slick.slick-' + _.instanceUid, _.setPosition);
                $(document).off('ready.slick.slick-' + _.instanceUid, _.setPosition);

            };

            Slick.prototype.cleanUpSlideEvents = function() {

                var _ = this;

                _.$list.off('mouseenter.slick', $.proxy(_.interrupt, _, true));
                _.$list.off('mouseleave.slick', $.proxy(_.interrupt, _, false));

            };

            Slick.prototype.cleanUpRows = function() {

                var _ = this,
                    originalSlides;

                if (_.options.rows > 1) {
                    originalSlides = _.$slides.children().children();
                    originalSlides.removeAttr('style');
                    _.$slider.empty().append(originalSlides);
                }

            };

            Slick.prototype.clickHandler = function(event) {

                var _ = this;

                if (_.shouldClick === false) {
                    event.stopImmediatePropagation();
                    event.stopPropagation();
                    event.preventDefault();
                }

            };

            Slick.prototype.destroy = function(refresh) {

                var _ = this;

                _.autoPlayClear();

                _.touchObject = {};

                _.cleanUpEvents();

                $('.slick-cloned', _.$slider).detach();

                if (_.$dots) {
                    _.$dots.remove();
                }


                if (_.$prevArrow && _.$prevArrow.length) {

                    _.$prevArrow
                        .removeClass('slick-disabled slick-arrow slick-hidden')
                        .removeAttr('aria-hidden aria-disabled tabindex')
                        .css('display', '');

                    if (_.htmlExpr.test(_.options.prevArrow)) {
                        _.$prevArrow.remove();
                    }
                }

                if (_.$nextArrow && _.$nextArrow.length) {

                    _.$nextArrow
                        .removeClass('slick-disabled slick-arrow slick-hidden')
                        .removeAttr('aria-hidden aria-disabled tabindex')
                        .css('display', '');

                    if (_.htmlExpr.test(_.options.nextArrow)) {
                        _.$nextArrow.remove();
                    }

                }


                if (_.$slides) {

                    _.$slides
                        .removeClass('slick-slide slick-active slick-center slick-visible slick-current')
                        .removeAttr('aria-hidden')
                        .removeAttr('data-slick-index')
                        .each(function() {
                            $(this).attr('style', $(this).data('originalStyling'));
                        });

                    _.$slideTrack.children(this.options.slide).detach();

                    _.$slideTrack.detach();

                    _.$list.detach();

                    _.$slider.append(_.$slides);
                }

                _.cleanUpRows();

                _.$slider.removeClass('slick-slider');
                _.$slider.removeClass('slick-initialized');
                _.$slider.removeClass('slick-dotted');

                _.unslicked = true;

                if (!refresh) {
                    _.$slider.trigger('destroy', [_]);
                }

            };

            Slick.prototype.disableTransition = function(slide) {

                var _ = this,
                    transition = {};

                transition[_.transitionType] = '';

                if (_.options.fade === false) {
                    _.$slideTrack.css(transition);
                } else {
                    _.$slides.eq(slide).css(transition);
                }

            };

            Slick.prototype.fadeSlide = function(slideIndex, callback) {

                var _ = this;

                if (_.cssTransitions === false) {

                    _.$slides.eq(slideIndex).css({
                        zIndex: _.options.zIndex
                    });

                    _.$slides.eq(slideIndex).animate({
                        opacity: 1
                    }, _.options.speed, _.options.easing, callback);

                } else {

                    _.applyTransition(slideIndex);

                    _.$slides.eq(slideIndex).css({
                        opacity: 1,
                        zIndex: _.options.zIndex
                    });

                    if (callback) {
                        setTimeout(function() {

                            _.disableTransition(slideIndex);

                            callback.call();
                        }, _.options.speed);
                    }

                }

            };

            Slick.prototype.fadeSlideOut = function(slideIndex) {

                var _ = this;

                if (_.cssTransitions === false) {

                    _.$slides.eq(slideIndex).animate({
                        opacity: 0,
                        zIndex: _.options.zIndex - 2
                    }, _.options.speed, _.options.easing);

                } else {

                    _.applyTransition(slideIndex);

                    _.$slides.eq(slideIndex).css({
                        opacity: 0,
                        zIndex: _.options.zIndex - 2
                    });

                }

            };

            Slick.prototype.filterSlides = Slick.prototype.slickFilter = function(filter) {

                var _ = this;

                if (filter !== null) {

                    _.$slidesCache = _.$slides;

                    _.unload();

                    _.$slideTrack.children(this.options.slide).detach();

                    _.$slidesCache.filter(filter).appendTo(_.$slideTrack);

                    _.reinit();

                }

            };

            Slick.prototype.focusHandler = function() {

                var _ = this;

                _.$slider
                    .off('focus.slick blur.slick')
                    .on('focus.slick blur.slick',
                        '*:not(.slick-arrow)',
                        function(event) {

                            event.stopImmediatePropagation();
                            var $sf = $(this);

                            setTimeout(function() {

                                if (_.options.pauseOnFocus) {
                                    _.focussed = $sf.is(':focus');
                                    _.autoPlay();
                                }

                            }, 0);

                        });
            };

            Slick.prototype.getCurrent = Slick.prototype.slickCurrentSlide = function() {

                var _ = this;
                return _.currentSlide;

            };

            Slick.prototype.getDotCount = function() {

                var _ = this;

                var breakPoint = 0;
                var counter = 0;
                var pagerQty = 0;

                if (_.options.infinite === true) {
                    while (breakPoint < _.slideCount) {
                        ++pagerQty;
                        breakPoint = counter + _.options.slidesToScroll;
                        counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options
                            .slidesToScroll : _.options.slidesToShow;
                    }
                } else if (_.options.centerMode === true) {
                    pagerQty = _.slideCount;
                } else if (!_.options.asNavFor) {
                    pagerQty = 1 + Math.ceil((_.slideCount - _.options.slidesToShow) / _.options
                        .slidesToScroll);
                } else {
                    while (breakPoint < _.slideCount) {
                        ++pagerQty;
                        breakPoint = counter + _.options.slidesToScroll;
                        counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options
                            .slidesToScroll : _.options.slidesToShow;
                    }
                }

                return pagerQty - 1;

            };

            Slick.prototype.getLeft = function(slideIndex) {

                var _ = this,
                    targetLeft,
                    verticalHeight,
                    verticalOffset = 0,
                    targetSlide;

                _.slideOffset = 0;
                verticalHeight = _.$slides.first().outerHeight(true);

                if (_.options.infinite === true) {
                    if (_.slideCount > _.options.slidesToShow) {
                        _.slideOffset = (_.slideWidth * _.options.slidesToShow) * -1;
                        verticalOffset = (verticalHeight * _.options.slidesToShow) * -1;
                    }
                    if (_.slideCount % _.options.slidesToScroll !== 0) {
                        if (slideIndex + _.options.slidesToScroll > _.slideCount && _.slideCount > _.options
                            .slidesToShow) {
                            if (slideIndex > _.slideCount) {
                                _.slideOffset = ((_.options.slidesToShow - (slideIndex - _.slideCount)) * _
                                    .slideWidth) * -1;
                                verticalOffset = ((_.options.slidesToShow - (slideIndex - _.slideCount)) *
                                    verticalHeight) * -1;
                            } else {
                                _.slideOffset = ((_.slideCount % _.options.slidesToScroll) * _.slideWidth) * -1;
                                verticalOffset = ((_.slideCount % _.options.slidesToScroll) * verticalHeight) *
                                    -1;
                            }
                        }
                    }
                } else {
                    if (slideIndex + _.options.slidesToShow > _.slideCount) {
                        _.slideOffset = ((slideIndex + _.options.slidesToShow) - _.slideCount) * _.slideWidth;
                        verticalOffset = ((slideIndex + _.options.slidesToShow) - _.slideCount) *
                            verticalHeight;
                    }
                }

                if (_.slideCount <= _.options.slidesToShow) {
                    _.slideOffset = 0;
                    verticalOffset = 0;
                }

                if (_.options.centerMode === true && _.options.infinite === true) {
                    _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2) - _.slideWidth;
                } else if (_.options.centerMode === true) {
                    _.slideOffset = 0;
                    _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2);
                }

                if (_.options.vertical === false) {
                    targetLeft = ((slideIndex * _.slideWidth) * -1) + _.slideOffset;
                } else {
                    targetLeft = ((slideIndex * verticalHeight) * -1) + verticalOffset;
                }

                if (_.options.variableWidth === true) {

                    if (_.slideCount <= _.options.slidesToShow || _.options.infinite === false) {
                        targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex);
                    } else {
                        targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex + _.options
                            .slidesToShow);
                    }

                    if (_.options.rtl === true) {
                        if (targetSlide[0]) {
                            targetLeft = (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide
                                .width()) * -1;
                        } else {
                            targetLeft = 0;
                        }
                    } else {
                        targetLeft = targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0;
                    }

                    if (_.options.centerMode === true) {
                        if (_.slideCount <= _.options.slidesToShow || _.options.infinite === false) {
                            targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex);
                        } else {
                            targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex + _.options
                                .slidesToShow + 1);
                        }

                        if (_.options.rtl === true) {
                            if (targetSlide[0]) {
                                targetLeft = (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide
                                    .width()) * -1;
                            } else {
                                targetLeft = 0;
                            }
                        } else {
                            targetLeft = targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0;
                        }

                        targetLeft += (_.$list.width() - targetSlide.outerWidth()) / 2;
                    }
                }

                return targetLeft;

            };

            Slick.prototype.getOption = Slick.prototype.slickGetOption = function(option) {

                var _ = this;

                return _.options[option];

            };

            Slick.prototype.getNavigableIndexes = function() {

                var _ = this,
                    breakPoint = 0,
                    counter = 0,
                    indexes = [],
                    max;

                if (_.options.infinite === false) {
                    max = _.slideCount;
                } else {
                    breakPoint = _.options.slidesToScroll * -1;
                    counter = _.options.slidesToScroll * -1;
                    max = _.slideCount * 2;
                }

                while (breakPoint < max) {
                    indexes.push(breakPoint);
                    breakPoint = counter + _.options.slidesToScroll;
                    counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _
                        .options.slidesToShow;
                }

                return indexes;

            };

            Slick.prototype.getSlick = function() {

                return this;

            };

            Slick.prototype.getSlideCount = function() {

                var _ = this,
                    slidesTraversed, swipedSlide, centerOffset;

                centerOffset = _.options.centerMode === true ? _.slideWidth * Math.floor(_.options
                    .slidesToShow / 2) : 0;

                if (_.options.swipeToSlide === true) {
                    _.$slideTrack.find('.slick-slide').each(function(index, slide) {
                        if (slide.offsetLeft - centerOffset + ($(slide).outerWidth() / 2) > (_
                                .swipeLeft * -1)) {
                            swipedSlide = slide;
                            return false;
                        }
                    });

                    slidesTraversed = Math.abs($(swipedSlide).attr('data-slick-index') - _.currentSlide) || 1;

                    return slidesTraversed;

                } else {
                    return _.options.slidesToScroll;
                }

            };

            Slick.prototype.goTo = Slick.prototype.slickGoTo = function(slide, dontAnimate) {

                var _ = this;

                _.changeSlide({
                    data: {
                        message: 'index',
                        index: parseInt(slide)
                    }
                }, dontAnimate);

            };

            Slick.prototype.init = function(creation) {

                var _ = this;

                if (!$(_.$slider).hasClass('slick-initialized')) {

                    $(_.$slider).addClass('slick-initialized');

                    _.buildRows();
                    _.buildOut();
                    _.setProps();
                    _.startLoad();
                    _.loadSlider();
                    _.initializeEvents();
                    _.updateArrows();
                    _.updateDots();
                    _.checkResponsive(true);
                    _.focusHandler();

                }

                if (creation) {
                    _.$slider.trigger('init', [_]);
                }

                if (_.options.accessibility === true) {
                    _.initADA();
                }

                if (_.options.autoplay) {

                    _.paused = false;
                    _.autoPlay();

                }

            };

            Slick.prototype.initADA = function() {
                var _ = this;
                _.$slides.add(_.$slideTrack.find('.slick-cloned')).attr({
                    'aria-hidden': 'true',
                    'tabindex': '-1'
                }).find('a, input, button, select').attr({
                    'tabindex': '-1'
                });

                _.$slideTrack.attr('role', 'listbox');

                _.$slides.not(_.$slideTrack.find('.slick-cloned')).each(function(i) {
                    $(this).attr({
                        'role': 'option',
                        'aria-describedby': 'slick-slide' + _.instanceUid + i + ''
                    });
                });

                if (_.$dots !== null) {
                    _.$dots.attr('role', 'tablist').find('li').each(function(i) {
                            $(this).attr({
                                'role': 'presentation',
                                'aria-selected': 'false',
                                'aria-controls': 'navigation' + _.instanceUid + i + '',
                                'id': 'slick-slide' + _.instanceUid + i + ''
                            });
                        })
                        .first().attr('aria-selected', 'true').end()
                        .find('button').attr('role', 'button').end()
                        .closest('div').attr('role', 'toolbar');
                }
                _.activateADA();

            };

            Slick.prototype.initArrowEvents = function() {

                var _ = this;

                if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
                    _.$prevArrow
                        .off('click.slick')
                        .on('click.slick', {
                            message: 'previous'
                        }, _.changeSlide);
                    _.$nextArrow
                        .off('click.slick')
                        .on('click.slick', {
                            message: 'next'
                        }, _.changeSlide);
                }

            };

            Slick.prototype.initDotEvents = function() {

                var _ = this;

                if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {
                    $('li', _.$dots).on('click.slick', {
                        message: 'index'
                    }, _.changeSlide);
                }

                if (_.options.dots === true && _.options.pauseOnDotsHover === true) {

                    $('li', _.$dots)
                        .on('mouseenter.slick', $.proxy(_.interrupt, _, true))
                        .on('mouseleave.slick', $.proxy(_.interrupt, _, false));

                }

            };

            Slick.prototype.initSlideEvents = function() {

                var _ = this;

                if (_.options.pauseOnHover) {

                    _.$list.on('mouseenter.slick', $.proxy(_.interrupt, _, true));
                    _.$list.on('mouseleave.slick', $.proxy(_.interrupt, _, false));

                }

            };

            Slick.prototype.initializeEvents = function() {

                var _ = this;

                _.initArrowEvents();

                _.initDotEvents();
                _.initSlideEvents();

                _.$list.on('touchstart.slick mousedown.slick', {
                    action: 'start'
                }, _.swipeHandler);
                _.$list.on('touchmove.slick mousemove.slick', {
                    action: 'move'
                }, _.swipeHandler);
                _.$list.on('touchend.slick mouseup.slick', {
                    action: 'end'
                }, _.swipeHandler);
                _.$list.on('touchcancel.slick mouseleave.slick', {
                    action: 'end'
                }, _.swipeHandler);

                _.$list.on('click.slick', _.clickHandler);

                $(document).on(_.visibilityChange, $.proxy(_.visibility, _));

                if (_.options.accessibility === true) {
                    _.$list.on('keydown.slick', _.keyHandler);
                }

                if (_.options.focusOnSelect === true) {
                    $(_.$slideTrack).children().on('click.slick', _.selectHandler);
                }

                $(window).on('orientationchange.slick.slick-' + _.instanceUid, $.proxy(_.orientationChange, _));

                $(window).on('resize.slick.slick-' + _.instanceUid, $.proxy(_.resize, _));

                $('[draggable!=true]', _.$slideTrack).on('dragstart', _.preventDefault);

                $(window).on('load.slick.slick-' + _.instanceUid, _.setPosition);
                $(document).on('ready.slick.slick-' + _.instanceUid, _.setPosition);

            };

            Slick.prototype.initUI = function() {

                var _ = this;

                if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {

                    _.$prevArrow.show();
                    _.$nextArrow.show();

                }

                if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {

                    _.$dots.show();

                }

            };

            Slick.prototype.keyHandler = function(event) {

                var _ = this;
                //Dont slide if the cursor is inside the form fields and arrow keys are pressed
                if (!event.target.tagName.match('TEXTAREA|INPUT|SELECT')) {
                    if (event.keyCode === 37 && _.options.accessibility === true) {
                        _.changeSlide({
                            data: {
                                message: _.options.rtl === true ? 'next' : 'previous'
                            }
                        });
                    } else if (event.keyCode === 39 && _.options.accessibility === true) {
                        _.changeSlide({
                            data: {
                                message: _.options.rtl === true ? 'previous' : 'next'
                            }
                        });
                    }
                }

            };

            Slick.prototype.lazyLoad = function() {

                var _ = this,
                    loadRange, cloneRange, rangeStart, rangeEnd;

                function loadImages(imagesScope) {

                    $('img[data-lazy]', imagesScope).each(function() {

                        var image = $(this),
                            imageSource = $(this).attr('data-lazy'),
                            imageToLoad = document.createElement('img');

                        imageToLoad.onload = function() {

                            image
                                .animate({
                                    opacity: 0
                                }, 100, function() {
                                    image
                                        .attr('src', imageSource)
                                        .animate({
                                            opacity: 1
                                        }, 200, function() {
                                            image
                                                .removeAttr('data-lazy')
                                                .removeClass('slick-loading');
                                        });
                                    _.$slider.trigger('lazyLoaded', [_, image, imageSource]);
                                });

                        };

                        imageToLoad.onerror = function() {

                            image
                                .removeAttr('data-lazy')
                                .removeClass('slick-loading')
                                .addClass('slick-lazyload-error');

                            _.$slider.trigger('lazyLoadError', [_, image, imageSource]);

                        };

                        imageToLoad.src = imageSource;

                    });

                }

                if (_.options.centerMode === true) {
                    if (_.options.infinite === true) {
                        rangeStart = _.currentSlide + (_.options.slidesToShow / 2 + 1);
                        rangeEnd = rangeStart + _.options.slidesToShow + 2;
                    } else {
                        rangeStart = Math.max(0, _.currentSlide - (_.options.slidesToShow / 2 + 1));
                        rangeEnd = 2 + (_.options.slidesToShow / 2 + 1) + _.currentSlide;
                    }
                } else {
                    rangeStart = _.options.infinite ? _.options.slidesToShow + _.currentSlide : _.currentSlide;
                    rangeEnd = Math.ceil(rangeStart + _.options.slidesToShow);
                    if (_.options.fade === true) {
                        if (rangeStart > 0) rangeStart--;
                        if (rangeEnd <= _.slideCount) rangeEnd++;
                    }
                }

                loadRange = _.$slider.find('.slick-slide').slice(rangeStart, rangeEnd);
                loadImages(loadRange);

                if (_.slideCount <= _.options.slidesToShow) {
                    cloneRange = _.$slider.find('.slick-slide');
                    loadImages(cloneRange);
                } else
                if (_.currentSlide >= _.slideCount - _.options.slidesToShow) {
                    cloneRange = _.$slider.find('.slick-cloned').slice(0, _.options.slidesToShow);
                    loadImages(cloneRange);
                } else if (_.currentSlide === 0) {
                    cloneRange = _.$slider.find('.slick-cloned').slice(_.options.slidesToShow * -1);
                    loadImages(cloneRange);
                }

            };

            Slick.prototype.loadSlider = function() {

                var _ = this;

                _.setPosition();

                _.$slideTrack.css({
                    opacity: 1
                });

                _.$slider.removeClass('slick-loading');

                _.initUI();

                if (_.options.lazyLoad === 'progressive') {
                    _.progressiveLazyLoad();
                }

            };

            Slick.prototype.next = Slick.prototype.slickNext = function() {

                var _ = this;

                _.changeSlide({
                    data: {
                        message: 'next'
                    }
                });

            };

            Slick.prototype.orientationChange = function() {

                var _ = this;

                _.checkResponsive();
                _.setPosition();

            };

            Slick.prototype.pause = Slick.prototype.slickPause = function() {

                var _ = this;

                _.autoPlayClear();
                _.paused = true;

            };

            Slick.prototype.play = Slick.prototype.slickPlay = function() {

                var _ = this;

                _.autoPlay();
                _.options.autoplay = true;
                _.paused = false;
                _.focussed = false;
                _.interrupted = false;

            };

            Slick.prototype.postSlide = function(index) {

                var _ = this;

                if (!_.unslicked) {

                    _.$slider.trigger('afterChange', [_, index]);

                    _.animating = false;

                    _.setPosition();

                    _.swipeLeft = null;

                    if (_.options.autoplay) {
                        _.autoPlay();
                    }

                    if (_.options.accessibility === true) {
                        _.initADA();
                    }

                }

            };

            Slick.prototype.prev = Slick.prototype.slickPrev = function() {

                var _ = this;

                _.changeSlide({
                    data: {
                        message: 'previous'
                    }
                });

            };

            Slick.prototype.preventDefault = function(event) {

                event.preventDefault();

            };

            Slick.prototype.progressiveLazyLoad = function(tryCount) {

                tryCount = tryCount || 1;

                var _ = this,
                    $imgsToLoad = $('img[data-lazy]', _.$slider),
                    image,
                    imageSource,
                    imageToLoad;

                if ($imgsToLoad.length) {

                    image = $imgsToLoad.first();
                    imageSource = image.attr('data-lazy');
                    imageToLoad = document.createElement('img');

                    imageToLoad.onload = function() {

                        image
                            .attr('src', imageSource)
                            .removeAttr('data-lazy')
                            .removeClass('slick-loading');

                        if (_.options.adaptiveHeight === true) {
                            _.setPosition();
                        }

                        _.$slider.trigger('lazyLoaded', [_, image, imageSource]);
                        _.progressiveLazyLoad();

                    };

                    imageToLoad.onerror = function() {

                        if (tryCount < 3) {

                            /**
                             * try to load the image 3 times,
                             * leave a slight delay so we don't get
                             * servers blocking the request.
                             */
                            setTimeout(function() {
                                _.progressiveLazyLoad(tryCount + 1);
                            }, 500);

                        } else {

                            image
                                .removeAttr('data-lazy')
                                .removeClass('slick-loading')
                                .addClass('slick-lazyload-error');

                            _.$slider.trigger('lazyLoadError', [_, image, imageSource]);

                            _.progressiveLazyLoad();

                        }

                    };

                    imageToLoad.src = imageSource;

                } else {

                    _.$slider.trigger('allImagesLoaded', [_]);

                }

            };

            Slick.prototype.refresh = function(initializing) {

                var _ = this,
                    currentSlide, lastVisibleIndex;

                lastVisibleIndex = _.slideCount - _.options.slidesToShow;

                // in non-infinite sliders, we don't want to go past the
                // last visible index.
                if (!_.options.infinite && (_.currentSlide > lastVisibleIndex)) {
                    _.currentSlide = lastVisibleIndex;
                }

                // if less slides than to show, go to start.
                if (_.slideCount <= _.options.slidesToShow) {
                    _.currentSlide = 0;

                }

                currentSlide = _.currentSlide;

                _.destroy(true);

                $.extend(_, _.initials, {
                    currentSlide: currentSlide
                });

                _.init();

                if (!initializing) {

                    _.changeSlide({
                        data: {
                            message: 'index',
                            index: currentSlide
                        }
                    }, false);

                }

            };

            Slick.prototype.registerBreakpoints = function() {

                var _ = this,
                    breakpoint, currentBreakpoint, l,
                    responsiveSettings = _.options.responsive || null;

                if ($.type(responsiveSettings) === 'array' && responsiveSettings.length) {

                    _.respondTo = _.options.respondTo || 'window';

                    for (breakpoint in responsiveSettings) {

                        l = _.breakpoints.length - 1;
                        currentBreakpoint = responsiveSettings[breakpoint].breakpoint;

                        if (responsiveSettings.hasOwnProperty(breakpoint)) {

                            // loop through the breakpoints and cut out any existing
                            // ones with the same breakpoint number, we don't want dupes.
                            while (l >= 0) {
                                if (_.breakpoints[l] && _.breakpoints[l] === currentBreakpoint) {
                                    _.breakpoints.splice(l, 1);
                                }
                                l--;
                            }

                            _.breakpoints.push(currentBreakpoint);
                            _.breakpointSettings[currentBreakpoint] = responsiveSettings[breakpoint].settings;

                        }

                    }

                    _.breakpoints.sort(function(a, b) {
                        return (_.options.mobileFirst) ? a - b : b - a;
                    });

                }

            };

            Slick.prototype.reinit = function() {

                var _ = this;

                _.$slides =
                    _.$slideTrack
                    .children(_.options.slide)
                    .addClass('slick-slide');

                _.slideCount = _.$slides.length;

                if (_.currentSlide >= _.slideCount && _.currentSlide !== 0) {
                    _.currentSlide = _.currentSlide - _.options.slidesToScroll;
                }

                if (_.slideCount <= _.options.slidesToShow) {
                    _.currentSlide = 0;
                }

                _.registerBreakpoints();

                _.setProps();
                _.setupInfinite();
                _.buildArrows();
                _.updateArrows();
                _.initArrowEvents();
                _.buildDots();
                _.updateDots();
                _.initDotEvents();
                _.cleanUpSlideEvents();
                _.initSlideEvents();

                _.checkResponsive(false, true);

                if (_.options.focusOnSelect === true) {
                    $(_.$slideTrack).children().on('click.slick', _.selectHandler);
                }

                _.setSlideClasses(typeof _.currentSlide === 'number' ? _.currentSlide : 0);

                _.setPosition();
                _.focusHandler();

                _.paused = !_.options.autoplay;
                _.autoPlay();

                _.$slider.trigger('reInit', [_]);

            };

            Slick.prototype.resize = function() {

                var _ = this;

                if ($(window).width() !== _.windowWidth) {
                    clearTimeout(_.windowDelay);
                    _.windowDelay = window.setTimeout(function() {
                        _.windowWidth = $(window).width();
                        _.checkResponsive();
                        if (!_.unslicked) {
                            _.setPosition();
                        }
                    }, 50);
                }
            };

            Slick.prototype.removeSlide = Slick.prototype.slickRemove = function(index, removeBefore, removeAll) {

                var _ = this;

                if (typeof(index) === 'boolean') {
                    removeBefore = index;
                    index = removeBefore === true ? 0 : _.slideCount - 1;
                } else {
                    index = removeBefore === true ? --index : index;
                }

                if (_.slideCount < 1 || index < 0 || index > _.slideCount - 1) {
                    return false;
                }

                _.unload();

                if (removeAll === true) {
                    _.$slideTrack.children().remove();
                } else {
                    _.$slideTrack.children(this.options.slide).eq(index).remove();
                }

                _.$slides = _.$slideTrack.children(this.options.slide);

                _.$slideTrack.children(this.options.slide).detach();

                _.$slideTrack.append(_.$slides);

                _.$slidesCache = _.$slides;

                _.reinit();

            };

            Slick.prototype.setCSS = function(position) {

                var _ = this,
                    positionProps = {},
                    x, y;

                if (_.options.rtl === true) {
                    position = -position;
                }
                x = _.positionProp == 'left' ? Math.ceil(position) + 'px' : '0px';
                y = _.positionProp == 'top' ? Math.ceil(position) + 'px' : '0px';

                positionProps[_.positionProp] = position;

                if (_.transformsEnabled === false) {
                    _.$slideTrack.css(positionProps);
                } else {
                    positionProps = {};
                    if (_.cssTransitions === false) {
                        positionProps[_.animType] = 'translate(' + x + ', ' + y + ')';
                        _.$slideTrack.css(positionProps);
                    } else {
                        positionProps[_.animType] = 'translate3d(' + x + ', ' + y + ', 0px)';
                        _.$slideTrack.css(positionProps);
                    }
                }

            };

            Slick.prototype.setDimensions = function() {

                var _ = this;

                if (_.options.vertical === false) {
                    if (_.options.centerMode === true) {
                        _.$list.css({
                            padding: ('0px ' + _.options.centerPadding)
                        });
                    }
                } else {
                    _.$list.height(_.$slides.first().outerHeight(true) * _.options.slidesToShow);
                    if (_.options.centerMode === true) {
                        _.$list.css({
                            padding: (_.options.centerPadding + ' 0px')
                        });
                    }
                }

                _.listWidth = _.$list.width();
                _.listHeight = _.$list.height();


                if (_.options.vertical === false && _.options.variableWidth === false) {
                    _.slideWidth = Math.ceil(_.listWidth / _.options.slidesToShow);
                    _.$slideTrack.width(Math.ceil((_.slideWidth * _.$slideTrack.children('.slick-slide')
                        .length)));

                } else if (_.options.variableWidth === true) {
                    _.$slideTrack.width(5000 * _.slideCount);
                } else {
                    _.slideWidth = Math.ceil(_.listWidth);
                    _.$slideTrack.height(Math.ceil((_.$slides.first().outerHeight(true) * _.$slideTrack
                        .children('.slick-slide').length)));
                }

                var offset = _.$slides.first().outerWidth(true) - _.$slides.first().width();
                if (_.options.variableWidth === false) _.$slideTrack.children('.slick-slide').width(_
                    .slideWidth - offset);

            };

            Slick.prototype.setFade = function() {

                var _ = this,
                    targetLeft;

                _.$slides.each(function(index, element) {
                    targetLeft = (_.slideWidth * index) * -1;
                    if (_.options.rtl === true) {
                        $(element).css({
                            position: 'relative',
                            right: targetLeft,
                            top: 0,
                            zIndex: _.options.zIndex - 2,
                            opacity: 0
                        });
                    } else {
                        $(element).css({
                            position: 'relative',
                            left: targetLeft,
                            top: 0,
                            zIndex: _.options.zIndex - 2,
                            opacity: 0
                        });
                    }
                });

                _.$slides.eq(_.currentSlide).css({
                    zIndex: _.options.zIndex - 1,
                    opacity: 1
                });

            };

            Slick.prototype.setHeight = function() {

                var _ = this;

                if (_.options.slidesToShow === 1 && _.options.adaptiveHeight === true && _.options.vertical ===
                    false) {
                    var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(true);
                    _.$list.css('height', targetHeight);
                }

            };

            Slick.prototype.setOption =
                Slick.prototype.slickSetOption = function() {

                    /**
                     * accepts arguments in format of:
                     *
                     *  - for changing a single option's value:
                     *     .slick("setOption", option, value, refresh )
                     *
                     *  - for changing a set of responsive options:
                     *     .slick("setOption", 'responsive', [{}, ...], refresh )
                     *
                     *  - for updating multiple values at once (not responsive)
                     *     .slick("setOption", { 'option': value, ... }, refresh )
                     */

                    var _ = this,
                        l, item, option, value, refresh = false,
                        type;

                    if ($.type(arguments[0]) === 'object') {

                        option = arguments[0];
                        refresh = arguments[1];
                        type = 'multiple';

                    } else if ($.type(arguments[0]) === 'string') {

                        option = arguments[0];
                        value = arguments[1];
                        refresh = arguments[2];

                        if (arguments[0] === 'responsive' && $.type(arguments[1]) === 'array') {

                            type = 'responsive';

                        } else if (typeof arguments[1] !== 'undefined') {

                            type = 'single';

                        }

                    }

                    if (type === 'single') {

                        _.options[option] = value;


                    } else if (type === 'multiple') {

                        $.each(option, function(opt, val) {

                            _.options[opt] = val;

                        });


                    } else if (type === 'responsive') {

                        for (item in value) {

                            if ($.type(_.options.responsive) !== 'array') {

                                _.options.responsive = [value[item]];

                            } else {

                                l = _.options.responsive.length - 1;

                                // loop through the responsive object and splice out duplicates.
                                while (l >= 0) {

                                    if (_.options.responsive[l].breakpoint === value[item].breakpoint) {

                                        _.options.responsive.splice(l, 1);

                                    }

                                    l--;

                                }

                                _.options.responsive.push(value[item]);

                            }

                        }

                    }

                    if (refresh) {

                        _.unload();
                        _.reinit();

                    }

                };

            Slick.prototype.setPosition = function() {

                var _ = this;

                _.setDimensions();

                _.setHeight();

                if (_.options.fade === false) {
                    _.setCSS(_.getLeft(_.currentSlide));
                } else {
                    _.setFade();
                }

                _.$slider.trigger('setPosition', [_]);

            };

            Slick.prototype.setProps = function() {

                var _ = this,
                    bodyStyle = document.body.style;

                _.positionProp = _.options.vertical === true ? 'top' : 'left';

                if (_.positionProp === 'top') {
                    _.$slider.addClass('slick-vertical');
                } else {
                    _.$slider.removeClass('slick-vertical');
                }

                if (bodyStyle.WebkitTransition !== undefined ||
                    bodyStyle.MozTransition !== undefined ||
                    bodyStyle.msTransition !== undefined) {
                    if (_.options.useCSS === true) {
                        _.cssTransitions = true;
                    }
                }

                if (_.options.fade) {
                    if (typeof _.options.zIndex === 'number') {
                        if (_.options.zIndex < 3) {
                            _.options.zIndex = 3;
                        }
                    } else {
                        _.options.zIndex = _.defaults.zIndex;
                    }
                }

                if (bodyStyle.OTransform !== undefined) {
                    _.animType = 'OTransform';
                    _.transformType = '-o-transform';
                    _.transitionType = 'OTransition';
                    if (bodyStyle.perspectiveProperty === undefined && bodyStyle.webkitPerspective ===
                        undefined) _.animType = false;
                }
                if (bodyStyle.MozTransform !== undefined) {
                    _.animType = 'MozTransform';
                    _.transformType = '-moz-transform';
                    _.transitionType = 'MozTransition';
                    if (bodyStyle.perspectiveProperty === undefined && bodyStyle.MozPerspective === undefined) _
                        .animType = false;
                }
                if (bodyStyle.webkitTransform !== undefined) {
                    _.animType = 'webkitTransform';
                    _.transformType = '-webkit-transform';
                    _.transitionType = 'webkitTransition';
                    if (bodyStyle.perspectiveProperty === undefined && bodyStyle.webkitPerspective ===
                        undefined) _.animType = false;
                }
                if (bodyStyle.msTransform !== undefined) {
                    _.animType = 'msTransform';
                    _.transformType = '-ms-transform';
                    _.transitionType = 'msTransition';
                    if (bodyStyle.msTransform === undefined) _.animType = false;
                }
                if (bodyStyle.transform !== undefined && _.animType !== false) {
                    _.animType = 'transform';
                    _.transformType = 'transform';
                    _.transitionType = 'transition';
                }
                _.transformsEnabled = _.options.useTransform && (_.animType !== null && _.animType !== false);
            };


            Slick.prototype.setSlideClasses = function(index) {

                var _ = this,
                    centerOffset, allSlides, indexOffset, remainder;

                allSlides = _.$slider
                    .find('.slick-slide')
                    .removeClass('slick-active slick-center slick-current')
                    .attr('aria-hidden', 'true');

                _.$slides
                    .eq(index)
                    .addClass('slick-current');

                if (_.options.centerMode === true) {

                    centerOffset = Math.floor(_.options.slidesToShow / 2);

                    if (_.options.infinite === true) {

                        if (index >= centerOffset && index <= (_.slideCount - 1) - centerOffset) {

                            _.$slides
                                .slice(index - centerOffset, index + centerOffset + 1)
                                .addClass('slick-active')
                                .attr('aria-hidden', 'false');

                        } else {

                            indexOffset = _.options.slidesToShow + index;
                            allSlides
                                .slice(indexOffset - centerOffset + 1, indexOffset + centerOffset + 2)
                                .addClass('slick-active')
                                .attr('aria-hidden', 'false');

                        }

                        if (index === 0) {

                            allSlides
                                .eq(allSlides.length - 1 - _.options.slidesToShow)
                                .addClass('slick-center');

                        } else if (index === _.slideCount - 1) {

                            allSlides
                                .eq(_.options.slidesToShow)
                                .addClass('slick-center');

                        }

                    }

                    _.$slides
                        .eq(index)
                        .addClass('slick-center');

                } else {

                    if (index >= 0 && index <= (_.slideCount - _.options.slidesToShow)) {

                        _.$slides
                            .slice(index, index + _.options.slidesToShow)
                            .addClass('slick-active')
                            .attr('aria-hidden', 'false');

                    } else if (allSlides.length <= _.options.slidesToShow) {

                        allSlides
                            .addClass('slick-active')
                            .attr('aria-hidden', 'false');

                    } else {

                        remainder = _.slideCount % _.options.slidesToShow;
                        indexOffset = _.options.infinite === true ? _.options.slidesToShow + index : index;

                        if (_.options.slidesToShow == _.options.slidesToScroll && (_.slideCount - index) < _
                            .options.slidesToShow) {

                            allSlides
                                .slice(indexOffset - (_.options.slidesToShow - remainder), indexOffset +
                                    remainder)
                                .addClass('slick-active')
                                .attr('aria-hidden', 'false');

                        } else {

                            allSlides
                                .slice(indexOffset, indexOffset + _.options.slidesToShow)
                                .addClass('slick-active')
                                .attr('aria-hidden', 'false');

                        }

                    }

                }

                if (_.options.lazyLoad === 'ondemand') {
                    _.lazyLoad();
                }

            };

            Slick.prototype.setupInfinite = function() {

                var _ = this,
                    i, slideIndex, infiniteCount;

                if (_.options.fade === true) {
                    _.options.centerMode = false;
                }

                if (_.options.infinite === true && _.options.fade === false) {

                    slideIndex = null;

                    if (_.slideCount > _.options.slidesToShow) {

                        if (_.options.centerMode === true) {
                            infiniteCount = _.options.slidesToShow + 1;
                        } else {
                            infiniteCount = _.options.slidesToShow;
                        }

                        for (i = _.slideCount; i > (_.slideCount -
                                infiniteCount); i -= 1) {
                            slideIndex = i - 1;
                            $(_.$slides[slideIndex]).clone(true).attr('id', '')
                                .attr('data-slick-index', slideIndex - _.slideCount)
                                .prependTo(_.$slideTrack).addClass('slick-cloned');
                        }
                        for (i = 0; i < infiniteCount; i += 1) {
                            slideIndex = i;
                            $(_.$slides[slideIndex]).clone(true).attr('id', '')
                                .attr('data-slick-index', slideIndex + _.slideCount)
                                .appendTo(_.$slideTrack).addClass('slick-cloned');
                        }
                        _.$slideTrack.find('.slick-cloned').find('[id]').each(function() {
                            $(this).attr('id', '');
                        });

                    }

                }

            };

            Slick.prototype.interrupt = function(toggle) {

                var _ = this;

                if (!toggle) {
                    _.autoPlay();
                }
                _.interrupted = toggle;

            };

            Slick.prototype.selectHandler = function(event) {

                var _ = this;

                var targetElement =
                    $(event.target).is('.slick-slide') ?
                    $(event.target) :
                    $(event.target).parents('.slick-slide');

                var index = parseInt(targetElement.attr('data-slick-index'));

                if (!index) index = 0;

                if (_.slideCount <= _.options.slidesToShow) {

                    _.setSlideClasses(index);
                    _.asNavFor(index);
                    return;

                }

                _.slideHandler(index);

            };

            Slick.prototype.slideHandler = function(index, sync, dontAnimate) {

                var targetSlide, animSlide, oldSlide, slideLeft, targetLeft = null,
                    _ = this,
                    navTarget;

                sync = sync || false;

                if (_.animating === true && _.options.waitForAnimate === true) {
                    return;
                }

                if (_.options.fade === true && _.currentSlide === index) {
                    return;
                }

                if (_.slideCount <= _.options.slidesToShow) {
                    return;
                }

                if (sync === false) {
                    _.asNavFor(index);
                }

                targetSlide = index;
                targetLeft = _.getLeft(targetSlide);
                slideLeft = _.getLeft(_.currentSlide);

                _.currentLeft = _.swipeLeft === null ? slideLeft : _.swipeLeft;

                if (_.options.infinite === false && _.options.centerMode === false && (index < 0 || index > _
                        .getDotCount() * _.options.slidesToScroll)) {
                    if (_.options.fade === false) {
                        targetSlide = _.currentSlide;
                        if (dontAnimate !== true) {
                            _.animateSlide(slideLeft, function() {
                                _.postSlide(targetSlide);
                            });
                        } else {
                            _.postSlide(targetSlide);
                        }
                    }
                    return;
                } else if (_.options.infinite === false && _.options.centerMode === true && (index < 0 ||
                        index > (_.slideCount - _.options.slidesToScroll))) {
                    if (_.options.fade === false) {
                        targetSlide = _.currentSlide;
                        if (dontAnimate !== true) {
                            _.animateSlide(slideLeft, function() {
                                _.postSlide(targetSlide);
                            });
                        } else {
                            _.postSlide(targetSlide);
                        }
                    }
                    return;
                }

                if (_.options.autoplay) {
                    clearInterval(_.autoPlayTimer);
                }

                if (targetSlide < 0) {
                    if (_.slideCount % _.options.slidesToScroll !== 0) {
                        animSlide = _.slideCount - (_.slideCount % _.options.slidesToScroll);
                    } else {
                        animSlide = _.slideCount + targetSlide;
                    }
                } else if (targetSlide >= _.slideCount) {
                    if (_.slideCount % _.options.slidesToScroll !== 0) {
                        animSlide = 0;
                    } else {
                        animSlide = targetSlide - _.slideCount;
                    }
                } else {
                    animSlide = targetSlide;
                }

                _.animating = true;

                _.$slider.trigger('beforeChange', [_, _.currentSlide, animSlide]);

                oldSlide = _.currentSlide;
                _.currentSlide = animSlide;

                _.setSlideClasses(_.currentSlide);

                if (_.options.asNavFor) {

                    navTarget = _.getNavTarget();
                    navTarget = navTarget.slick('getSlick');

                    if (navTarget.slideCount <= navTarget.options.slidesToShow) {
                        navTarget.setSlideClasses(_.currentSlide);
                    }

                }

                _.updateDots();
                _.updateArrows();

                if (_.options.fade === true) {
                    if (dontAnimate !== true) {

                        _.fadeSlideOut(oldSlide);

                        _.fadeSlide(animSlide, function() {
                            _.postSlide(animSlide);
                        });

                    } else {
                        _.postSlide(animSlide);
                    }
                    _.animateHeight();
                    return;
                }

                if (dontAnimate !== true) {
                    _.animateSlide(targetLeft, function() {
                        _.postSlide(animSlide);
                    });
                } else {
                    _.postSlide(animSlide);
                }

            };

            Slick.prototype.startLoad = function() {

                var _ = this;

                if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {

                    _.$prevArrow.hide();
                    _.$nextArrow.hide();

                }

                if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {

                    _.$dots.hide();

                }

                _.$slider.addClass('slick-loading');

            };

            Slick.prototype.swipeDirection = function() {

                var xDist, yDist, r, swipeAngle, _ = this;

                xDist = _.touchObject.startX - _.touchObject.curX;
                yDist = _.touchObject.startY - _.touchObject.curY;
                r = Math.atan2(yDist, xDist);

                swipeAngle = Math.round(r * 180 / Math.PI);
                if (swipeAngle < 0) {
                    swipeAngle = 360 - Math.abs(swipeAngle);
                }

                if ((swipeAngle <= 45) && (swipeAngle >= 0)) {
                    return (_.options.rtl === false ? 'left' : 'right');
                }
                if ((swipeAngle <= 360) && (swipeAngle >= 315)) {
                    return (_.options.rtl === false ? 'left' : 'right');
                }
                if ((swipeAngle >= 135) && (swipeAngle <= 225)) {
                    return (_.options.rtl === false ? 'right' : 'left');
                }
                if (_.options.verticalSwiping === true) {
                    if ((swipeAngle >= 35) && (swipeAngle <= 135)) {
                        return 'down';
                    } else {
                        return 'up';
                    }
                }

                return 'vertical';

            };

            Slick.prototype.swipeEnd = function(event) {

                var _ = this,
                    slideCount,
                    direction;

                _.dragging = false;
                _.interrupted = false;
                _.shouldClick = (_.touchObject.swipeLength > 10) ? false : true;

                if (_.touchObject.curX === undefined) {
                    return false;
                }

                if (_.touchObject.edgeHit === true) {
                    _.$slider.trigger('edge', [_, _.swipeDirection()]);
                }

                if (_.touchObject.swipeLength >= _.touchObject.minSwipe) {

                    direction = _.swipeDirection();

                    switch (direction) {

                        case 'left':
                        case 'down':

                            slideCount =
                                _.options.swipeToSlide ?
                                _.checkNavigable(_.currentSlide + _.getSlideCount()) :
                                _.currentSlide + _.getSlideCount();

                            _.currentDirection = 0;

                            break;

                        case 'right':
                        case 'up':

                            slideCount =
                                _.options.swipeToSlide ?
                                _.checkNavigable(_.currentSlide - _.getSlideCount()) :
                                _.currentSlide - _.getSlideCount();

                            _.currentDirection = 1;

                            break;

                        default:


                    }

                    if (direction != 'vertical') {

                        _.slideHandler(slideCount);
                        _.touchObject = {};
                        _.$slider.trigger('swipe', [_, direction]);

                    }

                } else {

                    if (_.touchObject.startX !== _.touchObject.curX) {

                        _.slideHandler(_.currentSlide);
                        _.touchObject = {};

                    }

                }

            };

            Slick.prototype.swipeHandler = function(event) {

                var _ = this;

                if ((_.options.swipe === false) || ('ontouchend' in document && _.options.swipe === false)) {
                    return;
                } else if (_.options.draggable === false && event.type.indexOf('mouse') !== -1) {
                    return;
                }

                _.touchObject.fingerCount = event.originalEvent && event.originalEvent.touches !== undefined ?
                    event.originalEvent.touches.length : 1;

                _.touchObject.minSwipe = _.listWidth / _.options
                    .touchThreshold;

                if (_.options.verticalSwiping === true) {
                    _.touchObject.minSwipe = _.listHeight / _.options
                        .touchThreshold;
                }

                switch (event.data.action) {

                    case 'start':
                        _.swipeStart(event);
                        break;

                    case 'move':
                        _.swipeMove(event);
                        break;

                    case 'end':
                        _.swipeEnd(event);
                        break;

                }

            };

            Slick.prototype.swipeMove = function(event) {

                var _ = this,
                    edgeWasHit = false,
                    curLeft, swipeDirection, swipeLength, positionOffset, touches;

                touches = event.originalEvent !== undefined ? event.originalEvent.touches : null;

                if (!_.dragging || touches && touches.length !== 1) {
                    return false;
                }

                curLeft = _.getLeft(_.currentSlide);

                _.touchObject.curX = touches !== undefined ? touches[0].pageX : event.clientX;
                _.touchObject.curY = touches !== undefined ? touches[0].pageY : event.clientY;

                _.touchObject.swipeLength = Math.round(Math.sqrt(
                    Math.pow(_.touchObject.curX - _.touchObject.startX, 2)));

                if (_.options.verticalSwiping === true) {
                    _.touchObject.swipeLength = Math.round(Math.sqrt(
                        Math.pow(_.touchObject.curY - _.touchObject.startY, 2)));
                }

                swipeDirection = _.swipeDirection();

                if (swipeDirection === 'vertical') {
                    return;
                }

                if (event.originalEvent !== undefined && _.touchObject.swipeLength > 4) {
                    event.preventDefault();
                }

                positionOffset = (_.options.rtl === false ? 1 : -1) * (_.touchObject.curX > _.touchObject
                    .startX ? 1 : -1);
                if (_.options.verticalSwiping === true) {
                    positionOffset = _.touchObject.curY > _.touchObject.startY ? 1 : -1;
                }


                swipeLength = _.touchObject.swipeLength;

                _.touchObject.edgeHit = false;

                if (_.options.infinite === false) {
                    if ((_.currentSlide === 0 && swipeDirection === 'right') || (_.currentSlide >= _
                            .getDotCount() && swipeDirection === 'left')) {
                        swipeLength = _.touchObject.swipeLength * _.options.edgeFriction;
                        _.touchObject.edgeHit = true;
                    }
                }

                if (_.options.vertical === false) {
                    _.swipeLeft = curLeft + swipeLength * positionOffset;
                } else {
                    _.swipeLeft = curLeft + (swipeLength * (_.$list.height() / _.listWidth)) * positionOffset;
                }
                if (_.options.verticalSwiping === true) {
                    _.swipeLeft = curLeft + swipeLength * positionOffset;
                }

                if (_.options.fade === true || _.options.touchMove === false) {
                    return false;
                }

                if (_.animating === true) {
                    _.swipeLeft = null;
                    return false;
                }

                _.setCSS(_.swipeLeft);

            };

            Slick.prototype.swipeStart = function(event) {

                var _ = this,
                    touches;

                _.interrupted = true;

                if (_.touchObject.fingerCount !== 1 || _.slideCount <= _.options.slidesToShow) {
                    _.touchObject = {};
                    return false;
                }

                if (event.originalEvent !== undefined && event.originalEvent.touches !== undefined) {
                    touches = event.originalEvent.touches[0];
                }

                _.touchObject.startX = _.touchObject.curX = touches !== undefined ? touches.pageX : event
                    .clientX;
                _.touchObject.startY = _.touchObject.curY = touches !== undefined ? touches.pageY : event
                    .clientY;

                _.dragging = true;

            };

            Slick.prototype.unfilterSlides = Slick.prototype.slickUnfilter = function() {

                var _ = this;

                if (_.$slidesCache !== null) {

                    _.unload();

                    _.$slideTrack.children(this.options.slide).detach();

                    _.$slidesCache.appendTo(_.$slideTrack);

                    _.reinit();

                }

            };

            Slick.prototype.unload = function() {

                var _ = this;

                $('.slick-cloned', _.$slider).remove();

                if (_.$dots) {
                    _.$dots.remove();
                }

                if (_.$prevArrow && _.htmlExpr.test(_.options.prevArrow)) {
                    _.$prevArrow.remove();
                }

                if (_.$nextArrow && _.htmlExpr.test(_.options.nextArrow)) {
                    _.$nextArrow.remove();
                }

                _.$slides
                    .removeClass('slick-slide slick-active slick-visible slick-current')
                    .attr('aria-hidden', 'true')
                    .css('width', '');

            };

            Slick.prototype.unslick = function(fromBreakpoint) {

                var _ = this;
                _.$slider.trigger('unslick', [_, fromBreakpoint]);
                _.destroy();

            };

            Slick.prototype.updateArrows = function() {

                var _ = this,
                    centerOffset;

                centerOffset = Math.floor(_.options.slidesToShow / 2);

                if (_.options.arrows === true &&
                    _.slideCount > _.options.slidesToShow &&
                    !_.options.infinite) {

                    _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
                    _.$nextArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

                    if (_.currentSlide === 0) {

                        _.$prevArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
                        _.$nextArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

                    } else if (_.currentSlide >= _.slideCount - _.options.slidesToShow && _.options
                        .centerMode === false) {

                        _.$nextArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
                        _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

                    } else if (_.currentSlide >= _.slideCount - 1 && _.options.centerMode === true) {

                        _.$nextArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
                        _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

                    }

                }

            };

            Slick.prototype.updateDots = function() {

                var _ = this;

                if (_.$dots !== null) {

                    _.$dots
                        .find('li')
                        .removeClass('slick-active')
                        .attr('aria-hidden', 'true');

                    _.$dots
                        .find('li')
                        .eq(Math.floor(_.currentSlide / _.options.slidesToScroll))
                        .addClass('slick-active')
                        .attr('aria-hidden', 'false');

                }

            };

            Slick.prototype.visibility = function() {

                var _ = this;

                if (_.options.autoplay) {

                    if (document[_.hidden]) {

                        _.interrupted = true;

                    } else {

                        _.interrupted = false;

                    }

                }

            };

            $.fn.slick = function() {
                var _ = this,
                    opt = arguments[0],
                    args = Array.prototype.slice.call(arguments, 1),
                    l = _.length,
                    i,
                    ret;
                for (i = 0; i < l; i++) {
                    if (typeof opt == 'object' || typeof opt == 'undefined')
                        _[i].slick = new Slick(_[i], opt);
                    else
                        ret = _[i].slick[opt].apply(_[i].slick, args);
                    if (typeof ret != 'undefined') return ret;
                }
                return _;
            };

        }));
    </script>









    {{-- <script>
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
    </script> --}}


{{-- 
/////main slider --}}

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
<script>
    // add slider
    let options = {
        'speed': 3000,
        'pause': true,
        'visibleSlides': 3  // Number of visible slides at a time
    }

    window.addEventListener('DOMContentLoaded', function () {
        let slider = document.querySelector('.rbd-review-slider');
        let slides = slider.querySelectorAll('.rbd-review');
        let total = slides.length;
        let pause = false;

        function pauseSlide() {
            slider.onmouseleave = function () {
                pause = false;
            };
            slider.onmouseenter = function () {
                pause = true;
            };
            return pause;
        }

        function slide() {
            if (options.pause && pauseSlide()) return;

            let activeSlide = document.querySelector('.rbd-review-slider .rbd-review.rbd-curr');
            let currIndex = Array.from(slides).indexOf(activeSlide);

            for (let i = 0; i < total; i++) {
                let slideIndex = (currIndex + i) % total;
                let currentSlide = slides[slideIndex];
                currentSlide.classList.remove('rbd-prev', 'rbd-curr', 'rbd-next');

                if (i === 0) {
                    currentSlide.classList.add('rbd-curr');
                } else if (i === 1) {
                    currentSlide.classList.add('rbd-prev');
                } else if (i === 2) {
                    currentSlide.classList.add('rbd-next');
                }
            }
        }

        let slideTimer = setInterval(function () {
            slide();
        }, options.speed);
    }, true);
</script>


    <script>
        // Optional: You can customize the scrolling speed by adjusting the 'scrollSpeed' variable.
        const scrollSpeed = 20;

        document.addEventListener("DOMContentLoaded", function() {
            let isScrolling = false;

            document.addEventListener("wheel", function(event) {
                if (!isScrolling) {
                    isScrolling = true;

                    setTimeout(function() {
                        isScrolling = false;
                    }, 1000);

                    if (event.deltaY < 0) {
                        scrollSmoothly(-scrollSpeed);
                    } else {
                        scrollSmoothly(scrollSpeed);
                    }
                }

                event.preventDefault();
            });

            function scrollSmoothly(scrollAmount) {
                window.scrollBy({
                    top: scrollAmount,
                    behavior: "smooth",
                });
            }
        });
    </script>
@endsection
