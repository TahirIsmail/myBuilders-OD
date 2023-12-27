<!-- Mercadopago -->
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">{{translate("Mercadopago Configuration")}}</h5>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="payment_method" value="mercadopago ">
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label class="align-self-center" for="rtl">{{translate('Activation')}}</label>
                        </div>
                        <div class="col-4">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" @if(\App\Utility\SettingsUtility::get_settings_value('mercadopago_activation_checkbox') == 1) checked @endif name="mercadopago_activation_checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Mercadopago Key')}}</label>
                    <input type="hidden" name="types[]" value="MERCADOPAGO_KEY">
                    <input type="text" name="MERCADOPAGO_KEY" class="form-control" value="{{env('MERCADOPAGO_KEY')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('Mercadopago Access')}}</label>
                    <input type="hidden" name="types[]" value="MERCADOPAGO_ACCESS">
                    <input type="password" name="MERCADOPAGO_ACCESS" class="form-control" value="{{env('MERCADOPAGO_ACCESS')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="types">{{translate('MERCADOPAGO CURRENCY')}}</label>
                    <input type="hidden" name="types[]" value="MERCADOPAGO_CURRENCY">
                    <input type="text" name="MERCADOPAGO_CURRENCY" class="form-control" value="{{env('MERCADOPAGO_CURRENCY')}}"><br>
                    <div class="alert alert-primary" role="alert">
                        Currency must be <b>es-AR</b> or <b>es-CL</b> or <b>es-CO</b> or <b>es-MX</b> or
                        <b>es-VE</b> or <b>es-UY</b> or <b>es-PE</b> or <b>pt-BR</b><br>
                        If kept empty, <b>en-US</b> will be used automatically
                    </div>
                </div>
                <div class="form-group mb-3 text-right">
                    <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>