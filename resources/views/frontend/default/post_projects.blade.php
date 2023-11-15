@extends('frontend.default.layouts.app')

@section('content')
    
    
        <div>
                
        <example :job_categories="{{ json_encode($projectCategories) }}"/>

        </div>
    
   
    
    
@endsection

