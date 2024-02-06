<!-- Instamojo -->
<div class="col-lg-6">
    <div class="card card_shadow">
        <div class="card-header">
            <h5 class="mb-0 h6">{{translate("Instamojo Configuration")}}</h5>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="payment_method" value="instamojo">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('instamojo_activation_checkbox') == 1) checked @endif name="instamojo_activation_checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('API Key')}}</label>
                    <input type="hidden" name="types[]" value="INSTAMOJO_API_KEY">
                    <input type="text" name="INSTAMOJO_API_KEY" class="form-control" value="{{env('INSTAMOJO_API_KEY')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Auth Token')}}</label>
                    <input type="hidden" name="types[]" value="INSTAMOJO_AUTH_TOKEN">
                    <input type="text" name="INSTAMOJO_AUTH_TOKEN" class="form-control" value="{{env('INSTAMOJO_AUTH_TOKEN')}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="align-self-center" for="rtl">{{translate('Sandbox Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('instamojo_sandbox_checkbox') == 1) checked @endif name="instamojo_sandbox_checkbox">
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