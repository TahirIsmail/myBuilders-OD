@extends('frontend.default.layouts.app')

@section('content')

<section class="py-5">
    <div class="container">

        <form id="service-filter-form" action="" method="GET">
                <div class="row gutters-15">
                    <div class="col-xl-3 col-lg-4">
                        <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
                            <div class="card rounded-0 border-0 collapse-sidebar c-scrollbar-light shadow-none">
                                <div class="card-header border-0 pl-lg-0">
                                    <h5 class="mb-0 fs-21 fw-700">{{ translate('Filter By') }}</h5>
                                    <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                        <i class="las la-times la-2x"></i>
                                    </button>
                                </div>
                                <div class="card-body pl-lg-0">
                                    <!-- Categories -->
                                    <div class="mb-3">
                                        <h6 class="text-left mb-3 fs-14 fw-700">
                                            <span class="bg-white pr-3">{{ translate('Categories') }}</span>
                                        </h6> 
                                         <div class="">
                                            <select class="rounded-2 select2 form-control aiz-selectpicker" name="category" onchange="applyFilter()" data-toggle="select2" data-live-search="true">  
                                                <option value="">{{ translate('All Categories') }}</option> 
                                                @foreach(\App\Models\ProjectCategory::all() as $category)
                                                    <option value="{{ $category->slug }}" @if (isset($_GET['category']) && $_GET['category'] == $category->slug )
                                                        selected
                                                    @endif>
                                                    {{$category->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 
                                    <!-- Delivery Time -->
                                    <div class="pt-3">
                                        <h6 class="text-left mb-3 fs-14 fw-700">
                                            <span class="bg-white pr-3">{{ translate('Delivery Time') }}</span>
                                        </h6> 
                                        <div class="aiz-radio-list">
                                            <label class="aiz-radio">
                                                <input type="radio" name="delivery_time" value="" onchange="applyFilter()" @if ($delivery_time == "") checked @endif> {{ translate('Any Time delivery') }}
                                                <span class="aiz-rounded-check"></span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="delivery_time" value="1" onchange="applyFilter()" @if ($delivery_time == "1") checked @endif> {{ translate('Within 24 hrs') }}
                                                <span class="aiz-rounded-check"></span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="delivery_time" value="7" onchange="applyFilter()" @if ($delivery_time == "7") checked @endif> {{ translate('Within 7 days') }}
                                                <span class="aiz-rounded-check"></span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="delivery_time" value="21" onchange="applyFilter()" @if ($delivery_time == "21") checked @endif> {{ translate('Within 21 days') }}
                                                <span class="aiz-rounded-check"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Strating Price -->
                                    {{-- <input type="hidden" name="min_price" value="">
                                    <input type="hidden" name="max_price" value="">
                                    <h6 class="text-left pt-3 mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Startting Price') }}</span>
                                    </h6>
                                    <div class="aiz-range-slider mb-5 px-3" >
                                        <div
                                            id="input-slider-range"
                                            data-range-value-min="{{ \App\Models\ServicePackage::where('service_type','basic')->first() != null ? \App\Models\ServicePackage::where('service_type','basic')->min('service_price') : 0 }}"
                                            data-range-value-max="{{ \App\Models\ServicePackage::where('service_type','basic')->first() != null ? \App\Models\ServicePackage::where('service_type','basic')->max('service_price') : 0 }}"
                                        ></div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                    data-range-value-low="{{ $min_price }}"
                                                    id="input-slider-range-value-low"
                                                ></span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                                    data-range-value-high="{{ $max_price }}"
                                                    id="input-slider-range-value-high"
                                                ></span>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="mb-lg-0">
                            <input type="hidden" name="type" value="service"> 
                            <div class="row gutters-15">
                                    @foreach($services as $service)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card bg-transparent rounded-2 border-gray-light overflow-hidden hov-box">
                                            <a href="{{ route('service.show', $service->slug) }}">
                                                @if($service->image != null)
                                                    <img src="{{ custom_asset($service->image) }}" class="card-img-top img-fit" alt="service_image" height="212" style="border-radius: 16px 16px 0px 0px;">
                                                @else
                                                    <img src="{{ my_asset('assets/frontend/default/img/placeholder-service.jpg') }}" class="card-img-top img-fit" alt="{{ translate('Service Image') }}" height="212" style="border-radius: 16px 16px 0px 0px;">
                                                @endif
                                            </a>
                                            <div class="card-body hov-box-body">
                                                <div class="d-flex mb-2">
                                                    <span class="mr-2">
                                                        @if ($service->user->photo != null)
                                                            <img src="{{ custom_asset($service->user->photo) }}" alt="{{ translate('image') }}" height="40" width="40" class="rounded-circle">
                                                        @else
                                                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ translate('image') }}" height="40" width="40" class="rounded-circle">
                                                        @endif
                                                    </span>
                                                    <span class="d-flex flex-column justify-content-center">
                                                        <a href="{{ route('freelancer.details', $service->user->user_name) }}" class="text-secondary fs-14"><span class="font-weight-bold">{{ $service->user->name }}</span></a>
                                                        <span class="rating rating-sm">
                                                            {{ renderStarRating(getAverageRating($service->user->id)) }}
                                                            ({{ getNumberOfReview($service->user->id) }} {{ translate('Reviews') }})
                                                        </span>
                                                    </span>
                                                </div>
                                                
                                                <a href="{{ route('service.show', $service->slug) }}" class="text-reset hov-text-primary"  title="{{ $service->title }}">
                                                    <h5 class="card-title fs-16 fw-700 h-40px">{{ \Illuminate\Support\Str::limit($service->title, 45, $end='...') }}</h5>
                                                </a>
                                                <hr class="mt-2 mb-2">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <small class="mb-0 text-secondary fs-12 w-400">
                                                            {{ translate('Start') }}: {{ $service->service_packages->first() ? single_price($service->service_packages->first()->service_price) : single_price(0) }}
                                                        </small>
                                                    </div>
                                                    <div class="text-right">
                                                        <small class="mb-0 text-secondary fs-12 w-400">
                                                            <i class="la la-clock"></i>
                                                            {{ $service->service_packages->first() ? $service->service_packages->first()->delivery_time : 0 }} {{ translate('Days Delivery') }}
                                                        </small>
                                                    </div>
                                                </div>
                                                {{-- <div class="text-warning">
                                                    <span class="rating rating-lg rating-mr-1">
                                                        {{ renderStarRating(getAverageRating($service->user->id)) }}
                                                    </span>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div> 
                                @endforeach    
                            </div>   
                            <div class="aiz-pagination aiz-pagination-center flex-grow-1">
                                <ul class="pagination">
                                    {{ $services->appends(request()->input())->links() }}
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
            </form> 
    </div>
</section>

@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection

@section('script')
    <script type="text/javascript">
        function applyFilter(){
            $('#service-filter-form').submit();
        }
        function rangefilter(arg){
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            applyFilter();
        };
    </script>
@endsection
