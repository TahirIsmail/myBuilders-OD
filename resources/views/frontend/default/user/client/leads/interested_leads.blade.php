@extends('frontend.default.layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.client.inc.sidebar')

                <div class="aiz-user-panel-fix d-flex">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card w-100 rounded-2 border-gray-light">
                                    <div class="card-header">
                                        <h5 class="mb-0 h6">{{ translate('List of services requested for cancellation') }}</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="text-primary">
                                                <i class="bi bi-circle"></i> Install and bidet into downstairs toilet
                                            </li>
                                            <li>
                                                <i class="no-space mb-tools list-item__detail-icon"></i> Bathroom Fitting
                                            </li>
                                            <li>
                                                <i  class="list-item__detail list-item__detail--location"></i> Stockport 8 miles ></i> Stockport 8 miles
                                            </li>
                                            <li>
                                                <i class="no-space list-item__detail-icon mb-calendar"></i> Leads sent 5 hours ago
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                
                            <div class="col-md-8">
                                <div class="card w-100 rounded-2 border-gray-light">
                                    <div class="card-header">
                                        <h5 class="mb-0 h6">{{ translate('List of services requested for cancellation') }}</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- Content for the col-md-8 div -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection
