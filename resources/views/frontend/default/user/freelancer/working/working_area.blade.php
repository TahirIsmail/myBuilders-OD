@extends('frontend.default.layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">

                @if (isClient())
                    @include('frontend.default.user.client.inc.sidebar')
                @elseif (isFreelancer())
                    @include('frontend.default.user.freelancer.inc.sidebar')
                @endif
                <div class="aiz-user-panel">

                    

                    <div class="card card-body card_shadow w-100 border-gray-light">
                      

                            <div class="lead-details__panel lead-details__job-description">
                                <h3 class="h2_custom">Working area</h3>

                                <div class="job-description__body">
                                    <div class="markdown-description">

                                        <p>Please select a working area. This is the area you are
                                            prepared to travel for work and ensures you receive relevant leads.</p>

                                    </div>
                                </div>

                                <div class=" d-flex mt-20">
                                    <div class="col-md-8 pl-0 ">
                                        <p class="h1_custom"> Wroking area psotcode </p>
                                        <p> M320Js </p>
                                    </div>

                                    <div class="col-md-4  text-right ">
                                        <a href="#" class="btn--Tradec"
                                            style="width:auto !important;padding: 0.6em 0.25em 0.7em !important;font-size:15px ">
                                            Save and Continue &nbsp;</a>
                                    </div>

                                </div>
                                <div class="d-flex">
                                    <div class="col-md-6 pl-0 "
                                        style=" padding-left: 20px !important;
                                        padding: 4px; background-color: #e5e5e5;">
                                        You can adjust the working area shape by dragging the pins.
                                    </div>
                                </div>

                                {{-- <div class="col-md-4  text-right ">
                                            <a href="#" class="job-poster"><span class="job-poster__link">View
                                                    profile</span> </a>
                                        </div> --}}



                                <div class="underline">
                                    <div
                                        class="col-md-8 mx-auto shortlist-fees__shortlist h-200px bg-black p-0  color-white ">
                                        Shortlist fee
                                    </div>

                                </div>
                                <div class="col-md-8 mx-auto mapdetail mt-10">
                                    <ul class="working-area-legend unstyled inline">
                                        <li class="legend-key-green"><span class="legend-key"></span> Interest
                                            expressed
                                        </li>
                                        <li class="legend-key-red"><span class="legend-key"></span> Lead declined
                                        </li>
                                        <li class="legend-key-gray"><span class="legend-key"></span> Lead ignored
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   
                </div>

            </div>
        </div>
    </section>
@endsection
<style scoped>
    .working-area-legend {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    .working-area-legend li {
        font-size: 14px;
        font-weight: bold;
        /* Adjust the margin as needed for spacing between items */
    }

    .legend-key {
        width: 10px;
        height: 10px;
        display: inline-block;
        margin-right: 5px;
        /* Adjust the margin as needed for spacing between the color box and text */
    }

    .legend-key-green {
        color: green;
    }

    .legend-key-red {
        color: red;
    }

    .legend-key-gray {
        color: gray;
    }
</style>
