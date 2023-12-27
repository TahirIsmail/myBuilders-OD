
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Project Name') }}</label>
        <input type="text" disabled value="{{ $cancel_project->project->name }}" class="form-control">
    </div>
</div>
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Client Name') }}</label>
        <input type="text" disabled value="{{ $cancel_project->project->client->name }}" class="form-control">
    </div>
</div>
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Request sent by') }}</label>
        <input type="text" disabled value="{{ $cancel_project->requested_user->name }}" class="form-control">
    </div>
</div>
@php
 $milestone_payments = \App\Models\MilestonePayment::where('project_id', $cancel_project->project_id)->where('paid_status',1)->get();
    $freelancer_profit = 0;
    $total_amount = 0;
    foreach ($milestone_payments as $key =>$milestone_payment) {
        $freelancer_profit += $milestone_payment->freelancer_profit;
        $total_amount += $milestone_payment->amount;
    }   
@endphp
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Total Paid by Client') }}</label>
        <input type="text" disabled value="{{ single_price($total_amount) }}" class="form-control">
    </div>
</div>
<div>
    <div class="form-group mb-3">
        <label>{{ translate('Freelancer Profit') }}</label>
        <input type="text" disabled value="{{ single_price($freelancer_profit) }}" class="form-control">
    </div>
</div>

<div class="form-group mb-3">
    <label>{{ translate('Reason for cancellation') }}</label>
    <textarea class="form-control" rows="6" disabled>{{ $cancel_project->reason }}</textarea>
</div>

@if($cancel_project->project->cancel_status == 0)
<form class="form-horizontal" action="{{ route('cancel-project-request.request_accepted') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="project_id" name="project_id" value="{{ $cancel_project->project_id }}" required>
    <input type="hidden" id="cancel_by_user_id" name="cancel_by_user_id" value="{{ $cancel_project->requested_user_id }}" required>
    <input type="hidden" id="cancel_project_id" name="cancel_project_id" value="{{ $cancel_project->id }}" required>
    @if($total_amount > 0)
    <div>
        <div class="form-group mb-3">
            <label>{{ translate('Refund Amount') }}</label>
            <div class="input-group mb-1">
                <input type="number" min="1" max="100" step="0.01" name="refund_percentage" value="{{ get_setting('refund_percentage_on_project_cancellation') }}" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div>
        <div class="form-group mb-3 text-right">
            <button type="submit" class="btn btn-primary">{{translate('Approve This Request')}}</button>
        </div>
    </div>
</form>
@endif
