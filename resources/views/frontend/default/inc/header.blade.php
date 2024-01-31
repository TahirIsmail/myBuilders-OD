<style>
    .btn-post {
        background-color: #FAF9F6 !important;
        color: #545454;
        border: 2px solid white;
        transition: background-color 0.3s, color 0.3s;
        border-radius: 4px;
        font-size: medium;
        font-weight: normal;
        padding: 5px;
        width: 100px;
        margin-left: 10%;
        margin-right: 5px;
    }

    .my-custom-button::after {
        content: none;
        /* Hide the default caret icon */
    }

    .btn-post:hover {
        background-color: white !important;
        color: #37a002;
    }

    #navbarSupportedContent>div.menu>nav>ul>li.nav-item.ml-xl-3 {
        width: 135px;
    }

    .aiz-header {

        height: 5% !important;
    }

    .aiz-header {
        border-bottom: 0px !important;
    }

    .menu-div {
        width: 38%;
    }


    .dropdown-menu.show {
        display: block;
        padding: 0px;
    }

    .navbar {
        padding: 0px !important;
        background-color: #FAF9F6 !important;

    }

    .dropdown-menu .dropdown-item {
        background-color: rgb(251, 251, 251);
        padding: 10px;
        text-decoration: none;
        display: block;
        border-top: 2px solid #f2f2f2;
        color: black !important;
        text-decoration: none;
    }


    .dropdown-menu .dropdown-item:hover {
        background-color: #ececec;
        color: #37a002 !important;
    }

    .navbar-light .navbar-nav .nav-link {

        color: white !important;
    }

    .nav-link.dropdown-toggle {

        color: white;
        border: 0;
        font-weight: bold;
        padding: 0.8rem 1rem;
    }

    .icon-gray {
        color: gray;

        margin-right: 5px;

    }


    .my-custom-button {

        color: white;
        padding: 10px 20px;
        border: none !important;
        margin-right: 5px;
        height: 59px;
        transition: background-color 0.3s, color 0.3s;

    }


    .my-custom-button:hover {
        color: #4279e8 !important;

    }

    .my-custom-btn-postjob {
        background-color: #4990e2 !important;
        color: white;
        padding-left: 10px;
        padding-right: 10px;
        border: 2px solid white;
        margin-right: 5px;
        height: 40px;
        border-radius: 5px;
        text-align: center;
        margin-left: 300px;
    }

    .icon-div {
        margin-left: 300px;
    }


    .my-custom-btn-postjob:hover {
        background-color: #4279e8 !important;

    }

    .menu_div {
        margin-left: 10px;

    }



    .navbar-collapse {
        margin-left: 10%;
    }

    /* .search{
        margin-top: 4px;
    } */
    .flex-container {
        display: contents;
    }

    .close-button {
        color: white;
        top: 0;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        padding: 5px;
    }
</style>

{{-- {{-- <script>
    // JavaScript code to toggle menu visibility
    document.addEventListener("DOMContentLoaded", function () {
        const menuDiv = document.querySelector(".menu-div");
        const menu = document.querySelector(".menu");
        const menuButton = document.querySelector(".menu-button");

        menuButton.addEventListener("click", function () {
            // Toggle the visibility of menuDiv and menu
            menuDiv.classList.toggle("d-none");
            menu.classList.toggle("d-none");
        });
    });
</script> --}}


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const closeButtons = document.querySelectorAll(".close-button");

        closeButtons.forEach(function(closeButton) {
            closeButton.addEventListener("click", function() {
                const announcementDiv = closeButton.parentElement.parentElement;
                announcementDiv.remove();
            });
        });
    });
</script>


<header class="aiz-header">
    {{-- background: linear-gradient(to right,#ffffff,#C0C0C0); --}}

    <nav class="navbar navbar-expand-lg navbar-light "
        style=" background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(232,229,229,1) 6%, rgba(163,214,171,1) 17%, rgba(100,201,118,1) 28%, rgba(100,201,118,1) 100%) !important  ">
        <a href="{{ route('home') }}">
            <img src="{{ asset('public\assets\frontend\default\img\logo\builder_valley_logo.png') }}"
                alt="MyBuilder - A new way to find and hire tradespeople" width="150" height="60"
                style="margin-left:10%">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- <button class="btn-post">Post a job</button> --}}
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle my-custom-button" href="#" id="navbarDropdownMenuButton1"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
                    {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuButton1">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-book icon-gray" aria-hidden="true"></i> Post a job
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cog icon-gray"></i> How it works
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-flag icon-gray" aria-hidden="true"></i> About us
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-lightbulb-o icon-gray" aria-hidden="true"></i> Project
                            advice
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-search icon-gray" aria-hidden="true"></i> Find trades
                        </a>
                    </div> --}}
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle my-custom-button" href="#" id="navbarDropdownMenuButton2"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">contact us</a>
                    {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuButton2">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-book icon-gray" aria-hidden="true"></i> Trade sign up
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-book icon-gray" aria-hidden="true"></i> How it works
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-book icon-gray" aria-hidden="true"></i> Trade academy
                        </a>
                    </div> --}}
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle my-custom-button" href="#" id="navbarDropdownMenuButton2"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Advertise your
                        business</a>
                </li>
            </ul>
            <div class="flex-container">
                {{-- <div class="container-login " style="display: flex;width: 400px;margin-top: 1%;">
                    <form action="{{ route('search') }}" method="GET" class="flex-grow-1" style="width:200px">
                        <div class="input-group">
                            <a class="text-reset bg-soft-secondary fs-12 rounded-left d-lg-none p-2"
                                href="javascript:void(0);" data-toggle="class-toggle"
                                data-target=".front-header-search">
                                <i class="las la-arrow-left la-2x"></i>
                            </a>
                            <div class="input-group-prepend d-none d-sm-block">
                                <input type="text" class="form-control"
                                    placeholder="{{ translate('I am looking for') }}" name="keyword"
                                    style="border-top-left-radius: 0.5rem;border-bottom-left-radius: 0.5rem;">
                            </div>
                            <select class="form-control aiz-selectpicker  rounded-left-0" name="type">
                                <option value="freelancer"
                                    @isset($type) @if ($type == 'freelancer') selected @endif @endisset>
                                    {{ translate('Tradesmen') }}
                                </option>
                                <option value="project"
                                    @isset($type) @if ($type == 'project') selected @endif @endisset>
                                    {{ translate('Trade career') }}
                                </option>
                                <option value="service"
                                    @isset($type) @if ($type == 'service') selected @endif @endisset>
                                    {{ translate('Employe A Trade worker') }}
                                </option>
                            </select>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-icon btn-primary"
                                    style="border-top-right-radius: 0.5rem;border-bottom-right-radius: 0.5rem;">
                                    <i class="las la-search la-rotate-270"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div> --}}








                <div class="menu ml-auto " style="    margin-right: 50px;">
                    <nav class="navbar-expand">
                        <ul class="navbar-nav ml-auto align-items-center">
                            <li class="nav-item d-lg-none">
                                {{-- <a class="p-2 d-inline-block" href="javascript:void(0);" data-toggle="class-toggle"
                                data-target=".front-header-search">
                                <i class="las la-search la-flip-horizontal la-2x"></i>
                            </a> --}}
                            </li>
                            @if (!Auth::check())
                                <li class="nav-item ml-xl-3">
                                    <a class="btn-post" href="{{ route('login') }}">{{ translate('LogIn') }}</a>
                                </li>
                                {{-- <li class="nav-item ml-xl-3">
                                <a class="btn btn-primary rounded-1; width:100px"
                                    href="{{ route('register') }}">{{ translate('Get Started') }}</a>
                            </li> --}}
                            @elseif (isAdmin())
                                <li class="nav-item d-none d-lg-block">
                                    <a class="nav-link fw-700"
                                        href="{{ route('admin.dashboard') }}">{{ translate('My Panel') }}</a>
                                </li>
                            @elseif (isClient() || isFreelancer())
                                <li class="dropdown d-none d-lg-block">
                                    <a class="dropdown-toggle no-arrow position-relative p-2" data-toggle="dropdown"
                                        href="javascript:void(0);" role="button" aria-haspopup="false"
                                        aria-expanded="false">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                            viewBox="0 0 18 20">
                                            <g id="Group_22092" data-name="Group 22092"
                                                transform="translate(-3 -292.65)">
                                                <path id="Path_25812" data-name="Path 25812"
                                                    d="M12,292.65a7.273,7.273,0,0,0-7.223,7.311v3.5A2.66,2.66,0,0,0,3,305.848a2.806,2.806,0,0,0,2.777,2.8H18.223a2.806,2.806,0,0,0,2.777-2.8,2.658,2.658,0,0,0-1.777-2.383v-3.5A7.273,7.273,0,0,0,12,292.651Zm5.223,7.311c0,1.328,0,2.728-.008,4.031a.99.99,0,0,0,.937,1.051.787.787,0,0,1,.848.8.767.767,0,0,1-.777.8H5.777a.767.767,0,0,1-.777-.8.787.787,0,0,1,.848-.8.99.99,0,0,0,.938-1.049c-.021-1.323-.008-2.692-.008-4.033a5.223,5.223,0,1,1,10.445,0Z"
                                                    fill="white" />
                                                <path id="Path_25813" data-name="Path 25813"
                                                    d="M10,310.65a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Z" fill="white" />
                                            </g>
                                        </svg>

                                        @php $noti_num = \App\Utility\NotificationUtility::get_my_notifications(10,true,true); @endphp
                                        @if ($noti_num != 0)
                                            <span
                                                class="badge badge-circle badge-primary position-absolute absolute-top-right">
                                                {{-- get numbers of unseen notification --}}
                                                {{ $noti_num }}
                                            </span>
                                        @endif

                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                                        <div class="p-3 bg-light border-bottom">
                                            <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                                        </div>
                                        <ul class="list-group list-group-raw c-scrollbar-light"
                                            style="overflow-y:auto;max-height:300px;">
                                            {{-- get 10 unseen notifications as array --}}
                                            @php $notification_list = \App\Utility\NotificationUtility::get_my_notifications(10,false,false,false); @endphp
                                            @forelse ($notification_list as $notification_item)
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start hov-bg-soft-primary">
                                                    <a href="{{ $notification_item['link'] }}"
                                                        class="media text-inherit">
                                                        <span class="avatar avatar-sm mr-3">
                                                            <img src="{{ $notification_item['sender_photo'] }}">
                                                        </span>
                                                        <div class="media-body">
                                                            <p class="mb-1">
                                                                {{ $notification_item['message'] . ' ' . $notification_item['sender_name'] }}
                                                            </p>
                                                            <small
                                                                class="text-muted">{{ $notification_item['date'] }}</small>
                                                        </div>
                                                    </a>
                                                    @if ($notification_item['seen'] == false)
                                                        <button class="btn p-0" data-toggle="tooltip"
                                                            data-title="{{ translate('New') }}">
                                                            <span
                                                                class="badge badge-md  badge-dot badge-circle badge-primary"></span>
                                                        </button>
                                                    @endif
                                                </li>
                                            @empty
                                                <li class="list-group-item">
                                                    <div class="text-center">
                                                        <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                                        <h4 class="h5">{{ translate('No Notifications') }}
                                                        </h4>
                                                    </div>
                                                </li>
                                            @endforelse
                                        </ul>
                                        <div class="border-top">
                                            <a href="{{ route('frontend.notifications') }}"
                                                class="btn btn-link btn-block">{{ translate('View All Notifications') }}</a>
                                        </div>
                                    </div>
                                </li>
                                @php
                                    $unseen_chat_threads = chat_threads();
                                    $unseen_chat_thread_count = count($unseen_chat_threads);
                                @endphp
                                <li class="dropdown d-none d-lg-block ml-2 mr-2">
                                    <a class="dropdown-toggle no-arrow position-relative p-2" data-toggle="dropdown"
                                        href="javascript:void(0);" role="button" aria-haspopup="false"
                                        aria-expanded="false">
                                        {{-- <i class="las la-comment-dots la-2x"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19"
                                            viewBox="0 0 18 19">
                                            <g id="Layer_2" data-name="Layer 2" transform="translate(-2 -3)">
                                                <g id="message-square">
                                                    <path id="Path_25814" data-name="Path 25814"
                                                        d="M17,3H5A3,3,0,0,0,2,6V21a1,1,0,0,0,1.51.86L8,19.14A1,1,0,0,1,8.55,19H17a3,3,0,0,0,3-3V6A3,3,0,0,0,17,3Zm1,13a1,1,0,0,1-1,1H8.55A3,3,0,0,0,7,17.43l-3,1.8V6A1,1,0,0,1,5,5H17a1,1,0,0,1,1,1Z"
                                                        fill="white" />
                                                    <rect id="Rectangle_16201" data-name="Rectangle 16201"
                                                        width="10" height="2" rx="1"
                                                        transform="translate(6 8)" fill="white" />
                                                    <rect id="Rectangle_16202" data-name="Rectangle 16202"
                                                        width="10" height="2" rx="1"
                                                        transform="translate(6 12)" fill="white" />
                                                </g>
                                            </g>
                                        </svg>
                                        @if ($unseen_chat_thread_count > 0)
                                            <span
                                                class="badge badge-circle badge-primary position-absolute absolute-top-right">{{ $unseen_chat_thread_count }}</span>
                                        @endif
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                                        <div class="p-3 bg-light border-bottom">
                                            <h6 class="mb-0">{{ translate('Messages') }}</h6>
                                        </div>

                                        <div class="c-scrollbar-light" style="overflow-y:auto;max-height:300px;">
                                            @forelse ($unseen_chat_threads as $key => $chat_thread_id)
                                                @php
                                                    $chat = \App\Models\Chat::where('chat_thread_id', $chat_thread_id)
                                                        ->latest()
                                                        ->first();
                                                @endphp
                                                @if ($chat != null)
                                                    <a href="{{ route('all.messages') }}"
                                                        class="chat-user-item p-3 d-block text-inherit hov-bg-soft-primary">
                                                        <div class="media">
                                                            <span class="avatar avatar-sm mr-3 flex-shrink-0">
                                                                @if (isClient())
                                                                    @if ($chat->chatThread->receiver->photo != null)
                                                                        <img
                                                                            src="{{ custom_asset($chat->chatThread->receiver->photo) }}">
                                                                    @else
                                                                        <img
                                                                            src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                                                                    @endif
                                                                    @if (Cache::has('user-is-online-' . $chat->chatThread->receiver->id))
                                                                        <span
                                                                            class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                                                    @else
                                                                        <span
                                                                            class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                                                    @endif
                                                                @else
                                                                    @if ($chat->chatThread->sender->photo != null)
                                                                        <img
                                                                            src="{{ custom_asset($chat->chatThread->sender->photo) }}">
                                                                    @else
                                                                        <img
                                                                            src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                                                                    @endif
                                                                    @if (Cache::has('user-is-online-' . $chat->chatThread->sender->id))
                                                                        <span
                                                                            class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                                                    @else
                                                                        <span
                                                                            class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                                                    @endif
                                                                @endif
                                                            </span>
                                                            <div class="media-body minw-0">
                                                                @if (isClient())
                                                                    <h6 class="mt-0 mb-1 fs-14 text-truncate">
                                                                        {{ $chat->chatThread->receiver->name }}
                                                                    </h6>
                                                                @else
                                                                    <h6 class="mt-0 mb-1 fs-14 text-truncate">
                                                                        {{ $chat->chatThread->sender->name }}</h6>
                                                                @endif
                                                                @if ($chat->message != null)
                                                                    <div class="fs-12 text-truncate opacity-60">
                                                                        {{ $chat->message }}</div>
                                                                @else
                                                                    <div class="fs-12 text-truncate opacity-60">
                                                                        {{ translate('Attachments') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="ml-2 text-right">
                                                                <div class="opacity-60 fs-10 mb-1">
                                                                    {{ Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                @endif
                                            @empty
                                                <div class="text-center">
                                                    <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                                    <h4 class="h5">{{ translate('No New Messages') }}</h4>
                                                </div>
                                            @endforelse
                                        </div>
                                        <div class="border-top">
                                            <a href="{{ route('all.messages') }}"
                                                class="btn btn-link btn-block">{{ translate('View All Messages') }}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown ml-3 d-none d-lg-block">
                                    <button class="btn p-0 dropdown-toggle no-arrow" type="button"
                                        data-toggle="dropdown">
                                        <span class="avatar avatar-sm border">
                                            @if (Auth::user()->photo != null)
                                                <img src="{{ custom_asset(Auth::user()->photo) }}">
                                            @else
                                                <img
                                                    src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                                            @endif
                                        </span>
                                        <span class="ml-2 text-left d-none d-xl-inline-block text-white">
                                            <span class="h6 d-block mb-0 text-white">{{ Auth::user()->name }}</span>
                                            @if (Auth::check() && isFreelancer())
                                                <span
                                                    class="small fw-500  text-white">{{ single_price(Auth::user()->profile->balance) }}</span>
                                            @endif
                                        </span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton">
                                        <div class="px-3 py-2">
                                            <span class="h6 d-block mb-0 text-black">{{ Auth::user()->name }}</span>
                                            <span
                                                class="small  d-block text-truncate text-black">{{ Auth::user()->email }}</span>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-black" href="{{ route('dashboard') }}">
                                            <i class="las la-tachometer-alt"></i>
                                            {{ translate('Dashboard') }}
                                        </a>
                                        <a class="dropdown-item text-black" href="{{ route('logout') }}">
                                            <i class="las la-sign-out-alt"></i>
                                            {{ translate('Log Out') }}
                                        </a>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>

            </div>

        </div>
    </nav>
    <div>
        <div class="col-sm-12 announcement-icon-div">
            <div class="announcement-icon">
                <i class="fa fa-bullhorn"></i>
            </div>
            <div class="col-sm-11 announcement-bar">
                <div class="col-sm-12 scrolling-text">
                    <p style="color:white !important">This is a sample announcement. </p>
                </div>

            </div>
            <div class="col-sm-1 ">
                <button class="close-button">×</button>
            </div>

        </div>

</header>
