<div class="modal-content">

    <form wire:submit.prevent="save">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title text-white" id="exampleModalLabel">Disburse Funds</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control  form-control-solid"
                               wire:model.defer="disbursement.amount"/>
                        @error('disbursement.amount')
                        <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control mr-3" wire:model="disbursement.bank_id">
                            <option value="">--Bank--</option>
                            @foreach($banks as $bank)
                                <option value="{{$bank->id}}">{{$bank->name}} - {{$bank->account_number}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">
                <dt class="col-sm-3">Bank Name</dt>
                <dd class="col-sm-9">{{$myBank->name ?? '--'}}</dd>

                <dt class="col-sm-3">Account Name</dt>
                <dd class="col-sm-9">{{$myBank->account_name ?? '--'}}</dd>

                <dt class="col-sm-3">Account Number</dt>
                <dd class="col-sm-9">{{$myBank->account_number ?? '--'}}</dd>

                <dt class="col-sm-3">Branch Name</dt>
                <dd class="col-sm-9">{{$myBank->branch ?? '--'}}</dd>

                <dt class="col-sm-3">Branch Number</dt>
                <dd class="col-sm-9">{{$myBank->branch_code ?? '--'}}</dd>

                <dt class="col-sm-3">Swift Code</dt>
                <dd class="col-sm-9">{{$myBank->swift_code ?? '--'}}</dd>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" wire:click="save" wire:loading.attr="disabled"
                    wire:loading.class="spinner spinner-white spinner-right">Save
            </button>
        </div>
    </form>
</div>
