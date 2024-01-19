<div class="aiz-user-sidenav-wrap pt-4 sticky-top c-scrollbar-light position-relative z-1 rounded-2 border-gray-light" >
    <div class="absolute-top-left d-xl-none">
        <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
            <i class="las la-times la-2x"></i>
        </button>
    </div>
    <div class="aiz-user-sidenav rounded overflow-hidden">
        <div class="px-4 text-center mb-4">
            <span class="avatar avatar-md mb-3">
                <a href="{{ route('client.details', Auth::user()->user_name) }}">
                    @if (Auth::user()->photo != null)
                    <img src="{{ custom_asset(Auth::user()->photo) }}">
                    @else
                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                    @endif
                </a>
                @if(Cache::has('user-is-online-' . Auth::user()->id))
                    <span class="badge badge-dot badge-success badge-circle badge-status"></span>
                @else
                    <span class="badge badge-dot badge-secondary badge-circle badge-status"></span>
                @endif
            </span>
            <h4 class="h5 text-dark">
                <a href="{{ route('client.details', Auth::user()->user_name) }}" class="text-reset hov-text-primary fs-16 fw-700">{{ Auth::user()->name }}</a>
            </h4>
            <h6 class="h5 fs-12 text-secondary">{{ Auth::user()->email }}</h6>
            <div class="text-center my-3">
                @foreach (Auth::user()->badges as $key => $user_badge)
                    @if ($user_badge->badge != null)
                        <span class="avatar avatar-square avatar-xxs mr-1" title="{{ $user_badge->badge->name }}"><img src="{{ custom_asset($user_badge->badge->icon) }}"></span>
                    @endif
                @endforeach
            </div>
            <div>
                <span class="rating rating-sm rating-mr-1">
                    {{ renderStarRating(getAverageRating(Auth::user()->id)) }}
                </span>
            </div>
            <div class="mb-1">
                <span class="fw-600">
                    {{ formatRating(getAverageRating(Auth::user()->id)) }}
                </span>
                <span>
                    ({{ getNumberOfReview(Auth::user()->id) }} {{ translate('Reviews') }})
                </span>
            </div>
        </div>

        <div class="sidemnenu mb-3 px-3">
            <ul class="aiz-side-nav-list" data-toggle="aiz-side-menu">

                <li class="aiz-side-nav-item">
                    <a href="{{ route('dashboard') }}" class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['dashboard'])}}">
                        {{-- <i class="las la-home aiz-side-nav-icon"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path id="Path_25816" data-name="Path 25816" d="M3.667,9.667h4A.669.669,0,0,0,8.333,9V3.667A.669.669,0,0,0,7.667,3h-4A.669.669,0,0,0,3,3.667V9A.669.669,0,0,0,3.667,9.667Zm0,5.333h4a.669.669,0,0,0,.667-.667V11.667A.669.669,0,0,0,7.667,11h-4A.669.669,0,0,0,3,11.667v2.667A.669.669,0,0,0,3.667,15Zm6.667,0h4A.669.669,0,0,0,15,14.333V9a.669.669,0,0,0-.667-.667h-4A.669.669,0,0,0,9.667,9v5.333A.669.669,0,0,0,10.333,15ZM9.667,3.667V6.333A.669.669,0,0,0,10.333,7h4A.669.669,0,0,0,15,6.333V3.667A.669.669,0,0,0,14.333,3h-4A.669.669,0,0,0,9.667,3.667Z" transform="translate(-3 -3)" fill="#989ea8"/>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Dashboard') }}</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                        {{-- <i class="las la-file-alt aiz-side-nav-icon"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="11.998" height="12" viewBox="0 0 11.998 12">
                            <path id="Subtraction_161" data-name="Subtraction 161" d="M3640.751,9220h-7.5a2.251,2.251,0,0,1-2.249-2.249v-7.5a2.251,2.251,0,0,1,2.249-2.249h7.5a2.25,2.25,0,0,1,2.247,2.249v7.5A2.25,2.25,0,0,1,3640.751,9220Zm-3-3.751a.751.751,0,0,0,0,1.5h3a.751.751,0,0,0,0-1.5Zm1.5-3.748a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,3639.25,9212.5Zm-6-3.6a1.351,1.351,0,0,0-1.351,1.349v.711h10.2v-.711a1.331,1.331,0,0,0-.4-.953,1.352,1.352,0,0,0-.953-.4Z" transform="translate(-3631 -9207.999)" fill="#989ea8"/>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Leads') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('leads') }}" class="aiz-side-nav-link {{ areActiveRoutes(['leads']) }}">
                                <span class="aiz-side-nav-text">{{ translate('New leads') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.services.cancelled') }}" class="aiz-side-nav-link {{ areActiveRoutes(['client.services.cancelled'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Shortlisted') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.services.cancel.requests') }}" class="aiz-side-nav-link {{ areActiveRoutes(['client.services.cancel.requests'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Jobs won') }}</span>
                            </a>
                        </li>
                    </ul>                </li>
                 <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                      
                        <svg xmlns="http://www.w3.org/2000/svg" width="11.998" height="12" viewBox="0 0 11.998 12">
                            <path id="Subtraction_161" data-name="Subtraction 161" d="M3640.751,9220h-7.5a2.251,2.251,0,0,1-2.249-2.249v-7.5a2.251,2.251,0,0,1,2.249-2.249h7.5a2.25,2.25,0,0,1,2.247,2.249v7.5A2.25,2.25,0,0,1,3640.751,9220Zm-3-3.751a.751.751,0,0,0,0,1.5h3a.751.751,0,0,0,0-1.5Zm1.5-3.748a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,3639.25,9212.5Zm-6-3.6a1.351,1.351,0,0,0-1.351,1.349v.711h10.2v-.711a1.331,1.331,0,0,0-.4-.953,1.352,1.352,0,0,0-.953-.4Z" transform="translate(-3631 -9207.999)" fill="#989ea8"/>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Services') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.purchased.services') }}" class="aiz-side-nav-link {{ areActiveRoutes(['client.purchased.services'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Purchased Services') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.services.cancelled') }}" class="aiz-side-nav-link {{ areActiveRoutes(['client.services.cancelled'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Cancelled Services') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.services.cancel.requests') }}" class="aiz-side-nav-link {{ areActiveRoutes(['client.services.cancel.requests'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Service Cancel Requests') }}</span>
                            </a> 
                        </li>
                    </ul>
                </li> 

                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                        {{-- <i class="las la-file-alt aiz-side-nav-icon"></i> --}}
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
                            <a href="{{ route('projects.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['projects.index', 'projects.create','projects.edit'])}}">
                                <span class="aiz-side-nav-text">{{ translate('All Projects') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('projects.my_open_project') }}" class="aiz-side-nav-link {{ areActiveRoutes(['projects.my_open_project', 'call_for_interview', 'project.bids'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Open Projects') }}</span>
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
                    </ul>
                </li>
                @if (Auth::user()->userPackage != null && Auth::user()->userPackage->following_status)
                <li class="aiz-side-nav-item">
                    <a href="{{ route('bookmarked-freelancers.index') }}" class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['bookmarked-freelancers.index'])}}">
                        {{-- <i class="las la-user aiz-side-nav-icon"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path id="Path_25822" data-name="Path 25822" d="M12.815,2H3.185A1.175,1.175,0,0,0,2,3.166v8.162a1.179,1.179,0,0,0,1.185,1.166H6.222l1.357,1.335a.6.6,0,0,0,.836,0l1.363-1.335h3.037A1.179,1.179,0,0,0,14,11.328V3.166A1.179,1.179,0,0,0,12.815,2ZM8,3.924A1.574,1.574,0,1,1,6.4,5.5,1.588,1.588,0,0,1,8,3.924Zm2.806,6.238H5.194V9.638C5.194,8.472,6.815,7.83,8,7.83s2.806.641,2.806,1.807Z" transform="translate(-2 -2)" fill="#989ea8"/>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Bookmarked Freelancers') }}</span>
                    </a>
                </li>
                @endif
                @php
                    $total_mile_request = count(\App\Models\MilestonePayment::where('client_user_id', Auth::user()->id)->where('client_seen', 0)->get());
                @endphp
                <li class="aiz-side-nav-item">
                    <a href="{{ route('milestone-requests.all') }}" class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['milestone-requests.all'])}}">
                        {{-- <i class="las la-dollar-sign aiz-side-nav-icon"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11.999" viewBox="0 0 12 11.999">
                            <path id="Layer_2" data-name="Layer 2" d="M15.872,2.33A.75.75,0,0,0,15.249,2H4.75A.75.75,0,0,0,4,2.75v10.5a.75.75,0,1,0,1.5,0V11h9.749a.75.75,0,0,0,.7-1.027L14.559,6.5l1.387-3.472a.75.75,0,0,0-.075-.7Zm-3.84,3.2-3,3a.75.75,0,0,1-1.057,0l-1.5-1.5A.75.75,0,1,1,7.532,5.967l.967.975,2.467-2.467a.75.75,0,0,1,1.057,1.057Z" transform="translate(-4 -2)" fill="#989ea8"/>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Milestone Request') }}</span>
                        @if ($total_mile_request > 0)
                            <span class="badge badge-primary badge-circle">{{$total_mile_request}}</span>
                        @endif
                    </a>
                </li>
                @php
                    $unseen_chat_threads = chat_threads();
                    $unseen_chat_thread_count = count($unseen_chat_threads);
                @endphp
                <li class="aiz-side-nav-item">
                    <a href="{{ route('all.messages') }}" class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['all.messages', 'chat_view'])}}">
                        {{-- <i class="las la-comment-dots aiz-side-nav-icon"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <g id="Layer_2" data-name="Layer 2" transform="translate(-2 -3)">
                              <path id="message-square" d="M12.2,3H3.8A1.8,1.8,0,0,0,2,4.8v9.6a.6.6,0,0,0,.906.516L5.6,12.684a.6.6,0,0,1,.33-.084H12.2A1.8,1.8,0,0,0,14,10.8v-6A1.8,1.8,0,0,0,12.2,3ZM5.6,8.4a.6.6,0,1,1,.6-.6A.6.6,0,0,1,5.6,8.4ZM8,8.4a.6.6,0,1,1,.6-.6A.6.6,0,0,1,8,8.4Zm2.4,0a.6.6,0,1,1,.6-.6A.6.6,0,0,1,10.4,8.4Z" fill="#989ea8"/>
                            </g>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Message') }}</span>
                        <span class="badge badge-primary badge-circle">{{ $unseen_chat_thread_count }}</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{ route('user_review', 'client') }}" class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['select_package'])}}">
                        {{-- <i class="lar la-star aiz-side-nav-icon"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path id="Path_25823" data-name="Path 25823" d="M-58.2,53.029c-.427.319-3.166-1.7-3.691-1.709s-3.295,1.973-3.717,1.646.57-3.679.412-4.2-2.81-2.671-2.644-3.192,3.519-.569,3.945-.889,1.558-3.624,2.083-3.619,1.6,3.328,2.026,3.654,3.773.431,3.931.955S-58.384,48.3-58.55,48.82-57.776,52.71-58.2,53.029Z" transform="translate(67.851 -41.064)" fill="#989ea8"/>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Reviews') }}</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link d-flex align-items-center">
                        {{-- <i class="las la-tachometer-alt aiz-side-nav-icon"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11.998" viewBox="0 0 12 11.998">
                            <path id="Subtraction_162" data-name="Subtraction 162" d="M3637,9220h0a14.371,14.371,0,0,1-3.01-1.022,5.761,5.761,0,0,1-2.071-1.777,4.288,4.288,0,0,1-.919-2.457v-5.094l1.059-1.039a1.9,1.9,0,0,1,.461.484c.234.3.475.613.73.613.845,0,1.547-.412,3.243-1.408l.507-.3.425.248.07.041c1.7,1,2.409,1.414,3.255,1.416.255,0,.5-.31.729-.608l0-.006a1.884,1.884,0,0,1,.46-.482l1.057,1.039v5.094a4.319,4.319,0,0,1-.926,2.456,5.774,5.774,0,0,1-2.07,1.778,14.21,14.21,0,0,1-3,1.022h0Zm-.024-3.871h0a2.924,2.924,0,0,1,.748.374l.007,0a3.5,3.5,0,0,0,1.026.493.1.1,0,0,0,.064-.018c.123-.092.017-.7-.076-1.234a3.363,3.363,0,0,1-.1-.87,3.2,3.2,0,0,1,.577-.634c.383-.37.815-.789.77-.938s-.634-.234-1.152-.308a2.982,2.982,0,0,1-.813-.17,3.209,3.209,0,0,1-.4-.772l0-.006c-.217-.491-.462-1.049-.613-1.05s-.407.556-.631,1.046l0,0a3.225,3.225,0,0,1-.408.76,2.886,2.886,0,0,1-.819.157h-.006c-.515.064-1.1.137-1.147.288s.377.573.752.948l0,0,.008.008a3.131,3.131,0,0,1,.56.637,3.375,3.375,0,0,1-.111.863c-.1.535-.218,1.142-.1,1.237a.108.108,0,0,0,.067.018,3.087,3.087,0,0,0,.935-.421l.073-.042A3.114,3.114,0,0,1,3636.976,9216.129Z" transform="translate(-3631 -9208.002)" fill="#989ea8"/>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Packages') }}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('select_package') }}" class="aiz-side-nav-link {{ areActiveRoutes(['select_package'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Upgrade/Downgrade') }}</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.packages.history') }}" class="aiz-side-nav-link {{ areActiveRoutes(['client.packages.history'])}}">
                                <span class="aiz-side-nav-text">{{ translate('Packages History') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (\App\Models\Addon::where('unique_identifier', 'support_tickets')->first() != null && \App\Models\Addon::where('unique_identifier', 'support_tickets')->first()->activated == 1)
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('support-tickets.user_index') }}" class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['support-tickets.user_index','support-tickets.user_ticket_create'])}}">
                            {{-- <i class="las la-tachometer-alt aiz-side-nav-icon"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                <g id="Group_22094" data-name="Group 22094" transform="translate(-1 -1)">
                                  <path id="Path_25817" data-name="Path 25817" d="M11.8,6.2h-.4V5.4a4.4,4.4,0,1,0-8.8,0v.8H2.2A1.2,1.2,0,0,0,1,7.4V9a1.2,1.2,0,0,0,1.2,1.2h.4a1.2,1.2,0,0,0,2.4,0v-4A1.2,1.2,0,0,0,3.4,5.068a3.6,3.6,0,0,1,7.168,0A1.2,1.2,0,0,0,9,6.2v4a1.2,1.2,0,0,0,1.6,1.128V12.2H9.36A1.936,1.936,0,0,1,9,13h2a.4.4,0,0,0,.4-.4V10.2h.4A1.2,1.2,0,0,0,13,9V7.4A1.2,1.2,0,0,0,11.8,6.2Z" fill="#989ea8"/>
                                  <path id="Path_25818" data-name="Path 25818" d="M14,25h-.8a1.2,1.2,0,1,0,0,2.4H14A1.2,1.2,0,1,0,14,25Z" transform="translate(-6.6 -14.4)" fill="#989ea8"/>
                                </g>
                            </svg>
                            <span class="aiz-side-nav-text ml-2">{{ translate('Support Ticket') }}</span>
                        </a>
                    </li>
                @endif
                <li class="aiz-side-nav-item">
                    <a href="{{ route('wallet.index') }}" class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['wallet.index','wallet.recharge'])}}">
                        {{-- <i class="las la-wallet aiz-side-nav-icon"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <path id="Path_25824" data-name="Path 25824" d="M12.5,5.113H3.125V4.731l8.25-.671v.671H12.5V3.588a1.274,1.274,0,0,0-1.484-1.309L3.485,3.372A1.807,1.807,0,0,0,2,5.113v7.625a1.513,1.513,0,0,0,1.5,1.525h9A1.513,1.513,0,0,0,14,12.738v-6.1A1.513,1.513,0,0,0,12.5,5.113Zm-1.125,5.342A1.144,1.144,0,1,1,12.5,9.311a1.135,1.135,0,0,1-1.126,1.144Z" transform="translate(-2 -2.263)" fill="#989ea8"/>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Wallet') }}</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{ route('user.profile') }}" class="aiz-side-nav-link d-flex align-items-center {{ areActiveRoutes(['user.profile'])}}">
                        {{-- <i class="las la-cog aiz-side-nav-icon"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                            <g id="Group_22096" data-name="Group 22096" transform="translate(-374 -831)">
                              <circle id="Ellipse_118" data-name="Ellipse 118" cx="3" cy="3" r="3" transform="translate(377 831)" fill="#989ea8"/>
                              <rect id="Rectangle_16211" data-name="Rectangle 16211" width="12" height="4" rx="2" transform="translate(374 839)" fill="#989ea8"/>
                            </g>
                        </svg>
                        <span class="aiz-side-nav-text ml-2">{{ translate('Profile Setting') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="text-center mb-3 px-3">
            <a href="{{ route('logout') }}" class="btn btn-block btn-primary rounded-1 py-3">{{ translate('Logout') }}</a>
        </div>
    </div>
</div>
