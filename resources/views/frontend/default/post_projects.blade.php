@extends('frontend.default.layouts.app')

@section('content')
    <div>

        <example :job_categories="{{ json_encode($projectCategories) }}" />

    </div>
    <div style="background:  #f9f9f9">

        <job-headline-component />
    </div>
    <div style="background:  #f9f9f9">

        <sign-up-component />
    </div>
@endsection
