@extends('frontend.default.layouts.app')
@section('style')
<link rel="stylesheet" href="{{ my_asset('assets/common/css/app.css') }}">
<style>
@media only screen and (min-width: 376px) and (max-width: 600px) {
    .btn {
        width: 300px !important;
    }
}
@media only screen and (min-width: 376px) and (max-width: 600px) {
    .h3 {
        font-size:1.24rem !important;
    }
}
@media only screen and (min-width: 376px) and (max-width: 600px) {
    .p_size {
        font-size:1rem !important;
    }
}
</style>
@endsection
@section('content')
    @php

        $type = Request::get('type') && Request::get('type') == 2 ? 'client' : 'freelancer';
    @endphp
    <style type="text/css">
        .iti {
            position: relative;
            display: block !important;
        }
    </style>


    <div id="app">
        
        <multi-step></multi-step>
        {{-- <trade-form></trade-form> --}}
    </div>
@endsection
@section('script')
<script src="{{ my_asset('assets/common/js/app_tradesmen.js') }}"></script>
@endsection
