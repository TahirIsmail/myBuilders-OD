@extends('frontend.default.layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start">
            @include('frontend.default.user.freelancer.inc.sidebar')

            <div class="aiz-user-panel">
                <div class="aiz-titlebar mb-4">
                    <div class="row align-items-center">
                        <div class="col d-flex justify-content-between">
                            <h1 class="fs-16 fw-700">{{ translate('Services') }}</h1>
                            <a href="{{ route('service.create') }}" class="btn btn-primary rounded-1"><i class="la la-plus" aria-hidden="true"></i>{{ translate('Add New Service') }}</a>
                        </div>
                    </div>
                </div>

                <div class="row gutters-10">
                    @foreach($services as $service)
                        <div class="col-lg-4">
                            <div class="card overflow-hidden rounded-2 border-gray-light hov-box">
                                <a href="{{ route('service.show', $service->slug) }}">
                                    @if($service->image != null)
                                        <img src="{{ custom_asset($service->image) }}" class="card-img-top img-fit" alt="{{ translate('Service Image') }}" height="212">
                                    @else
                                        <img src="{{ my_asset('assets/frontend/default/img/placeholder-service.jpg') }}" class="card-img-top img-fit" alt="{{ translate('Service Image') }}" height="212">
                                    @endif
                                </a>
                                <div class="card-body">
                                    <div class="d-flex mb-2">
                                        <span class="mr-2">
                                            @if (Auth::user()->photo != null)
                                                <img src="{{ custom_asset(Auth::user()->photo) }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                            @else
                                                <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}" alt="{{ translate('image') }}" height="35" width="35" class="rounded-circle">
                                            @endif
                                        </span>
                                        <span class="d-flex flex-column justify-content-center">
                                            <a href="{{ route('freelancer.details', $service->user->user_name) }}" class="text-secondary"><span class="font-weight-bold">{{ Auth::user()->name }}</span></a>
                                        </span>
                                    </div>

                                   <a href="{{ route('service.show', $service->slug) }}" class="text-dark"  title="{{ $service->title }}"><h5 class="card-title fs-16 fw-700 h-40px">{{ \Illuminate\Support\Str::limit($service->title, 40, $end='...') }}</h5></a>
                                </div>
                                <div class="card-footer justify-content-between">
                                    <span class="btn btn-primary btn-sm rounded-1"><a href="{{ route('service.edit', $service->slug) }}" class="text-white">{{ translate('Edit') }}</a></span>
                                    <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{ route('service.destroy', $service->slug) }}" title="Delete">
                                        <i class="las la-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="aiz-pagination aiz-pagination-center">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
