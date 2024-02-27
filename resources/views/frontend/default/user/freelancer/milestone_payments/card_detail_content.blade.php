@extends('frontend.default.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ my_asset('assets/common/css/app.css') }}">
@endsection
@section('content')
    <div id="app">

        <card-details  :user = "'{{ auth()->user() }}'"><card-details>
    </div>
@endsection

@section('script')
    <script src="{{ my_asset('assets/common/js/app.js') }}"></script>
@endsection
