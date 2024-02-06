<!-- Paypal -->
<div class="col-lg-6">
    <div class="card card_shadow">
        <div class="card-header">
            <h5 class="mb-0 h6">{{translate("Paypal Configuration")}}</h5>
        </div>
        <div class="card-body ">
            <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="payment_method" value="paypal">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('paypal_activation_checkbox') == 1) checked @endif name="paypal_activation_checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('PAYPAL CLIENT ID')}}</label>
                    <input type="hidden" name="types[]" value="PAYPAL_CLIENT_ID">
                    <input type="text" name="PAYPAL_CLIENT_ID" class="form-control" value="{{env('PAYPAL_CLIENT_ID')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('PAYPAL CLIENT SECRET')}}</label>
                    <input type="hidden" name="types[]" value="PAYPAL_CLIENT_SECRET">
                    <input type="password" name="PAYPAL_CLIENT_SECRET" class="form-control" value="{{env('PAYPAL_CLIENT_SECRET')}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="align-self-center" for="rtl">{{translate('Sandbox Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('paypal_sandbox_checkbox') == 1) checked @endif name="paypal_sandbox_checkbox">
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
</div> <!-- end card-body -->