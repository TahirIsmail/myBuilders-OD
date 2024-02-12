<div>
    
    <div class="card card_shadow w-100 border-gray-light ">
        <div class="card-body custom_Card_padding">
            <h2 class="h2_custom"> {{$lead->name}}</h2>
            <div class="lead-details__flag-wrap"></div>

            <div class="lead-details__actions-layout">
                <div class="col-md-7 custom_padding">
                    <a href="#" class="lead-details__meta">
                        <i class="fas fa-map-marker-alt mb-map no-space lead-details__meta-icon"></i>

                        <span class="lead-details__meta-title lead-details__meta-detail">{{$distance}} miles away</span></a>
                    <div class="lead-details__meta mt-1">
                        <span class="lead-details__status interested_lead"> Interested</span>
                        <span class="lead-details__meta-detail">Lead sent  {{ \Carbon\Carbon::parse($lead->created_at)->diffForHumans() }}</span>
                    </div>
                </div>
                {{-- <div class="col-md-5 custom_padding">
                                                    <div class="actions custom_padding"><a href="#" class="btn--Tradec"
                                                            style="width:auto !important;padding: 0.6em 0.25em 0.7em !important;font-size:15px ">
                                                            Express interest&nbsp;</a>
                                                        <a href="#"class=" btn-danger btn--trash " aria-label="Delete">
                                                            <i class="fas fa-trash-alt no-space"></i>
                                                        </a>
                                                    </div>
                                                </div> --}}
            </div>




            <div class="infobox-new"><svg class="infobox-new__icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
                <p class="infobox-new__text">Expressing interest is <strong>free</strong>. You
                    only
                    pay a fee if the customer shortlists you.</p>
            </div>
        </div>
    </div>


    <div class="card card_shadow w-100 border-gray-light">
        <div class="card-body d-flex">
            <div class="col-md-8 shortlist-fees__shortlist ">
                Shortlist fee
            </div>

            <div class="col-md-4  text-right shortlist-fees__shortlist">
                £8.60 + VAT
            </div>

        </div>
    </div>



    <ul class="tabs">
        <li class="tab tab-link current" data-tab="tab-1">Details</li>
        <li class="tab tab-link" data-tab="tab-2">Message</li>

    </ul>

    <div id="tab-1" class="tab-content current">

        <div class="card card_shadow w-100 border-gray-light">
            <div class="card-body d-flex">

                <div class="lead-details__panel lead-details__job-description">
                    <h3 class="h2_custom">Job description</h3>
                    <h4 class="h1_custom">Restoration &amp; Refurbishment</h4>
                    <div class="job-description__body">
                        <div class="markdown-description">
                            <ul>
                                <li>Owns the property</li>
                                <li>Small refurb</li>
                            </ul>
                            <p class="h1_custom">Customer description</p>
                            <p>Take down existing ceiling, reabod and skin, also replace
                                existing
                                wastewater
                                pipes, upstairs bathroom. Pints and finish existing matching,
                            </p>
                        </div>
                    </div>
                    <p class="job-description__meta">Fri 12th Jan 2024 00:42</p>


                    <div class=" d-flex">
                        <div class="col-md-8 pl-0 ">
                            Posted by<strong class="pl-1">mashuk66576</strong>
                        </div>

                        <div class="col-md-4  text-right ">
                            <a href="#" class="job-poster"><span class="job-poster__link">View
                                    profile</span> </a>
                        </div>

                    </div>

                    <div class="underline">
                        <div class="col-md-12 shortlist-fees__shortlist h-200px bg-black p-0  color-white ">
                            Shortlist fee
                        </div>
                        <div class="underline">
                            <h3 class="h2_custom">Shortlist activity</h3>
                        </div>

                        <div class="card_shadow mt-2 d-flex position-relative">

                            <div class="col-md-6 text-center p-2 border">
                                <div class="mx-auto w-50 custom_width_value">
                                    <span class="activity-item__value">0</span>
                                    <span class="activity-item__label">Shortlisted</span>
                                </div>
                                <div class="mx-auto w-75 custom_width">
                                    <span class="job-description__meta">Tradespeople who have
                                        received
                                        contact details</span>
                                </div>
                            </div>

                            <!-- Centered Button -->
                            {{-- <button class="position-absolute translate-middle" style="top: 20%; left: 48%; z-index: 2; "> --}}
                            <button class="round_overlap">
                                of
                            </button>

                            <div class="col-md-6 text-center p-2 border">
                                <div class="mx-auto w-50 custom_width_value">
                                    <span class="activity-item__value">0</span>
                                    <span class="activity-item__label">Interested</span>
                                </div>
                                <div class="mx-auto w-75 custom_width">
                                    <span class="job-description__meta">Tradespeople who have
                                        expressed
                                        interest in the job</span>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="col-md-12 p-2 ">
                        <div class=" w-100">
                            <span class="activity-item__label">Interested tradespeople</span>
                        </div>
                        <div class=" w-100">
                            <span class="job-description__meta">No other tradespeople have
                                expressed interest in this lead yet.</span>
                        </div>






                        <div class="lead-details__tradesman-interested lead-details__tradesman-interested--desktop">
                            <ul class="tradesman-interested__list">
                                <li class="tradesman-interested__item card_shadow"><a href="">Atkinson
                                        developments</a><span class="tradesman-details">
                                        <div><strong>18 feedback, <span class="feedback-score feedback-score--high">100%
                                                    positive</span></strong></div>
                                    </span></li>
                                <li class="tradesman-interested__item "><a href="">Transform
                                        Project</a><span class="tradesman-details">
                                        <div><strong>13 feedback, <span class="feedback-score feedback-score--high">100%
                                                    positive</span></strong></div>
                                    </span></li>
                                <li class="tradesman-interested__item card_shadow"><a href="">Concept
                                        design and build</a><span class="tradesman-details">No
                                        feedback yet</span></li>
                            </ul>
                        </div>











                    </div>

                </div>
            </div>

        </div>

    </div>


</div>