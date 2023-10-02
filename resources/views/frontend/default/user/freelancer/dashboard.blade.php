@extends('frontend.default.layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.default.user.freelancer.inc.sidebar')
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
				@if(Auth::user()->userPackage->package_invalid_at != null && Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse(Auth::user()->userPackage->package_invalid_at), false) < 8)
					<div class="alert alert-danger mb-3">
						{{ translate('Please renew/upgrade your package. Your current package will expire soon') }}. <a href="{{ route('select_package') }}" class="alert-link">{{ translate('Upgrade Now') }}</a>
					</div>
				@endif
            	<div class="row gutters-15">
					<div class="col-md-4">
            			<div class="bg-primary text-white mb-4 overflow-hidden rounded-2 d-flex flex-column justify-content-between">
            				<div class="px-4 pt-4">
	        					<div class="fs-14">{{ translate('Balance') }}</div>
	        					<div class="h3 fw-700">{{ single_price(Auth::user()->profile->balance) }}</div>
            				</div>
							<div class="text-right px-4 pb-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="109.746" height="106.086" viewBox="0 0 109.746 106.086">
									<path id="Path_25869" data-name="Path 25869" d="M85,68.98a9.079,9.079,0,0,1-9.13,9.026H10.13A9.079,9.079,0,0,1,1,68.98V16.631A7.263,7.263,0,0,1,8.3,9.411H45.138l14.789-5.3a1.814,1.814,0,0,1,2.315,1.063L63.8,9.411h6.59a7.263,7.263,0,0,1,7.3,7.221v3.61A7.263,7.263,0,0,1,85,27.462ZM8.3,13.021a3.611,3.611,0,1,0,0,7.221H14.94c.024-.009.038-.029.062-.038l20.054-7.183Zm53.1.327L59.464,8.069h0L55.717,9.411h.005l-10.069,3.61h-.018L25.477,20.241H63.938L61.4,13.348Zm12.64,3.284a3.631,3.631,0,0,0-3.652-3.61H65.127l2.655,7.221h6.262ZM77.7,23.852H8.3a7.286,7.286,0,0,1-3.652-1V68.98A5.447,5.447,0,0,0,10.13,74.4H75.87a5.447,5.447,0,0,0,5.478-5.415V56.344h-7.3a7.221,7.221,0,1,1,0-14.441h7.3V27.462A3.631,3.631,0,0,0,77.7,23.852Zm3.652,28.882V45.513h-7.3a3.611,3.611,0,1,0,0,7.221Zm-7.3-5.415H77.7v3.61H74.043Z" transform="translate(-2.869 39.031) rotate(-30)" fill="#fff" fill-rule="evenodd" opacity="0.5"/>
								</svg>
							</div>
							  
							<div class="mb-4 px-4">
								<a href="http://localhost/workdesk/logout" class="btn btn-block btn-soft-primary-light rounded-1 py-3 fs-14 fw-700">{{ translate('Logout') }}</a>
							</div>
            			</div>
            		</div>
            		<div class="col-md-4 d-flex flex-column justify-content-between">
						<div class="bg-transparent mb-4 overflow-hidden rounded-2" style="border: 2px solid #45b5aa; min-height:130px;">
							<div class="px-4 pt-4">
								<div class="row">
									<div class="col-7">
										<div class="fs-14">{{ translate('Completed Projects') }}</div>
										@php
											$completedProjects = 0;
											foreach (Auth::user()->bids as $key => $projectUser) {
												if($projectUser->project != null && $projectUser->project->closed){
													$completedProjects++;
												}
											}
										@endphp
										<div class="h3 fw-700">{{ $completedProjects }}</div>
									</div>
									<div class="col-5 d-flex justify-content-end align-items-center">
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
						</div>
						<div class="bg-transparent mb-4 overflow-hidden rounded-2" style="border: 2px solid #e2583e; min-height:130px;">
							<div class="px-4 pt-4">
								<div class="row">
									<div class="col-7">
										<div class="fs-14">{{ translate('Running Projects') }}</div>
										@php
											$onGoingProjects = 0;
											foreach (Auth::user()->projectUsers as $key => $projectUser) {
												if($projectUser->project != null && !$projectUser->project->closed){
													$onGoingProjects++;
												}
											}
										@endphp
										<div class="h3 fw-700">{{ $onGoingProjects }}</div>
									</div>
									<div class="col-5 d-flex justify-content-end align-items-center">
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
            		<div class="col-md-4">
            			<div class="card rounded-2 border-gray-light">
            				<div class="card-body">
            					<canvas id="pie-1" class="w-100" height="250"></canvas>
            				</div>
            			</div>
            		</div>
            	</div>
				<div class="">
					<div class="card p-4 rounded-2 bg-hov-soft-primary border-1 border-gray-light">
						<div class="row gutters-15">
							<div class="col-md-4">
								<div class="rounded-1 p-4 mb-4 d-flex flex-column justify-content-center" style="min-height: 116px;background: #45b5aa;">
									<div class="text-white">{{ translate('This Month Earnings') }}</div>
									<div class="h4 fw-700 text-white">{{ single_price(\App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereBetween('updated_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('freelancer_profit')) }}</div>
								</div>
								<div class="rounded-1 p-4 bg-dark d-flex flex-column justify-content-center" style="min-height: 116px;background: #45b5aa;">
									<div class="text-white">{{ translate('Total Earnings') }}</div>
									<div class="h4 fw-700 text-white">{{ single_price(\App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->sum('freelancer_profit')) }}</div>
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
            		<div class="col-md-4 mb-4">
            			<a href="{{ route('service.freelancer_index') }}" class="btn btn-block btn-primary rounded-1 py-4">{{ translate('My Services') }}</a>
            		</div>
            		<div class="col-md-4 mb-4">
            			<a href="{{ route('user.profile') }}" class="btn btn-block btn-primary rounded-1 py-4">{{ translate('Profile Settings') }}</a>
            		</div>
            		<div class="col-md-4 mb-4">
            			<a href="{{ route('sent-milestone-requests.all') }}" class="btn btn-block btn-primary rounded-1 py-4">{{ translate('Milestone Requests') }}</a>
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
										@foreach (Auth::user()->projectUsers as $key => $projectUser)
											@if($projectUser->project != null && !$projectUser->project->closed)
												<li class="list-group-item border-0 px-0">
													<a href="{{ route('project.details', $projectUser->project->slug) }}" class="text-inherit d-flex align-items-center">
														<span class="avatar avatar-sm flex-shrink-0 bg-soft-primary mr-3">
															@if($projectUser->project->client->photo != null)
																<img src="{{ custom_asset($projectUser->project->client->photo) }}">
															@else
																<img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
															@endif
														</span>
														<span class="flex-grow-1 text-truncate-2">{{ $projectUser->project->name }}</span>
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
	            				<h6 class="mb-0 fs-16 fw-700">{{ translate('Suggested Projects') }}</h6>
	            			</div>
	            			<div class="card-body px-0 pt-0">
	            				<div class="aiz-auto-scroll c-scrollbar-light px-4" style="height: 340px;overflow-y: scroll;">
		            				<ul class="list-group list-group-flush">
		            					@foreach (\App\Models\Project::biddable()->notcancel()->open()->where('private', '0')->latest()->get()->take(10) as $key => $project)
                                            <li class="list-group-item border-0 px-0">
    		            						<a href="{{ route('project.details', $project->slug) }}" class="text-inherit d-flex align-items-center">
    	            								<span class="avatar avatar-sm flex-shrink-0 bg-soft-primary mr-3">
                                                        @if($project->client->photo != null)
                                                            <img src="{{ custom_asset($project->client->photo) }}">
                                                        @else
                                                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                                                        @endif
    		                                        </span>
    			            						<span class="flex-grow-1 text-truncate-2">{{ $project->name }}</span>
    			            						<span class="flex-shrink-0 ml-3">
    			            							<span class="d-block opacity-50 fs-10">{{ translate('Budget') }}</span>
    			            							<span class="fs-15">{{ single_price($project->price) }}</span>
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
            				<div class="card-body pt-3">
            					<img src="{{ custom_asset(Auth::user()->userPackage->package->badge) }}" class="img-fluid mb-4 h-70px">
            					<h4 class="fw-700 mb-3 text-primary fs-21">{{ Auth::user()->userPackage->package->name }}</h4>
            					<p class="mb-1 fs-13 pb-2">{{ translate('Remaining Fixed Projects bids') }} - <strong>{{ Auth::user()->userPackage->fixed_limit }}</strong></p>
                                <p class="mb-1 fs-13 pb-2">{{ translate('Remaining Long Term Projects bids') }} - <strong>{{ Auth::user()->userPackage->long_term_limit }}</strong></p>
            					<p class="mb-4 fs-13">{{ translate('Remaining Service') }} - <strong>{{ Auth::user()->userPackage->service_limit }}</strong></p>
            					<a href="{{ route('select_package') }}" class="btn btn-block btn-primary d-inline-block py-3 rounded-1">{{ translate('Upgrade/ Extend') }}</a>
            				</div>
            			</div>
            		</div>
            		<div class="col-md-4 d-flex">
            			<div class="card rounded-2 border-gray-light w-100">
							<div class="card-header border-0">
								<h6 class="mb-0 fs-16 fw-700">{{ translate('Current Package Summary') }}</h6>
							</div>
            				<div class="card-body pt-0">
            					<ul class="list-unstyled mb-0">
            						<li class=" py-2">
                                      @if(Auth::user()->userPackage->package->fixed_limit > 0)
                                          <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                								<i class="las la-check text-white"></i>
                							</span>
                                          @else
                                              <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                                  <i class="las la-times text-white"></i>
                                              </span>
                                          @endif
            							<span>{{ translate('Fixed Projects bids') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->fixed_limit }}</span></span>
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
				                       <span>{{ translate('Long Term Projects bids') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->long_term_limit }}</span></span>
            						</li>
            						<li class=" py-2">
                                          @if(Auth::user()->userPackage->package->skill_add_limit > 0)
                                              <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                    								<i class="las la-check text-white"></i>
    				                          </span>
                                          @else
                                              <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                                  <i class="las la-times text-white"></i>
                                              </span>
                                          @endif
            							<span>{{ translate('Skill Adding Limit') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->skill_add_limit }}</span></span>
            						</li>
            						<li class=" py-2">
                                          @if(Auth::user()->userPackage->package->portfolio_add_limit > 0)
                                              <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                    								<i class="las la-check text-white"></i>
    					                      </span>
                                          @else
                                              <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                                  <i class="las la-times text-white"></i>
                                              </span>
                                          @endif
            							<span>{{ translate('Portfolio Adding Limit') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->portfolio_add_limit }}</span></span>
            						</li>
            						<li class=" py-2">
                                          @if(Auth::user()->userPackage->package->bookmark_project_limit > 0)
                                          <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                								<i class="las la-check text-white"></i>
                						  </span>
                                          @else
                                              <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                                  <i class="las la-times text-white"></i>
                                              </span>
                                          @endif
            							<span>{{ translate('Project Bookmark Limit') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->bookmark_project_limit }}</span></span>
            						</li>
            						<li class=" py-2">
                                      @if(Auth::user()->userPackage->package->job_exp_limit > 0)
                                          <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
            								<i class="las la-check text-white"></i>
					                      </span>
                                      @else
                                          <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                              <i class="las la-times text-white"></i>
                                          </span>
                                      @endif
            					      <span>{{ translate('Job Experience Add Limit') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->job_exp_limit }}</span></span>
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
                                        @if(Auth::user()->userPackage->package->service_limit > 0)
                                            <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                                                <i class="las la-check text-white"></i>
                                            </span>
                                        @else
                                            <span class="mr-2 badge badge-circle badge-danger badge-sm align-middle">
                                                <i class="las la-times text-white"></i>
                                            </span>
                                        @endif
                                        <span>{{ translate('Service Limit') }} - <span class="fw-700">{{ Auth::user()->userPackage->package->service_limit }}</span></span>
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
	                                    <span>{{ translate('Client Following option') }}</span>
            						</li>
            					</ul>
            				</div>
            			</div>
            		</div>
                    <div class="col-md-4 d-flex">
                        <div class="card overflow-hidden rounded-2 border-gray-light w-100">
                            <div class="card-header border-0">
                                <h6 class="mb-0 fs-16 fw-700">{{ translate('Suggested Package') }}</h6>
                            </div>
                            <div class="card-body c-scrollbar-light pt-3" style="max-height: 320px;overflow-y: scroll;">
                                <ul class="list-group">
                                    @foreach (\App\Models\Package::freelancer()->active()->get()->except(Auth::user()->profile->package_id) as $key => $package)
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
                    </div>
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
				"{{ translate('Bidded Project') }}",
				"{{ translate('Completed Project') }}",
				"{{ translate('Running Project') }}",
            ],
            datasets: [
                {
                    data: [{{ Auth::user()->bids->count() }}, {{ $completedProjects }}, {{ $onGoingProjects }}],
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
                	label: '{{translate('Earnings')}}',
                    data: [
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '01')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '02')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '03')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '04')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '05')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '06')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '07')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '08')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '09')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }},
                            {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('freelancer_user_id', Auth::user()->id)->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', date('Y'))->sum('freelancer_profit') }}
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
