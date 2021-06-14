<form wire:submit.prevent="save">
    <div class="card card-custom" >

        <div class="card-body">

            <div class="row">
                <div class="col-lg-12">
                    <table border="1" width="100%" cellspacing="0" cellpadding="0" align="Centre"
                           class="mt-2 mb-4">
                        <thead>
                        <tr>
                            <th width="33%" colspan="1" class="text-center"><a href="#"><img
                                        src="{{ asset('media/logos/logo.png')}}" title="ZESCO" alt="ZESCO"
                                        width="25%"></a></th>
                            <th width="33%" colspan="4" class="text-center">PPE Request form </th>
                            <th width="34%" colspan="1" class="p-3">Doc Number:<br>CO.14900.FORM.00165<br>Version: 3
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <label>Date:</label>
                    <input value="{{ now()->format('d M, Y') }}" type="text" name="date"
                           readonly class="form-control">
                </div>

                <div class="col-lg-3">
                    <label>Reference No:</label>
                    <input type="text"
                           placeholder="Enter Your Reference Number (optional)"
                           class="form-control" wire:model="ref_no">
                </div>

            </div>



            <div class="row mt-5">

{{--                <div class="col-lg-6">--}}
{{--                    <div class="form-group" wire:ignore>--}}
{{--                        <select class="form-control selectpicker" data-actions-box="true"--}}
{{--                                wire:model="selectedPosition"--}}
{{--                                title="Choose whom PPE is for">--}}
{{--                            <option value="">--All--</option>--}}
{{--                        @foreach($positions as $position)--}}
{{--                                <option value="{{$position['id']}}">{{$position['name']}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-lg-6">
                    <div class="form-group" wire:ignore>
                        <select class="form-control selectpicker" multiple data-actions-box="true" data-live-search="true"
                                wire:model="selectedusers"
                                title="Choose whom PPE is for">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}} - {{$user->position->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group" wire:ignore>
                        <select class="form-control selectpicker" data-actions-box="true" title="Select Task"
                                wire:model="task">
                            @foreach($tasks as $task)
                                <option value="{{$task->id}}">{{$task->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                            <thead>
                            <tr class="text-uppercase">
                                <th></th>
                                <th><span class="text-primary">Category</span></th>
                                <th><span class="text-primary">PPE</span></th>
                                <th><span class="text-primary">Qty</span></th>
                                <th><span class="text-primary">Total</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($matrices as $index => $matrix)
                                <tr wire:key="matrix-field-{{ $matrix->id }}">
                                    <td>
                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" wire:model="matrices.{{$index}}.is_mandatory"
                                                   disabled/>
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>{{$matrix->equipment->category->name}}</td>
                                    <td>{{$matrix->equipment->name}}</td>
                                    <td>{{$matrix->quantity}}</td>
                                    <td>{{$matrix->quantity * count($selectedusers)}}</td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="4">
                                        <div class="alert alert-custom alert-warning" role="alert">
                                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                            <div class="alert-text">This Task has no equipment, Please select another
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforelse

                            <tr>
                                <td colspan="4" class="text-right">
                                    <h4
                                        class="font-weight-bold text-primary">Total: {{$this->total }}</h4>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row mt-3">
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
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary btn-lg" wire:loading.attr="disabled" wire:loading.class="spinner spinner-primary spinner-right">Make Request</button>
        </div>
    </div>
</form>

