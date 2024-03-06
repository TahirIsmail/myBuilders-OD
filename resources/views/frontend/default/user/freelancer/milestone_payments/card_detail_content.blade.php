@extends('frontend.default.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ my_asset('assets/common/css/app.css') }}">
@endsection
@section('content')
    <div id="app">
        
        <card-details :stripe-pub-key="'{{config('services.stripe.key')}}'" :stripe-sec-key="'{{config('services.stripe.secret')}}'":user = "'{{ auth()->user() }}'"><card-details>
            {{-- <stripe-card :stripe-key="'{{config('services.stripe.key')}}'"></stripe-card> --}}
    </div>
@endsection

@section('script')
    <script src="{{ my_asset('assets/common/js/app.js') }}"></script>
@endsection
