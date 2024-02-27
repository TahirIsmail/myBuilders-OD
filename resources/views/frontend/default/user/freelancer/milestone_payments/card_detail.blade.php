@extends('frontend.default.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ my_asset('assets/common/css/app.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 mt-4">
                <div class="card p-3 d-flex  ">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="mb-0 fw-bold h4">Payment Methods</p>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <div class="text-center">

                                <img src="{{ asset('public\assets\frontend\default\img\icons\Mastercard.png') }}"
                                    style="width:50px" />
                                <img src="{{ asset('public\assets\frontend\default\img\icons\visa1.png') }}"
                                    style="width:50px" />
                                <img src="{{ asset('public\assets\frontend\default\img\icons\american.png') }}"
                                    style="width:50px" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="card p-3">
                    <div class="card-body border p-0">

                        <div class="collapse p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-8">


                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                        nihil neque
                                        quisquam aut
                                        repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                        quis,
                                        iste harum ipsum hic, nemo qui!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body  p-0">
                        <div class="col-md-12" style="background: #64c976">
                            <p class="mb-0 text-white fw-bold h4 p-2">Summary</p>
                        </div>
                        <div class="collapse show p-3 pt-5" id="collapseExample">
                            <div class="row">
                                <div class="col-lg-5 mb-lg-0 mb-3">


                                    <p class="mb-0">Providing your payment details helps us verify your identity and
                                        simplifies the process of paying future invoices. Payments will be processed from
                                        your card automatically to settle any outstanding invoices.

                                        Change default card</p>
                                </div>
                                <div class="col-lg-7">
                                    <form id="payment-form" class="form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input id="card-number" type="text" class="form-control"
                                                        placeholder=" ">
                                                    <label for="card-number" class="form__label">Card Number</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input id="card-expiry" type="text" class="form-control"
                                                        placeholder=" ">
                                                    <label for="card-expiry" class="form__label">MM / YY</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input id="card-cvc" type="text" class="form-control"
                                                        placeholder=" ">
                                                    <label for="card-cvc" class="form__label">CVV Code</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input id="card-holder-name" type="text" class="form-control"
                                                        placeholder=" ">
                                                    <label for="card-holder-name" class="form__label">Name on the
                                                        Card</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="btn--lp" id="submit-button">Submit</div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif
    }

    .container {
        margin: 30px auto;
    }

    .container .card {
        width: 100%;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        background: #fff;
        border-radius: 0px;
    }

    body {
        background: #eee
    }



    .btn.btn-primary {
        background-color: #ddd;
        color: black;
        box-shadow: none;
        border: none;
        font-size: 20px;
        width: 100%;
        height: 100%;
    }

    .btn.btn-primary:focus {
        box-shadow: none;
    }

    .container .card .img-box {
        width: 80px;
        height: 50px;
    }

    .container .card img {
        width: 100%;
        object-fit: fill;
    }

    .container .card .number {
        font-size: 24px;
    }

    .container .card-body .btn.btn-primary .fab.fa-cc-paypal {
        font-size: 32px;
        color: #3333f7;
    }

    .fab.fa-cc-amex {
        color: #1c6acf;
        font-size: 32px;
    }

    .fab.fa-cc-mastercard {
        font-size: 32px;
        color: red;
    }

    .fab.fa-cc-discover {
        font-size: 32px;
        color: orange;
    }

    .c-green {
        color: green;
    }

    .box {
        height: 40px;
        width: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ddd;
    }

    .btn.btn-primary.payment {
        background-color: #1c6acf;
        color: white;
        border-radius: 0px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 24px;
    }


    .form__div {
        height: 50px;
        position: relative;
        margin-bottom: 24px;
    }

    .form-control {
        width: 100%;
        height: 45px;
        font-size: 14px;
        border: 1px solid #DADCE0;
        border-radius: 0;
        outline: none;
        padding: 2px;
        background: none;
        z-index: 1;
        box-shadow: none;
    }

    .form__label {
        position: absolute;
        left: 16px;
        top: 10px;
        background-color: #fff;
        color: #80868B;
        font-size: 16px;
        transition: .3s;
        text-transform: uppercase;
    }

    .form-control:focus+.form__label {
        top: -8px;
        left: 12px;
        color: #1A73E8;
        font-size: 12px;
        font-weight: 500;
        z-index: 10;
    }

    .form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
        top: -8px;
        left: 12px;
        font-size: 12px;
        font-weight: 500;
        z-index: 10;
    }

    .form-control:focus {
        border: 1.5px solid #1A73E8;
        box-shadow: none;
    }
</style>
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vanilla-masker"></script>
    <script>
        // Apply input masks
        VMasker(document.getElementById('card-number')).maskPattern('9999 9999 9999 9999');
        VMasker(document.getElementById('card-expiry')).maskPattern('99 / 99');
        VMasker(document.getElementById('card-cvc')).maskPattern('999');
    </script>
    //Stripe Elements Form for Stripe gateway
@endsection
