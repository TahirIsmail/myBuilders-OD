@extends('admin.default.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0 h6">{{translate("SMTP Configuration")}}</h1>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="types">{{translate('MAIL DRIVER')}}
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                                      title="{{ translate("Select sendmail if you do not have smtp") }}">
                                    <i class="la la-question-circle"></i>
                                </span>
                            </label>
                            <input type="hidden" name="types[]" value="MAIL_DRIVER">
                            <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="MAIL_DRIVER" data-toggle="select2"
                                    data-placeholder="Choose ..." required>
                                <option value=""
                                        @if(env('MAIL_DRIVER') == '')  selected @endif >{{translate("Select mail driver")}}</option>
                                <option value="sendmail"
                                        @if(env('MAIL_DRIVER') == 'sendmail')  selected @endif >{{translate('Sendmail')}}</option>
                                <option value="smtp"
                                        @if(env('MAIL_DRIVER') == 'smtp')  selected @endif >{{translate('SMTP')}}</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('MAIL HOST')}}</label>
                            <input type="hidden" name="types[]" value="MAIL_HOST">
                            <input type="text" name="MAIL_HOST" class="form-control" value="{{env('MAIL_HOST')}}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('MAIL PORT')}}</label>
                            <input type="hidden" name="types[]" value="MAIL_PORT">
                            <input type="text" name="MAIL_PORT" class="form-control" value="{{env('MAIL_PORT')}}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('MAIL USERNAME')}}</label>
                            <input type="hidden" name="types[]" value="MAIL_USERNAME">
                            <input type="text" name="MAIL_USERNAME" class="form-control"
                                   value="{{env('MAIL_USERNAME')}}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('MAIL PASSWORD')}}</label>
                            <input type="hidden" name="types[]" value="MAIL_PASSWORD">
                            <input type="password" name="MAIL_PASSWORD" class="form-control"
                                   value="{{env('MAIL_PASSWORD')}}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('MAIL ENCRYPTION')}}</label>
                            <input type="hidden" name="types[]" value="MAIL_ENCRYPTION">
                            <input type="text" name="MAIL_ENCRYPTION" class="form-control"
                                   value="{{env('MAIL_ENCRYPTION')}}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('MAIL FROM ADDRESS')}}</label>
                            <input type="hidden" name="types[]" value="MAIL_FROM_ADDRESS">
                            <input type="text" name="MAIL_FROM_ADDRESS" class="form-control"
                                   value="{{env('MAIL_FROM_ADDRESS')}}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="types">{{translate('MAIL FROM NAME')}}</label>
                            <input type="hidden" name="types[]" value="MAIL_FROM_NAME">
                            <input type="text" name="MAIL_FROM_NAME" class="form-control"
                                   value="{{env('MAIL_FROM_NAME')}}" required>
                        </div>
                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Test SMTP configuration')}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('test.smtp') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" placeholder="{{ translate('Enter your email address') }}">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">{{ translate('Send test email') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Instruction')}}</h5>
                </div>
                <div class="card-body">
                    <p class="text-danger">{{ translate('Please be carefull when you are configuring SMTP. For incorrect configuration you will get error at the time of order place, new registration, sending newsletter.') }}</p>
                    <h6 class="text-muted">{{ translate('For Non-SSL') }}</h6>
                    <ul class="list-group">
                        <li class="list-group-item text-dark">{{ translate('Select sendmail for Mail Driver if you face any issue after configuring smtp as Mail Driver ') }}</li>
                        <li class="list-group-item text-dark">{{ translate('Set Mail Host according to your server Mail Client Manual Settings') }}</li>
                        <li class="list-group-item text-dark">{{ translate('Set Mail port as 587') }}</li>
                        <li class="list-group-item text-dark">{{ translate('Set Mail Encryption as ssl if you face issue with tls') }}</li>
                    </ul>
                    <br>
                    <h6 class="text-muted">{{ translate('For SSL') }}</h6>
                    <ul class="list-group mar-no">
                        <li class="list-group-item text-dark">{{ translate('Select sendmail for Mail Driver if you face any issue after configuring smtp as Mail Driver') }}</li>
                        <li class="list-group-item text-dark">{{ translate('Set Mail Host according to your server Mail Client Manual Settings') }}</li>
                        <li class="list-group-item text-dark">{{ translate('Set Mail port as 465') }}</li>
                        <li class="list-group-item text-dark">{{ translate('Set Mail Encryption as ssl') }}</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
