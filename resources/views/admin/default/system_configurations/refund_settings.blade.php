@extends('admin.default.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate("Refund Settings")}}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('system_configuration.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{ translate('Project Cancellation Percentage') }}</label>
                            <div class="input-group mb-1">
                                <input type="hidden" name="types[]" value="refund_percentage_on_project_cancellation">
                                <input type="number" min="1" max="100" step="0.01" name="refund_percentage_on_project_cancellation" value="{{ get_setting('refund_percentage_on_project_cancellation') }}" class="form-control" placeholder="Ex: 100">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="alert alert-info">
                                {{ translate("On project cancelation, this amount will be refunded to the client and deducted from the freelancer balance.") }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ translate('Service Cancellation Percentage') }}</label>
                            <div class="input-group mb-1">
                                <input type="hidden" name="types[]" value="refund_percentage_on_service_cancellation">
                                <input type="number" min="1" max="100" step="0.01" name="refund_percentage_on_service_cancellation" value="{{ get_setting('refund_percentage_on_service_cancellation') }}" class="form-control" placeholder="Ex: 100">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="alert alert-info">
                                {{ translate("On service cancelation, this amount will be refunded to the client and deducted from the freelancer balance.") }}
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
