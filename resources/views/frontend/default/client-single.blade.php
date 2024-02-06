@extends('frontend.default.layouts.app')

@section('content')
<div class="h-250px">
    @if ($client->cover_photo != null)
        <img src="{{ custom_asset($client->cover_photo) }}" alt="{{ $client->name }}"class="img-fit h-250px">
    @else
        <img src="{{ my_asset('assets/frontend/default/img/cover-place.jpg') }}" alt="{{ $client->name }}"class="img-fit h-250px">
    @endif
</div>
<div class="mt-n5">
    <div class="container">
        <div class="card rounded-2 border-gray-light">
            <div class="card-body">
                <div class="media align-items-center d-block d-md-flex">
                    <div class="mr-5 text-center text-md-left mb-4 mb-md-0">
                        <span class="avatar avatar-xxl">
                            @if($client->photo != null)
                                <img src="{{ custom_asset($client->photo) }}">
                            @else
                                <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                            @endif
                            <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                        </span>
                    </div>
                    <div class="media-body d-lg-flex justify-content-between align-items-center">
                        <div class="mr-3 mb-4 mb-lg-0 text-center text-md-left">
                            <h1 class="h5 mb-2 fw-700">{{ $client->name }}</h1>

                            <div class="d-flex justify-content-center justify-content-md-between text-secondary fs-12 mb-3">
                                <div class="mr-2">
                                    @if( !empty(getAverageRating($client->id)))
                                        <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                            {{ formatRating(getAverageRating($client->id)) }}
                                        </span>
                                    @else
                                        <span class="bg-secondary rounded text-white px-1 mr-1 fs-10">
                                            {{ formatRating(getAverageRating($client->id)) }}
                                        </span>
                                    @endif

                                    <span class="rating rating-sm">
                                        {{ renderStarRating(getAverageRating($client->id)) }}
                                    </span>
                                    <span>
                                        ({{ getNumberOfReview($client->id) }} {{ translate('Reviews') }})
                                    </span>
                                </div>
                                <div>
                                    {{-- <i class="las la-map-marker opacity-50"></i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.6" height="12" viewBox="0 0 9.6 12">
                                        <path id="Path_25847" data-name="Path 25847" d="M8.8,2A4.806,4.806,0,0,0,4,6.8c0,1.953,1.418,3.575,2.92,5.292.475.544.967,1.106,1.405,1.675a.6.6,0,0,0,.95,0c.438-.569.93-1.131,1.405-1.675,1.5-1.717,2.92-3.338,2.92-5.292A4.806,4.806,0,0,0,8.8,2Zm0,6.6a1.8,1.8,0,1,1,1.8-1.8A1.8,1.8,0,0,1,8.8,8.6Z" transform="translate(-4 -2)" fill="#989ea8"/>
                                    </svg>
                                    @if ($client->address != null && $client->address->city != null && $client->address->country != null)
                                        <span class="ml-1">{{ $client->address->city }}, {{ $client->address->country }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="text-lg-right text-center">
                            @if (Auth::check() && ($bookmarked_client = \App\Models\BookmarkedClient::where('user_id', auth()->user()->id)->where('client_user_id', $client->id)->first()) != null)
                                <a class="btn btn-secondary confirm-alert" href="javascript:void(0)" data-href="{{ route('bookmarked-clients.destroy', $bookmarked_client->id) }}" data-target="#unfollow-modal">Unfollow</a>
                            @else
                                <a class="btn btn-primary" href="{{ route('bookmarked-clients.store', encrypt($client->id)) }}">{{ translate('Follow') }}</a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="row">

            <div class="col-xxl-9 col-lg-8 order-1 order-lg-0">

                <div class="card rounded-2 border-gray-light">
                    <div class="card-header">
                        <h4 class="h6 fw-700 mb-0">{{ $client->name }}'s {{ translate('Bio') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="opacity-70 lh-1-8 fs-15">{{ $client->profile->bio }}</div>
                    </div>
                </div>

                <div class="card rounded-2 border-gray-light">
                    <div class="card-header">
                        <h4 class="h6 fw-700 mb-0">{{ $client->name }}'s {{ translate('Open Projects') }}</h4>
                    </div>
                    <div class="card-body px-0">

                        @if (count($open_projects) > 0)
                        <div class="mb-4">
                            <ul class="list-group list-group-flush">
                                @foreach ($open_projects as $key => $open_project)
                                <li class="list-group-item px-4 py-3 hov-bg-soft-primary" style="transition: 0.5s">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="fs-15 fw-600 lh-1-5">
                                                <a href="{{ route('project.details', $open_project->slug) }}" class="text-inherit">{{ $open_project->name }}</a>
                                            </h5>
                                            <ul class="list-inline opacity-70 fs-12">
                                                <li class="list-inline-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                                        <g id="Group_22132" data-name="Group 22132" transform="translate(-365 -1963)">
                                                          <path id="Subtraction_5" data-name="Subtraction 5" d="M-13,12a6.007,6.007,0,0,1-6-6,6.007,6.007,0,0,1,6-6A6.007,6.007,0,0,1-7,6,6.006,6.006,0,0,1-13,12Zm-.5-9V7h.013l2.109,2.109.707-.706L-12.5,6.572V3Z" transform="translate(384 1963)" fill="#989ea8"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ml-1">{{ Carbon\Carbon::parse($open_project->created_at)->diffForHumans() }} </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11">
                                                        <g id="Group_23" data-name="Group 23" transform="translate(-498 -1963)">
                                                        <path id="Subtraction_2" data-name="Subtraction 2" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1963)" fill="#989ea8"/>
                                                        <path id="Subtraction_4" data-name="Subtraction 4" d="M1.5,0h5a1.5,1.5,0,0,1,0,3h-5a1.5,1.5,0,0,1,0-3Z" transform="translate(498 1971)" fill="#989ea8"/>
                                                        <path id="Subtraction_3" data-name="Subtraction 3" d="M1.5,0h7a1.5,1.5,0,0,1,0,3h-7a1.5,1.5,0,0,1,0-3Z" transform="translate(500 1967)" fill="#989ea8"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ml-1">{{ $open_project->project_category->name }}</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7.643" height="12" viewBox="0 0 7.643 12">
                                                        <g id="Group_24" data-name="Group 24" transform="translate(-131 -59.8)">
                                                        <path id="Path_9" data-name="Path 9" d="M136.142,161.028,133.614,161A3.381,3.381,0,0,0,131,164.281v4.708a.92.92,0,0,0,.917.917h5.809a.92.92,0,0,0,.917-.917v-4.708A3.361,3.361,0,0,0,136.142,161.028Zm-1.321,4.488a1.122,1.122,0,0,1,.306,2.2v.248a.306.306,0,0,1-.611,0v-.248a1.123,1.123,0,0,1-.816-1.079.306.306,0,0,1,.611,0,.511.511,0,1,0,.511-.511,1.122,1.122,0,0,1-.306-2.2v-.183a.306.306,0,1,1,.611,0v.183a1.123,1.123,0,0,1,.816,1.079.306.306,0,1,1-.611,0,.511.511,0,1,0-.511.511Z" transform="translate(0 -98.106)" fill="#989ea8"/>
                                                        <path id="Path_10" data-name="Path 10" d="M219.424,124.641l.15-.52L217.1,124.1l.171.52Z" transform="translate(-83.468 -62.334)" fill="#989ea8"/>
                                                        <path id="Path_11" data-name="Path 11" d="M199.1,61.179l.4-1.379h-3.7l.449,1.351Z" transform="translate(-62.819)" fill="#989ea8"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ml-1">{{ $open_project->type }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="h5">{{ single_price($open_project->price) }}</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        @else

                            <div class="text-center">
                                {{ translate('No Open Project') }}
                            </div>

                        @endif

                    </div>
                </div>


                <div class="card rounded-2 border-gray-light">
                    <div class="card-header">
                        <h4 class="h6 fw-700 mb-0">{{ $client->name }}'s {{ translate('Reviews') }}</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">{{ translate('Showing') }} {{ getNumberOfReview($client->id) }} {{ translate('reviews') }}</p>

                        <div class="mb-4">
                            <ul class="list-group list-group-flush">
                                @foreach (\App\Models\Review::where('published', 1)->where('reviewed_user_id', $client->id)->get() as $key => $review)
                                    <li class="list-group-item px-0">
                                        <div class="media">
                                            <div class="mr-3">
                                                <span class="avatar avatar-md m-3">
                                                    <img src="{{ custom_asset(\App\Models\User::find($review->reviewer_user_id)->photo) }}">
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between align-items-start mb-3">
                                                    <div>
                                                        @if ($review->project != null)
                                                            <a href="{{ route('project.details', $review->project->slug) }}" class="text-reset hov-text-primary fw-600 fs-14 mb-1 lh-1-6">{{ $review->project->name }}</a>
                                                        @endif
                                                        <div class="">
                                                            <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                                {{ $review->rating }}
                                                            </span>
                                                            <span class="rating rating-sm">
                                                                {{ renderStarRating($review->rating) }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0 ml-4">
                                                        <span class="text-muted ml-2">{{ Carbon\Carbon::parse($review->created_at)->toFormattedDateString() }}</span>
                                                    </div>
                                                </div>
                                                <p class="font-italic">
                                                    "{{ $review->review }}"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xxl-3 col-lg-4">
                <div class="card rounded-2 border-gray-light">
                    <div class="card-body">

                        @if ($client->badges != null)
                        <div class="mb-5">
                            <h6 class="text-left mb-3 h6 fw-700"><span class="bg-white pr-3">{{ translate('Badges') }}</span></h6>
                            <div class="">
                                @foreach ($client->badges as $key => $user_badge)
                                    @if ($user_badge->badge != null)
                                        <span class="avatar avatar-square avatar-xxs" title="{{ $user_badge->badge->name }}"><img src="{{ custom_asset($user_badge->badge->icon) }}"></span>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <div class="mb-4">
                            <h6 class="text-left mb-3 h6 fw-700"><span class="bg-white pr-3">{{ translate('Verifications') }}</span></h6>
                            <div>
                                <ul class="list-unstyled">
                                    @php
                                        $verification = \App\Models\Verification::where('user_id', $client->id)->where('type', 'identity_verification')->first();
                                    @endphp
                                    @if ($verification == null || !$verification->verified)
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="las la-user text-secondary la-2x mr-2"></i>
                                            <span class="fs-13">{{ translate('Identity Verification') }}</span>
                                            <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                        </li>
                                    @else
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="las la-user text-success la-2x mr-2"></i>
                                            <span class="fs-13">{{ translate('Identity Verified') }}</span>
                                            <i class="las la-check text-success la-2x ml-auto"></i>
                                        </li>
                                    @endif
                                    @if ($client->email_verified_at == null)
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="las la-envelope text-secondary la-2x mr-2"></i>
                                            <span class="fs-13">{{ translate('Email Verification') }}</span>
                                            <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                        </li>
                                    @else
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="las la-envelope text-success la-2x mr-2"></i>
                                            <span class="fs-13">{{ translate('Email Verified') }}</span>
                                            <i class="las la-check text-success la-2x ml-auto"></i>
                                        </li>
                                    @endif
                                    {{-- <li class="d-flex align-items-center mb-3">
                                        <i class="lab la-facebook text-success la-2x mr-2"></i>
                                        <span class="fs-13">Facebook Connected</span>
                                        <i class="las la-check text-success la-2x ml-auto"></i>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="lab la-google text-secondary la-2x mr-2"></i>
                                        <span class="fs-13">Google Connected</span>
                                        <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="lab la-twitter text-secondary la-2x mr-2"></i>
                                        <span class="fs-13">Twitter Connected</span>
                                        <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="lab la-linkedin-in text-secondary la-2x mr-2"></i>
                                        <span class="fs-13">Linkedin Connected</span>
                                        <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>

                        <div class="">
                            <h6 class="text-left mb-3 h6 fw-700"><span class="bg-white pr-3">{{ translate('Share Profile') }}</span></h6>
                            <div class="aiz-share"></div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('modal')
    @include('frontend.default.partials.unfollow_modal')
@endsection
