@extends('frontend.default.layouts.app')





@section('content')
    <div class="py-4 py-lg-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-md-7  mx-auto">
                    <div class="card rounded-2 border-gray-light">
                        <div class="card-body text-center">
                            <div class="form-group">
                                <form class="mx-auto" accept-charset="UTF-8" method="post">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="code" class="form-label">Enter your PIN:</label>
                                            <input name="code" id="code" type="number" class="form-control"
                                                oninput="validatePIN(this)">
                                            <div id="pinError" style="color: red;"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button name="button" type="submit" class="btn btn-primary">Verify</button>
                                        </div>
                                    </div>
                                    @csrf
                                </form>
                            </div>
                            <h4 class="mt-3">Didn't you receive the code?</h4>
                            <hr />
                            <form class="mx-auto" accept-charset="UTF-8" method="post" action="{{ url('/resend') }}">
                                <div class="row">
                                    <div class="col-12">
                                        <label>
                                            <input type="radio" name="channel" value="sms" checked />
                                            SMS
                                        </label>
                                        <label>
                                            <input type="radio" name="channel" value="call" />
                                            Call
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button name="form-submit" type="submit" class="btn btn-primary">Resend</button>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function validatePIN(input) {
        const pin = input.value;
        const pinError = document.getElementById('pinError');

        if (pin.length !== 6) {
            pinError.textContent = 'PIN must be exactly 6 digits.';
            input.setCustomValidity('PIN must be exactly 6 digits.');
        } else if (!/^\d{6}$/.test(pin)) {
            pinError.textContent = 'PIN must consist of only digits.';
            input.setCustomValidity('PIN must consist of only digits.');
        } else {
            pinError.textContent = '';
            input.setCustomValidity('');
        }
    }
</script>
