@extends('frontend.default.layouts.app')

@section('content')
<div class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-5 col-md-7 mx-auto">
                <div class="card rounded-2 border-gray-light">
                    <div class="card-body">
                        <div class="mb-5 text-center">
                            <h1 class="h3 text-primary mb-0">{{ translate('Forgot password?') }}</h1>
                            <p>{{ translate('Recover your account.') }}</p>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label class="form-label" for="signinSrEmail">{{ translate('Email address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ translate('Your Email address') }}" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary btn-block rounded-1">{{ translate('Reset Password') }}</button>
                            </div>

                            <div class="text-center mb-3">
                                <p class="text-muted mb-0">{{ translate('Remembered your password?') }}</p>
                                <a href="{{ route('login') }}">{{ translate('Login to your account') }}</a>
                            </div>

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
