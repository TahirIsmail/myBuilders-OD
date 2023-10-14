@extends('frontend.default.layouts.app')

@section('content')
    @php
         $project_categories = json_encode((App\Models\ProjectCategory::select('name','slug')->get()));
    @endphp
    
    <example :project-categories="{{ $project_categories  }}"/>
@endsection
