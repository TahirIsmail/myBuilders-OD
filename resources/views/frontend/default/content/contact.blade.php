@extends('frontend.default.layouts.app')
<style>

</style>


</style>
@section('content')
    <section id="welcome-hero" class="welcome-hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0 custom-slider">
                    <div class="background-image">
                        <img src="{{ asset('public\assets\frontend\default\img\slider_img\c15.png') }}" class="stretch-img"
                            alt="Responsive image" />
                        <div class="custom-content">

                            <div class="custom-content-inner">
                                <h1>
                                </h1>
                                THE TRADE DIRECTORY YOU CAN TRUST
                                </h1>
                                <h5>
                                    LOOKING TO FIND A RELIABLE TRADE PERSON or a company? OR YOU are A COMPANY LOOKING FOR A
                                    HASSLE-FREE WAY TO CONTACT NEW CUSTOMERS? BUILDERS VALLEY IS THE PLACE FOR YOU! OUR
                                    TRADE DIRECTORY CONNECTS CUSTOMERS AND COMPANIES ACROSS THE country. FOR ANY ENQUIRIES,
                                    CONTACT US TODAY USING THE DETAILS BELOW.
                                </h5>
                                {{-- <div class="lp-header__content">
                                    <a class='btn--lp'href={{ route('trade_career') }}>Advertise Job Vacancies</a>
                                    <a class='btn--lp'href={{ route('trade_career') }}>Job Seekers</a>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="contact_info_sec">
                                    <h4>Contact Info</h4>
                                    {{-- <div class=" info_single align-items-center">

                                        <i class="fas fa-headset"></i>
                                        <span>+44 7404 704169</span>
                                    </div> --}}



                                    <div class=" info_single align-items-center">
                                        <div class="mb-2 d-flex">
                                            <span>For all general inquires, and payment issues please use the following
                                                email address</span>
                                        </div>
                                        <div class="mb-2 d-flex">
                                            <i class="fas fa-envelope-open-text align-self-center"></i>
                                            <span>advertisement@buildersvalley.com</span>
                                        </div>


                                    </div>
                                    <div class=" info_single align-items-center">
                                        <div class="mb-2 d-flex">
                                            <span>For a quarry about a business Advertisement on the forum and creating a
                                                Trade Career opportunity please contact on the following emails</span>
                                        </div>
                                        <div class="mb-2 d-flex">
                                            <i class="fas fa-envelope-open-text align-self-center"></i>
                                            <span>advertisement@buildersvalley.com</span>
                                        </div>
                                        <div class="mb-2 d-flex">
                                            <i class="fas fa-envelope-open-text align-self-center"></i>
                                            <span>trade-careers@buildersvalley.com</span>
                                        </div>

                                    </div>
                                    <div class="d-flex info_single align-items-center">
                                       
                                        <span><strong>Note:  </strong>whenever you contact us please always mention your country name in subject</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="contact_form_inner">
                                    <div class="contact_field">
                                        <h3>Contact Us</h3>
                                        <p>Feel free to contact us any time. We will get back to you as soon as we can!</p>
                                        <form class="contact-form ">
                                            <div class="input-box">
                                                <input type="text" required="true" name="">
                                                <span>Full Name</span>
                                            </div>

                                            <div class="input-box">
                                                <input type="text" required="true" name="">
                                                <span>Email:</span>
                                            </div>

                                            <div class="input-box">
                                                <input type="text" required="true" name="">
                                                <span>Phone Number:</span>
                                            </div>


                                          
                                            <div class="input-box">
                                                <textarea required="true" name=""></textarea>
                                                <span>Type your Message...</span>
                                            </div>

                                            <div class="form-group">
                                                <h6
                                                    style="letter-spacing: 1px;
                                                padding-top: 15px; font-weight:bold">
                                                   Country:</h6>
                                                <select id="user_type" name="user_type" class="form-control">
                                                    <option value="home_owner">HomeOwner</option>
                                                    <option value="tradesman">Tradesman</option>
                                                    <option value="recruiter">Recruiter</option>

                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <h6
                                                    style="letter-spacing: 1px;
                                                padding-top: 15px; font-weight:bold">
                                                    Tell us who you are:</h6>
                                                <select id="user_type" name="user_type" class="form-control">
                                                    <option value="home_owner">HomeOwner</option>
                                                    <option value="tradesman">Tradesman</option>
                                                    <option value="recruiter">Recruiter</option>

                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="agree_terms"
                                                    name="agree_terms" />
                                                <label class="form-check-label" for="agree_terms">I have read and understood
                                                    the privacy notice and cookie policy, and I agree to the terms and
                                                    conditions.</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </form>
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
