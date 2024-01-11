@extends('frontend.default.layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.default.user.client.inc.sidebar')
            <div class="aiz-user-panel">
				@php
					$verification = \App\Models\Verification::where('user_id', Auth::user()->id)->where('type', 'identity_verification')->first();
				@endphp
				@if ($verification == null || !$verification->verified)
					<div class="alert alert-danger mb-3">
						{{ translate('Please verify your identity') }}. <a href="{{ route('user.profile') }}" class="alert-link">{{ translate('Verify Now') }}</a>
					</div>
				@endif
				@if (Auth::user()->email_verified_at == null)
					<div class="alert alert-danger mb-3">
						{{ translate('Please verify your Email') }}. <a href="{{ route('user.profile') }}" class="alert-link">{{ translate('Verify Now') }}</a>
					</div>
				@endif
				{{-- @if(Auth::user()->userPackage->package_invalid_at != null && Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse(Auth::user()->userPackage->package_invalid_at), false) < 8)
					<div class="alert alert-danger mb-3">
						{{ translate('Please renew/upgrade your package. Your current package will expire soon') }}. <a href="{{ route('select_package') }}" class="alert-link">{{ translate('Upgrade Now') }}</a>
					</div>
				@endif --}}
				<div class="">
					<div class="card p-4 rounded-2 bg-hov-soft-primary border-1 border-gray-light">
						<div class="row gutters-15">
							<div class="col-md-4">
								<div class="rounded-1 p-4 mb-4 d-flex flex-column justify-content-center" style="min-height: 116px;background: #bf1932;">
									<div class="text-white">{{ translate('This Month Expense') }}</div>
									<div class="h4 fw-700 text-white">{{ single_price(\App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereBetween('updated_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('amount')) }}</div>
								</div>
								<div class="rounded-1 p-4 bg-dark d-flex flex-column justify-content-center" style="min-height: 116px;background: #45b5aa;">
									<div class="text-white">{{ translate('Total Expense') }}</div>
									<div class="h4 fw-700 text-white">{{ single_price(\App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->sum('amount')) }}</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="mt-5 mt-md-0 ml-md-3">
									<canvas id="graph-1" class="w-100" height="250"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
            	<div class="row gutters-15">
            		<div class="col-md-4 d-flex">
            			<div class="card w-100 rounded-2 bg-hov-soft-primary border-1 border-gray-light">
            				<div class="card-body mt-3">
            					<a href="{{ route('post_project') }}" class="btn btn-primary btn-block rounded-1 py-3 mb-3">
									<i class="las la-plus fs-40"></i>
									<br>
									<span class="fw-700">{{ translate('Add New Job') }}</span>
								</a>
								<div class="mb-1">
									<small class="fs-12 text-secondary">{{ translate('Meet your need from our') }}</small>
								</div>
								<a href="{{ route('services.category', '') }}" class="text-primary fs-14 fw-700 d-flex align-items-center mb-3">
									<i class="la la-search fs-20 fw-900 mr-2" style="transform-origin: 0 50%; transform: rotate(-90deg) translate(-50%, 50%);"></i>
									<span>Services</span>
								</a>
								<div class="mb-1">
									<small class="fs-12 text-secondary">{{ translate('Find & Build your project with') }}</small>
								</div>
								<a href="{{ route('search') }}?type=freelancer" class="text-primary fs-14 fw-700 d-flex align-items-center mb-1">
									<i class="la la-search fs-20 fw-900 mr-2" style="transform-origin: 0 50%; transform: rotate(-90deg) translate(-50%, 50%);"></i>
									<span>{{ translate('Tradesmen') }}</span>
								</a>
            				</div>
            			</div>
            		</div>
					<div class="col-md-4 d-flex">
            			<div class="card w-100 rounded-2 border-gray-light">
            				<div class="card-body mt-3">
            					<div class="mb-4">
									<div class="row">
										<div class="col-8">
											<div class="fs-14">{{ translate('Total Projects') }}</div>
											<div class="h3 fs-24 fw-700">{{ count(Auth::user()->number_of_projects) }}</div>
										</div>
										<div class="col-4 d-flex justify-content-end align-items-center">
											<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
												<g id="Group_22127" data-name="Group 22127" transform="translate(-4 -3.053)">
												  <path id="Path_25837" data-name="Path 25837" d="M10,5.054V35.022h6.546V5.054Z" transform="translate(13.637 4.029)" fill="#e2583e" fill-rule="evenodd"/>
												  <path id="Path_25838" data-name="Path 25838" d="M7,8.027V29.039h6.546V8.027Z" transform="translate(6.818 10.014)" fill="#f17f53" fill-rule="evenodd"/>
												  <path id="Path_25839" data-name="Path 25839" d="M4,11.054V22.942h6.546V11.054Z" transform="translate(0 16.109)" fill="#f8b84e" fill-rule="evenodd"/>
												  <path id="Path_25840" data-name="Path 25840" d="M13,3.053h6.545v36H13Z" transform="translate(20.455 0)" fill="#45b5aa" fill-rule="evenodd"/>
												</g>
											</svg>
										</div>
									</div>
								</div>
								<div class="mb-4">
									<div class="row">
										<div class="col-8">
											<div class="fs-14">{{ translate('Completed Project') }}</div>
											@php
												$completedProjects = 0;
												foreach (Auth::user()->number_of_projects as $key => $project) {
													if ($project->closed) {
														$completedProjects++;
													}
												}
											@endphp
											<div class="h3 fs-24 fw-700">{{ $completedProjects }}</div>
										</div>
										<div class="col-4 d-flex justify-content-end align-items-center">
											<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
												<g id="Group_22129" data-name="Group 22129" transform="translate(-4 -3.053)">
												  <path id="Path_25837" data-name="Path 25837" d="M10,5.054V35.021h6.545V5.054Z" transform="translate(13.636 4.029)" fill="#45b5aa" fill-rule="evenodd"/>
												  <path id="Path_25838" data-name="Path 25838" d="M7,8.027V29.039h6.545V8.027Z" transform="translate(6.818 10.014)" fill="#45b5aa" fill-rule="evenodd"/>
												  <path id="Path_25839" data-name="Path 25839" d="M4,11.054V22.942h6.545V11.054Z" transform="translate(0 16.108)" fill="#45b5aa" fill-rule="evenodd"/>
												  <path id="Path_25840" data-name="Path 25840" d="M13,3.053h6.545v36H13Z" transform="translate(20.455 0)" fill="#45b5aa" fill-rule="evenodd"/>
												</g>
											</svg>
										</div>
									</div>
								</div>
								<div class="">
									<div class="row">
										<div class="col-8">
											<div class="fs-14">{{ translate('Running Project') }}</div>
											@php
												$onGoingProjects = 0;
												foreach (Auth::user()->number_of_projects as $key => $project) {
													if (!$project->closed && \App\Models\ProjectUser::where('project_id', $project->id)->first() != null) {
														$onGoingProjects++;
													}
												}
											@endphp
											<div class="h3 fs-24 fw-700">{{ $onGoingProjects }}</div>
										</div>
										<div class="col-4 d-flex justify-content-end align-items-center">
											<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
												<g id="Group_22130" data-name="Group 22130" transform="translate(-1184 -673)">
												  <g id="Group_22128" data-name="Group 22128" transform="translate(1184 685)">
													<path id="Path_25837" data-name="Path 25837" d="M10,5.054V23.972h6.545V5.054Z" transform="translate(9.636 0.026)" fill="#e2583e" fill-rule="evenodd"/>
													<path id="Path_25838" data-name="Path 25838" d="M7,8.027v11.2h6.545V8.027Z" transform="translate(2.818 4.77)" fill="#f17f53" fill-rule="evenodd"/>
													<path id="Path_25839" data-name="Path 25839" d="M4,11.054V24.892h6.545V11.054Z" transform="translate(-4 -0.895)" fill="#f8b84e" fill-rule="evenodd"/>
													<path id="Path_25840" data-name="Path 25840" d="M13,3.053h6.545v24H13Z" transform="translate(16.455 -3.053)" fill="#f8b84e" fill-rule="evenodd"/>
												  </g>
												  <path id="Path_25841" data-name="Path 25841" d="M33.723,3.5a.948.948,0,1,0,.04,1.895h1.514l-9.493,9.474H20.5a.947.947,0,0,0-.815.455l-5.059,8.432-2.937-2.918a.891.891,0,0,0-.663-.284H3.447a.947.947,0,0,0,0,1.895h7.181l3.524,3.505a.891.891,0,0,0,.663.284h.114a.985.985,0,0,0,.7-.455l5.4-9.019h5.154a.891.891,0,0,0,.663-.284l9.758-9.758V8.237a.947.947,0,0,0,1.895,0V4.447a.947.947,0,0,0-.947-.947H33.723Z" transform="translate(1181.5 669.5)" fill="#303744"/>
												</g>
											</svg>
										</div>
									</div>
								</div>
            				</div>
            			</div>
            		</div>
            		<div class="col-md-4 d-flex">
            			<div class="card w-100 px-4 rounded-2 border-gray-light">
            				<div class="card-body">
            					<canvas id="pie-1" class="w-100" height="250"></canvas>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="row gutters-15">
	            	<div class="col-md-6">
	            		<div class="card rounded-2 border-gray-light">
	            			<div class="card-header border-0">
	            				<h6 class="mb-0 fs-16 fw-700">{{ translate('Running Projects') }}</h6>
	            			</div>
	            			<div class="card-body px-0 pt-0">
								<div class="aiz-auto-scroll c-scrollbar-light px-4" style="height: 340px; overflow-y: scroll;">
									<ul class="list-group list-group-flush">
										@foreach (Auth::user()->number_of_projects as $key => $project)
											@if(!$project->closed && \App\Models\ProjectUser::where('project_id', $project->id)->first() != null)
												<li class="list-group-item px-0">
													<a href="{{ route('project.details', $project->slug) }}" class="text-inherit d-flex align-items-center">
														<span class="avatar avatar-sm flex-shrink-0 bg-soft-primary mr-3">
															@if($project->client->photo != null)
																<img src="{{ custom_asset($project->client->photo) }}">
															@else
																<img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
															@endif
														</span>
														<span class="flex-grow-1 text-truncate-2">{{ $project->name }}</span>
													</a>
												</li>
											@endif
										@endforeach
									</ul>
								</div>
							</div>
	            		</div>
	            	</div>
	            	<div class="col-md-6">
	            		<div class="card rounded-2 border-gray-light">
	            			<div class="card-header border-0">
	            				<h6 class="mb-0 fs-16 fw-700">{{ translate('Suggested Tradesman') }}</h6>
	            			</div>
	            			<div class="card-body px-0 pt-0">
	            				<div class="aiz-auto-scroll c-scrollbar-light px-4" style="height: 340px; overflow-y: scroll;">
		            				<ul class="list-group list-group-flush">
		            					@foreach (\App\Models\User::where('user_type', 'freelancer')->inRandomOrder()->limit(10)->get(); as $key => $user)
										
											<li class="list-group-item border-0 px-0">
												<a href="{{ route('freelancer.details', $user->user_name) }}" class="text-inherit d-flex align-items-center">
													<span class="avatar avatar-sm flex-shrink-0 bg-soft-primary mr-3">
														@if($user->photo != null)
															<img src="{{ custom_asset($user->photo) }}">
														@else
															<img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
														@endif
													</span>
													<span class="flex-grow-1 text-truncate-2">{{ $user->name }}</span>
													<span class="flex-shrink-0 ml-3">
														<span class="d-block opacity-50 fs-10">{{ translate('Hourly Rate') }}</span>
														<span class="fs-15">{{ single_price($user->profile->hourly_rate) }}</span>
													</span>
												</a>
											</li>
                                        @endforeach
		            				</ul>
	            				</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            	<div class="row gutters-15">
            		<div class="col-md-4 d-flex">
            			<div class="card rounded-2 border-gray-light w-100">
                            <div class="card-header border-0">
                                <h6 class="mb-0 fs-16 fw-700">{{ translate('Current Package') }}</h6>
                            </div>
            				{{-- <div class="card-body pt-3">
            					<img src="{{ custom_asset(Auth::user()->userPackage->package->badge) }}" class="img-fluid mb-4 h-70px">
            					<h4 class="fw-700 mb-3 text-primary fs-21">{{ Auth::user()->userPackage->package->name }}</h4>
            					<p class="mb-1 fs-13 pb-2">{{ translate('Remaining Fixed Projects') }} - <strong>{{ Auth::user()->userPackage->fixed_limit }}</strong></p>
            					<p class="mb-4 fs-13">{{ translate('Remaining Long Term Projects') }} - <strong>{{ Auth::user()->userPackage->long_term_limit }}</strong></p>
            					<a href="{{ route('select_package') }}" class="btn btn-block btn-primary d-inline-block py-3 rounded-1">{{ translate('Upgrade/ Extend') }}</a>
            				</div> --}}
            			</div>
            		</div>
            		<div class="col-md-4 d-flex">
            			<div class="card rounded-2 border-gray-light w-100">
                            <div class="card-header border-0">
                                <h6 class="mb-0 fs-16 fw-700">{{ translate('Current Package Summary') }}</h6>
                            </div>
            				{{-- <div class="card-body pt-0">
            					<ul class="list-unstyled mb-0">
            						<li class="py-2">
                                        @if(Auth::user()->userPackage->package->fixed_limit > 0)
                                            <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                								<i class="las la-check text-white"></i>
                							</span>
                                        @else
                                            <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                                <i class="las la-times text-white"></i>
                                            </span>
                                        @endif
            							<span>{{ translate('Fixed Projects') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->fixed_limit }}</span></span>
            						</li>
            						<li class=" py-2">
                                        @if(Auth::user()->userPackage->package->long_term_limit > 0)
                                            <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                								<i class="las la-check text-white"></i>
                							</span>
                                        @else
                                            <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                                <i class="las la-times text-white"></i>
                                            </span>
                                        @endif
            							<span>{{ translate('Long Term Projects') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->long_term_limit }}</span></span>
            						</li>
                                    <li class=" py-2">
                                        @if(Auth::user()->userPackage->package->bio_text_limit > 0)
                                            <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                                                <i class="las la-check text-white"></i>
                                            </span>
                                        @else
                                            <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                                <i class="las la-times text-white"></i>
                                            </span>
                                        @endif
                                        <span>{{ translate('Bio Word Limit') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->bio_text_limit }}</span></span>
                                    </li>
                                    <li class=" py-2">
                                        @if (Auth::user()->userPackage->package->following_status)
                                            <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                                                <i class="las la-check text-white"></i>
                                            </span>
                                        @else
                                            <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                                <i class="las la-times text-white"></i>
                                            </span>
                                        @endif
                                        <span>{{ translate('Tradesman Bookmark option') }}</span>
                                    </li>
            					</ul>
            				</div> --}}
            			</div>
            		</div>
                    {{-- <div class="col-md-4 d-flex">
                        <div class="card overflow-hidden rounded-2 border-gray-light w-100">
                            <div class="card-header border-0">
                                <h6 class="mb-0 fs-16 fw-700">{{ translate('Suggested Package') }}</h6>
                            </div>
                            <div class="card-body c-scrollbar-light pt-3" style="max-height: 320px;overflow-y: scroll;">
                                <ul class="list-group">
                                    @foreach (\App\Models\Package::client()->active()->get()->except(Auth::user()->profile->package_id) as $key => $package)
                                        <li class="list-group-item mb-3 rounded-1 bg-hov-soft-primary">
                                            <a href="{{ route('select_package') }}" class="d-flex align-items-center text-inherit">
                                                <img src="{{ custom_asset($package->badge) }}" class="img-fluid mr-4 h-60px">
                                                <span class="">
                                                    <h4 class="h6 mb-0 fs-14 fw-700">{{ $package->name }}</h4>
                                                    <span class="fs-14 fw-700 text-primary">{{ single_price($package->price) }}</span>
                                                    <span class="fs-13 text-secondary">/{{ $package->number_of_days }} {{ translate('days') }}</span>
                                                </span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div> --}}
            	</div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script type="text/javascript">
    AIZ.plugins.chart('#pie-1',{
    	type: 'doughnut',
        data: {
            labels: [
				"{{ translate('Total Project') }}",
				"{{ translate('Completed Project') }}",
				"{{ translate('Running Project') }}",
            ],
            datasets: [
                {
                    data: [{{ count(Auth::user()->number_of_projects) }}, {{ $completedProjects }}, {{ $onGoingProjects }}],
                    backgroundColor: [
                        "#f8b84e",
                        "#45b5aa",
                        "#e2583e",
                    ]
                }
            ]
        },
        options: {
        	cutoutPercentage: 70,
        	legend: {
	            labels: {
	                fontFamily: 'Montserrat',
	                boxWidth: 10,
	                usePointStyle: true
	            },
	            onClick: function () {
	            	return '';
	            },
	            position: 'bottom'
	        }
	    }
    });
    AIZ.plugins.chart('#graph-1',{
    	type: 'line',
        data: {
            labels: [
				"{{ translate('JAN') }}",
                "{{ translate('FEB') }}",
                "{{ translate('MAR') }}",
                "{{ translate('APR') }}",
                "{{ translate('MAY') }}",
                "{{ translate('JUN') }}",
                "{{ translate('JUL') }}",
                "{{ translate('AUG') }}",
                "{{ translate('SEP') }}",
                "{{ translate('OCT') }}",
                "{{ translate('NOV') }}",
                "{{ translate('DEC') }}"
			],
            datasets: [
                {
                	fill: true,
                	borderColor: '#377dff',
                	backgroundColor: 'rgba(55, 125, 255,.1)',
                	label: '{{ translate('Expense') }}',
                    data: [ {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '01')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '02')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '03')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '04')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '05')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '06')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '07')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '08')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '09')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', date('Y'))->sum('amount') }}
                    ],

                }
            ]
        },
        options: {
        	legend:{
	            display: false
        	},
		    scales: {
	            yAxes: [{
	            	gridLines: {
				        color: '#f2f3f8',
				        zeroLineColor: '#f2f3f8'
				    },
	                ticks: {
	                    fontColor: "#8b8b8b",
	                	fontFamily: 'Montserrat',
                		fontSize: 10
	                }
	            }],
	            xAxes: [{
	            	gridLines: {
				        color: '#f2f3f8'
				    },
	                ticks: {
	                    fontColor: "#8b8b8b",
	                	fontFamily: 'Montserrat',
                		fontSize: 10
	                }
	            }]
	        }
	    }
    });
</script>
@endsection
