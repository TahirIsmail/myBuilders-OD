@extends('frontend.default.layouts.app')
@push('component-styles')
    <link rel="stylesheet" href="{{ my_asset('assets/frontend/default/css/app.css')}}">
@endpush
@section('content')
    <div id="app">
        <example/>
    </div>
    {{-- @php
         $project_categories = json_encode((App\Models\ProjectCategory::select('name','slug')->get()));
         
    @endphp --}}
    
    
@endsection
@section('script')
<script src="{{ my_asset('/assets/frontend/default/js/app.js') }}"></script>
@endsection
