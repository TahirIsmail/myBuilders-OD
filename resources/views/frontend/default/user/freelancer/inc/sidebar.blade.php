<div class="aiz-user-sidenav-wrap pt-4 sticky-top c-scrollbar-light position-relative z-1 rounded-2 border-gray-light">
    <div class="absolute-top-left d-xl-none">
        <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav"
            data-same=".mobile-side-nav-thumb">
            <i class="las la-times la-2x"></i>
        </button>
    </div>
    <div class="aiz-user-sidenav rounded overflow-hidden">
        <!-- User Info -->
        <div class="px-4 text-center mb-4">
            <span class="avatar avatar-md mb-3">
                <a href="{{ route('freelancer.details', Auth::user()->user_name) }}">
                    @if (Auth::user()->photo != null)
                        <img src="{{ custom_asset(Auth::user()->photo) }}">
                    @else
                        <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                    @endif
                </a>
                @if (Cache::has('user-is-online-' . Auth::user()->id))
                    <span class="badge badge-dot badge-success badge-circle badge-status"></span>
                @else
                    <span class="badge badge-dot badge-secondary badge-circle badge-status"></span>
                @endif
            </span>
            <h4 class="h5 text-dark">
                <a href="{{ route('freelancer.details', Auth::user()->user_name) }}"
                    class="text-reset hov-text-primary fs-16 fw-700">{{ Auth::user()->name }}</a>
            </h4>
            <h6 class="h5 fs-12 text-secondary">{{ Auth::user()->email }}</h6>
            <div class="text-center my-3">
                @foreach (Auth::user()->badges as $key => $user_badge)
                    @if ($user_badge->badge != null)
                        <span class="avatar avatar-square avatar-xxs mr-1" title="{{ $user_badge->badge->name }}"><img
                                src="{{ custom_asset($user_badge->badge->icon) }}"></span>
                    @endif
                @endforeach
            </div>
            <div>
                <span class="rating rating-sm rating-mr-1">
                    {{ renderStarRating(getAverageRating(Auth::user()->id)) }}
                </span>
            </div>
            <div class="mb-1">
                @php
                    $profile = \App\Models\UserProfile::where('user_id', Auth::user()->id)->first();
                @endphp
                <span class="fw-600">
                    {{ formatRating(getAverageRating(Auth::user()->id)) }}
                </span>
                <span>
                    ({{ getNumberOfReview(Auth::user()->id) }} {{ translate('Reviews') }})
                </span>
            </div>
        </div>

        <!-- User Menus -->
        <div class="sidemnenu mb-3 px-3">
            <ul class="aiz-side-nav-list" data-toggle="aiz-side-menu">
                <!-- Dashboard -->
                <li class="aiz-side-nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['dashboard']) }}">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path id="Path_25816" data-name="Path 25816" d="M3.667,9.667h4A.669.669,0,0,0,8.333,9V3.667A.669.669,0,0,0,7.667,3h-4A.669.669,0,0,0,3,3.667V9A.669.669,0,0,0,3.667,9.667Zm0,5.333h4a.669.669,0,0,0,.667-.667V11.667A.669.669,0,0,0,7.667,11h-4A.669.669,0,0,0,3,11.667v2.667A.669.669,0,0,0,3.667,15Zm6.667,0h4A.669.669,0,0,0,15,14.333V9a.669.669,0,0,0-.667-.667h-4A.669.669,0,0,0,9.667,9v5.333A.669.669,0,0,0,10.333,15ZM9.667,3.667V6.333A.669.669,0,0,0,10.333,7h4A.669.669,0,0,0,15,6.333V3.667A.669.669,0,0,0,14.333,3h-4A.669.669,0,0,0,9.667,3.667Z" transform="translate(-3 -3)" fill="#989ea8"/>
                        </svg> --}}
                        <img src="{{ asset('public\assets\frontend\default\img\icons\dashboard.png') }}"
                            style="width:20px" ;height="20px" />
                        <span class="aiz-side-nav-text ml-2">{{ translate('Dashboard') }}</span>
                    </a>
                </li>
                @php
					$verification = \App\Models\Verification::where('user_id', Auth::user()->id)->where('type', 'identity_verification')->first();
				@endphp
                @if($verification !== null && $verification->verified)
                    
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                        {{-- <i class="las la-file-alt aiz-side-nav-icon"></i> --}}
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="11.998" height="12" viewBox="0 0 11.998 12">
                            <path id="Subtraction_161" data-name="Subtraction 161" d="M3640.751,9220h-7.5a2.251,2.251,0,0,1-2.249-2.249v-7.5a2.251,2.251,0,0,1,2.249-2.249h7.5a2.25,2.25,0,0,1,2.247,2.249v7.5A2.25,2.25,0,0,1,3640.751,9220Zm-3-3.751a.751.751,0,0,0,0,1.5h3a.751.751,0,0,0,0-1.5Zm1.5-3.748a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,3639.25,9212.5Zm-6-3.6a1.351,1.351,0,0,0-1.351,1.349v.711h10.2v-.711a1.331,1.331,0,0,0-.4-.953,1.352,1.352,0,0,0-.953-.4Z" transform="translate(-3631 -9207.999)" fill="#989ea8"/>
                        </svg> --}}
                        <img src="{{ asset('public\assets\frontend\default\img\icons\flash.png') }}" style="width:20px"
                            ;height="20px" />
                        <span class="aiz-side-nav-text ml-2">{{ translate('Leads') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">

                            <a href="{{ route('freelancer_Leads') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['freelancer_Leads']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('New leads') }}</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">



                            <a href="{{ route('freelancer_Interested_leads') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['freelancer_Interested_leads']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Interested leads') }} </span>
                            </a>

                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('freelancer_Shortlisted_leads') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['freelancer_Shortlisted_leads']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Shortlisted') }}</span>
                            </a>
                        </li>
                        {{-- <li class="aiz-side-nav-item">
                            <a href="{{ route('client.services.cancel.requests') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['client.services.cancel.requests']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Jobs won') }}</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>

                @if(Auth::user()->trading_info->operating_as != "selfEmployed")
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                       
                        <img src="{{ asset('public\assets\frontend\default\img\icons\flash.png') }}" style="width:20px"
                            ;height="20px" />
                        <span class="aiz-side-nav-text ml-2">{{ translate('Employ a TradeWorker') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">

                            <a href="{{ route('job-post-advert') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['job-post-advert']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Post Job Advertisement') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">

                            <a href="{{ route('company-profile') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['company-profile']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Company Profile') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                       
                        <img src="{{ asset('public\assets\frontend\default\img\icons\flash.png') }}" style="width:20px"
                            ;height="20px" />
                        <span class="aiz-side-nav-text ml-2">{{ translate('Trade Career') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">

                            <a href="{{ route('freelancer_all_jobs') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['freelancer_all_jobs']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('All Jobs') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">

                            <a href=""
                                class="aiz-side-nav-link">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Applied Jobs') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>


                @endif
                @endif


                @if (Auth::user()->userPackage != null && Auth::user()->userPackage->following_status)
                    <!-- Following Clients -->
                    {{-- <li class="aiz-side-nav-item">
                        <a href="{{ route('bookmarked-clients.index') }}"
                            class="aiz-side-nav-link d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.175"
                                viewBox="0 0 12 12.175">
                                <path id="Subtraction_177" data-name="Subtraction 177"
                                    d="M5744,5606.175a2,2,0,0,1-.9-.225l-4-2.1a1.981,1.981,0,0,1-1.1-1.8v-6.1a.994.994,0,0,1,.932-1.045.848.848,0,0,1,.269.044,6.121,6.121,0,0,0,1.4.1,5.515,5.515,0,0,0,3-.9.906.906,0,0,1,1,0,5.085,5.085,0,0,0,3,.9,4.845,4.845,0,0,0,1.2-.1.963.963,0,0,1,.154-.013,1.057,1.057,0,0,1,1.045,1.014v6.2a1.9,1.9,0,0,1-1.1,1.8l-4,2A2.008,2.008,0,0,1,5744,5606.175Zm-2-5.175a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm2-4a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,5744,5597Z"
                                    transform="translate(-5738 -5594)" fill="#989ea8" />
                            </svg>
                            <span class="aiz-side-nav-text ml-2">{{ translate('Following Clients') }}</span>
                        </a>
                    </li> --}}
                @endif
                @php
                    $unseen_chat_threads = chat_threads();
                    $unseen_chat_thread_count = count($unseen_chat_threads);
                @endphp
                <!-- Message -->
                {{-- <li class="aiz-side-nav-item">
                    <a href="{{ route('all.messages') }}"
                        class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['all.messages', 'chat_view']) }}"> --}}
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                        <g id="Layer_2" data-name="Layer 2" transform="translate(-2 -3)">
                          <path id="message-square" d="M12.2,3H3.8A1.8,1.8,0,0,0,2,4.8v9.6a.6.6,0,0,0,.906.516L5.6,12.684a.6.6,0,0,1,.33-.084H12.2A1.8,1.8,0,0,0,14,10.8v-6A1.8,1.8,0,0,0,12.2,3ZM5.6,8.4a.6.6,0,1,1,.6-.6A.6.6,0,0,1,5.6,8.4ZM8,8.4a.6.6,0,1,1,.6-.6A.6.6,0,0,1,8,8.4Zm2.4,0a.6.6,0,1,1,.6-.6A.6.6,0,0,1,10.4,8.4Z" fill="#989ea8"/>
                        </g>
                    </svg> --}}
                {{-- <img src="{{ asset('public\assets\frontend\default\img\icons\chat.png') }}" style="width:25px"
                            ;height="25px" />
                        <span class="aiz-side-nav-text ml-2">{{ translate('Message') }}</span>
                        <span class="badge badge-primary badge-circle">{{ $unseen_chat_thread_count }}</span>
                    </a>
                </li> --}}
                <!-- Services -->
                {{-- <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11.998" height="12" viewBox="0 0 11.998 12">
                            <path id="Subtraction_161" data-name="Subtraction 161"
                                d="M3640.751,9220h-7.5a2.251,2.251,0,0,1-2.249-2.249v-7.5a2.251,2.251,0,0,1,2.249-2.249h7.5a2.25,2.25,0,0,1,2.247,2.249v7.5A2.25,2.25,0,0,1,3640.751,9220Zm-3-3.751a.751.751,0,0,0,0,1.5h3a.751.751,0,0,0,0-1.5Zm1.5-3.748a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,3639.25,9212.5Zm-6-3.6a1.351,1.351,0,0,0-1.351,1.349v.711h10.2v-.711a1.331,1.331,0,0,0-.4-.953,1.352,1.352,0,0,0-.953-.4Z"
                                transform="translate(-3631 -9207.999)" fill="#989ea8" />
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Services') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('service.create') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['service', 'service.create']) }}">
                                <span class="aiz-side-nav-text">{{ translate('Add New Service') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('service.freelancer_index') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['service', 'service.edit']) }}">
                                <span class="aiz-side-nav-text">{{ translate('All Services') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('service.sold') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['service.sold']) }}">
                                <span class="aiz-side-nav-text">{{ translate('Sold Services') }}</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <!-- Projects -->
                {{-- <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <g id="Group_22097" data-name="Group 22097" transform="translate(-352 -590)">
                              <rect id="Rectangle_16213" data-name="Rectangle 16213" width="3" height="6" rx="1.5" transform="translate(352 596)" fill="#989ea8"/>
                              <rect id="Rectangle_16236" data-name="Rectangle 16236" width="3" height="9" rx="1.5" transform="translate(356.5 593)" fill="#989ea8"/>
                              <rect id="Rectangle_16234" data-name="Rectangle 16234" width="3" height="12" rx="1.5" transform="translate(361 590)" fill="#989ea8"/>
                            </g>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Projects') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('bidded_projects') }}" class="aiz-side-nav-link {{ areActiveRoutes(['bidded_projects'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Bidded') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('projects.my_running_project') }}" class="aiz-side-nav-link {{ areActiveRoutes(['projects.my_running_project'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Running') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('projects.my_completed_project') }}" class="aiz-side-nav-link {{ areActiveRoutes(['projects.my_completed_project'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Completed') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('projects.my_cancelled_project') }}" class="aiz-side-nav-link {{ areActiveRoutes(['projects.my_cancelled_project'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Cancelled') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('private_projects') }}" class="aiz-side-nav-link {{ areActiveRoutes(['private_projects'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Project Proposal') }}</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <!-- payment -->
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="11.998" height="11.999" viewBox="0 0 11.998 11.999">
                            <g id="Group_22184" data-name="Group 22184" transform="translate(-13015.002 -765.001)">
                              <path id="Subtraction_201" data-name="Subtraction 201" d="M18383,5809a6,6,0,1,1,6-6A6.006,6.006,0,0,1,18383,5809Zm-1.434-4.7c-.068,0-.1.062-.137.169l-.041.142c-.018.065-.037.13-.057.2l-.041.143c-.055.222-.033.27.172.369a2.939,2.939,0,0,0,.83.24c.229.037.236.044.24.277v.319a.19.19,0,0,0,.2.217c.154,0,.314,0,.467,0a.173.173,0,0,0,.193-.2c0-.057,0-.115,0-.173,0-.081.006-.173,0-.261a.228.228,0,0,1,.2-.263,1.566,1.566,0,0,0,.816-.526,1.441,1.441,0,0,0,.311-1.186,1.557,1.557,0,0,0-.785-1.057,7.562,7.562,0,0,0-.7-.318l-.014-.006-.111-.045a1.939,1.939,0,0,1-.453-.254.415.415,0,0,1-.17-.379.419.419,0,0,1,.268-.318.835.835,0,0,1,.277-.06c.039,0,.08,0,.129,0a2.058,2.058,0,0,1,.908.211.358.358,0,0,0,.139.042c.063,0,.1-.042.135-.162.047-.137.086-.27.133-.429l.033-.115a.2.2,0,0,0-.125-.254,2.809,2.809,0,0,0-.654-.194c-.3-.046-.3-.052-.3-.346,0-.42,0-.42-.424-.42h-.123l-.062,0c-.2,0-.23.04-.234.235v.268c0,.261-.006.263-.236.348l-.018.007a1.4,1.4,0,0,0-1.029,1.3,1.325,1.325,0,0,0,.752,1.278,4.381,4.381,0,0,0,.652.3l.006,0,.045.018c.082.033.166.066.248.1a1.681,1.681,0,0,1,.34.2.508.508,0,0,1,.2.453.5.5,0,0,1-.3.378,1.206,1.206,0,0,1-.453.089,1.222,1.222,0,0,1-.156-.01,2.721,2.721,0,0,1-.924-.277A.328.328,0,0,0,18381.568,5804.3Z" transform="translate(-5362 -5032)" fill="#989ea8"/>
                            </g>
                        </svg> --}}
                        <img src="{{ asset('public\assets\frontend\default\img\icons\dollar-symbol.png') }}"
                            style="width:24px" ;height="24px" />


                        <span class="aiz-side-nav-text ml-2">{{ translate('Payment Details') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('recieved_shortlist_payment_index') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['recieved_shortlist_payment_index']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Invoices') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('user.account') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['user.account']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                
                                <span class="aiz-side-nav-text ml-2">{{ translate('Bank Account Setting') }}</span>
                            </a>
                        </li>

                        {{-- <li class="aiz-side-nav-item">
                            <a href="{{ route('recieved_milestone_payment_index') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['recieved_milestone_payment_index']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Earnings History') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('send_withdrawal_request_to_admin') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['send_withdrawal_request_to_admin']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Withdraw Request') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('withdrawal_history_index') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['withdrawal_history_index']) }}">
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Withdraw History') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('sent-milestone-requests.all') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['sent-milestone-requests.all']) }}"> 
                                <i class="fas fa-caret-right mt-auto mb-auto" style="color: #65cb75;"></i>
                                <span class="aiz-side-nav-text ml-2">{{ translate('Milestone Requests') }}</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <!-- Bookmarked Projects -->
                {{-- <li class="aiz-side-nav-item">
                    <a href="{{ route('bookmarked-projects.index') }}" class="aiz-side-nav-link d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <g id="Group_22187" data-name="Group 22187" transform="translate(-352 -590)">
                              <rect id="Rectangle_16213" data-name="Rectangle 16213" width="3" height="4" rx="1.5" transform="translate(352 598)" fill="#989ea8"/>
                              <path id="Subtraction_178" data-name="Subtraction 178" d="M5719.485,5580a1.5,1.5,0,0,1,1.5,1.5v2a1.5,1.5,0,0,1-3,0v-2A1.5,1.5,0,0,1,5719.485,5580Z" transform="translate(-5361.485 -4983)" fill="#989ea8"/>
                              <rect id="Rectangle_16234" data-name="Rectangle 16234" width="3" height="12" rx="1.5" transform="translate(361 590)" fill="#989ea8"/>
                              <path id="Path_25873" data-name="Path 25873" d="M-63.027,47.046c-.213.16-1.583-.852-1.845-.855s-1.647.986-1.858.823.285-1.84.206-2.1-1.405-1.336-1.322-1.6,1.759-.285,1.973-.444.779-1.812,1.041-1.81.8,1.664,1.013,1.827,1.887.216,1.966.478-1.263,1.313-1.347,1.573S-62.813,46.887-63.027,47.046Z" transform="translate(419.851 548.937)" fill="#989ea8"/>
                            </g>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Bookmarked Projects') }}</span>
                    </a>
                </li> --}}
                <li class="aiz-side-nav-item">
                    <a href="{{ route('user.profile') }}"
                        class="aiz-side-nav-link {{ areActiveRoutes(['user.profile']) }}">
                        <img src="{{ asset('public\assets\frontend\default\img\icons\badge.png') }}" style="width:25px"
                            ;height="25px" />

                        <span class="aiz-side-nav-text ml-2">{{ translate('Business Profile') }}</span>
                    </a>

                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{ route('user.workingarea') }}"
                        class="aiz-side-nav-link {{ areActiveRoutes(['user.workingarea']) }}">
                        <img src="{{ asset('public\assets\frontend\default\img\icons\badge.png') }}" style="width:25px"
                            ;height="25px" />

                        <span class="aiz-side-nav-text ml-2">{{ translate('Working Area') }}</span>
                    </a>
                </li>

                

                {{-- <li class="aiz-side-nav-item">
                    <a href="{{ route('recieved_shortlist_payment_index') }}"
                        class="aiz-side-nav-link {{ areActiveRoutes(['recieved_shortlist_payment_index']) }}">
                        <img src="{{ asset('public\assets\frontend\default\img\icons\user-gear.png') }}"
                            style="width:25px" ;height="25px" />
                        <span class="aiz-side-nav-text ml-2">{{ translate('Invoices') }}</span>
                    </a>
                </li> --}}
                <!-- Reviews -->
                {{-- <li class="aiz-side-nav-item">
                    <a href="{{ route('user_review', 'freelancer') }}"
                        class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['select_package']) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path id="Path_25823" data-name="Path 25823"
                                d="M-58.2,53.029c-.427.319-3.166-1.7-3.691-1.709s-3.295,1.973-3.717,1.646.57-3.679.412-4.2-2.81-2.671-2.644-3.192,3.519-.569,3.945-.889,1.558-3.624,2.083-3.619,1.6,3.328,2.026,3.654,3.773.431,3.931.955S-58.384,48.3-58.55,48.82-57.776,52.71-58.2,53.029Z"
                                transform="translate(67.851 -41.064)" fill="#989ea8" />
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Reviews') }}</span>
                    </a>
                </li>
                <!-- Packages -->
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11.998"
                            viewBox="0 0 12 11.998">
                            <path id="Subtraction_162" data-name="Subtraction 162"
                                d="M3637,9220h0a14.371,14.371,0,0,1-3.01-1.022,5.761,5.761,0,0,1-2.071-1.777,4.288,4.288,0,0,1-.919-2.457v-5.094l1.059-1.039a1.9,1.9,0,0,1,.461.484c.234.3.475.613.73.613.845,0,1.547-.412,3.243-1.408l.507-.3.425.248.07.041c1.7,1,2.409,1.414,3.255,1.416.255,0,.5-.31.729-.608l0-.006a1.884,1.884,0,0,1,.46-.482l1.057,1.039v5.094a4.319,4.319,0,0,1-.926,2.456,5.774,5.774,0,0,1-2.07,1.778,14.21,14.21,0,0,1-3,1.022h0Zm-.024-3.871h0a2.924,2.924,0,0,1,.748.374l.007,0a3.5,3.5,0,0,0,1.026.493.1.1,0,0,0,.064-.018c.123-.092.017-.7-.076-1.234a3.363,3.363,0,0,1-.1-.87,3.2,3.2,0,0,1,.577-.634c.383-.37.815-.789.77-.938s-.634-.234-1.152-.308a2.982,2.982,0,0,1-.813-.17,3.209,3.209,0,0,1-.4-.772l0-.006c-.217-.491-.462-1.049-.613-1.05s-.407.556-.631,1.046l0,0a3.225,3.225,0,0,1-.408.76,2.886,2.886,0,0,1-.819.157h-.006c-.515.064-1.1.137-1.147.288s.377.573.752.948l0,0,.008.008a3.131,3.131,0,0,1,.56.637,3.375,3.375,0,0,1-.111.863c-.1.535-.218,1.142-.1,1.237a.108.108,0,0,0,.067.018,3.087,3.087,0,0,0,.935-.421l.073-.042A3.114,3.114,0,0,1,3636.976,9216.129Z"
                                transform="translate(-3631 -9208.002)" fill="#989ea8" />
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Packages') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('select_package') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['select_package']) }}">
                                <span class="aiz-side-nav-text">{{ translate('Upgrade/Downgrade') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('freelancer.packages.history') }}"
                                class="aiz-side-nav-link {{ areActiveRoutes(['freelancer.packages.history']) }}">
                                <span class="aiz-side-nav-text">{{ translate('Packages History') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (\App\Models\Addon::where('unique_identifier', 'support_tickets')->first() != null && \App\Models\Addon::where('unique_identifier', 'support_tickets')->first()->activated == 1)
                    <!-- Support Ticket -->
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('support-tickets.user_index') }}"
                            class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['support-tickets.user_index', 'support-tickets.user_ticket_create']) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                viewBox="0 0 12 12">
                                <g id="Group_22094" data-name="Group 22094" transform="translate(-1 -1)">
                                    <path id="Path_25817" data-name="Path 25817"
                                        d="M11.8,6.2h-.4V5.4a4.4,4.4,0,1,0-8.8,0v.8H2.2A1.2,1.2,0,0,0,1,7.4V9a1.2,1.2,0,0,0,1.2,1.2h.4a1.2,1.2,0,0,0,2.4,0v-4A1.2,1.2,0,0,0,3.4,5.068a3.6,3.6,0,0,1,7.168,0A1.2,1.2,0,0,0,9,6.2v4a1.2,1.2,0,0,0,1.6,1.128V12.2H9.36A1.936,1.936,0,0,1,9,13h2a.4.4,0,0,0,.4-.4V10.2h.4A1.2,1.2,0,0,0,13,9V7.4A1.2,1.2,0,0,0,11.8,6.2Z"
                                        fill="#989ea8" />
                                    <path id="Path_25818" data-name="Path 25818"
                                        d="M14,25h-.8a1.2,1.2,0,1,0,0,2.4H14A1.2,1.2,0,1,0,14,25Z"
                                        transform="translate(-6.6 -14.4)" fill="#989ea8" />
                                </g>
                            </svg>
                            <span class="aiz-side-nav-text ml-2">{{ translate('Support Ticket') }}</span>
                        </a>
                    </li>
                @endif
                <!-- Wallet -->
                <li class="aiz-side-nav-item">
                    <a href="{{ route('wallet.index') }}"
                        class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['wallet.index', 'wallet.recharge']) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path id="Path_25824" data-name="Path 25824"
                                d="M12.5,5.113H3.125V4.731l8.25-.671v.671H12.5V3.588a1.274,1.274,0,0,0-1.484-1.309L3.485,3.372A1.807,1.807,0,0,0,2,5.113v7.625a1.513,1.513,0,0,0,1.5,1.525h9A1.513,1.513,0,0,0,14,12.738v-6.1A1.513,1.513,0,0,0,12.5,5.113Zm-1.125,5.342A1.144,1.144,0,1,1,12.5,9.311a1.135,1.135,0,0,1-1.126,1.144Z"
                                transform="translate(-2 -2.263)" fill="#989ea8" />
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Wallet') }}</span>
                    </a>
                </li> --}}
                <!-- Setting -->
                {{-- <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path id="Path_25870" data-name="Path 25870" d="M6.45,0a1.31,1.31,0,0,1,.922.342,1.134,1.134,0,0,1,.379.852A1.243,1.243,0,0,0,9.039,2.389a1.4,1.4,0,0,0,.638-.163A1.331,1.331,0,0,1,11.4,2.67h0l.43.7a1.162,1.162,0,0,1,.17.594A1.175,1.175,0,0,1,11.357,5a1.236,1.236,0,0,0-.474.439,1.145,1.145,0,0,0,.474,1.6,1.156,1.156,0,0,1,.474,1.619h0l-.43.679a1.293,1.293,0,0,1-1.105.6,1.307,1.307,0,0,1-.643-.163,1.442,1.442,0,0,0-.645-.162,1.321,1.321,0,0,0-.909.354,1.134,1.134,0,0,0-.379.846A1.241,1.241,0,0,1,6.431,12H5.566a1.306,1.306,0,0,1-.9-.354,1.151,1.151,0,0,1-.366-.84A1.237,1.237,0,0,0,3.022,9.612a1.3,1.3,0,0,0-.657.175,1.42,1.42,0,0,1-.979.119A1.313,1.313,0,0,1,.6,9.348h0L.2,8.67a1.12,1.12,0,0,1-.158-.936,1.228,1.228,0,0,1,.624-.75,1.2,1.2,0,0,0,.474-.438,1.156,1.156,0,0,0-.474-1.6A1.138,1.138,0,0,1,.2,3.342h0L.6,2.67a1.281,1.281,0,0,1,.789-.57,1.364,1.364,0,0,1,.985.126,1.433,1.433,0,0,0,.645.156,1.342,1.342,0,0,0,.909-.348,1.149,1.149,0,0,0,.373-.84A1.241,1.241,0,0,1,5.591,0H6.45ZM6.7,4.489a1.872,1.872,0,0,0-1.939.353,1.56,1.56,0,0,0-.385,1.795A1.769,1.769,0,0,0,6.014,7.656h.007a1.784,1.784,0,0,0,1.25-.48,1.579,1.579,0,0,0,.524-1.164A1.638,1.638,0,0,0,6.7,4.489Z" transform="translate(0 0)" fill="#989ea8"/>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Setting') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('user.account') }}" class="aiz-side-nav-link {{ areActiveRoutes(['user.account'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Account Setting') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('user.profile') }}" class="aiz-side-nav-link {{ areActiveRoutes(['user.profile'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Profile Setting') }}</span>
                            </a>
                        </li> 
                    </ul>
                </li> --}}
            </ul>
        </div>
        <!-- Logout -->
        <div class="text-center mb-3 px-3">
            <a href="{{ route('logout') }}"
                class="btn btn-block btn-primary rounded-1 py-3">{{ translate('Logout') }}</a>
        </div>
    </div>
</div>
<style scoped>
    ul.a {
        list-style-type: none !important;
    }
</style>
