<style>
    .title {
        color: #b0c0d3 !important;
    }

    .a-ref {
        color: #eff2f6 !important;
        text-decoration: none;
        font-size: small !important;
        font-weight: normal !important;
        font-family: "Trebuchet MS", "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", Verdana, "Verdana Ref", sans-serif;
    }

    .a-ref:hover {
        text-decoration: underline !important;
    }

    .column {
        flex: 1;
        padding: 10px;
        box-sizing: border-box;
    }

    .footer-pages__page {
        margin-bottom: 10px;
        display: none;
        /* Initially hide all trade items */
    }

    .index-card {
        text-align: center;
        text-decoration: none;
        background-color: #0077cc;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }

    .index-card:hover {
        background-color: #005599;
    }



    @media (min-width: 1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 90% !important;
        }
    }
</style>
<footer class="aiz-footer " style="background: #343944">
    <div class="footer-content rounded-2" style="background: #343944">
        <div class="aiz-footer-widget"style="background:#343944">
            <div class="container"style="background:#343944 !important">
                <div class="aiz-front-widget mb-5">

                    <img src="{{ asset('public\assets\frontend\default\img\logo\builder_valley_footer.png') }}"
                        alt="MyBuilder - A new way to find and hire tradespeople" height="40" class="mb-4">

                    {{-- <div class="fs-14 text-soft-info-light">
                        @php
                            echo get_setting('about_description_footer');
                        @endphp
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 data1">
                        <div class="aiz-front-widget mb-5">
                            <h4 class="title">{{ get_setting('widget_one') }}</h4>
                            <ul class="menu ">
                                @if (!empty(get_setting('widget_one_labels')))
                                    @foreach (json_decode(get_setting('widget_one_labels'), true) as $key => $value)
                                        <li>
                                            <a class="a-ref"
                                                href="{{ json_decode(get_setting('widget_one_links'), true)[$key] }}">{{ $value }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 data1">
                        <div class="aiz-front-widget mb-5">
                            <h4 class="title">{{ get_setting('widget_two') }}</h4>
                            <ul class="menu">
                                @if (!empty(get_setting('widget_two_labels')))
                                    @foreach (json_decode(get_setting('widget_two_labels'), true) as $key => $value)
                                        <li>
                                            <a class="a-ref"
                                                href="{{ json_decode(get_setting('widget_two_links'), true)[$key] }}">{{ $value }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 data1">
                        <div class="aiz-front-widget mb-5">
                            <h4 class="title">{{ get_setting('widget_three') }}</h4>
                            <ul class="menu">
                                @if (!empty(get_setting('widget_three_labels')))
                                    @foreach (json_decode(get_setting('widget_three_labels'), true) as $key => $value)
                                        <li>
                                            <a class="a-ref"
                                                href="{{ json_decode(get_setting('widget_three_links'), true)[$key] }}">{{ $value }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 data1">
                        <div class="aiz-front-widget mb-5">
                            <h4 class="title">{{ get_setting('widget_four') }}</h4>
                            <ul class="menu">
                                @if (!empty(get_setting('widget_four_labels')))
                                    @foreach (json_decode(get_setting('widget_four_labels'), true) as $key => $value)
                                        <li>
                                            <a class="a-ref"
                                                href="{{ json_decode(get_setting('widget_four_links'), true)[$key] }}">{{ $value }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>





                    <section class=" all_trades" style=" background:#343944 !important">
                        <p class="title">ALL TRADES COVERED</p>

                        <div class="row-fluid">
                            <div class="row">

                                @isset($categories)
                                    @php
                                        $categoriesCount = count($categories);
                                        $columnsCount = 4; // Set the number of columns to 4
                                        $itemsPerColumn = ceil($categoriesCount / $columnsCount); // Calculate items per column dynamically
                                        $currentCategoryIndex = 0; // Initialize the current category index
                                    @endphp

                                    @for ($i = 0; $i < $columnsCount; $i++)
                                        <div class="col-md-3 data  ">
                                            <ul class="hp-trades__trade-list span6 unstyled">
                                                @for ($j = 0; $j < $itemsPerColumn; $j++)
                                                    @if ($currentCategoryIndex < $categoriesCount)
                                                        @php
                                                            $category = $categories[$currentCategoryIndex];
                                                            $currentCategoryIndex++;
                                                        @endphp
                                                        <li class="hp-trades__trade">
                                                            <a class="a-ref"
                                                                title="Find the right architectural designer for your project in UK."
                                                                @php $cat_url = route('services.category',['category_slug' => $category->slug]) @endphp
                                                                href="{{ $cat_url }}">
                                                                {{ $category->name }}</a>
                                                        </li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </div>
                                    @endfor
                                @endisset
                            </div>
                        </div>


                    </section>










                </div>
                <div class="row">
                    <div class="col-xl-6 col-sm-6">
                        <div class="aiz-front-widget d-inline-block d-md-block mb-4">
                            <h4 class="title">{{ translate('Subscription') }}</h4>
                            <form class="form-inline" method="POST" action="{{ route('subscribers.store') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control"
                                        placeholder="{{ translate('Your Email Address') }}" name="email" required>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ translate('Subscribe') }}
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="aiz-front-widget mb-5">
                            <h4 class="title">{{ get_setting('social_widget_title') }}</h4>
                            <ul class="list-inline social">
                                @if (!empty(get_setting('facebook_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('facebook_link') }}" target="_blank"
                                            class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                                @if (!empty(get_setting('twitter_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('twitter_link') }}" target="_blank" class="twitter"><i
                                                class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                                @if (!empty(get_setting('instagram_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('instagram_link') }}" target="_blank"
                                            class="instagram"><i class="lab la-instagram"></i></a>
                                    </li>
                                @endif
                                @if (!empty(get_setting('youtube_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('youtube_link') }}" target="_blank" class="youtube"><i
                                                class="lab la-youtube"></i></a>
                                    </li>
                                @endif
                                @if (!empty(get_setting('linkedin_link')))
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('linkedin_link') }}" target="_blank"
                                            class="linkedin"><i class="lab la-linkedin-in"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    @if (get_setting('app_link_section_show') == 'on')
                        <div class="col-xl-3 col-sm-6">
                            <div class="aiz-front-widget mb-5">
                                <h4 class="title">{{ translate('Mobile Apps') }}</h4>
                                <ul class="list-inline apps">
                                    @if (!empty(get_setting('app_link_android')))
                                        <li class="list-inline-item">
                                            <a href="{{ get_setting('app_link_android') }}" target="_blank"
                                                class="facebook"><i class="lab la-android"></i></a>
                                        </li>
                                    @endif
                                    @if (!empty(get_setting('app_link_apple')))
                                        <li class="list-inline-item">
                                            <a href="{{ get_setting('app_link_apple') }}" target="_blank"
                                                class="twitter"><i class="lab la-apple"></i></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>


            </div>




            <!-- .aiz-footer-widget -->
            <div class="container">
                <hr style="background: #666666; filter: drop-shadow(0px 10px 30px rgba(0, 0, 0, 0.08));">
            </div>
            <div class="aiz-footer-copyright fs-12  pt-4 ">
                <div class="container">
                    <div class="row align-items-center" style=" background: #343944 !important;">

                        @if (get_setting('language_switcher') == 'on')
                            <div class="col-6 text-secondary">
                                <div current-verison="{{ get_setting('current_version') }}">
                                    {!! get_setting('copyright_text') !!}
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="dropdown dropup d-inline-block ml-auto">
                                    @php
                                        if (Session::has('locale')) {
                                            $locale = Session::get('locale', Config::get('app.locale'));
                                        } else {
                                            $locale = env('DEFAULT_LANGUAGE');
                                        }
                                        $lang = \App\Models\Language::where('code', $locale)->first();
                                    @endphp
                                    @if ($lang != null)
                                        <a class="dropdown-toggle text-secondary no-arrow py-2" data-toggle="dropdown"
                                            href="javascript:void(0);" role="button" aria-haspopup="false"
                                            aria-expanded="false">
                                            <img src="{{ my_asset('assets/frontend/default/img/flags/' . $lang->code . '.png') }}"
                                                height="11">
                                            <span class="ml-2">{{ $lang->name }}</span>
                                        </a>
                                    @endif
                                    <div class="dropdown-menu" style="">
                                        @foreach (\App\Models\Language::where('enable', 1)->get() as $key => $language)
                                            <a href="{{ route('language.change', $language->code) }}"
                                                class="dropdown-item">
                                                <img src="{{ my_asset('assets/frontend/default/img/flags/' . $language->code . '.png') }}"
                                                    height="11">
                                                <span class="ml-2">{{ $language->name }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col text-secondary">
                                <div current-verison="{{ get_setting('current_version') }}">
                                    {!! get_setting('copyright_text') !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>









        </div>
</footer>
<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom border-top rounded-top bg-white shadow-lg"
    style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important;">
    <div class="d-flex justify-content-around align-items-center">
        <a href="{{ route('home') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
            <i class="las la-home fs-20 {{ areActiveRoutes(['home'], 'opacity-100 text-primary') }} opacity-60"></i>
            <span
                class="d-block fs-10 fw-600 {{ areActiveRoutes(['home'], 'opacity-100 fw-600') }} opacity-60">{{ translate('Home') }}</span>
        </a>
        <a href="{{ route('frontend.notifications') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
            <span class="d-inline-block position-relative px-2">
                <i
                    class="las la-bell fs-20 {{ areActiveRoutes(['frontend.notifications'], 'opacity-100 text-primary') }} opacity-60"></i>
                @php $noti_num = \App\Utility\NotificationUtility::get_my_notifications(10,true,true); @endphp
                @if ($noti_num > 0)
                    <span
                        class="badge badge-circle badge-primary position-absolute absolute-top-right">{{ $noti_num }}</span>
                @endif
            </span>
            <span
                class="d-block fs-10 fw-600 {{ areActiveRoutes(['frontend.notifications'], 'opacity-100 fw-600') }} opacity-60">{{ translate('Notifications') }}</span>
        </a>
        <a href="{{ route('all.messages') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
            <span class="d-inline-block position-relative px-2">
                <i
                    class="las la-comment-dots fs-20 {{ areActiveRoutes(['all.messages'], 'opacity-100 text-primary') }} opacity-60"></i>
                @php
                    $unseen_chat_threads = chat_threads();
                    $unseen_chat_thread_count = count($unseen_chat_threads);
                @endphp
                @if ($unseen_chat_thread_count > 0)
                    <span
                        class="badge badge-circle badge-primary position-absolute absolute-top-right">{{ $unseen_chat_thread_count }}</span>
                @endif
            </span>
            <span
                class="d-block fs-10 fw-600 {{ areActiveRoutes(['all.messages'], 'opacity-100 fw-600') }} opacity-60">{{ translate('Messages') }}</span>
        </a>
        @if (Auth::check())
            @if (isClient() || isFreelancer())
                <a href="javascript:void(0)"
                    class="text-reset flex-grow-1 mobile-side-nav-thumb pb-2 pt-3 text-center"
                    data-toggle="class-toggle" data-target=".aiz-mobile-side-nav">
                    <span class="d-block mx-auto">
                        @if (Auth::user()->photo != null)
                            <img src="{{ custom_asset(Auth::user()->photo) }}" class="rounded-circle size-20px">
                        @else
                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                                class="rounded-circle size-20px">
                        @endif
                        @if (Cache::has('user-is-online-' . Auth::user()->id))
                            <span class="badge badge-dot badge-success badge-circle badge-status"></span>
                        @else
                            <span class="badge badge-dot badge-secondary badge-circle badge-status"></span>
                        @endif
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @else
                <a href="{{ route('admin.dashboard') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
                    <span class="d-block mx-auto">
                        @if (Auth::user()->photo != null)
                            <img src="{{ custom_asset(Auth::user()->photo) }}" class="rounded-circle size-20px">
                        @else
                            <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                                class="rounded-circle size-20px">
                        @endif
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
        @else
            <a href="{{ route('login') }}" class="text-reset flex-grow-1 pb-2 pt-3 text-center">
                <span class="d-block mx-auto">
                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}"
                        class="rounded-circle size-20px">
                </span>
                <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
            </a>
        @endif
    </div>
</div>
@if (Auth::check())
    @if (isClient())
        <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035 sidebar-right">
            <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle"
                data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
            <div class="collapse-sidebar bg-white">
                @include('frontend.default.user.client.inc.sidebar')
            </div>
        </div>
    @elseif(isFreelancer())
        <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035 sidebar-right">
            <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle"
                data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
            <div class="collapse-sidebar bg-white">
                @include('frontend.default.user.freelancer.inc.sidebar')
            </div>
        </div>
    @endif
@endif
