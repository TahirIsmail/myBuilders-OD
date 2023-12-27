@extends('admin.default.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0 h6">{{translate('Wallet Recharge History')}}</h1>
            </div>
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{translate('User Name')}}</th>
                            <th data-breakpoints="sm">{{translate('Payment Method')}}</th>
                            <th data-breakpoints="sm">{{translate('Type')}}</th>
                            <th data-breakpoints="sm">{{translate('Date')}}</th>
                            <th>{{translate('Amount')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wallets as $key => $wallet)
                            <tr>
                                <td>{{ ($key+1) + ($wallets->currentPage() - 1)*$wallets->perPage() }}</td>
                                @if ($wallet->user != null)
                                    <td>
                                        {{$wallet->user->name.' ('.translate($wallet->user->user_type).')'}}
                                    </td>
                                @else
                                    <td>
                                        {{translate('Not Found')}}
                                    </td>
                                @endif
                                <td>
                                    {{$wallet->payment_method}}
                                </td>
                                <td>
                                    {{ translate($wallet->type) }}
                                </td>
                                <td>
                                    {{$wallet->created_at}}
                                </td>
                                <td>
                                    {{single_price($wallet->amount)}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination aiz-pagination-center">
                    {{ $wallets->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
