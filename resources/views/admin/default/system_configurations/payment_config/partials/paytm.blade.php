<!-- Paytm  -->
<div class="col-lg-6">
    <div class="card card_shadow">
        <div class="card-header">
            <h5 class="mb-0 h6">{{translate("Paytm Configuration")}}</h5>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="payment_method" value="paytm">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('paytm_activation_checkbox') == 1) checked @endif name="paytm_activation_checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Environment')}}</label>
                    <input type="hidden" name="types[]" value="PAYTM_ENVIRONMENT">
                    <input type="text" name="PAYTM_ENVIRONMENT" class="form-control" value="{{env('PAYTM_ENVIRONMENT')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Merchant ID')}}</label>
                    <input type="hidden" name="types[]" value="PAYTM_MERCHANT_ID">
                    <input type="text" name="PAYTM_MERCHANT_ID" class="form-control" value="{{env('PAYTM_MERCHANT_ID')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Merchant Key')}}</label>
                    <input type="hidden" name="types[]" value="PAYTM_MERCHANT_KEY">
                    <input type="text" name="PAYTM_MERCHANT_KEY" class="form-control" value="{{env('PAYTM_MERCHANT_KEY')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Merchant Website')}}</label>
                    <input type="hidden" name="types[]" value="PAYTM_MERCHANT_WEBSITE">
                    <input type="text" name="PAYTM_MERCHANT_WEBSITE" class="form-control" value="{{env('PAYTM_MERCHANT_WEBSITE')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Paytm Channel')}}</label>
                    <input type="hidden" name="types[]" value="PAYTM_CHANNEL">
                    <input type="text" name="PAYTM_CHANNEL" class="form-control" value="{{env('PAYTM_CHANNEL')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Industry Type')}}</label>
                    <input type="hidden" name="types[]" value="PAYTM_INDUSTRY_TYPE">
                    <input type="text" name="PAYTM_INDUSTRY_TYPE" class="form-control" value="{{env('PAYTM_INDUSTRY_TYPE')}}">
                </div>
                <div class="form-group mb-3 text-right">
                    <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>