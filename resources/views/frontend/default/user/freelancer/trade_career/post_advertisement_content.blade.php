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
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Create an advertisement') }}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-2 border-gray-light">
                        <div class="card-header">
                            <h4 class="h6 font-weight-medium mb-0">
                                {{ translate('Preferred country you want your advertisement to be shown.') }}</h4>
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
                                            placeholder="{{ translate('') }}" aria-label="" required
                                            aria-describedby="nameLabel" data-msg="" data-error-class="u-has-error"
                                            data-success-class="u-has-success" />

                                    </div>
                                </div>

                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="nameLabel" class="form-label">
                                            {{ translate('Job Position/Tital') }}

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
                                            {{ translate('Job Position/Tital') }}

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

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label id="countryLabel" class="form-label">
                                            {{ translate('Country') }}

                                        </label>
                                        <select class="form-control aiz-selectpicker" id="country_id" name="country_id"
                                            data-live-search="true" required data-msg="Please select your country.">
                                            {{-- @foreach (\App\Models\Country::all() as $key => $country)
                                                @if (optional($user_profile->user->address)->country_id != null)
                                                    <option value="{{ $country->id }}"
                                                        @if ($user_profile->user->address->country_id == $country->id) selected @endif>
                                                        {{ $country->name }}</option>
                                                @else
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endif
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="country" class="form-label">{{ translate('City/State') }}</label>
                                        <select class="form-control aiz-selectpicker" name="city_id" id="city_id"
                                            data-msg="Please select your city." data-live-search="true">

                                        </select>
                                    </div>

                                </div>

                                {{-- <div class="card-header">
                                    <h4 class="h6 font-weight-medium mb-0">{{ translate('Job requirenents') }}</h4>
                                </div>
                                 --}}



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
                                        <input type="text" class="form-control" name="name"
                                            placeholder="{{ translate('') }}" aria-label="" required
                                            aria-describedby="nameLabel" data-msg="" data-error-class="u-has-error"
                                            data-success-class="u-has-success" />

                                    </div>
                                </div>


                                <div class="row">
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
                                                        <input type="radio" name="allowances" checked="">
                                                        <span class="name">Yes</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="allowances">
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
                                                        <input type="radio" name="allowances" checked="">
                                                        <span class="name">Yes</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="allowances">
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
                                        <select class="form-control aiz-selectpicker" id="country_id" name="country_id"
                                            data-live-search="true" required data-msg="Please select your country.">
                                            {{-- @foreach (\App\Models\Country::all() as $key => $country)
                                                @if (optional($user_profile->user->address)->country_id != null)
                                                    <option value="{{ $country->id }}"
                                                        @if ($user_profile->user->address->country_id == $country->id) selected @endif>
                                                        {{ $country->name }}</option>
                                                @else
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endif
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="country" class="form-label">{{ translate('Language') }}</label>
                                        <select class="form-control aiz-selectpicker" name="city_id" id="city_id"
                                            data-msg="Please select your city." data-live-search="true">

                                        </select>
                                    </div>

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
@endsection
