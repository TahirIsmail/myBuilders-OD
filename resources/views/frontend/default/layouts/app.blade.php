@php
    if(Session::has('locale')){
        $locale = Session::get('locale', Config::get('app.locale'));
    }
    else{
        $locale = env('DEFAULT_LANGUAGE');
    }
    $lang = \App\Models\Language::where('code', $locale)->first();
@endphp
<!DOCTYPE html>
@if($lang != null && $lang->rtl == 1)
<html dir="rtl" lang="en">
@else
<html lang="en">
@endif
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="app-url" content="{{ getBaseURL() }}">
	<meta name="file-base-url" content="{{ getFileBaseURL() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/regular.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Title -->
    <title>@yield('meta_title', get_setting('website_name').' | '.get_setting('site_motto'))</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description'))" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords'))">

    @yield('meta')

    @if(!isset($page))
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ config('app.name', env('APP_NAME')) }}">
    <meta itemprop="description" content="{{ get_setting('meta_description') }}">
    <meta itemprop="image" content="{{ custom_asset( get_setting('meta_image') ) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ config('app.name', env('APP_NAME')) }}">
    <meta name="twitter:description" content="{{ get_setting('meta_description') }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ custom_asset( get_setting('meta_image')) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ config('app.name', env('APP_NAME')) }}" />
    <meta property="og:type" content="Business Site" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta property="og:image" content="{{ custom_asset(get_setting('meta_image')) }}" />
    <meta property="og:description" content="{{ get_setting('meta_description') }}" />
    <meta property="og:site_name" content="{{ get_setting('website_name') }}" />
    @endif

    <!-- Favicon -->
    <link rel="icon" href="{{ custom_asset(get_setting('site_icon')) }}">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="{{ my_asset('assets/common/css/vendors.css') }}">
    @stack('component-styles')
    @if($lang != null && $lang->rtl == 1)
    <link rel="stylesheet" href="{{ my_asset('assets/common/css/bootstrap-rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ my_asset('assets/common/css/aiz-core.css?v=') }}{{ rand(1000,9999) }}">
    <link rel="stylesheet" href="{{ my_asset('assets/frontend/default/css/custom.css') }}">
    <link rel="stylesheet" href="{{ my_asset('assets/common/css/jssocials.css') }}">
    <link rel="stylesheet" href="{{ my_asset('assets/common/css/jssocials-theme-flat.css') }}">
    
    @if (get_setting('running_project_chat_activation_checkbox') == 1)
    <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>
    <script>
        // Your web app's Firebase configuration
        const firebaseConfig = {
          apiKey: "{{env('FCM_API_KEY')}}",
          authDomain: "{{env('FCM_AUTH_DOMAIN')}}",
          databaseURL: "{{env('FCM_DATABASE_URL')}}",
          projectId: "{{env('FCM_PROJECT_ID')}}",
          storageBucket: "{{env('FCM_STORAGE_BUCKET')}}",
          messagingSenderId: "{{env('FCM_SENDER_ID')}}",
          appId: "{{env('FCM_APP_ID')}}"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    @endif
   
    <script>
    	var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{{ translate('Nothing selected') }}',
            nothing_found: '{{ translate('Nothing found') }}',
            choose_file: '{{ translate('Choose file') }}',
            file_selected: '{{ translate('File selected') }}',
            files_selected: '{{ translate('Files selected') }}',
            items_selected: '{{ translate('Items selected') }}',
            add_more_files: '{{ translate('Add more files') }}',
            adding_more_files: '{{ translate('Adding more files') }}',
            drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
            browse: '{{ translate('Browse') }}',
            upload_complete: '{{ translate('Upload complete') }}',
            upload_paused: '{{ translate('Upload paused') }}',
            resume_upload: '{{ translate('Resume upload') }}',
            pause_upload: '{{ translate('Pause upload') }}',
            retry_upload: '{{ translate('Retry upload') }}',
            cancel_upload: '{{ translate('Cancel upload') }}',
            uploading: '{{ translate('Uploading') }}',
            processing: '{{ translate('Processing') }}',
            complete: '{{ translate('Complete') }}',
            file: '{{ translate('File') }}',
            files: '{{ translate('Files') }}',
        }
	</script>
    <style type="text/css">
        body{
            /* font-family: 'Montserrat', sans-serif; */
            font-family: 'Public Sans', sans-serif;
            font-weight: 500;
        }
        :root{
            --primary: {{ get_setting('base_color', '#4a90e2') }};
            --hov-primary: {{ get_setting('base_hov_color', '#0069d9') }};
            --soft-primary: {{ hex2rgba(get_setting('base_hov_color','#377dff'),.15) }};
            --soft-hov-primary: {{ hex2rgba(get_setting('base_hov_color','#0069d9'),.06) }};
        }
    </style>

    @if (get_setting('google_analytics_activation_checkbox') == 1)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_TRACKING_ID') }}"></script>

        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', '{{ env('GOOGLE_ANALYTICS_TRACKING_ID') }}');
        </script>
    @endif

    @if (get_setting('fb_pixel_activation_checkbox') == 1)
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', {{ env('FACEBOOK_PIXEL_ID') }});
          fbq('track', 'PageView');
        </script>
        <noscript>
          <img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}/&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endif
</head>
<body class="text-left position-relative">

    <div class="aiz-main-wrapper d-flex flex-column">

        @include('frontend/default.inc.header')

        <!-- ========== MAIN CONTENT ========== -->

        <div class="p-0 m-0 bg-white">
            @yield('content')
        </div>

        <!-- ========== END MAIN CONTENT ========== -->

        @include('frontend/default.inc.footer')

    </div>

    @if (get_setting('running_project_chat_activation_checkbox') == 1)
        @include('frontend.default.partials.realtime_chat')
    @endif

    
    @if (get_setting('show_website_popup') == 'on')
        <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
            <div class="absolute-full bg-black opacity-60"></div>
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
                <div class="modal-content position-relative border-0 rounded-0">
                    <div class="aiz-editor-data">
                        {!! get_setting('website_popup_content') !!}
                    </div>
                    @if (get_setting('show_subscribe_form') == 'on')
                        <div class="pb-5 pt-4 px-5">
                            <form class="" method="POST" action="{{ route('subscribers.store') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">
                                    {{ translate('Subscribe Now') }}
                                </button>
                            </form>
                        </div>
                    @endif
                    <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session" data-key="website-popup" data-value="removed" data-toggle="remove-parent" data-parent=".website-popup">
                        <i class="la la-close fs-20"></i>
                    </button>
                </div>
            </div>
        </div>
    @endif

    @yield('modal')
    

    @if (get_setting('facebook_chat_activation_checkbox') == 1)
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                  xfbml            : true,
                  version          : 'v3.3'
                });
              };

              (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div id="fb-root"></div>
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
          attribution=setup_tool
          page_id="{{ env('FACEBOOK_PAGE_ID') }}">
        </div>
    @endif

    <script src="{{ my_asset('assets/common/js/vendors.js') }}"></script>
    <script src="{{ my_asset('assets/common/js/jssocials.min.js') }}" ></script>
    <script src="{{ my_asset('assets/common/js/aiz-core.js?v=') }}{{ rand(1000,9999) }}"></script>

    <script type="text/javascript">
        @foreach (session('flash_notification', collect())->toArray() as $message)
            AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
        @endforeach
    </script>

    @yield('script')

</body>
</html>
