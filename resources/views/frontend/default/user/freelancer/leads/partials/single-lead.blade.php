<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    @php
        $CategoryAnswers = json_decode($lead->jobquestionsarray);
    @endphp

    <div class="card card_shadow w-100 border-gray-light ">
        <div class="card-body custom_Card_padding">
            <h2 class="h2_custom">{{ $lead->name }}
                <div class="lead-details__flag-wrap"></div>

                <div class="lead-details__actions-layout">
                    <div class="col-md-7 custom_padding">
                        <a href="#" class="lead-details__meta">
                            <i class="fas fa-map-marker-alt mb-map no-space lead-details__meta-icon"></i>

                            <span class="lead-details__meta-title">{{ $lead->country }}</span><span
                                class="lead-details__meta-detail">{{$distance}} miles away</span></a>
                        <div class="lead-details__meta mt-1">
                            <span class="lead-details__status">New lead</span>
                            <span class="lead-details__meta-detail">sent {{ \Carbon\Carbon::parse($lead->created_at)->diffForHumans() }}</span>
                        </div>
                    </div>
                    <div class="col-md-5 custom_padding">
                        <div class="actions custom_padding">
                            @php
                            $allow_for_bid = \App\Models\ProjectBid::where('project_id', $lead->id)
                                ->where('bid_by_user_id', Auth::user()->id)
                                ->first();
                        @endphp
                        @if ($allow_for_bid == null)
                            <a  onclick="show_interest({{ $lead->id }})" class="btn--Tradec"
                                style="width:auto !important;padding: 0.6em 0.25em 0.7em !important;font-size:15px ">
                                {{ translate('Express Interest') }}&nbsp;
                            </a>
                            @else
                            <div class="alert alert-info rounded-1" style="width:auto !important;padding: 0.6em 0.25em 0.7em !important;font-size: 1rem;" role="alert">
                                {{ translate('You have already showed interest for this Job.') }}
                            </div>
                            @endif
                            <a href="#"class=" btn-danger btn--trash " aria-label="Delete">
                                <i class="fas fa-trash-alt no-space"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="infobox-new"><svg class="infobox-new__icon" xmlns="http://www.w3.org/2000/svg"
                        width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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


    <div class="card card_shadow w-100 border-gray-light">
        <div class="card-body d-flex">

            <div class="lead-details__panel lead-details__job-description">
                <h3 class="h2_custom">Job description</h3>
                <h4 class="h1_custom">{{ $lead->project_category->name }}</h4>
                <div class="job-description__body">
                    <div class="markdown-description">
                        <ul>
                            @foreach ($CategoryAnswers as $item)
                                <li>{{!! $item->answer !!}}</li>
                            @endforeach
                        </ul>
                        <p class="h1_custom">Customer description</p>
                        <p>{{ $lead->description }}</p>
                    </div>
                </div>
                <p class="job-description__meta">
                    {{ \Carbon\Carbon::parse($lead->created_at)->format('D jS M Y H:i') }}
                    </p>


                <div class=" d-flex">
                    <div class="col-md-8 pl-0 ">
                        Posted by<strong class="pl-1">{{ $lead->client->name }}</strong>
                    </div>

                    <div class="col-md-4  text-right ">
                        <a href="{{ route('client.details',['user_name' => $lead->client->user_name])}}" class="job-poster"><span class="job-poster__link">View
                            profile</span> </a>
                    </div>

                </div>

                <div class="underline">
                    <div class="col-md-12 shortlist-fees__shortlist h-200px bg-black p-0 color-white">
                        <div id="map" style=" height:200px;"></div>
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
                </div>
            </div>
        </div>

    </div>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC6BbwI05bsqkWZCStzkLIMquD8WL_wqU&callback=initMap&libraries=&v=weekly"
        defer></script>

    <script>
        let map;
        let circle;
        // let streetViewPanorama;


        function initMap() {
            var latitude = '{{ $lead->address->latitude }} ';
            var longitude = '{{ $lead->address->longitude }}';
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: parseFloat(latitude),
                    lng: parseFloat(longitude)
                },
                zoom: 15,
            });


            circle = new google.maps.Circle({
                strokeColor: "#0000FF",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#0000FF",
                fillOpacity: 0.35,
                map: map,
                center: {
                    lat: parseFloat(latitude),
                    lng: parseFloat(longitude)
                },
                radius: 500,
            });

            // streetViewPanorama = new google.maps.StreetViewPanorama(document.getElementById("streetView"), {
            //     position: { lat: -33.8688, lng: 151.2093 },
            //     pov: { heading: 34, pitch: 10 },
            //     zoom: 1,
            // });

            // streetViewButton = document.getElementById("streetViewButton");
            // streetViewButton.addEventListener("click", toggleStreetView);

            // map.controls[google.maps.ControlPosition.TOP_CENTER].push(streetViewButton);
        }

        // function toggleStreetView() {
        //     if (streetViewPanorama.getVisible()) {
        //         streetViewPanorama.setVisible(false);
        //         streetViewButton.textContent = "Show Street View";
        //     } else {
        //         streetViewPanorama.setVisible(true);
        //         streetViewButton.textContent = "Hide Street View";
        //     }
        // }
    </script>

</div>


    <script>
        function show_interest(id){
            
                $.post('{{ route('bids.save_interest') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                location.reload();
            })
            }


    </script>
