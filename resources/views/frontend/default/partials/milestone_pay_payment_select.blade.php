<form class="form-horizontal" action="{{ route('milestone.pay_to_admin') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="milestone_request_id" value="{{ $milestone->id }}">
    <div class="form-group">
        <label class="form-label">
            {{translate('Sending Amount')}}
            <span class="text-danger">*</span>
        </label>
        <div class="form-group">
            <input type="number" min="{{ $milestone->amount }}" max="{{ $milestone->amount }}" class="form-control" name="amount" value="{{ $milestone->amount }}" required readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="form-label">
            {{translate('Payment System')}}
            <span class="text-danger">*</span>
        </label>
        <div class="form-group">
            <div class="row">
                @foreach (get_payment_types() as $payment_type)
                    @if(get_setting($payment_type->type.'_activation_checkbox'))
                        <div class="col-6 col-md-4">
                            <label class="aiz-megabox d-block mb-3">
                                <input value="{{ $payment_type->type }}" id="payment_option" type="radio" name="payment_option" checked>
                                <span class="d-block p-3 aiz-megabox-elem">
                                    <img src="{{ my_asset('assets/frontend/default/img/'. $payment_type->type .'.png') }}" class="img-fluid mb-2">
                                    <span class="d-block text-center">
                                        <span class="d-block fw-600 fs-15">{{ translate(ucfirst($payment_type->type)) }}</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    @endif
                @endforeach
                @if(Auth::user()->profile->balance >= $milestone->amount)
                    <div class="col-6 col-md-4">
                        <label class="aiz-megabox d-block mb-3">
                            <input value="wallet" id="payment_option" type="radio" name="payment_option" checked>
                            <span class="d-block p-3 aiz-megabox-elem">
                                <img src="{{ my_asset('assets/frontend/default/img/wallet.png') }}" class="img-fluid mb-2">
                                <span class="d-block text-center">
                                    <span class="d-block fw-600 fs-15">{{ translate('Wallet') }}</span>
                                </span>
                            </span>
                        </label>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary rounded-1">{{ translate('Pay Now') }}</button>
    </div>
</form>
