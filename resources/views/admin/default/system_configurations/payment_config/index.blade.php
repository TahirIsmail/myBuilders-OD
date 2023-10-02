@extends('admin.default.layouts.app')

@section('content')

<div class="row">
    @foreach (get_payment_types() as $payment_type)
        @include('admin.default.system_configurations.payment_config.partials.'.$payment_type->type)
    @endforeach
</div>
@endsection
