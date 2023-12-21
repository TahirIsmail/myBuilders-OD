@extends('frontend.default.layouts.app')

@section('content')
    <div>
        <form class="setmargin">
            @method('post')
            @csrf

    <div>
        <form class="setmargin">
            @method('post')
            @csrf

            <div class="row">
                <div class="col-sm-12 col-md-7 mx-auto form-section">
                    <div class="center-content">
                        <h2><strong>Looks like you’re using a different browser...</strong></h2>
                        <p style="font-size: medium !important">We noticed that you are using a different browser from where
                            you started your job. No problem, you can easily post this job by clicking the button below. No
                            typing required.</p>
                    </div>
                </div>
            </div>

            <div class="set" style="background: #eff2f6; width">

                <div class="col-sm-12 form-section">
                    <!-- Your form fields and inputs go here -->
                    <div class="container  ">
                        <h2 class="h-style">MY JOB DETAILS</h2>
                        <div class="row">

                            <div class="col-sm ">

                                <label for="jobHeadline" class="form-label"><strong> Job Headline</strong></label>

                                <p>{{ $jobHeadline }}</p>
                            </div>
                            <div class="col-sm">
                                <label for="postcode" class="form-label"><strong>Postcode</strong></label>


                                <p>{{ $postcode }}</p>
                            </div>
                            <div class="col-sm">
                                <label for="JobDescription" class="form-label"><strong>Customer description</strong></label>
                                <p>{{ $JobDescription }}</p>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="JobQuestionAnswer"
                    value="{{ $JobQuestionAnswer }}" readonly class="form-input"> 
                    @foreach ($JobQuestionAnswer as $answer)
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                   

                                        {{--<input type="hidden" id="answer{{ $loop->index }}" name="questions[]"
                                            value="{{ $answer['question_id'] }}" readonly> --}}

                                    <p>{!! $answer['answer'] !!}</p>
                                    <input type="hidden" name="questions[]" value="{{ $answer['question_id'] }}" readonly>


                                </div>
                            </div>
                        </div>
                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <label for="selectedCategory" class="form-label"><strong>Selected Category</strong></label>
                                <input type="hidden" id="selectedCategory" name="selectedCategory"
                                    value="{{ $SelectedCategory['name'] }}" readonly class="form-input">

                                <p>{{ $SelectedCategory['name'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div style="margin-bottom:5px" class="row text-center">
                    <div class="col-sm-12 mx-auto">
                        <button type="submit" class="btn btn--lp">{{ translate('Submit the job') }}</button>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </form>
    </div>
    </div>
@endsection


<style>
    .h-style {
        font-family: sofia_probold, "Trebuchet MS", Helvetica, Arial, sans-serif;
        line-height: 1.333em;
        color: rgb(52, 57, 68);
        font-weight: normal;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: rgb(176, 192, 211);
        margin-bottom: 1em;
        font-size: 1.625em;



    }

    p {
        font-size: 18px;
    }

    label {
        font-size: 18px;
    }

    .set {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .setmargin {
        margin-bottom: 0px !important;
    }



    /* Add your custom styles here */

    body {
        background-color: #f8f9fa;
        /* Set a light background color */
    }

    .custom-container {
        margin-top: 20px;
    }

    .form-section {

        padding: 20px;
        margin-bottom: 20px;
    }

    .center-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
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
        /* Add a subtle border */
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>

<style>
    .h-style {
        font-family: sofia_probold, "Trebuchet MS", Helvetica, Arial, sans-serif;
        line-height: 1.333em;
        color: rgb(52, 57, 68);
        font-weight: normal;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: rgb(176, 192, 211);
        margin-bottom: 1em;
        font-size: 1.625em;



    }

    p {
        font-size: 18px;
    }

    label {
        font-size: 18px;
    }

    .set {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .setmargin {
        margin-bottom: 0px !important;
    }



    /* Add your custom styles here */

    body {
        background-color: #f8f9fa;
        /* Set a light background color */
    }

    .custom-container {
        margin-top: 20px;
    }

    .form-section {

        padding: 20px;
        margin-bottom: 20px;
    }

    .center-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
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
        /* Add a subtle border */
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('form').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission


                // Serialize the form data
                var formData = $(this).serialize();

                // Perform the Ajax request
                $.ajax({
                    type: 'POST',
                    url: '/magic-job-post', // Update this with your actual route
                    data: formData,
                    success: function(response) {
                        // Handle the successful response from the server

                        console.log(response);
                        Swal.fire("Data Submited sucessfully!");
                    },
                    error: function(error) {
                        // Handle errors
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
