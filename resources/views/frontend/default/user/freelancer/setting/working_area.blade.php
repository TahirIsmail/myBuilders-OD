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

                            <div class=" d-flex mt-20 mb-3">

                                {{-- <div class="col-md-6 pl-0">
                                    <select class="form-control aiz-selectpicker" name="work_area_radius"
                                        id="work_area_radius" data-live-search="true"
                                        title="{{ translate('Working Area Radius') }}">

                                        <option value="5">
                                            5 Miles
                                        </option>
                                        <option value="10">
                                            10 Miles
                                        </option>
                                        <option value="15">
                                            15 Miles
                                        </option>
                                        <option value="20">
                                            20 Miles
                                        </option>
                                        <option value="25">
                                            25 Miles
                                        </option>
                                        <option value="30">
                                            30 Miles
                                        </option>
                                        <option value="40">
                                            40 Miles
                                        </option>
                                        <option value="50">
                                            50 Miles
                                        </option>
                                        <option value="75">
                                            75 Miles
                                        </option>

                                    </select>
                                </div> --}}
                                <div class="col-md-6 float-right">
                                    <button href="#" class="btn--Tradec" id="saveWorkingArea"
                                        style="width:auto !important;padding: 0.6em 0.25em 0.7em !important;font-size:15px ">
                                        Save and Continue &nbsp;</button>
                                </div>


                            </div>

                            <div class="job-description__body">
                                <div class="markdown-description">

                                    <h3 class="h2_custom">Update your Working area</h3>

                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-center mb-5">

                                <input type="text" class="form-control" id="address" placeholder="Enter an address"
                                    style="width :80%">
                                <button class="btn--Tradec" id="updateMap"
                                    style="width:auto !important;padding: 0.6em 0.25em 0.7em !important;font-size:15px ">Update
                                    Map</button>
                            </div>


                            <div class="d-flex">
                                <div class="col-md-6 pl-0 "
                                    style=" padding-left: 20px !important;
                                        padding: 4px; background-color: #e5e5e5;">
                                    You can adjust the working area shape by dragging the pins.
                                </div>
                                <input type="hidden" name="latitude" id="latitude" />
                                <input type="hidden" name="longitude" id="longitude" />
                                <input type="hidden" name="miles" id="miles" />

                            </div>




                            <div class="underline">

                                <div id="map" style="width:100%;height:350px"></div>


                            </div>
                            <div class="col-md-8 mx-auto mapdetail mt-10">
                                <ul class="working-area-legend unstyled inline">
                                    <li class="legend-key-green"><span class="legend-key"></span> Interest
                                        Expressed
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
@section('style')
    <style>
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
@endsection
@section('script')
    <script>
        let map;
        let geocoder;
        let circle;
        let centerMarker;

        function initMap() {
            const lat = {{ $user->address->latitude }};
            const long = {{ $user->address->longitude }};
            const miles = {{ $user->profile->distance }};


            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: lat,
                    lng: long
                },
                zoom: 20
            });

            geocoder = new google.maps.Geocoder();
            showSelectedArea(lat, long, miles);
        }

        function showSelectedArea(latitude, longitude, miles) {
            if (isNaN(latitude) || isNaN(longitude)) {
                alert('Please enter valid input.');
                return;
            }

            const center = new google.maps.LatLng(latitude, longitude);

            if (circle) {
                circle.setMap(null);
            }

            if (centerMarker) {
                centerMarker.setMap(null);
            }

            circle = new google.maps.Circle({
                map: map,
                center: center,
                radius: miles * 1609.34, // Convert miles to meters
                fillColor: '#009688',
                fillOpacity: 0.3,
                strokeColor: '#00796b',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                draggable: true,
                editable: true
            });

            centerMarker = new google.maps.Marker({
                position: center,
                map: map,
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 5, // Adjust the scale as needed
                    fillColor: '#3a82d5', // Desired color
                    fillOpacity: 1,
                    strokeWeight: 0
                }
            });

            google.maps.event.addListener(circle, 'center_changed', function() {
                const center = circle.getCenter();
                centerMarker.setPosition(center);
                document.getElementById('latitude').value = center.lat();
                document.getElementById('longitude').value = center.lng();
            });

            google.maps.event.addListener(circle, 'radius_changed', function() {
                const radius = circle.getRadius() / 1609.34; // Convert meters to miles
                document.getElementById('miles').value = radius.toFixed(2);
            });

            map.fitBounds(circle.getBounds());
        }

        $(document).on('change', '#work_area_radius', function() {
            const lat = {{ $user->address->latitude }};
            const long = {{ $user->address->longitude }};
            const miles = $(this).val();
            showSelectedArea(lat, long, miles);
        });


        $(document).on('click', '#saveWorkingArea', function() {
            showConfirmation();

        });



        function showConfirmation() {
            var latitude = $('#latitude').val();
            var longitude = $('#longitude').val();
            var distance = $('#miles').val();
            if (latitude != '' && longitude != '' && distance != '') {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to change your working area?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Change it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // User clicked "Yes, send it!" button

                        sendData(latitude, longitude, distance);


                    }
                });
            } else {
                Swal.fire({
                    text: "Please change the radius and center of your working area"
                })
            }

        }

        function sendData(latitude, longitude, distance) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/save-working-area',
                type: 'POST',
                data: {
                    latitude: latitude,
                    longitude: longitude,
                    distance: distance
                },
                dataType: 'json',
                success: function(response) {
                    // Handle the success response from the server
                    console.log(response);
                    // You can optionally show another SweetAlert for success
                    Swal.fire('Success', response.message);
                },
                error: function(error) {
                    // Handle the error response from the server
                    console.log(error);
                    // You can optionally show another SweetAlert for error
                    Swal.fire('Error', 'Failed to send data!', 'error');
                }
            });
        }


        $(document).ready(function() {
            // Existing code...

            $(document).on('click', '#updateMap', function() {
                updateMapWithAddress();
            });

            function updateMapWithAddress() {
                const address = document.getElementById('address').value;
                if (address.trim() === '') {
                    alert('Please enter an address.');
                    return;
                }

                geocoder.geocode({
                    'address': address
                }, function(results, status) {
                    if (status === 'OK') {
                        const location = results[0].geometry.location;
                        showSelectedArea(location.lat(), location.lng(),
                        5); // Assuming a default radius of 5 miles
                        map.setCenter(location);
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }
        });
    </script>


    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC6BbwI05bsqkWZCStzkLIMquD8WL_wqU&callback=initMap"></script>

    <script src="{{ my_asset('assets/common/js/app.js') }}"></script>
@endsection
