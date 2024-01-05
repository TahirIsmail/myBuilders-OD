<template>
<div class="py-4 py-lg-5">   
       <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-6 col-md-7 mx-auto form">

                    <h1 class="h3 mb-0" style="color: #55b97b" ><strong> What's your work address? </strong></h1>

                  
                    <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto ">


                        <div class="mt-3">
                            <div style="margin-bottom: 10px" class="input-group">
                                <label for="textA" class="form-label"><strong>Search for your
                                        address</strong></label><br>

                                <div class="input-group">

                                    <input type="text" class="form-control form_input"
                                        placeholder="Street Address or Post Code" aria-label="Search for your address">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                        <!-- Assuming you are using Font Awesome for the search icon -->
                                    </span>
                                </div>
                            </div>


                            <div style="margin-bottom:10px">
                                <label for="textA" class="form-label "><strong>Work address</strong></label><br>

                                <input type="text" class="form-control form_input" placeholder="House number/name">
                            </div>
                            <div style="margin-bottom:10px">
                                <label for="textA" class="form-label"><strong> </strong></label><br>

                                <input type="text" class="form-control form_input" placeholder="Street name">
                            </div>
                            <div style="margin-bottom:10px">
                                <label for="textA" class="form-label"><strong>Town</strong></label><br>

                                <input type="text" class="form-control form_input ">
                            </div>
                            <div style="margin-bottom:10px">
                                <label for="textA" class="form-label"><strong>Postcode</strong></label><br>

                                <input type="text" class="form-control form_input ">
                            </div>
                            <div style="margin-bottom: 10px">
                                <label for="distance" class="form-label" style="color: black;">What is the maximum distance
                                    you are willing to
                                    travel for work?</label>

                                <select class="form-select form_input drop-down red-icon" id="distance" name="distance">
                                    <option value="5">5 miles</option>
                                    <option value="10">10 miles</option>
                                    <option value="20">20 miles</option>
                                    <option value="50">50 miles</option>
                                    <!-- Add more options as needed -->
                                </select>
                                <br>
                                <label for="distance" class="form-label" style="color: rgb(63, 63, 63);margin-top:10px">This
                                    will determine which leads we send you. Later you can create your custom working area on
                                    a map.</label>
                            </div>


                            <div class=" lp-header__content">
                                <a title="Start winning more work" href="{{ route('register') }}"
                                    class="btn--Tradeb">Back</a>
                                <a title="Post a job today and we'll alert the relevant tradespeople."
                                    href="{{ route('post_project') }}" class="btn--Tradec" style="margin-left: 2%;" >Continue</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> 
  </template>
  