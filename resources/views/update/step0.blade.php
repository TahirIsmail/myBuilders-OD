@extends('admin.default.layouts.blank')
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="mar-ver pad-btm text-center">
                            <h1 class="h3">Active Workdesk Update Process</h1>
                            <p>You will need to know the following items before
                            proceeding.</p>
                        </div>
                        <ol class="list-group">
                            <li class="list-group-item text-semibold"><i class="fa fa-check"></i> Codecanyon purchase code</li>
                            <li class="list-group-item text-semibold"><i class="fa fa-check"></i> Database Name</li>
                            <li class="list-group-item text-semibold"><i class="fa fa-check"></i> Database Username</li>
                            <li class="list-group-item text-semibold"><i class="fa fa-check"></i> Database Password</li>
                            <li class="list-group-item text-semibold"><i class="fa fa-check"></i> Database Hostname</li>
                        </ol>
                        <br>
                        <div class="text-center">
                            <a href="{{ route('update.step1') }}" class="btn btn-primary text-light">
                                Update Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
