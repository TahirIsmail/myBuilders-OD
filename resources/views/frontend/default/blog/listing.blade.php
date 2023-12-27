@extends('frontend.default.layouts.app')

@section('content')

<section class="mt-4 pb-4">
    <div class="container">
        <form id="blog-filter-form" action="" method="GET">
            <div class="row gutters-15">
                <!-- Sidebar -->
                <div class="col-lg-3">
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
                                    <div class="aiz-checkbox-list">
                                        @foreach($categories as $category)
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="category[]" value="{{ $category->slug }}" @if (in_array($category->id, $category_ids))
                                                    checked
                                                @endif onchange="applyFilter()"> {{ $category->category_name }}
                                                <span class="aiz-square-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                    </div>
                </div>

                <!-- Blog List -->
                <div class="col-lg-9">
                    <div class="py-2 mt-1 d-flex align-items-center justify-content-between">
                        <h1 class="fw-600 h4">{{ translate('Blog')}}</h1>
                        <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                            <i class="las la-filter"></i>
                        </button>
                    </div>
                    <div class="card-columns">
                        @foreach($blogs as $blog)
                            <div class="card mb-3 overflow-hidden rounded-2 border-gray-light hov-box">
                                <a href="{{ route('blog.details', $blog->slug) }}" class="text-reset d-block h-220px">
                                    <img
                                        src="{{ custom_asset($blog->banner) }}"
                                        alt="{{ $blog->title }}"
                                        class="img-fit h-100 lazyload"
                                    >
                                </a>
                                <div class="p-4">
                                    <h2 class="fs-18 fw-600 mb-1">
                                        <a href="{{ route('blog.details', $blog->slug) }}" class="text-dark fs-16 fw-700" title="{{ $blog->title }}">
                                            {{ \Illuminate\Support\Str::limit($blog->title, 70, $end = '...') }}
                                        </a>
                                    </h2>
                                    @if($blog->category != null)
                                    <div class="mt-3 text-primary fs-14 fw-700">
                                        {{ $blog->category->category_name }}
                                    </div>
                                    @endif
                                    <p class="mb-4 fs-14 text-secondary opacity-70">{{ $blog->created_at ? date('d.m.Y',strtotime($blog->created_at)) : '' }}</p>
                                </div>
                            </div>
                        @endforeach
        
                    </div>
                    <div class="aiz-pagination aiz-pagination-center mt-4">
                        {{ $blogs->appends(request()->input())->links() }}
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
            $('#blog-filter-form').submit();
        }
    </script>
@endsection
