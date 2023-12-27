@extends('admin.default.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate("Minimum Amount For Withdraw Request")}}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('freelancer_payment_config_update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="types[]" value="min_withdraw_amount">
                        <div class="form-group">
							<label>{{ translate('Minimum Amount') }}</label>
							<input type="number" min="1" step="0.01" name="min_withdraw_amount" value="{{ \App\Models\SystemConfiguration::where('type', 'min_withdraw_amount')->first()->value }}" class="form-control" placeholder="{{ translate('Minimum Amount') }}">
							<small class="form-text text-muted"></small>
						</div>
                        <div class="alert alert-info">
                            {{ translate("Freelancer need to have minimum this amount of balance in his account to make a withdrawal request.") }}
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end card-->
@endsection
