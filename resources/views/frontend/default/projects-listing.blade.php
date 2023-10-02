@extends('frontend.default.layouts.app')

@section('content')
    <section class="py-4 py-lg-5">
        <div class="container">
            @if($keyword != null)
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 text-center">
                        <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span class="fw-600">{{ $total }}</span> {{ translate('projects found for') }} <span class="fw-600">{{ $keyword }}</span></h1>
                    </div>
                </div>
            @endif
            <form id="project-filter-form" action="" method="GET">
                <div class="row gutters-15">
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
                                    <!-- Categories -->
                                    <div class="mb-5">
                                        <h6 class="text-left mb-3 fs-14 fw-700">
                                            <span class="bg-white pr-3">{{ translate('Categories') }}</span>
                                        </h6>
                                        <div class="">
                                            <select class="select2 form-control aiz-selectpicker rounded-1" name="category" onchange="applyFilter()" data-toggle="select2" data-live-search="true">  
                                                <option value="">{{ translate('All Categories') }}</option> 
                                                @foreach(\App\Models\ProjectCategory::all() as $category)
                                                    <option value="{{ $category->slug }}" @if (isset($_GET['category'])&& $_GET['category'] == $category->slug ) selected @endif>
                                                        {{$category->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Project Type -->
                                    <div class="mb-5">
                                        <h6 class="text-left mb-3 fs-14 fw-700">
                                            <span class="bg-white pr-3">{{ translate('Project Type') }}</span>
                                        </h6>
                                        <div class="aiz-checkbox-list">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="projectType[]" value="Fixed" @if (in_array('Fixed', $projectType))
                                                    checked
                                                @endif onchange="applyFilter()"> {{ translate('Fixed Price') }}
                                                <span class="aiz-square-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <label class="aiz-checkbox">
                                                <input type="checkbox"  name="projectType[]" value="Long Term" @if (in_array('Long Term', $projectType)) checked @endif 
                                                    onchange="applyFilter()"> {{ translate('Long Term') }}
                                                <span class="aiz-square-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Numbers of Bids -->
                                    <div class="mb-5">
                                        <h6 class="text-left mb-3 fs-14 fw-700">
                                            <span class="bg-white pr-3">{{ translate('Numbers of Bids') }}</span>
                                        </h6>
                                        <div class="aiz-radio-list">
                                            <label class="aiz-radio">
                                                <input type="radio" name="bids" value="" onchange="applyFilter()" @if ($bids == "")
                                                    checked
                                                @endif> {{ translate('Any Number of bids') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="bids" value="0-5" onchange="applyFilter()" @if ($bids == "0-5")
                                                    checked
                                                @endif> {{ translate('0 to 5') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="bids" value="5-10" onchange="applyFilter()" @if ($bids == "5-10")
                                                    checked
                                                @endif> {{ translate('5 to 10') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="bids" value="10-20" onchange="applyFilter()" @if ($bids == "10-20")
                                                    checked
                                                @endif> {{ translate('10 to 20') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="bids" value="20-30" onchange="applyFilter()" @if ($bids == "20-30")
                                                    checked
                                                @endif> {{ translate('20 to 30') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="bids" value="30+" onchange="applyFilter()" @if ($bids == "30+")
                                                    checked
                                                @endif> {{ translate('30+') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Price -->
                                    <input type="hidden" name="min_price" value="">
                                    <input type="hidden" name="max_price" value="">
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Price') }}</span>
                                    </h6>
                                    <div class="aiz-range-slider mb-5 px-3" >
                                        <div
                                            id="input-slider-range"
                                            data-range-value-min="@if(\App\Models\Project::count() < 1) 0 @else {{ \App\Models\Project::min('price') }} @endif"
                                            data-range-value-max="@if(\App\Models\Project::count() < 1) 0 @else {{ \App\Models\Project::max('price') }} @endif"
                                        ></div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                    @if (isset($min_price))
                                                        data-range-value-low="{{ $min_price }}"
                                                    @elseif(count($projects) > 1 && $projects->min('price') > 0)
                                                        data-range-value-low="{{ $projects->min('price') }}"
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
                                                    @elseif(count($projects) > 1 && $projects->max('price') > 0)
                                                        data-range-value-high="{{ $projects->max('price') }}"
                                                    @else
                                                        data-range-value-high="0"
                                                    @endif
                                                    id="input-slider-range-value-high"
                                                ></span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="">
                                        <h6 class="separator text-left mb-3 fs-12 text-uppercase text-secondary">
                                            <span class="bg-white pr-3">Client History</span>
                                        </h6>
                                        <div class="aiz-radio-list">
                                            <label class="aiz-radio">
                                                <input type="radio" name="radio3" checked="checked"> Any client history
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12">(200)</span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="radio3"> No hires
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12">(200)</span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="radio3"> 1 to 10 hires
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12">(200)</span>
                                            </label>
                                            <label class="aiz-radio">
                                                <input type="radio" name="radio3"> 10+ hires
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12">(200)</span>
                                            </label>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                        </div>
                    </div>
                    
                    <!-- Project List -->
                    <div class="col-xl-9 col-lg-8">
                        <div class="card mb-lg-0 rounded-2 border-gray-light">
                            <input type="hidden" name="type" value="project">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                        <i class="las la-filter"></i>
                                    </button>
                                    <input type="text" class="form-control form-control-sm rounded-1" placeholder="{{ translate('Search Keyword') }}" value="{{ $keyword }}" name="keyword">
                                </div>

                                <div class="w-200px">
                                    <select class="form-control form-control-sm aiz-selectpicker rounded-1" name="sort" onchange="applyFilter()">
                                        <option value="1" @if($sort == '1') selected @endif>{{ translate('Newest first') }}</option>
                                        <option value="2" @if($sort == '2') selected @endif>{{ translate('Lowest budget first') }}</option>
                                        <option value="3" @if($sort == '3') selected @endif>{{ translate('Highest budget first') }}</option>
                                        <option value="4" @if($sort == '4') selected @endif>{{ translate('Lowest bids first') }}</option>
                                        <option value="5" @if($sort == '5') selected @endif>{{ translate('Highest bids first') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body p-0">

                                @foreach ($projects as $key => $project)
                                    <a href="{{ route('project.details', $project->slug) }}" class="d-block d-xl-flex card-project text-inherit px-3 py-4">
                                        <div class="flex-grow-1 px-lg-3">
                                            <h5 class="h6 fw-600 lh-1-5">{{ $project->name }}</h5>
                                            <div class="text-muted lh-1-8">
                                                <p>{{ $project->excerpt }}</p>
                                            </div>
                                            <ul class="list-inline opacity-70 fs-12">
                                                <li class="list-inline-item">
                                                    {{-- <i class="las la-clock opacity-40"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                                        <g id="Group_22132" data-name="Group 22132" transform="translate(-365 -1963)">
                                                          <path id="Subtraction_5" data-name="Subtraction 5" d="M-13,12a6.007,6.007,0,0,1-6-6,6.007,6.007,0,0,1,6-6A6.007,6.007,0,0,1-7,6,6.006,6.006,0,0,1-13,12Zm-.5-9V7h.013l2.109,2.109.707-.706L-12.5,6.572V3Z" transform="translate(384 1963)" fill="#989ea8"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ml-1">{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    {{-- <i class="las la-stream opacity-40"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11">
                                                        <g id="Group_23" data-name="Group 23" transform="translate(-498 -1963)">
                                                        <path id="Subtraction_2" data-name="Subtraction 2" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1963)" fill="#989ea8"/>
                                                        <path id="Subtraction_4" data-name="Subtraction 4" d="M1.5,0h5a1.5,1.5,0,0,1,0,3h-5a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1971)" fill="#989ea8"/>
                                                        <path id="Subtraction_3" data-name="Subtraction 3" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(500 1967)" fill="#989ea8"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ml-1">@if ($project->project_category != null) {{ $project->project_category->name }} @else {{ translate('Removed Category') }} @endif</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    {{-- <i class="las la-handshake"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.643" height="12" viewBox="0 0 7.643 12">
                                                        <g id="Group_24" data-name="Group 24" transform="translate(-131 -59.8)">
                                                        <path id="Path_9" data-name="Path 9" d="M136.142,161.028,133.614,161A3.381,3.381,0,0,0,131,164.281v4.708a.92.92,0,0,0,.917.917h5.809a.92.92,0,0,0,.917-.917v-4.708A3.361,3.361,0,0,0,136.142,161.028Zm-1.321,4.488a1.122,1.122,0,0,1,.306,2.2v.248a.306.306,0,0,1-.611,0v-.248a1.123,1.123,0,0,1-.816-1.079.306.306,0,0,1,.611,0,.511.511,0,1,0,.511-.511,1.122,1.122,0,0,1-.306-2.2v-.183a.306.306,0,1,1,.611,0v.183a1.123,1.123,0,0,1,.816,1.079.306.306,0,1,1-.611,0,.511.511,0,1,0-.511.511Z" transform="translate(0 -98.106)" fill="#989ea8"/>
                                                        <path id="Path_10" data-name="Path 10" d="M219.424,124.641l.15-.52L217.1,124.1l.171.52Z" transform="translate(-83.468 -62.334)" fill="#989ea8"/>
                                                        <path id="Path_11" data-name="Path 11" d="M199.1,61.179l.4-1.379h-3.7l.449,1.351Z" transform="translate(-62.819)" fill="#989ea8"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ml-1">{{ $project->type }}</span>
                                                </li>
                                            </ul>
                                            <div>
                                                @foreach (json_decode($project->skills) as $key => $skill_id)
                                                    @php
                                                        $skill = \App\Models\Skill::find($skill_id);
                                                    @endphp
                                                    @if ($skill != null)
                                                        <span class="btn btn-light btn-xs mb-1 ml-1 bg-soft-info-light rounded-2 border-0">{{ $skill->name }}</span>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="border-lg-left border-gray-light flex-shrink-0 pt-4 pt-xl-0 pl-xl-4 d-flex flex-row-reverse flex-xl-column justify-content-between align-items-center align-items-xl-start minw-130px">
                                            <div class="text-right text-lg-left mb-lg-3">
                                                <span class="small text-secondary">{{ translate('Budget') }}</span>
                                                <h4 class="mb-0 fw-700">{{ single_price($project->price) }}</h4>
                                                <div class="mt-xl-2 small text-secondary">
                                                    @if ($project->bids > 0)
                                                        <span class="text-body mr-1">{{ $project->bids }}+</span>
                                                    @else
                                                        <span class="text-body mr-1">{{ $project->bids }}</span>
                                                    @endif
                                                    <span>Bids</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-lg-column">
                                                    <span class="avatar avatar-xs mb-lg-2">
                                                        @if($project->client->photo != null)
                                                            <img src="{{ custom_asset($project->client->photo) }}">
                                                        @else
                                                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                                                        @endif
                                                    </span>
                                                    <div class="pl-2 pl-lg-0">
                                                        <h4 class="fs-14 mb-1">@if ( $project->client != null ) {{ $project->client->name }} @endif</h4>
                                                        <div class="text-secondary fs-10">
                                                            <i class="las la-star text-warning"></i>
                                                            <span class="fw-600">{{ formatRating(getAverageRating($project->client->id)) }}</span>
                                                            <span>({{ getNumberOfReview($project->client->id) }} {{ translate('reviews') }})</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                            <div class="card-footer">
                                <div class="aiz-pagination aiz-pagination-center flex-grow-1">
                                    <ul class="pagination">
                                        {{ $projects->appends(request()->input())->links() }}
                                    </ul>
                                </div>
                            </div>
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
            $('#project-filter-form').submit();
        }
        function rangefilter(arg){
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            applyFilter();
        };
    </script>
@endsection
