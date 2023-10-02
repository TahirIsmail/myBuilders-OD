
@extends('frontend.default.layouts.app')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">

                @if (isClient())
                    @include('frontend.default.user.client.inc.sidebar')
                @elseif (isFreelancer())
                    @include('frontend.default.user.freelancer.inc.sidebar')
                @endif

                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Package Payment History') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 border-gray-light">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Package Payment History:') }}</h5>
                        </div>
                        <div class="card-body">

                            <table class="table aiz-table mb-0">
                                <thead>
                                    <tr>
                                        <th data-breakpoints="">#</th>
                                        <th data-breakpoints="">{{ translate('Package Name')}}</th>
                                        @if (\App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                          <th data-breakpoints="">{{ translate('Payment Type')}}</th>
                                          <th data-breakpoints="" width="20%">{{ translate('Approval').' ( '.translate('For Manual Payment').' )'}}</th>
                                        @endif
                                        <th data-breakpoints="">{{ translate('Amount') }}</th>
                                        <th data-breakpoints="">{{ translate('Payment Method') }}</th>
                                        <th data-breakpoints="md">{{ translate('Purchase Date') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($package_payments as $key => $package_payment)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                              @if ($package_payment->package != null)
                                                  {{$package_payment->package->name}}
                                              @else
                                                  {{translate('Not Found')}}
                                              @endif
                                            </td>
                                            @if (\App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                              <td>
                                                @if($package_payment->offline_payment == 1)
                                                    <span class="badge badge-inline badge-info">{{ translate('Manual Payment') }}</span>
                                                @else
                                                    <span class="badge badge-inline badge-success">{{ translate('Online Payment') }}</span>
                                                @endif
                                              </td>
                                              @if($package_payment->offline_payment == 1)
                                                <td>
                                                    @if($package_payment->approval == 1)
                                                      <span class="badge badge-inline badge-success">{{ translate('Approved') }}</span>
                                                    @else
                                                      <span class="badge badge-inline badge-info">{{ translate('Pending') }}</span>
                                                    @endif
                                                </td>
                                              @else
                                                <td></td>
                                              @endif
                                            @endif

                                            <td>{{ single_price($package_payment->amount) }}</td>
                                            <td>{{ ucfirst(str_replace('_', ' ', $package_payment->payment_method)) }}</td>
                                            <td>{{ $package_payment->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $package_payments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
