@extends('frontend.default.layouts.app')

@section('content')
    <section class="py-3">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.freelancer.inc.sidebar')

                <div class="aiz-user-panel-fix d-flex">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 lead_content" style=" overflow-y: scroll;">

                                {{-- @foreach ($projects as $project) --}}
                                <div class="card card_shadow w-100 border-gray-light">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="text-primary" style="cursor: pointer">
                                                Job name
                                            </li>
                                            <li>
                                                <i class="fas fa-user-tie mr-2 fa-lg icon-color"></i>
                                                Job Title

                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt  mr-2 fa-lg icon-color"></i> Location
                                                miles
                                            </li>
                                            <li>
                                                <i class="fas fa-briefcase mr-2 fa-lg icon-color"></i>Employment :Permanent

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- @endforeach --}}


                            </div>


                            <div class="col-md-8" id="single-lead">
                                <div class="card card_shadow w-100 border-gray-light ">
                                    <div class="card-body custom_Card_padding">
                                        <h2 class="h2_custom">Job Title</h2>


                                        <div class=" row col-md-12">
                                            <div class="col-md-6 custom_padding">

                                                <p class="h1_custom">Job Position</p>

                                            </div>
                                            <div class="col-md-6 custom_padding">
                                                <div class="actions custom_padding">

                                                    <p class="h1_custom">Employment : Permanent </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="card card_shadow w-100 border-gray-light ">

                                    <div class="card-body d-flex">

                                        <div class="col-md-8 shortlist-fees__shortlist ">

                                            <i class="fas fa-map-marker-alt mb-map no-space lead-details__meta-icon"></i>

                                            <span class="lead-details__meta-title">country</span>
                                        </div>

                                        <div class="col-md-4  text-right shortlist-fees__shortlist">
                                            city
                                        </div>

                                    </div>
                                </div>


                                <div class="card card_shadow w-100 border-gray-light ">


                                    <div class="card-body custom_Card_padding ">
                                        <h2 class="h2_custom">Job Requirements</h2>
                                        <div class="row col-md-12">
                                            <div class="col-sm-12 col-md-6 pl-0 ">
                                                <div class="p-2">
                                                    <strong class="pl-1">Qualification</strong> : BScs
                                                </div>
                                                <div class="p-2">
                                                    <strong class="pl-1">Duration of Contract :</strong> 1 year
                                                </div>
                                                <div class="p-2">
                                                    <strong class="pl-1">Accommodation :</strong> .............
                                                </div>
                                                <div class="p-2">
                                                    <strong class="pl-1">People Required :</strong> 10
                                                </div>
                                                <div class="p-2">
                                                    <strong class="pl-1">Visa :</strong> .......
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-6   pl-0 ">
                                                <div class="p-2">
                                                    <strong class="pl-1">Experience :</strong> 1 Year
                                                </div>
                                                <div class="p-2">
                                                    <strong class="pl-1">Nature of Contract :</strong> Contract
                                                </div>
                                                <div class="p-2">
                                                    <strong class="pl-1">Allowances :</strong> .............
                                                </div>
                                                <div class="p-2">
                                                    <strong class="pl-1">Languages :</strong> .............
                                                </div>
                                                <div class="p-2">
                                                    <strong class="pl-1">Interview :</strong> .............
                                                </div>
                                                

                                            </div>

                                        </div>
                                    </div>


                                    <div class="card-body custom_Card_padding ">

                                        <div class="row col-md-12">
                                            <h2 class="h2_custom">Job Descripton</h2>
                                            <p>
                                                "Seeking a talented Front-End Developer to join our team. The ideal
                                                candidate should have a strong understanding of front-end technologies,
                                                including HTML5, CSS3, and JavaScript. Experience with responsive design and
                                                CSS frameworks such as Bootstrap is required. The candidate should also have
                                                experience with version control systems like Git and be able to work
                                                collaboratively in a team environment. Strong problem-solving skills and
                                                attention to detail are a must."
                                            </p>
                                        </div>
                                    </div>
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
</style>
@section('script')
    <script>
        function show_lead(slug) {

            $.ajax({
                url: '/show-lead/' + slug,
                method: 'GET',
                success: function(response) {
                    if (response.html) {
                        $('#single-lead').html(response.html);
                    } else {
                        console.error('Failed to fetch lead details');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX request failed:', status, error);
                }
            });

        }
    </script>
@endsection
