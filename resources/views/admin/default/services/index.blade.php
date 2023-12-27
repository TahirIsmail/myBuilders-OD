@extends('admin.default.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form class="" id="project_payments" action="" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">{{translate('All Services')}}</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="{{ translate('Search by project name') }}" name="search" @isset($sort_search) value="{{ $sort_search }}" @endisset>
                            <div class="input-group-append">
                                <button class="btn btn-light" type="submit">
                                    <i class="las la-search la-rotate-270"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ translate('Service Title') }}</th>
                            <th>{{ translate('Service Owner') }}</th>
                            <th>{{ translate('Starts At') }}</th>
                            <th>{{ translate('Service Created At') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $key => $service)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><a target="_blank" href="{{ route('service.show', $service->slug) }}">{{ $service->title }}</a></td>
                                <td><a target="_blank" href="{{ route('freelancer.details', $service->user->user_name) }}">{{ $service->user->name }}</a></td>
                                <td>{{ count($service->service_packages) > 0 ? single_price($service->service_packages[0]->service_price) : single_price(0)}}</td>
                                <td>{{ $service->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination aiz-pagination-center">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
