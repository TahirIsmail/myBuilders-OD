@extends('frontend.default.layouts.app')
@section('style')
         <link rel="stylesheet" href="{{ my_asset('assets/common/css/app.css') }}">
@endsection
@section('content')
    
    
        <div  id="app">
               
        <post-a-job :user="{{ json_encode($user) }}"/>
               
        </div>
        

    
    
@endsection

@section('script')
<script src="{{ my_asset('assets/common/js/app.js') }}"></script>

@endsection