<!-- Flutterwave -->
<div class="col-lg-6">
    <div class="card card_shadow">
        <div class="card-header">
            <h5 class="mb-0 h6">{{translate("Flutterwave Configuration")}}</h5>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="payment_method" value="flutterwave ">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('flutterwave_activation_checkbox') == 1) checked @endif name="flutterwave_activation_checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Public Key')}}</label>
                    <input type="hidden" name="types[]" value="FLW_PUBLIC_KEY">
                    <input type="text" name="FLW_PUBLIC_KEY" class="form-control" value="{{env('FLW_PUBLIC_KEY')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Secret Key')}}</label>
                    <input type="hidden" name="types[]" value="FLW_SECRET_KEY">
                    <input type="password" name="FLW_SECRET_KEY" class="form-control" value="{{env('FLW_SECRET_KEY')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Secret Hash')}}</label>
                    <input type="hidden" name="types[]" value="FLW_SECRET_HASH">
                    <input type="text" name="FLW_SECRET_HASH" class="form-control" value="{{env('FLW_SECRET_HASH')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Currency Code')}}</label>
                    <input type="hidden" name="types[]" value="FLW_PAYMENT_CURRENCY_CODE">
                    <input type="text" name="FLW_PAYMENT_CURRENCY_CODE" class="form-control" value="{{env('FLW_PAYMENT_CURRENCY_CODE')}}">
                </div>
                <div class="form-group mb-3 text-right">
                    <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>