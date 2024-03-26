@extends('frontend.default.layouts.app')


@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.freelancer.inc.sidebar')
                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Company Profile') }} </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-2 border-gray-light">
                        <div class="card-header">
                            <h4 class="h6 font-weight-medium mb-0">
                                {{ translate('Basic Information:') }}</h4>
                        </div>
                        <div class="card-body">
                            <!-- Personal Info Form -->

                            <form class="js-validate" action="" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="nameLabel" class="form-label">
                                            {{ translate('Company name') }}<span class="text-danger">*</span>

                                        </label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="{{ translate('') }}" aria-label="" required
                                            aria-describedby="nameLabel" data-msg="" data-error-class="u-has-error"
                                            data-success-class="u-has-success" />

                                    </div>
                                </div>

                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="phoneLabel" class="form-label">
                                            {{ translate('Phone number') }}<span class="text-danger">*</span>
                                        </label>
                                        <input type="tel" class="form-control" name="phone"
                                            placeholder="{{ translate('') }}" aria-label="" required
                                            aria-describedby="phoneLabel" data-msg="" data-error-class="u-has-error"
                                            data-success-class="u-has-success" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">{{ translate('Company Logo') }} <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                {{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="profile_photo" class="selected-files">
                                    </div>
                                    <div class="file-preview"></div>
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



                    <div class="card rounded-2 border-gray-light">
                        <div class="card-header">
                            <h4 class="h6 font-weight-medium mb-0">
                                {{ translate('Company Details:') }}</h4>
                        </div>
                        <div class="card-body">
                            <!-- Personal Info Form -->

                            <form class="js-validate" action="" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="usernameLabel"
                                            class="form-label">{{ translate('Mission statement and vision') }}<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="3" name="portfolio_details" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Established date') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="aiz-date-range form-control" name="start_date"
                                        placeholder="{{ translate('Select Date') }}" data-single="true"
                                        data-show-dropdown="true" autocomplete="off" />
                                </div>

                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="usernameLabel"
                                            class="form-label">{{ translate('Description of products and/or services') }}<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="3" name="portfolio_details" required></textarea>
                                    </div>
                                </div>

                                <div class="js-form-message">
                                    <div class="form-group">
                                        <label id="usernameLabel"
                                            class="form-label">{{ translate('Brief overview of history, growth, and development') }}<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="3" name="portfolio_details" required></textarea>
                                    </div>
                                </div>


                                <div class="js-form-message">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label id="nameLabel" class="form-label">
                                                    {{ translate('Specialist At') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-control aiz-selectpicker" id="specialist"
                                                    name="specialist" data-live-search="true" required>
                                                    @foreach (\App\Models\ProjectCategory::all() as $category)
                                                        <option value="{{ $category->id }}" >
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ translate('Services') }} <span class="text-danger">*</span></label>
                                                <select class="form-control aiz-selectpicker" multiple name="services[]"
                                                    data-live-search="true" data-selected-text-format="count">
                                                    
                                                        @foreach (\App\Models\Skill::all() as $key => $skill)
                                                            <option value="{{ $skill->id }}" >
                                                                {{ $skill->name }}
                                                            </option>
                                                        @endforeach
                                                   
                                                </select>
                                            </div>
                                        </div>
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
    <link href="https://cdn.jsdelivr.net/npm/pickadate/lib/themes/default.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/pickadate/lib/themes/default.date.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/pickadate/lib/picker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pickadate/lib/picker.date.js"></script>


    <script></script>
@endsection
