@extends('frontend.default.layouts.app')

@section('content')
    <form>
        @method('post')
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <label for="jobHeadline">Job Headline:</label>
                    <input type="text" id="jobHeadline" name="jobHeadline" value="{{ $jobHeadline }}" readonly>
                </div>
                <div class="col-sm">
                    <label for="postcode">Postcode:</label>
                    <input type="text" id="postcode" name="postcode" value="{{ $postcode }}" readonly>
                </div>
                <div class="col-sm">
                    <label for="JobDescription">Job Description:</label>
                    <textarea id="JobDescription" name="JobDescription" readonly>{{ $JobDescription }}</textarea>
                </div>
            </div>
        </div>

        @foreach ($JobQuestionAnswer as $answer)
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <label for="answer{{ $loop->index }}">Answer:</label>
                        <input type="text" id="answer{{ $loop->index }}" name="answers[]"
                            value="{{ $answer['answer'] }}" readonly>
                        <input type="hidden" id="answer{{ $loop->index }}" name="questions[]"
                            value="{{ $answer['question_id'] }}" readonly>

                    </div>
                </div>
            </div>
        @endforeach

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <label for="selectedCategory">Selected Category:</label>
                    <input type="text" id="selectedCategory" name="selectedCategory"
                        value="{{ $SelectedCategory['name'] }}" readonly>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <button type="submit" class="btn btn-primary rounded-1">{{ translate('Submit the job') }}</button>
        </div>
    </form>
@endsection

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
