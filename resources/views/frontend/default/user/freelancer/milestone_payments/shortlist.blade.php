@extends('frontend.default.layouts.app')
<style>
    /* Shoutout to Maite Rosalie for the gold svg gradient which can be seen here below. */

    /* https://codepen.io/maiterosalie/pen/ppRRLV?q=gold+gradient&limit=all&type=type-pens */


    html {
        background: #252526;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }


    .Base {
        background: #ccc;
        /* height: 230px;
        width: 447px; */
        border-radius: 15px;

        height: 180;

    }


    .Inner-wrap {
        background-color: #0c0014;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%230d1838' points='1600%2C160 0%2C460 0%2C350 1600%2C50'/%3E%3Cpolygon fill='%230e315d' points='1600%2C260 0%2C560 0%2C450 1600%2C150'/%3E%3Cpolygon fill='%230f4981' points='1600%2C360 0%2C660 0%2C550 1600%2C250'/%3E%3Cpolygon fill='%231062a6' points='1600%2C460 0%2C760 0%2C650 1600%2C350'/%3E%3Cpolygon fill='%23117aca' points='1600%2C800 0%2C800 0%2C750 1600%2C450'/%3E%3C/g%3E%3C/svg%3E");
        background-size: auto 147%;
        background-position: center;
        position: relative;
        height: 100%;
        width: 100%;
        border-radius: 13px;
        padding: 20px 20px;
        box-sizing: border-box;
        color: #fff;
    }

    /* Controls top right logo */

    .Logo {
        position: absolute;
        height: 80px;
        width: 80px;
        right: 0;
        top: 0;
        padding: inherit;
        fill: #117aca;
    }

    /* Controls chip icon */

    .Chip {
        height: 50px;
        margin: 10px 0 20px 0;
    }

    .gold path {
        fill: url(#gold-gradient);
    }

    svg {
        display: block;
    }

    /* Controls name size */



    .Card-number p {
        text-align: center;
    }

    .Card-number {
        margin: 30px 12px 0px;
        display: flex;
        justify-content: center;
        color: rgba(255, 255, 255, 0.9);
    }

    ul {
        padding: 0;
    }

    .list_li {
        list-style: none;
        float: left;
        margin: 0px 2.2px;
        font-size: 2em;
    }

    @media only screen and (min-width: 300px) and (max-width:1200px) {
        .list_li {
            font-size: 1.5em !important;
        }

        .Name h3 {
            left: 20px !important;
        }


        .Visa {
            height: 40px !important;
            width: 40px !important;
            margin: 0px 10px -3px !important;
            position: absolute !important;
            bottom: 0 !important;
            right: 0 !important;
        }

        .Card-number {
            margin: 20px 12px 0px !important;
        }


        .Chip {
            height: 30px;
        }

        .Base {
            height: 150px;
        }
    }

    #first-li {
        margin-left: 0;
    }

    #last-li {
        margin-right: 0;
    }

    .Expire {
        font-size: .75em;
        text-align: center;
    }

    .Expire h4 {
        font-weight: 400;
        color: #aaa;
        margin: 0;
        /*   word-spacing: 9999999px; */
        text-transform: uppercase;
    }

    .Expire p {
        font-size: 1.55em;
        color: rgba(255, 255, 255, 0.9);
    }

    .Name h3 {
        position: absolute;
        bottom: 0;
        left: 18%;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 1em;
        color: rgba(255, 255, 255, 0.85);
    }

    .Visa {
        margin: 0px 10px -10px;
        position: absolute;
        bottom: 0;
        right: 0;

    }

    .Logo-name {

        text-transform: uppercase;
        font-weight: 800;
        font-size: 1.4em;
        color: rgba(255, 255, 255, 0.85);
        font-family: 'Courier New', Courier, monospace;
    }

    .invoice_table tbody tr {
        background-color: #e8e8e8
    }

    .invoice_table tbody tr:hover {
        background-color: #e2e2e2;

    }

    .invoice_table tbody tr:nth-child(even):hover {
        background-color: #e8e8e8;

    }

    .invoice_table tbody tr:nth-child(even) {
        background-color: #f5f5f5;
    }






    .card-details--link {

        display: flex;
        align-items: center;
        text-decoration: none;
        color: #333;
        padding-left: 22px;
        padding-top: 30px;
        font-size: 16px;

    }


    .card-details--icon {
        width: 20px;

        margin-right: 10px;

    }

    .card-details--link :hover {
        color: #64c976 !important;
    }
 
    .card-details--icon {
        color: #007bff;
        /* Primary color (blue) */
    }
</style>

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.freelancer.inc.sidebar')

                <div class="aiz-user-panel">
                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Payment details') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 border-gray-light">
                        <div class="card-header">
                            <h1 class="mb-0 h6 font-weight-bold ">{{ translate('Card details') }}</h1>

                        </div>
                        <h5 class="mb-0 h6 px-4 py-3">We will use these card details for your invoices.</h5>
                        <div class="card-body">
                            <div class="class col-sm-12 col-md-5 col-xxl-4">
                                <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

                                <div class="Base">
                                    <div class="Inner-wrap">
                                        <div class="Logo-name">
                                            BANK
                                        </div>
                                        <div class="d-flex">

                                            <img class="chip "
                                                src="{{ asset('public\assets\frontend\default\img\icons\chip1.png') }}" />
                                            <div class="Card-number">
                                                <ul>
                                                    <li id="first-li" class="list_li">****</li>
                                                    <li class="list_li">****</li>
                                                    <li class="list_li">****</li>
                                                    <li id="last-li" class="list_li">****</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class='Name'>
                                            <h3>Jordan Luca Schlansky</h3>
                                        </div>
                                        <img class="Visa "
                                            src="{{ asset('public\assets\frontend\default\img\icons\visa.png') }}" />

                                    </div>
                                </div>

                            </div>




                            <div class="card-details--link">
                                <i class="fas fa-pencil-alt card-details--icon"></i>
                                <a href="{{ route('user.credit_card') }}">
                                    Change default card
                                </a>
                            </div>
                           
                        </div>
                    </div>






















                    <div class="aiz-titlebar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h1 class="fs-16 fw-700">{{ translate('Job Shortlist Payments') }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 border-gray-light">
                        <div class="card-header">
                            <h5 class="mb-0 h6 font-weight-bold">{{ translate('All Requests') }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table aiz-table mb-0 invoice_table">
                                <thead class="bg-purple-dark text-white p-3">
                                    <tr>
                                        <th data-breakpoints="">#</th>
                                        <th data-breakpoints="" width="15%">{{ translate('Job') }}</th>
                                        <th data-breakpoints="md">{{ translate('Client') }}</th>
                                        <th data-breakpoints="md">{{ translate('Time') }}</th>
                                        <th data-breakpoints="">{{ translate('Amount') }}</th>
                                        <th data-breakpoints="">{{ translate('Status') }}</th>
                                        @if (
                                            \App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                                                \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                            <th data-breakpoints="md">
                                                {{ translate('Approval') . ' ( ' . translate('For Manual Payment') . ' )' }}
                                            </th>
                                        @endif
                                        <th data-breakpoints="" class="text-right" width="20%">
                                            {{ translate('Actions') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($milestones as $key => $milestone)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $milestone->project->name }}</td>
                                            <td>
                                                {{ $milestone->client->name }}
                                            </td>
                                            <td>{{ $milestone->created_at }}</td>
                                            <td style="color:#ef9e01">
                                                {{ single_price($milestone->amount) }}
                                            </td>
                                            <td>
                                                @if ($milestone->paid_status == 1)
                                                    <span
                                                        class="badge badge-inline badge-success">{{ translate('Paid') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-inline badge-danger">{{ translate('Unpaid') }}</span>
                                                @endif
                                            </td>
                                            @if (
                                                \App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                                                    \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                                @if ($milestone->offline_payment == 1)
                                                    <td>
                                                        @if ($milestone->approval == 1)
                                                            <span
                                                                class="badge badge-inline badge-success">{{ translate('Approved') }}</span>
                                                        @else
                                                            <span
                                                                class="badge badge-inline badge-info">{{ translate('Pending') }}</span>
                                                        @endif
                                                    </td>
                                                @else
                                                    <td></td>
                                                @endif
                                            @endif
                                            <td class="text-right">
                                                @if ($milestone->paid_status != 1)
                                                    <button type="submit" class="btn btn-xs btn-primary mr-2"
                                                        @if (
                                                            \App\Models\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                                                                \App\Models\Addon::where('unique_identifier', 'offline_payment')->first()->activated) onclick="select_payment_type({{ $milestone->id }})"
                                                        @else
                                                            onclick="show_online_payment_modal('{{ $milestone->id }}')" @endif>
                                                        {{ translate('Pay now') }}
                                                    </button>
                                                @endif
                                                <button type="submit" class="btn btn-sm btn-icon btn-circle btn-soft-info"
                                                    onclick="request_message_show_modal('{{ $milestone->id }}')"
                                                    title="View Message">
                                                    <i class="las la-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $milestones->links() }}
                        </div>
                    </div>















                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script type="text/javascript">
        function request_message_show_modal(id) {
            $.post('{{ route('milestone_request_message_show_modal') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#request_message_show_modal').modal('show');
                $('#request_message_show_modal_body').html(data);
            });
        }

        function select_payment_type(id) {
            $('input[name=milestone_payment_id]').val(id);
            $('#select_payment_type_modal').modal('show');
        }

        function payment_type(type) {
            var milestone_payment_id = $('#milestone_payment_id').val();
            if (type == 'online') {
                $("#select_type_cancel").click();
                show_online_payment_modal(milestone_payment_id);
            } else if (type == 'offline') {
                $("#select_type_cancel").click();
                $.post('{{ route('offline_milestone_payment_modal') }}', {
                    _token: '{{ csrf_token() }}',
                    milestone_payment_id: milestone_payment_id
                }, function(data) {
                    $('#offline_milestone_payment_modal_body').html(data);
                    $('#offline_milestone_payment_modal').modal('show');
                });
            }
        }

        function show_online_payment_modal(id) {
            $.post('{{ route('show_payment_select_modal') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#show_online_payment_select_modal').modal('show');
                $('#show_online_payment_select_modal_body').html(data);
                $(".aiz-selectpicker").selectpicker();
            });
        }
    </script>
@endsection

@section('modal')
    <div class="modal fade" id="request_message_show_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Message Info') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="request_message_show_modal_body">

                </div>
            </div>
        </div>
    </div>

    <!-- Select Payment Type Modal -->
    <div class="modal fade" id="select_payment_type_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Select Payment Type') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="milestone_payment_id" name="milestone_payment_id" value="">
                    <div class="row">
                        <div class="col-md-2">
                            <label>{{ translate('Payment Type') }}</label>
                        </div>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <select class="form-control aiz-selectpicker" onchange="payment_type(this.value)"
                                    data-minimum-results-for-search="Infinity">
                                    <option value="">{{ translate('Select One') }}</option>
                                    <option value="online">{{ translate('Online payment') }}</option>
                                    <option value="offline">{{ translate('Offline payment') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1 rounded-1"
                            id="select_type_cancel" data-dismiss="modal">{{ translate('Cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Online payment Modal -->
    <div class="modal fade" id="show_online_payment_select_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Details') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="show_online_payment_select_modal_body">

                </div>
            </div>
        </div>
    </div>

    <!-- offline payment Modal -->
    <div class="modal fade" id="offline_milestone_payment_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Make offline milestone payment') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="offline_milestone_payment_modal_body"></div>
            </div>
        </div>
    </div>
@endsection
