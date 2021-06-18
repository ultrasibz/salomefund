<div class="d-flex flex-row">
    <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
        <livewire:profile.profile-card :user="$user"/>
    </div>


    <div class="flex-row-fluid">
        <div class="col-lg-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form wire:submit.prevent="save" class="">

                <div class="card card-custom card-stretch">

                    <!--begin::Header-->
                    <div class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                            <h3 class="card-label font-weight-bolder text-dark">Add Account</h3>

                        </div>
                        <div class="card-toolbar">
                            <button type="submit" class="btn btn-success mr-2" wire:loading.attr="disabled"
                                    wire:loading.class="spinner spinner-right spinner-white" wire:target="save">Save
                            </button>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Bank Name:</label>
                                    <input type="text"
                                           class="form-control form-control-lg form-control-solid form-control form-control-lg form-control-solid-lg form-control form-control-lg form-control-solid-solid"
                                           placeholder="E.g Standard Chartered"
                                           wire:model.defer="bank.name"
                                           required/>
                                    @error('bank.name') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Account Name:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder=""
                                           wire:model.defer="bank.account_name"/>
                                    @error('bank.account_name') <span
                                        class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Account Number:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder=""
                                           wire:model.defer="bank.account_number"/>
                                    @error('bank.account_number') <span
                                        class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Branch Name:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="" wire:model.defer="bank.branch"
                                           required/>
                                    @error('bank.branch') <span
                                        class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Branch Code:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="" wire:model.defer="bank.branch_code"
                                           required/>
                                    @error('bank.branch_code') <span
                                        class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Swift Code:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="" wire:model.defer="bank.swift_code"
                                           required/>
                                    @error('bank.swift_code') <span
                                        class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </form>
        </div>

        <div class="col-lg-12">

            <div class="card card-custom card-stretch mt-5">

                <!--begin::Header-->
                <div class="card-header py-3">
                    <div class="card-title align-items-start flex-column">
                        <h3 class="card-label font-weight-bolder text-dark">Bank Accounts</h3>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                            <thead>
                            <tr class="text-uppercase">
                                <th><span class="text-primary">Bank</span></th>
                                <th><span class="text-primary">name</span></th>
                                <th><span class="text-primary">Number</span></th>
                                <th><span class="text-primary">Branch</span></th>
                                <th><span class="text-primary">Branch Code</span></th>
                                <th><span class="text-primary">Swift COde</span></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banks as $bank)
                                <tr>
                                    <td>{{$bank->name}}</td>
                                    <td>{{$bank->account_name}}</td>
                                    <td>{{$bank->account_number}}</td>
                                    <td>{{$bank->branch}}</td>
                                    <td>{{$bank->branch_code}}</td>
                                    <td>{{$bank->swift_code}}</td>
                                    <td class="pr-0 text-right">


                                        <button type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm" wire:click="remove({{$bank->id}})">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
            fill="#000000" fill-rule="nonzero"/>
        <path
            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
            fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span> </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>



