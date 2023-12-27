@extends('frontend.default.layouts.app')

@section('content')
<section class="py-4 py-lg-5">
    <div class="container">
        @if ($keyword != null)
            <div class="row">
                <div class="col-xl-8 offset-xl-2 text-center">
                    <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span class="fw-600">{{ $total }}</span> {{ translate('Tradesmen found for') }} <span class="fw-600">{{ $keyword }}</span></h1>
                </div>
            </div>
        @endif
        <form id="freelancer-filter-form" action="" method="GET">
            <div class="row gutters-10">
                <!-- Sidebar -->
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
                                <div class="">
                                    <!-- Categories -->
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Categories') }}</span>
                                    </h6> 
                                    <div class="mb-3">
                                        <select class="select2 form-control aiz-selectpicker rounded-1" name="category" onchange="applyFilter()" data-toggle="select2" data-live-search="true">  
                                            <option value="">{{ translate('All Categories') }}</option> 
                                            @foreach(\App\Models\ProjectCategory::all() as $category)
                                                <option value="{{ $category->slug }}" @if (isset($_GET['category']) && $_GET['category'] == $category->slug ) selected @endif>
                                                {{$category->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Countries -->
                                    <h6 class="text-left pt-3 mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Countries') }}</span>
                                    </h6> 
                                    <div class="mb-3">
                                        <select class="select2 form-control aiz-selectpicker rounded-1" name="country_id" onchange="applyFilter()" data-toggle="select2" data-live-search="true">  
                                            <option value="">{{ translate('All Countries') }}</option> 
                                            @foreach (\App\Models\Country::all() as $key => $country)
                                                <option value="{{ $country->id }}"  @if (isset($country_id) && $country_id == $country->id ) selected @endif>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Hourly Rate -->
                                    <input type="hidden" name="min_price" value="">
                                    <input type="hidden" name="max_price" value="">
                                    <h6 class="text-left pt-3 mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Hourly Rate') }}</span>
                                    </h6>
                                    <div class="aiz-range-slider mb-3 px-3" >
                                        <div
                                            id="input-slider-range"
                                            data-range-value-min="@if(\App\Models\UserProfile::count() < 1) 0 @else {{ \App\Models\UserProfile::min('hourly_rate') }} @endif"
                                            data-range-value-max="@if(\App\Models\UserProfile::count() < 1) 0 @else {{ \App\Models\UserProfile::max('hourly_rate') }} @endif"
                                        ></div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                    @if (isset($min_price))
                                                        data-range-value-low="{{ $min_price }}"
                                                    @elseif(count($freelancers) > 1 && $freelancers->min('hourly_rate') > 0)
                                                        data-range-value-low="{{ $freelancers->min('hourly_rate') }}"
                                                    @else
                                                        data-range-value-low="0"
                                                    @endif
                                                    id="input-slider-range-value-low"
                                                ></span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                                    @if (isset($max_price))
                                                        data-range-value-high="{{ $max_price }}"
                                                    @elseif(count($freelancers) > 1 && $freelancers->max('hourly_rate') > 0)
                                                        data-range-value-high="{{ $freelancers->max('hourly_rate') }}"
                                                    @else
                                                        data-range-value-high="0"
                                                    @endif
                                                    id="input-slider-range-value-high"
                                                ></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                    <h6 class="text-left pt-3 mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Rating') }}</span>
                                    </h6>
                                    <div class="aiz-radio-list">
                                        <label class="aiz-radio">
                                            <input type="radio" name="rating" value="" onchange="applyFilter()" @if ($rating == '')
                                                checked
                                            @endif> {{ translate('Any rating') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="rating" value="4+" onchange="applyFilter()" @if ($rating == '4+')
                                                checked
                                            @endif> {{ translate('4 star +') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="rating" value="3-4" onchange="applyFilter()" @if ($rating == '3-4')
                                                checked
                                            @endif> {{ translate('3 to 4 star') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="rating" value="2-3" onchange="applyFilter()" @if ($rating == '2-3')
                                                checked
                                            @endif> {{ translate('2 to 3 star') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="rating" value="1-2" onchange="applyFilter()" @if ($rating == '1-2')
                                                checked
                                            @endif> {{ translate('1 to 2 star') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" name="rating" value="0-1" onchange="applyFilter()" @if ($rating == '0-1')
                                                checked
                                            @endif> {{ translate('0 to 1 star') }}
                                            <span class="aiz-rounded-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                    </div>
                                    <!-- Skills -->
                                    <div class="pt-3">
                                        <h6 class="text-left mb-3 fs-14 fw-700">
                                            <span class="bg-white pr-3">{{ translate('Skills') }}</span>
                                        </h6>
                                        <div class="">
                                            <select class="select2 form-control aiz-selectpicker" multiple="multiple" name="skill_ids[]"  onchange="applyFilter()"  data-toggle="select2" data-placeholder="Choose ..." data-live-search="true"> 
                                                @foreach($skills as $skill)
                                                    <option value="{{$skill->id}}" @if (in_array($skill->id, $skill_ids)) selected @endif>
                                                    {{$skill->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                    </div>
                </div>
                
                <!-- Freelancer List -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card mb-lg-0 rounded-2 border-gray-light">
                        <input type="hidden" name="type" value="freelancer">
                        <div class="card-header">
                            <div class="d-flex align-items-center w-100">
                                <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                    <i class="las la-filter"></i>
                                </button>
                                <div class="input-group rounded-2">
                                    <input type="text" class="form-control rounded-2 rounded-right-0 border-right-0" placeholder="{{ translate('Search Keyword') }}" name="keyword" value="{{ $keyword }}">
                                    <div class="input-group-prepend rounded-2">
                                        <span class="input-group-text bg-transparent border-left-0 rounded-right" style="border-bottom-right-radius: 1rem !important; border-top-right-radius: 1rem !important;">
                                            <i class="las la-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            @foreach ($freelancers as $key => $freelancer)
                                @if ($freelancer->user != null)
                                    <a href="{{ route('freelancer.details', $freelancer->user->user_name) }}" class="d-block d-xl-flex card-project text-inherit px-3 py-4">
                                        <span class="avatar flex-shrink-0 mr-4">
                                            @if ($freelancer->user->photo != null)
                                                <img src="{{ custom_asset($freelancer->user->photo) }}" alt="{{ $freelancer->user->name }}">
                                            @else
                                                <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ $freelancer->user->name }}">
                                            @endif
                                            @if(Cache::has('user-is-online-' . $freelancer->user->id))
                                                <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                            @else
                                                <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                            @endif
                                        </span>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 fw-700 mb-1">
                                                {{ $freelancer->user->name }}
                                                @if($freelancer->nationality)
                                                <img src="{{ my_asset('assets/frontend/default/img/flags/'.$freelancer->nationality.'.png') }}" alt="flag" class="ml-1" style="vertical-align: baseline !important;">
                                                @endif
                                            </h5>
                                            @if ($freelancer->specialistAt != null)
                                                <p class="fs-12 opacity-50">{{ $freelancer->specialistAt->name }}</p>
                                            @endif
                                            <div class="text-muted lh-1-8">
                                                <p class="text-truncate-3">{{ $freelancer->bio }}</p>
                                            </div>
                                            <div class="d-flex text-secondary fs-12 mb-3">
                                                <div class="mr-2">
                                                    <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                        {{ formatRating(getAverageRating($freelancer->user->id)) }}
                                                    </span>
                                                    <span class="rating rating-sm rating-mr-1">
                                                        {{ renderStarRating(getAverageRating($freelancer->user->id)) }}
                                                    </span>
                                                    <span>
                                                        ({{ count($freelancer->user->reviews) }} {{ translate('Reviews') }})
                                                    </span>
                                                </div>
                                                @if ($freelancer->user->address != null && $freelancer->user->address->city_id != null && $freelancer->user->address->country_id != null)
                                                    <div>
                                                        {{-- <i class="las la-map-marker"></i> --}}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.6" height="12" viewBox="0 0 9.6 12">
                                                            <path id="Path_25847" data-name="Path 25847" d="M8.8,2A4.806,4.806,0,0,0,4,6.8c0,1.953,1.418,3.575,2.92,5.292.475.544.967,1.106,1.405,1.675a.6.6,0,0,0,.95,0c.438-.569.93-1.131,1.405-1.675,1.5-1.717,2.92-3.338,2.92-5.292A4.806,4.806,0,0,0,8.8,2Zm0,6.6a1.8,1.8,0,1,1,1.8-1.8A1.8,1.8,0,0,1,8.8,8.6Z" transform="translate(-4 -2)" fill="#989ea8"/>
                                                        </svg>
                                                        <span class="ml-1">{{ $freelancer->user->address->city->name }}, {{ $freelancer->user->address->country->name }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                            @if($freelancer->skills != null)
                                                <div>
                                                    @foreach (json_decode($freelancer->skills) as $key => $skill_id)
                                                        @php
                                                            $skill = \App\Models\Skill::find($skill_id);
                                                        @endphp
                                                        @if ($skill != null)
                                                            <span class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">{{ $skill->name }}</span>
                                                        @endif
                                                    @endforeach

                                                </div>
                                            @endif
                                        </div>
                                        <div class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 d-flex flex-row flex-xl-column justify-content-between align-items-center">
                                            <div class="text-right">
                                                <div class="mt-xl-2 small text-secondary">
                                                    <span>{{ translate('Hourly Rate') }}</span>
                                                </div>
                                                <h4 class="mb-0 fs-24 fw-700">{{ single_price($freelancer->hourly_rate) }}</h4>
                                            </div>
                                            <div>
                                                <span class="btn btn-primary btn-sm rounded-2 fw-700">{{ translate('Hire Me') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        @if (!is_array($freelancers))
                            <div class="card-footer">
                                <div class="aiz-pagination aiz-pagination-center flex-grow-1">
                                    <ul class="pagination">
                                        {{ $freelancers->appends(request()->input())->links() }}
                                    </ul>
                                </div>
                            </div>
                        @endif 
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection

@section('script')
    <script type="text/javascript">
        function applyFilter(){
            $('#freelancer-filter-form').submit();
        }
        function rangefilter(arg){
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            applyFilter();
        };
    </script>
@endsection
