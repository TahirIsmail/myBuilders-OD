@extends('frontend.default.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ my_asset('assets/common/css/app.css') }}">
    <style>
        @media only screen and (min-width: 370px) and (max-width: 600px) {
            .title_post {
                font-size: 2rem !important;
            }
        }

        .jvVCtT {
            width: 1.5em;
            height: 0.125em;
            content: " ";
            display: block;
            margin: 0.5em 0px 0px;
            background-color: rgb(81, 197, 125);
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6" style=";margin-top:30px">
                <h1 class="title_post ">
                    <strong> Post a job </strong>
                </h1>
                <h1 class="jvVCtT"></h1>
                <p style="margin-top: 10px">
                    <strong> Get responses from Builder's Valley screened and reviewed tradespeople near you
                    </strong>
                </p>
            </div>
        </div>
    </div>
    <div id="app" >

        <post-a-job :user="{{ json_encode($user) }}" ></post-a-job>

    </div>
@endsection

@section('script')
    <script src="{{ my_asset('assets/common/js/app.js') }}"></script>
@endsection
