<!-- Stripe -->
<div class="col-lg-6">
    <div class="card card_shadow">
        <div class="card-header">
            <h5 class="mb-0 h6">{{translate("Stripe Configuration")}}</h5>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="payment_method" value="stripe">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('stripe_activation_checkbox') == 1) checked @endif name="stripe_activation_checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('STRIPE KEY')}}</label>
                    <input type="hidden" name="types[]" value="STRIPE_KEY">
                    <input type="text" name="STRIPE_KEY" class="form-control" value="{{env('STRIPE_KEY')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('STRIPE SECRET')}}</label>
                    <input type="hidden" name="types[]" value="STRIPE_SECRET">
                    <input type="password" name="STRIPE_SECRET" class="form-control" value="{{env('STRIPE_SECRET')}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="align-self-center" for="rtl">{{translate('Sandbox Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('stripe_sandbox_checkbox') == 1) checked @endif name="stripe_sandbox_checkbox">
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