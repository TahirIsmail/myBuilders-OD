<!-- SSlcommerz -->
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">{{translate("SSlcommerz Configuration")}}</h5>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="payment_method" value="sslcommerz">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('sslcommerz_activation_checkbox') == 1) checked @endif name="sslcommerz_activation_checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Sslcz Store Id')}}</label>
                    <input type="hidden" name="types[]" value="SSLCZ_STORE_ID">
                    <input type="text" name="SSLCZ_STORE_ID" class="form-control" value="{{env('SSLCZ_STORE_ID')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Sslcz store password')}}</label>
                    <input type="hidden" name="types[]" value="SSLCZ_STORE_PASSWD">
                    <input type="password" name="SSLCZ_STORE_PASSWD" class="form-control" value="{{env('SSLCZ_STORE_PASSWD')}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label class="align-self-center" for="rtl">{{translate('Sslcommerz Sandbox Mode')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('sslcommerz_sandbox_checkbox') == 1) checked @endif name="sslcommerz_sandbox_checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3 text-right">
                    <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>