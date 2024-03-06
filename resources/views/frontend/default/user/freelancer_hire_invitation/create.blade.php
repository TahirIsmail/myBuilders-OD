@extends('frontend.default.layouts.app')

@section('content')
    <div class="h-250px">
        @if ($freelancer->cover_photo != null)
            <img src="{{ custom_asset($freelancer->cover_photo) }}" alt="{{ $freelancer->name }}"class="img-fit h-250px">
        @else
            <img src="{{ my_asset('assets/frontend/default/img/cover-place.jpg') }}"
                alt="{{ $freelancer->name }}"class="img-fit h-250px">
        @endif
    </div>
    <div class="mt-n5">
        <div class="container">
            <div class="card rounded-2 border-gray-light">
                <div class="card-body">
                    <div class="media align-items-center d-block d-md-flex">
                        <div class="mr-5 text-center text-md-left mb-4 mb-md-0">
                            <span class="avatar avatar-xxl">
                                @if ($freelancer->photo != null)
                                    <img src="{{ custom_asset($freelancer->photo) }}">
                                @else
                                    <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                                @endif
                                @if (Cache::has('user-is-online-' . $freelancer->id))
                                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                @else
                                    <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                @endif
                            </span>
                        </div>
                        <div class="media-body d-lg-flex justify-content-between align-items-center">
                            <div class="mr-3 mb-4 mb-lg-0 text-center text-md-left">
                                <h1 class="h5 mb-1 fw-700">{{ $freelancer->name }}</h1>
                                <p class="opacity-60">{{ $freelancer->profile->specialist }}</p>

                                <div
                                    class="d-flex justify-content-center justify-content-md-between text-secondary fs-12 mb-3">
                                    <div class="mr-2">
                                        <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                            {{ formatRating(getAverageRating($freelancer->id)) }}
                                        </span>
                                        <span class="rating rating-sm">
                                            {{ renderStarRating(getAverageRating($freelancer->id)) }}
                                        </span>
                                        <span>
                                            ({{ getNumberOfReview($freelancer->id) }} {{ translate('Reviews') }})
                                        </span>
                                    </div>
                                    <div>
                                        <i class="las la-map-marker opacity-50"></i>
                                        @if ($freelancer->address != null && $freelancer->address->city != null && $freelancer->address->country != null)
                                            <span>{{ $freelancer->address->city }},
                                                {{ $freelancer->address->country }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="text-lg-right d-flex justify-content-between align-items-end d-lg-block">
                            <div class="mb-lg-4">
                                <h4 class="mb-0">{{ single_price($freelancer->profile->hourly_rate) }}</h4>
                                <div class="small text-secondary">
                                    <span>{{ translate('per Hour') }}</span>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container space-2">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-dark h5 mb-0">{{ translate('Send Invitation For a job') }}</h2>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('invition_for_hire_freelancer_sent') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="freelancer_id" value="{{ $freelancer->id }}">
                                <div class="form-group">
                                    <label>{{ translate('Job Select') }}<span class="text-danger">*</span></label>
                                    <select id="project-select" class="form-control aiz-selectpicker"
                                        data-live-search="true"  name="project_slug"  required>
                                        @foreach ($user_projects as $project)
                                            <option value="{{ $project->slug }}">{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <input type="hidden" name="project_id" id="project_id">
                                    <input type="hidden" name="project_name" id="project_name">
                                    <input type="hidden" name="project_client" id="project_client">
                                {{-- @if ($client_package->long_term_limit > 0 || $client_package->fixed_limit > 0) --}}
                                <button type="submit"
                                    class="btn btn-primary transition-3d-hover mr-1 rounded-1">{{ translate('Send Invitation') }}</button>
                                {{-- @else --}}
                                {{-- <div class="alert alert-info custom-control-inline mb-0" role="alert">
                                    {{ translate('Upgrade your Package.') }}
                                </div>
                            @endif --}}

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Section -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#category_id').prop('disabled', true);
            $(document).on('change', '#project-select', function() {


                var selectedSlug = $(this).val();

                $.ajax({
                    url: '/project-detail-for-invite',
                    type: 'POST',
                    data: {
                        slug: selectedSlug,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Handle the response from the server
                        $('#project_id').val(response.project.id)
                        $('#project_name').val(response.project.name)
                        $('#project_client').val(response.project.client.name)
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(xhr.responseText);
                    }
                });
                // Now you can use the selectedProject object to populate other parts of your form or perform any other actions


            })


        })
    </script>
@endsection
