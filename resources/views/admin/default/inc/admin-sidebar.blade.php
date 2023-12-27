<div class="aiz-sidebar-wrap">
    <div class="aiz-sidebar left c-scrollbar">
        <div class="aiz-side-nav-logo-wrap">
            <a href="{{ route('admin.dashboard') }}" class="d-block">
                <img src="{{ custom_asset(\App\Utility\SettingsUtility::get_settings_value('system_logo_white')) }}" class="img-fluid">
            </a>
        </div>
        <div class="aiz-side-nav-wrap">
            <ul class="aiz-side-nav-list" data-toggle="aiz-side-menu">

                <li class="aiz-side-nav-item">
                    {{-- @can('show dashboard') --}}
                    <a href="{{ route('admin.dashboard') }}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Dashboard')}}</span>
                    </a>
                    {{-- @endcan --}}
                </li>
                @if(auth()->user()->can('show all projects')
                        || auth()->user()->can('show running projects')
                            || auth()->user()->can('show open projects')
                                || auth()->user()->can('show cancelled projects')
                                    || auth()->user()->can('show project cancel requests')
                                        || auth()->user()->can('show project category'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-tasks aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Projects')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('show all projects')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('all_projects') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('All Projects')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show running projects')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('running_projects') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Running Project')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show open projects')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('open_projects') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Open Project')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show cancelled projects')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('cancelled_projects') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Cancelled Project')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show project cancel requests')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('cancel-project-request.index') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Project Cancel Request')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show project category')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('project-categories.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['project-categories.index', 'project-categories.edit', 'project-categories.destroy'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Project Category')}}</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->can('show all services')
                        || auth()->user()->can('show cancelled services')
                            || auth()->user()->can('show service cancel requests'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-tasks aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Services')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('show all services')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('all_services_admin') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('All Services')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show cancelled services')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('cancelled_services_admin') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Cancelled Services')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show service cancel requests')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('service_cancellation.requests') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Service Cancellation Requests')}}</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endif

                @can('show verification requests')
                <li class="aiz-side-nav-item">
                    <a href="{{ route('verification_requests') }}" class="aiz-side-nav-link {{ areActiveRoutes(['verification_requests', 'verification_request_details'])}}">
                        <i class="las la-user-check aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Verification Requests')}}</span>
                    </a>
                </li>
                @endcan

                @can('show user chats')
                <li class="aiz-side-nav-item">
                    <a href="{{ route('chat.admin.all') }}" class="aiz-side-nav-link {{ areActiveRoutes(['chat.admin.all', 'chat_details_for_admin'])}}">
                        <i class="las la-sms aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Users Chats')}}</span>
                    </a>
                </li>
                @endcan
                @if(auth()->user()->can('show all freelancers')
                        || auth()->user()->can('show freelancer packages')
                            || auth()->user()->can('show freelancer skills')
                                || auth()->user()->can('show freelancer badges'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-user-circle aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Tradesman')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('show all freelancers')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('all_freelancers') }}" class="aiz-side-nav-link {{ areActiveRoutes(['all_freelancers', 'freelancer_info_show'])}}">
                                    <span class="aiz-side-nav-text">{{translate('All Tradesman')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show freelancer packages')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('freelancer_package.index', 'freelancer') }}" class="aiz-side-nav-link {{ areActiveRoutes(['freelancer_package.index', 'freelancer_package.create', 'freelancer_package.edit'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Tradesman Packages')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show freelancer skills')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('skills.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['skills.index', 'skills.edit'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Tradesman Skills')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show freelancer badges')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('badges.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['badges.index', 'badges.create', 'badges.edit'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Tradesman Badges')}}</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                
                @if(auth()->user()->can('show all clients') || auth()->user()->can('show client packages') || auth()->user()->can('show client badges'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-user-tie aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Clients')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('show all clients')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('all_clients') }}" class="aiz-side-nav-link {{ areActiveRoutes(['client_info_show'])}}">
                                    <span class="aiz-side-nav-text">{{translate('All Clients')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show client packages')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('client_package.index', 'client') }}" class="aiz-side-nav-link {{ areActiveRoutes(['client_package.index', 'client_package.create', 'client_package.edit'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Client Packages')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show client badges')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('client_badges_index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['client_badges_index', 'client_badges_edit'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Client Badges')}}</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                @if(auth()->user()->can('show freelancers reviews') || auth()->user()->can('show client reviews'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-star-half-alt aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Reviews')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('show freelancers reviews')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('reviews.freelancer') }}" class="aiz-side-nav-link {{ areActiveRoutes(['reviews.freelancer', 'freelancer_review_details'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Tradesman Reviews')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show client reviews')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('reviews.client') }}" class="aiz-side-nav-link {{ areActiveRoutes(['reviews.client', 'client_review_details'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Client Reviews')}}</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                @if (\App\Models\Addon::where('unique_identifier', 'support_tickets')->first() != null && \App\Models\Addon::where('unique_identifier', 'support_tickets')->first()->activated == 1)
                    @if(auth()->user()->can('show active tickets')
                        || auth()->user()->can('show my tickets')
                            || auth()->user()->can('show solved tickets'))
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-people-carry aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">{{translate('Support Ticket')}}</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                @can('show active tickets')
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('support-tickets.active_ticket') }}" class="aiz-side-nav-link {{ areActiveRoutes(['support-tickets.edit'])}}">
                                        <span class="aiz-side-nav-text">{{translate('Active Tickets')}}</span>
                                    </a>
                                </li>
                                @endcan

                                @can('show my tickets')
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('support-tickets.my_ticket') }}" class="aiz-side-nav-link {{ areActiveRoutes(['support-tickets.show'])}}">
                                        <span class="aiz-side-nav-text">{{translate('My tickets')}}</span>
                                    </a>
                                </li>
                                @endcan

                                @can('show solved tickets')
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('support-tickets.solved_ticket') }}" class="aiz-side-nav-link {{ areActiveRoutes(['support-tickets.show'])}}">
                                        <span class="aiz-side-nav-text">{{translate('Solved tickets')}}</span>
                                    </a>
                                </li>
                                @endcan
                                @if(auth()->user()->can('show support settings category') || auth()->user()->can('show default assigned agent'))
                                <li class="aiz-side-nav-item">
                                    <a href="#" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">{{translate('Support Settings')}}</span>
                                        <span class="aiz-side-nav-arrow"></span>
                                    </a>

                                    <ul class="aiz-side-nav-list level-3">
                                        @can('show support settings category')
                                        <li class="aiz-side-nav-item">
                                            <a href="{{ route('support-categories.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['support-categories.index', 'support-categories.edit'])}}">
                                                <span class="aiz-side-nav-text">{{translate('Category')}}</span>
                                            </a>
                                        </li>
                                        @endcan

                                        @can('show default assigned agent')
                                        <li class="aiz-side-nav-item">
                                            <a href="{{ route('default_ticket_assigned_agent') }}" class="aiz-side-nav-link">
                                                <span class="aiz-side-nav-text">{{translate('Default Asssigned Agent')}}</span>
                                            </a>
                                        </li>
                                        @endcan
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </li>
                    @endif
                @endif
                        
                @if(auth()->user()->can('show project payments')
                    || auth()->user()->can('show package payments')
                        || auth()->user()->can('show service payments')
                            || auth()->user()->can('show freelancer withdraw requests')
                                || auth()->user()->can('show freelancer payouts')
                                    || auth()->user()->can('show wallet history'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-chart-bar aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Accountings')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('show project payments')
                            <li class="aiz-side-nav-item">
                                <a href="{{route('payment_history_for_admin')}}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Project Payments')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show package payments')
                            <li class="aiz-side-nav-item">
                                <a href="{{route('package_payment_history_for_admin')}}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Package Payments')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show service payments')
                            <li class="aiz-side-nav-item">
                                <a href="{{route('service_payment_history_for_admin')}}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Service Payments')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show freelancer withdraw requests')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('withdraw_request.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['pay_to_freelancer'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Tradesman Withdraw Requests')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show freelancer payouts')
                            <li class="aiz-side-nav-item">
                                <a href="{{route('freelancer_payment.index')}}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Tradesman Payouts')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show wallet history')
                            <li class="aiz-side-nav-item">
                                <a href="{{route('wallet_history.admin')}}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Wallet History')}}</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                
                @if(auth()->user()->can('show all blogs') || auth()->user()->can('show blog category'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-blog aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ translate('Blog System') }}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                        @can('show all blogs')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('blog.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['blog.create', 'blog.edit'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('All Posts') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('show blog category')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('blog-category.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['blog-category.create', 'blog-category.edit'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('Categories') }}</span>
                                </a>
                            </li>
                        @endcan
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->can('show all subscribers') || auth()->user()->can('show all newsletters'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-bullhorn aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ translate('Marketing') }}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('show all newsletters')
                                <li class="aiz-side-nav-item">
                                    <a href="{{route('newsletters.index')}}" class="aiz-side-nav-link {{ areActiveRoutes(['newsletters.index'])}}">
                                        <span class="aiz-side-nav-text">{{ translate('Newsletters') }}</span>
                                    </a>
                                </li>
                            @endcan
                            @can('show all subscribers')
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('subscribers.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['subscribers.index'])}}">
                                        <span class="aiz-side-nav-text">{{ translate('Subscribers') }}</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                
                @if(auth()->user()->can('show header') || auth()->user()->can('show footer') || auth()->user()->can('show pages') || auth()->user()->can('show apperance'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-hourglass-half aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Website')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('show header')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('website.header') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Header')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show footer')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('website.footer') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Footer')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show pages')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('website.pages') }}" class="aiz-side-nav-link {{ areActiveRoutes(['website.home'])}}">
                                    <span class="aiz-side-nav-text">{{translate('pages')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show apperance')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('website.appearance') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Appearance')}}</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                @if(auth()->user()->can('show all staffs') || auth()->user()->can('show employee roles'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-user aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Employee')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('show all staffs')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('staffs.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['staffs.create', 'staffs.edit'])}}">
                                    <span class="aiz-side-nav-text">{{translate('All Staffs')}}</span>
                                </a>
                            </li>
                            @endcan

                            @can('show employee roles')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('roles.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['roles.create', 'roles.edit'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Employee Roles')}}</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                @if(auth()->user()->can('show general setting') 
                        || auth()->user()->can('show activation setting')
                            || auth()->user()->can('show system languages setting')
                                || auth()->user()->can('show system currency setting')
                                    || auth()->user()->can('show email setting')
                                        || auth()->user()->can('show payment gateways setting')
                                            || auth()->user()->can('show third party api setting')
                                                || auth()->user()->can('show freelancer payment')
                                                    || auth()->user()->can('show refund setting'))
                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-cog aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Setting')}}</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        @can('show general setting')
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('general-config.index') }}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">{{translate('General')}}</span>
                            </a>
                        </li>
                        @endcan

                        @can('show activation setting')
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('general_configuration') }}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">{{translate('Activation')}}</span>
                            </a>
                        </li>
                        @endcan

                        @can('show system languages setting')
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('languages.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['languages.edit', 'languages.show'])}}">
                                <span class="aiz-side-nav-text">{{translate('System Languages')}}</span>
                            </a>
                        </li>
                        @endcan

                        @can('show system currency setting')
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('currencies.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['currencies.create','currencies.edit'])}}">
                                <span class="aiz-side-nav-text">{{translate('System Currency')}}</span>
                            </a>
                        </li>
                        @endcan

                        @can('show email setting')
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('email-config.index') }}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">{{translate('SMTP Settings')}}</span>
                            </a>
                        </li>
                        @endcan

                        @can('show payment gateways setting')
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('payment-config.index') }}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">{{translate('Payment Gateways')}}</span>
                            </a>
                        </li>
                        @endcan

                        @can('show third party api setting')
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('social-media-config.index') }}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">{{translate('3rd Party API')}}</span>
                            </a>
                        </li>
                        @endcan

                        @can('show freelancer payment')
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('freelancer_payment_settings') }}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">{{translate('Tradesman Payment')}}</span>
                            </a>
                        </li>
                        @endcan
                        @can('show refund setting')
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('refund_settings') }}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">{{translate('Refund Settings')}}</span>
                            </a>
                        </li>
                        @endcan

                        <!-- <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">{{translate('Manage Location')}}</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>

                            <ul class="aiz-side-nav-list level-3">
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('countries.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['countries.create', 'countries.edit'])}}">
                                        <span class="aiz-side-nav-text">{{translate('Country')}}</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('cities.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['cities.index', 'cities.edit'])}}">
                                        <span class="aiz-side-nav-text">{{translate('State')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </li>
                @endif

                <!-- Offline Payment Addon-->
                @if (\App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                    @if(auth()->user()->can('show manual payment methods') 
                        || auth()->user()->can('show offline project payments')
                            || auth()->user()->can('show offline package payments')
                                || auth()->user()->can('show offline service payments'))
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-money-check-alt aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">{{translate('Offline Payment System')}}</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                @can('show manual payment methods')
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('manual_payment_methods.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['manual_payment_methods.index', 'manual_payment_methods.create', 'manual_payment_methods.edit'])}}">
                                        <span class="aiz-side-nav-text">{{translate('Manual Payment Methods')}}</span>
                                    </a>
                                </li>
                                @endcan

                                @can('show offline project payments')
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('offline_project_payments_history') }}" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">{{translate('Offline Project Payments')}}</span>
                                    </a>
                                </li>
                                @endcan

                                @can('show offline package payments')
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('offline_package_payments_history') }}" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">{{translate('Offline Package Payments')}}</span>
                                    </a>
                                </li>
                                @endcan

                                @can('show offline service payments')
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('offline_service_payments_history') }}" class="aiz-side-nav-link">
                                        <span class="aiz-side-nav-text">{{translate('Offline Service Payments')}}</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                    @endif
                @endif

                @can('manage file upload')
                <li class="aiz-side-nav-item">
                    <a href="{{ route('uploaded-files.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['uploaded-files.create'])}}">
                        <i class="las la-folder-open aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{ translate('Uploaded Files') }}</span>
                    </a>
                </li>
                @endcan

                
                {{-- @if(auth()->user()->can('system update') 
                        || auth()->user()->can('show server status'))
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-dharmachakra aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('System')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            @can('system update')
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('system_update') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Update')}}</span>
                                </a>
                            </li>
                            @endcan
                            @can('show server status')
                            <li class="aiz-side-nav-item">
                                <a href="{{route('system_server')}}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Server status')}}</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                @endif --}}

                {{-- @can('show addon manager')
                <li class="aiz-side-nav-item">
                    <a href="{{ route('addons.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['addons.create'])}}">
                        <i class="las la-cubes aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Addon Manager')}}</span>
                    </a>
                </li>
                @endcan --}}
            </ul><!-- .aiz-side-nav -->
        </div><!-- .aiz-side-nav-wrap -->
    </div><!-- .aiz-sidebar -->
    <div class="aiz-sidebar-overlay"></div>
</div><!-- .aiz-sidebar -->
