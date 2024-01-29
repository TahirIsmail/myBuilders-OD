@extends('frontend.default.layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <form id="jobForm" class="setmargin">
                    @method('post')
                    @csrf

                    <div class="row">
                        <div class="col-sm-12 col-md-7 mx-auto " style="padding: 20px;margin-bottom: 20px;margin-top:20px">
                            <div class="center-content">
                                <h2><strong>Looks like you’re using a different browser...</strong></h2>
                                <p style="font-size: medium !important">We noticed that you are using a different browser
                                    from where
                                    you started your job. No problem, you can easily post this job by clicking the
                                    button below. No
                                    typing required.</p>
                            </div>
                        </div>
                    </div>

                    <div class="set">
                        <div class="container">
                            <input type="hidden" name="jobinformation" id="jobInformationInput"
                                value="{{ json_encode($jobInformation) }}">
                            <div class="col-sm-12 form-section">
                                <!-- Your form fields and inputs go here -->

                                <div class="container  ">
                                    <h2 class="h-style">MY JOB DETAILS</h2>
                                    <div class="row">

                                        <div class="col-sm-4">

                                            <label for="jobHeadline" class="form-label"><strong> Job
                                                    Headline</strong></label>

                                            <p>{{ $jobHeadline }}</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="postcode"
                                                class="form-label"><strong>Postcode/Address</strong></label>


                                            <p>{{ $postcode }}</p>


                                        </div>

                                        <div class="col-sm-4">
                                            <label for="JobDescription" class="form-label"><strong>Customer
                                                    description</strong></label>
                                            <p>{{ $JobDescription }}</p>
                                        </div>



                                        @foreach ($JobQuestionAnswer as $answer)
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-4">

                                                        {{-- <input type="text" id="answer{{ $loop->index }}" name="answers[]"
                                                value="{{ $answer['answer'] }}" readonly class="form-input">
                                            <input type="hidden" id="answer{{ $loop->index }}" name="questions[]"
                                                value="{{ $answer['question_id'] }}" readonly> --}}

                                                        <p>{!! $answer['answer'] !!}</p>



                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="col-sm-4">
                                            <label for="selectedCategory" class="form-label"><strong>Selected
                                                    Category</strong></label>


                                            <p>{{ $SelectedCategory['name'] }}</p>
                                        </div>




                                        <div class="col-sm-4">
                                            <label for="mapLocation" class="form-label"> <strong>Location</strong> </label>


                                            <img style="height: 72% !important" src="https://maps.googleapis.com/maps/api/staticmap?center={{ $latitude }},{{ $longitude }}&zoom=16&size=400x400&key=AIzaSyCC6BbwI05bsqkWZCStzkLIMquD8WL_wqU&markers=color:red|label:J|{{ $latitude }},{{ $longitude }}"
                                                alt="address_map" />
                                        </div>

                                    </div>
                                </div>

                                <div class="row text-center" style="margin-top: 20px">
                                    <div class="col-sm-12 mx-auto">
                                        <button type="button" id="submitBtn"
                                            class="btn btn--lp">{{ translate('Submit the job') }}</button>
                                    </div>
                                </div>


                            </div>



                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


<style>
    body {
        background-color: #f8f9fa;
        /* Set a light background color */
        font-family: 'Arial', sans-serif;
        /* Use a common font style */
    }

    .custom-container {
        margin-top: 20px;
    }

    .form-section {
        padding: 20px;
        margin-bottom: 20px;
        background-color: #ffffff;
        /* Set a white background for form sections */
        border: 1px solid #ced4da;
        /* Add a subtle border */
        border-radius: 8px;
        /* Round the corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Add a subtle shadow */
    }

    .center-content {
        text-align: center;
    }

    h2 {
        font-family: 'sofia_probold', "Trebuchet MS", Helvetica, Arial, sans-serif;
        line-height: 1.333em;
        color: #344344;
        font-weight: normal;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1em;
        font-size: 1.25em;
    }

    p {
        font-size: 18px;
        color: #555555;
    }

    label {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555555;
    }

    .set {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .setmargin {
        margin-bottom: 20px !important;
    }

    .h-style {
        color: #b0c0d3;
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btn--lp {
        background-color: #007bff;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .btn--lp:hover {
        background-color: #0056b3;
    }
</style>
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#submitBtn').click(function() {
                // Serialize the form data
                var jobInformationJson = $('#jobInformationInput').val();

                // Parse the JSON data into a JavaScript object
                var jobInformation = JSON.parse(jobInformationJson);

                // Perform the Ajax request
                $.ajax({
                    type: 'POST',
                    url: '/magic-job-post', // Change this to the actual endpoint
                    data: jobInformation,
                    success: function(response) {
                        var baseUrl = "{{ url('/') }}";

                        // Modify the URL as needed
                        var newUrl = baseUrl + '/projects';

                        // Redirect to the new URL
                        window.location.assign(newUrl);
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX errors
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
