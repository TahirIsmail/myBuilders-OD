<div class="modal fade" id="wallet_modal_admin" tabindex="-1" role="dialog" aria-labelledby="admin_wallet_modal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="admin_wallet_modal">{{ translate('Recharge Wallet') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="" action="{{ route('admin_wallet.store') }}" method="post">
                  @csrf
                  <div class="modal-body gry-bg px-3 pt-3">
                    <div class="row">
                        <input type="hidden" name="user_id" id="wallet_user_id" value=""/>
                        <div class="col-md-3">
                            <label>{{ translate('Amount')}} <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" lang="en" class="form-control mb-3" min="0.01" step="0.01" name="amount" placeholder="{{ translate('Amount')}}" required>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">{{translate('Confirm')}}</button>
                    </div>
                  </div>
              </form>
          </div>
      </div>
</div>