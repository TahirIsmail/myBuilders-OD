@extends('frontend.default.layouts.app')
<style>
    :focus {
        outline: 0;
        border-color: #2260ff;
        box-shadow: 0 0 0 4px #b5c9fc;
    }

    .mydict div {
        display: flex;
        flex-wrap: wrap;
        margin-top: 0.5rem;
        justify-content: center;
    }

    .mydict input[type="radio"] {
        clip: rect(0 0 0 0);
        clip-path: inset(100%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        white-space: nowrap;
        width: 1px;
    }

    .mydict input[type="radio"]:checked+span {
        box-shadow: 0 0 0 0.0625em #0043ed;
        background-color: #dee7ff;
        z-index: 1;
        color: #0043ed;
    }

    label span {
        display: block;
        cursor: pointer;
        background-color: #fff;
        padding: 0.375em .75em;
        position: relative;
        margin-left: .0625em;
        box-shadow: 0 0 0 0.0625em #b5bfd9;
        letter-spacing: .05em;
        color: #3e4963;
        text-align: center;
        transition: background-color .5s ease;
    }

    label:first-child span {
        border-radius: .375em 0 0 .375em;
    }

    label:last-child span {
        border-radius: 0 .375em .375em 0;
    }













    .radio-inputs {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        border-radius: 0.5rem;

        box-sizing: border-box;

        padding: 0.25rem;
        width: 300px;
        font-size: 14px;
    }

    .radio-inputs .radio {
        flex: 1 1 auto;
        text-align: center;
        margin-right: 5px;
    }

    .radio-inputs .radio input {
        display: none;
    }

    .radio-inputs .radio .name {
        display: flex;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
        border: none;
        padding: .5rem 0;
        color: rgba(51, 65, 85, 1);
        transition: all .15s ease-in-out;
    }

    .radio-inputs .radio input:checked+.name {
        background-color: #64c976;
        color: white;
        font-weight: 600;
    }
</style>

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.freelancer.inc.sidebar')
                <div class="aiz-user-panel">


                    <div class="card rounded-2 border-gray-light">
                        <div class="card-header">
                            <h4 class="h6 font-weight-medium mb-0">
                                {{ translate('Create Job Advertisement') }}</h4>
                        </div>
                        <div class="card-body">
                            <!-- Personal Info Form -->

                            <form class="js-validate" action="{{ route('user_profile.basic_info_update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="nameLabel" class="form-label">
                                            {{ translate('I am looking for') }}

                                        </label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="{{ translate('position e.g electrician ,gas engineers') }}"
                                            aria-label="" required aria-describedby="nameLabel" data-msg=""
                                            data-error-class="u-has-error" data-success-class="u-has-success" />

                                    </div>
                                </div>

                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="nameLabel" class="form-label">
                                            {{ translate('Job Designation') }}

                                        </label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="{{ translate('e.g foreman, supervisor') }}" aria-label="" required
                                            aria-describedby="nameLabel" data-msg="" data-error-class="u-has-error"
                                            data-success-class="u-has-success" />

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="js-form-message">
                                            <div class="form-group">
                                                <label id="nameLabel" class="form-label">
                                                    {{ translate('Nature Of Employment') }}

                                                </label>
                                                <div class="radio-inputs">
                                                    <label class="radio">
                                                        <input type="radio" name="radio" checked="">
                                                        <span class="name">Permanent</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="radio">
                                                        <span class="name">Temporary</span>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="js-form-message">
                                            <div class="form-group">
                                                <label id="nameLabel" class="form-label">
                                                    {{ translate('Nature of contract:') }}
                                                </label>
                                                <div class="radio-inputs">
                                                    <label class="radio">
                                                        <input type="radio" name="contract" checked="">
                                                        <span class="name">Permanent</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="contract">
                                                        <span class="name">Temporary</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label id="countryLabel" class="form-label">
                                            {{ translate('Country') }}

                                        </label>
                                        <select class="form-control aiz-selectpicker" id="country_id" name="country_id"
                                            data-live-search="true" required data-msg="Please select your country.">
                                            @foreach (\App\Models\Country::all() as $key => $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="country" class="form-label">{{ translate('City/State') }}</label>
                                        <select class="form-control aiz-selectpicker" name="city_id" id="city_id"
                                            data-msg="Please select your city." data-live-search="true">

                                        </select>
                                    </div>

                                </div>

                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="nameLabel" class="form-label">
                                            {{ translate('Qualification') }}

                                        </label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="{{ translate('') }}" aria-label="" required
                                            aria-describedby="nameLabel" data-msg="" data-error-class="u-has-error"
                                            data-success-class="u-has-success" />

                                    </div>
                                </div>

                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="nameLabel" class="form-label">
                                            {{ translate('Duration of contract:') }}

                                        </label>
                                        <div class="container d-flex justify-content-between">

                                            <input type="text" class="aiz-date-range form-control" name="date_range"
                                                placeholder="{{ translate('Select Date Range') }}"
                                                data-show-dropdown="true" autocomplete="on" />

                                        </div>

                                    </div>



                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="js-form-message">
                                            <div class="form-group">
                                                <label id="nameLabel" class="form-label">
                                                    {{ translate('Interview') }}
                                                </label>
                                                <div class="radio-inputs">
                                                    <label class="radio">
                                                        <input type="radio" name="interview" checked="">
                                                        <span class="name">Required</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="interview">
                                                        <span class="name">Not Required</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="js-form-message">
                                            <div class="form-group">
                                                <label id="nameLabel" class="form-label">
                                                    {{ translate('Accommodation') }}
                                                </label>
                                                <div class="radio-inputs">
                                                    <label class="radio">
                                                        <input type="radio" name="accommodation" checked="">
                                                        <span class="name">Yes</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="accommodation">
                                                        <span class="name">NA</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="js-form-message">
                                            <div class="form-group">
                                                <label id="nameLabel" class="form-label">
                                                    {{ translate('Allowances') }}
                                                </label>
                                                <div class="radio-inputs">
                                                    <label class="radio">
                                                        <input type="radio" name="allowances" value="Yes" checked>
                                                        <span class="name">Yes</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="allowances" value="NA">
                                                        <span class="name">NA</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="js-form-message">
                                            <div class="form-group">
                                                <label id="nameLabel" class="form-label">
                                                    {{ translate('Visa') }}
                                                </label>
                                                <div class="radio-inputs">
                                                    <label class="radio">
                                                        <input type="radio" name="visa" value="Yes">
                                                        <span class="name">Yes</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="visa" value="NA" checked>
                                                        <span class="name">NA</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label id="countryLabel" class="form-label">
                                            {{ translate('Number of people Required') }}

                                        </label>

                                        <div class="slider d-flex justify-content-between">
                                            <input type="range" min="1" max="25" value=""
                                                oninput="rangeValue.innerText = this.value">
                                            <p id="rangeValue"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="language" class="form-label">{{ translate('Language') }}</label>
                                        <select class="form-control aiz-selectpicker" name="lang_id" id="lang_id"
                                            data-msg="Please select your city." data-live-search="true">

                                            @foreach (\App\Models\Language::all() as $key => $language)
                                                <option value="{{ $language->id }}">{{ $language->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <h5 class="h6 mb-0">
                                        Job Description
                                        <span class="text-danger">*</span>
                                    </h5>
                                    <small class="form-text text-muted">..</small>
                                    {{-- <small
                                        class="form-text text-muted">{{ translate('Tell us about yourself in few sentences') }}..</small> --}}
                                </div>
                                <!-- End Title -->
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="bio" required></textarea>
                                </div>


                                <div class="text-right">
                                    <!-- Buttons -->
                                    <button type="submit"
                                        class="btn btn-primary rounded-1">{{ translate('Save Changes') }}</button>
                                    <!-- End Buttons -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript">
        function get_city_by_country() {
            var country_id = $('#country_id').val();
            $.post('{{ route('cities.get_city_by_country') }}', {
                _token: '{{ csrf_token() }}',
                country_id: country_id
            }, function(data) {
                $('#city_id').html(null);
                for (var i = 0; i < data.length; i++) {
                    $('#city_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
                $("#city_id > option").each(function() {

                    $("#city_id").val(this.value).change();

                });
                AIZ.plugins.bootstrapSelect('refresh');
            });
        }

        $(document).ready(function() {
            get_city_by_country();
        });

        $('#country_id').on('change', function() {
            get_city_by_country();
        });
    </script>
    <script>
        function getDuration(startDate, endDate) {
            var diffInMilliseconds = Math.abs(endDate - startDate);
            var years = Math.floor(diffInMilliseconds / (1000 * 60 * 60 * 24 * 365.25));
            diffInMilliseconds -= years * (1000 * 60 * 60 * 24 * 365.25);
            var months = Math.floor(diffInMilliseconds / (1000 * 60 * 60 * 24 * 30.44));
            diffInMilliseconds -= months * (1000 * 60 * 60 * 24 * 30.44);
            var weeks = Math.floor(diffInMilliseconds / (1000 * 60 * 60 * 24 * 7));
            diffInMilliseconds -= weeks * (1000 * 60 * 60 * 24 * 7);
            var days = Math.floor(diffInMilliseconds / (1000 * 60 * 60 * 24));

            var result = "";
            if (years > 0) {
                result += years + " years, ";
            }
            if (months > 0) {
                result += months + " months, ";
            }
            if (weeks > 0) {
                result += weeks + " weeks, ";
            }
            if (days > 0) {
                result += days + " days";
            }

            return result.trim();
        }

        $('#endDate').on('change', function() {
            var startDate = new Date($('#startDate').val());
            var endDate = new Date($('#endDate').val());

            var duration = getDuration(startDate, endDate);

            $('#duration').val(duration);
        });
    </script>
@endsection
