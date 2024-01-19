@extends('frontend.default.layouts.app')

@section('content')
    {{-- {{ dd() }} --}}
    {{-- @foreach ($projects as $project)
    <p>{{ ($project->name) }}</p>
@endforeach
{{ dd("projects") }} --}}

    <section class="py-3">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.client.inc.sidebar')

                <div class="aiz-user-panel-fix d-flex">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 lead_content" style=" overflow-y: scroll;">

                                @foreach ($projects as $project)
                                    <div class="card card_shadow w-100 border-gray-light">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li class="text-primary">
                                                    {{ $project->name }}
                                                </li>
                                                <li>
                                                    <i
                                                        class="fas fa-tools mr-2 fa-lg icon-color"></i>{{ $project->project_category->name }}
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt  mr-2 fa-lg icon-color"></i> Stockport 8
                                                    miles
                                                </li>
                                                <li>
                                                    <i class="far fa-calendar mr-2 fa-lg icon-color"></i>Lead sent
                                                    {{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach


                            </div>


                            <div class="col-md-8">







                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

<style>
    /* Add this style to your existing stylesheet or in a <style> tag in the head of your HTML document */
    ::-webkit-scrollbar {
        width: 8px;
        /* Set the width of the scrollbar */
        height: 2px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #888;
        /* Set the color of the scrollbar thumb */
        border-radius: 4px;
        /* Set the border-radius of the scrollbar thumb */
    }

    ::-webkit-scrollbar-track {
        background-color: #f1f1f1;
        /* Set the color of the scrollbar track */
    }

    .lead_content {
        height: 440px;
    }


    @media only screen and (min-width: 601px) and (max-width: 1024px) {
        .lead_content {
            height: 900px !important;

        }
    }
</style>
