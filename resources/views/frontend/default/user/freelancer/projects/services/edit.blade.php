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
                            <h1 class="fs-16 fw-700">{{ translate('Edit Service') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="card rounded-2 border-gray-light">
                    <div class="card-header">
                        <h4 class="h6 font-weight-medium mb-0">{{ translate('Service Info') }}</h4>
                    </div>
                    <div class="card-body">
                        <form class="js-validate" action="{{ route('service.update', $service->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="js-form-message">
                                <div class="form-group">
                                    <label id="nameLabel" class="form-label">
                                        {{ translate('Title of Service') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control " name="title" placeholder="{{ translate('Enter your service title') }}" value="{{ $service->title }}" aria-label="Enter your Bank name" required aria-describedby="nameLabel" data-msg="Please Enter title." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">{{ translate('Service Image') }}</label>
                                    <div class="input-group " data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="service_photo" class="selected-files" value="{{ $service->image }}">
                                    </div>
                                    <div class="file-preview"></div>
                                </div>

                                <div class="form-group">
                                    <label>
                                        {{ translate('About Service') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="aiz-text-editor form-control" name="about_service"
                                                data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]'
                                                placeholder="{{ translate('Type..') }}" data-min-height="150">{{ $service->about_service }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Select Category') }}</label>
                                    <select class="form-control aiz-selectpicker" name="category_id">
                                        @foreach(\App\Models\ProjectCategory::all() as $category)
                                            <option value="{{ $category->id }}" @if($category->id == $service->project_cat_id) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">{{ translate('Please select a category.') }}</small>
                                </div>
                            </div>
                            <h5>{{ translate('Packages') }}</h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                {{-- @foreach($service_packages as $service_package)
                                <li class="nav-item">
                                    <a class="nav-link @if($loop->iteration == 1) active @endif" id="{{ $service_package->service_type }}-tab" data-toggle="tab" href="#{{ $service_package->service_type }}" role="tab" aria-controls="{{ $service_package->service_type }}" aria-selected="@if($loop->iteration == 1) true @else false @endif">{{ ucfirst($service_package->service_type) }}</a>
                                </li>
                                @endforeach --}}
                                <li class="nav-item">
                                    <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-selected="true">{{ translate('Basic') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="standard-tab" data-toggle="tab" href="#standard" role="tab" aria-controls="standard" aria-selected="false">{{ translate('Standard') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="premium-tab" data-toggle="tab" href="#premium" role="tab" aria-controls="premium" aria-selected="false">{{ translate('Premium') }}</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                {{-- @foreach($service_packages as $service_package)
                                <div class="tab-pane show @if($loop->iteration == 1) active @endif" id="{{ $service_package->service_type }}" role="tabpanel" aria-labelledby="{{ $service_package->service_type }}-tab">
                                    <h5 class="mt-3">{{ ucfirst($service_package->service_type) }} {{ translate('Package') }}</h5>
                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Price') }}</label>
                                        <input type="text" class="form-control " name="{{ $service_package->service_type }}_price" placeholder="{{ translate('Enter Basic Package Price') }}" aria-label="Enter Basic Package Price" required aria-describedby="nameLabel" data-msg="Enter Basic Package Price" data-error-class="u-has-error" data-success-class="u-has-success" value="{{ $service_package->service_price }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Devilery Within') }}</label>
                                        <input type="number" class="form-control " name="{{ $service_package->service_type }}_delivery_time" placeholder="{{ translate('Enter Devilery Within') }}" aria-label="Enter Basic Package Price" required aria-describedby="nameLabel" data-msg="Enter Basic Package Price" data-error-class="u-has-error" data-success-class="u-has-success" value="{{ $service_package->delivery_time }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Revision Limit') }}</label>
                                        <input type="text" class="form-control " name="{{ $service_package->service_type }}_revision_limit" placeholder="{{ translate('Enter Revision Limit') }}" aria-label="Enter Basic Package Price" required aria-describedby="nameLabel" data-msg="Enter Basic Package Price" data-error-class="u-has-error" data-success-class="u-has-success"  value="{{ $service_package->revision_limit }}">
                                    </div>

                                    <div class="whats-included-{{ $service_package->service_type }}">
                                        <div class="form-group">
                                            <label class="form-label">{{ translate('What is included section') }}</label>
                                            @if ($service_package->feature_description != null)
                                                @foreach (json_decode($service_package->feature_description) as $key => $value)
                                                <div class="row gutters-5">
                                                    <div class="col">
                                                        <div class="form-group d-flex">
                                                            <input id="include_description" type="text" class="form-control" value="{{ $value }}" placeholder="http://" name="{{ $service_package->service_type }}_included_description[]">
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <button
                                        type="button"
                                        class="btn btn-soft-secondary btn-sm rounded-1"
                                        data-toggle="add-more"
                                        data-content='<div class="row gutters-5">
                                            <div class="col">
                                                <div class="form-group d-flex">
                                                    <input id="include_description" type="text" class="form-control" placeholder="" name="{{ $service_package->service_type }}_included_description[]">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                    <i class="las la-times"></i>
                                                </button>
                                            </div>
                                        </div>'
                                        data-target=".whats-included-{{ $service_package->service_type }}">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                @endforeach --}}
                                @php
                                    $basic_service_package = $service_packages->where('service_type', 'basic')->first();
                                    $standard_service_package = $service_packages->where('service_type', 'standard')->first();
                                    $premium_service_package = $service_packages->where('service_type', 'premium')->first();
                                @endphp
                                
                                <!-- Basic tab -->
                                <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                    <h5 class="mt-3">{{ translate('Basic Package') }}</h5>
                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Price') }}</label>
                                        <input type="text" class="form-control " name="basic_price" placeholder="{{ translate('Enter Basic Package Price') }}" aria-label="Enter Basic Package Price" required aria-describedby="nameLabel" data-msg="Enter Basic Package Price" data-error-class="u-has-error" data-success-class="u-has-success" value="{{ $basic_service_package ? $basic_service_package->service_price : '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Devilery Within') }}</label>
                                        <input type="number" class="form-control " name="basic_delivery_time" placeholder="{{ translate('Enter Devilery Within') }}" aria-label="Enter Basic Package Price" required aria-describedby="nameLabel" data-msg="Enter Basic Package Price" data-error-class="u-has-error" data-success-class="u-has-success" value="{{ $basic_service_package ? $basic_service_package->delivery_time : '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Revision Limit') }}</label>
                                        <input type="text" class="form-control " name="basic_revision_limit" placeholder="{{ translate('Enter Revision Limit') }}" aria-label="Enter Basic Package Price" required aria-describedby="nameLabel" data-msg="Enter Basic Package Price" data-error-class="u-has-error" data-success-class="u-has-success"  value="{{ $basic_service_package ? $basic_service_package->revision_limit : '' }}">
                                    </div>

                                    <div class="whats-included-basic">
                                        <div class="form-group">
                                            <label class="form-label">{{ translate('What is included section') }}</label>
                                            @if ($basic_service_package && $basic_service_package->feature_description != null)
                                                @foreach (json_decode($basic_service_package->feature_description) as $key => $value)
                                                <div class="row gutters-5">
                                                    <div class="col">
                                                        <div class="form-group d-flex">
                                                            <input id="include_description" type="text" class="form-control" value="{{ $value }}" placeholder="" name="basic_included_description[]">
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                <div class="row gutters-5">
                                                    <div class="col">
                                                        <div class="form-group d-flex">
                                                            <input id="include_description" type="text" class="form-control" value="" placeholder="" name="basic_included_description[]">
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <button
                                        type="button"
                                        class="btn btn-soft-secondary btn-sm rounded-1"
                                        data-toggle="add-more"
                                        data-content='<div class="row gutters-5">
                                            <div class="col">
                                                <div class="form-group d-flex">
                                                    <input id="include_description" type="text" class="form-control" placeholder="" name="basic_included_description[]">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                    <i class="las la-times"></i>
                                                </button>
                                            </div>
                                        </div>'
                                        data-target=".whats-included-basic">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <!-- Standard tab -->
                                <div class="tab-pane fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                                    <h5 class="mt-3">{{ translate('Standard Package') }}</h5>
                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Price') }}</label>
                                        <input type="text" class="form-control " name="standard_price" placeholder="{{ translate('Enter Standard Package Price') }}" aria-label="Enter Standard Package Price" required aria-describedby="nameLabel" data-msg="Enter Standard Package Price" data-error-class="u-has-error" data-success-class="u-has-success" value="{{ $standard_service_package ? $standard_service_package->service_price : '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Devilery Within') }}</label>
                                        <input type="number" class="form-control " name="standard_delivery_time" placeholder="{{ translate('Enter Devilery Within') }}" aria-label="Enter Standard Package Price" required aria-describedby="nameLabel" data-msg="Enter Standard Package Price" data-error-class="u-has-error" data-success-class="u-has-success" value="{{ $standard_service_package ? $standard_service_package->delivery_time : '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Revision Limit') }}</label>
                                        <input type="text" class="form-control " name="standard_revision_limit" placeholder="{{ translate('Enter Revision Limit') }}" aria-label="Enter Standard Package Price" required aria-describedby="nameLabel" data-msg="Enter Standard Package Price" data-error-class="u-has-error" data-success-class="u-has-success"  value="{{ $standard_service_package ? $standard_service_package->revision_limit : '' }}">
                                    </div>

                                    <div class="whats-included-standard">
                                        <div class="form-group">
                                            <label class="form-label">{{ translate('What is included section') }}</label>
                                            @if ($standard_service_package && $standard_service_package->feature_description != null)
                                                @foreach (json_decode($standard_service_package->feature_description) as $key => $value)
                                                <div class="row gutters-5">
                                                    <div class="col">
                                                        <div class="form-group d-flex">
                                                            <input id="include_description" type="text" class="form-control" value="{{ $value }}" placeholder="" name="standard_included_description[]">
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                <div class="row gutters-5">
                                                    <div class="col">
                                                        <div class="form-group d-flex">
                                                            <input id="include_description" type="text" class="form-control" value="" placeholder="" name="standard_included_description[]">
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <button
                                        type="button"
                                        class="btn btn-soft-secondary btn-sm rounded-1"
                                        data-toggle="add-more"
                                        data-content='<div class="row gutters-5">
                                            <div class="col">
                                                <div class="form-group d-flex">
                                                    <input id="include_description" type="text" class="form-control" placeholder="" name="standard_included_description[]">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                    <i class="las la-times"></i>
                                                </button>
                                            </div>
                                        </div>'
                                        data-target=".whats-included-standard">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <!-- Premium tab -->
                                <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
                                    <h5 class="mt-3">{{ translate('Premium Package') }}</h5>
                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Price') }}</label>
                                        <input type="text" class="form-control " name="premium_price" placeholder="{{ translate('Enter Premium Package Price') }}" aria-label="Enter Premium Package Price" required aria-describedby="nameLabel" data-msg="Enter Premium Package Price" data-error-class="u-has-error" data-success-class="u-has-success" value="{{ $premium_service_package ? $premium_service_package->service_price : '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Devilery Within') }}</label>
                                        <input type="number" class="form-control " name="premium_delivery_time" placeholder="{{ translate('Enter Devilery Within') }}" aria-label="Enter Premium Package Price" required aria-describedby="nameLabel" data-msg="Enter Premium Package Price" data-error-class="u-has-error" data-success-class="u-has-success" value="{{ $premium_service_package ? $premium_service_package->delivery_time : '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">{{ translate('Revision Limit') }}</label>
                                        <input type="text" class="form-control " name="premium_revision_limit" placeholder="{{ translate('Enter Revision Limit') }}" aria-label="Enter Premium Package Price" required aria-describedby="nameLabel" data-msg="Enter Premium Package Price" data-error-class="u-has-error" data-success-class="u-has-success"  value="{{ $premium_service_package ? $premium_service_package->revision_limit : '' }}">
                                    </div>

                                    <div class="whats-included-premium">
                                        <div class="form-group">
                                            <label class="form-label">{{ translate('What is included section') }}</label>
                                            @if ($premium_service_package && $premium_service_package->feature_description != null)
                                                @foreach (json_decode($premium_service_package->feature_description) as $key => $value)
                                                <div class="row gutters-5">
                                                    <div class="col">
                                                        <div class="form-group d-flex">
                                                            <input id="include_description" type="text" class="form-control" value="{{ $value }}" placeholder="" name="premium_included_description[]">
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                <div class="row gutters-5">
                                                    <div class="col">
                                                        <div class="form-group d-flex">
                                                            <input id="include_description" type="text" class="form-control" value="" placeholder="" name="premium_included_description[]">
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <button
                                        type="button"
                                        class="btn btn-soft-secondary btn-sm rounded-1"
                                        data-toggle="add-more"
                                        data-content='<div class="row gutters-5">
                                            <div class="col">
                                                <div class="form-group d-flex">
                                                    <input id="include_description" type="text" class="form-control" placeholder="" name="premium_included_description[]">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                    <i class="las la-times"></i>
                                                </button>
                                            </div>
                                        </div>'
                                        data-target=".whats-included-premium">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary transition-3d-hover mr-1 rounded-1">{{ translate('Update Service') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
