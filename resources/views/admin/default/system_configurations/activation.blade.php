@extends('admin.default.layouts.app')

@section('content')

    <div class="aiz-titlebar mt-2 mb-3">
    	<div class="row align-items-center">
    		<div class="col">
    			<h1 class="h3">{{ translate('General Activation') }}</h1>
    		</div>
    	</div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">{{ translate('Project Approval') }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>{{ translate('Enable project approval feature?') }}</label>
                        <div>
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" onchange="updateSettings(this, 'project_approval')" @if(get_setting('project_approval') == 1) checked @endif>
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="alert alert-info mb-0">
                        {{ translate('If you enable this feature all client projects will be pending after adding by clients. You need to approve each project to make those projects public for bidding.') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">{{ translate('Force HTTPS') }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>{{ translate('Enable Force HTTPS feature?') }}</label>
                        <div>
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" onchange="updateSettings(this, 'FORCE_HTTPS')" @if(env('FORCE_HTTPS') == "On") checked @endif>
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="alert alert-info mb-0">
                        {{ translate('If you enable this feature all requests will be redirect via https.') }}
                    </div>
                </div>
            </div>
        </div>

         <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">{{ translate('Email Verification') }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>{{ translate('Enable Email Verification?') }}</label>
                        <div>
                            <label class="aiz-switch aiz-switch-success mb-0">
                               <input type="checkbox" onchange="updateSettings(this, 'email_verification')" @if(get_setting('email_verification') == 1) checked @endif>
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="alert alert-info mb-0">
                        You need to configure SMTP correctly to enable this feature. <a href="{{ route('email-config.index') }}">Configure Now</a>
                    </div>
                </div>
            </div>
        </div> 

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{translate('Maintenance Mode Activation')}}</h3>
                </div>
                <div class="card-body text-center">
                    <label class="aiz-switch aiz-switch-success mb-0">
                        <input type="checkbox" onchange="updateSettings(this, 'maintenance_mode')" <?php if(get_setting('maintenance_mode') == 1) echo "checked";?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 h6 text-center">{{translate('Disable image encoding?')}}</h3>
                </div>
                <div class="card-body text-center">
                    <label class="aiz-switch aiz-switch-success mb-0">
                        <input type="checkbox" onchange="updateSettings(this, 'disable_image_optimization')" <?php if(get_setting('disable_image_optimization') == 1) echo "checked";?>>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        function updateSettings(el, type){
            if($(el).is(':checked')){
                var value = 1;
            }
            else{
                var value = 0;
            }
            $.post('{{ route('system_configuration.update.activation') }}', {_token:'{{ csrf_token() }}', type:type, value:value}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', 'Setting has been updated.');
                }
                else{
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
