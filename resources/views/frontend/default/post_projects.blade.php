@extends('frontend.default.layouts.app')

@section('content')
    
    
        <div>
               
        <post-a-job :user="{{ json_encode($user) }}"/>
               
        </div>
        

    
    
@endsection

