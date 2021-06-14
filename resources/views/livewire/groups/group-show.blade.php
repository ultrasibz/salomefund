<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b" xmlns="http://www.w3.org/1999/html">
            <div class="card-body">
                <!--begin::Details-->
                <div class="d-flex mb-9">
                    <!--begin: Pic-->
                    <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                        <div class="symbol symbol-primary symbol-100 symbol-lg-100 bg-primary">
                            <span
                                class="font-size-h2 symbol-label font-weight-boldest">{{$group->id}}</span>

                        </div>

{{--                                        <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">--}}
{{--                                            <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>--}}
{{--                                        </div>--}}
                    </div>
                    <!--end::Pic-->

                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between flex-wrap mt-1">
                            <div class="d-flex mr-3">
                        <span
                            class="text-dark-75 text-hover-primary font-size-h2 font-weight-bold mr-3">{{$group->name}}</span>
                                {{--                        <a href="#"><i class="flaticon2-correct text-success font-size-h5"></i></a>--}}
                            </div>

{{--                            <div class="my-lg-0 my-3">--}}
{{--                                @can('approve', $request)--}}
{{--                                    <button class="btn btn-outline-success" wire:click="approve" wire:target="approve" wire:loading.attr="disabled" wire:loading.class="spinner spinner-primary spinner-right">Approve</button>--}}
{{--                                    <button class="btn btn-outline-danger" wire:click="reject" wire:target="reject" wire:loading.attr="disabled" wire:loading.class="spinner spinner-primary spinner-right">Reject</button>--}}
{{--                                @else--}}
{{--                                    {{$request->status()->reason}}--}}

{{--                                @endcan--}}
{{--                            </div>--}}
                        </div>
                        <!--end::Title-->

                        <!--begin::Content-->
                        <div class="d-flex flex-wrap justify-content-between mt-1">
                            <div class="d-flex flex-column flex-grow-1 pr-8">
                                <div class="d-flex flex-wrap mb-4">

                            <span
                                class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><i
                                    class="flaticon2-calendar mr-2 font-size-lg"></i>Starts On {{$group->start_on}} of Month</span>

                                    <span
                                        class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><i
                                            class="flaticon2-calendar mr-2 font-size-lg"></i>Ends On {{$group->end_on}} of Month</span>

                                    <span
                                        class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><i
                                            class="flaticon2-user mr-2 font-size-lg"></i>{{$group->users->count()}} Members</span>

{{--                                    <a href="#" class="text-dark-50 text-hover-primary font-weight-bold"><i--}}
{{--                                            class="flaticon2-user-outline-symbol mr-2 font-size-lg"></i>{{$request->division->name}}--}}
{{--                                    </a>--}}
                                </div>
                            </div>

                            {{--                    <div class="d-flex align-items-center w-25 flex-fill float-right mt-lg-12 mt-8">--}}
                            {{--                        <span class="font-weight-bold text-dark-75">Progress</span>--}}
                            {{--                        <div class="progress progress-xs mx-3 w-100">--}}
                            {{--                            <div class="progress-bar bg-success" role="progressbar" style="width: 63%;"--}}
                            {{--                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
                            {{--                        </div>--}}
                            {{--                        <span class="font-weight-bolder text-dark">78%</span>--}}
                            {{--                    </div>--}}
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

            {{--        <div class="separator separator-solid"></div>--}}

            <!--begin::Items-->
                    <div class="d-flex align-items-center flex-wrap mt-8">
                        <!--begin::Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-sm">Deposits</span>
                                <span class="font-weight-bolder font-size-h5">@money($group->deposit_total)<small class="text-muted">(@money($group->deposit_net_amount_total) Net)</small></span>
                            </div>
                        </div>
                        <!--end: Item-->
                        <!--end::Item-->

                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                <span class="mr-4">
                    <i class="flaticon2-delivery-truck icon-2x text-muted font-weight-bold"></i>
                </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-sm">Loans</span>
                                <span class="font-weight-bolder font-size-h5">@money($group->loan_total)<small class="text-muted">(@money($group->loan_net_amount_total) Net)</small></span>
                            </div>
                        </div>



                    </div>
            <!--begin::Items-->
            </div>
        </div>

    </div>
    <div class="col-lg-12">

        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Advance Table Widget 2-->
               <livewire:groups.group-user-index :group="$group"/>
                <!--end::Advance Table Widget 2-->
            </div>

            <div class="col-lg-4">
{{--                <div class="card card-custom  card-stretch gutter-b">--}}
{{--                    <!--begin::Header-->--}}
{{--                    <div class="card-header border-0 pt-6 mb-2">--}}
{{--                        <h3 class="card-title align-items-start flex-column">--}}
{{--                    <span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3"><span--}}
{{--                            class="label label-lg label-rounded label-primary">{{$request->task->matrices->pluck('quantity')->sum() * $issues->count()}}</span> PPE Requested</span>--}}
{{--                            <span class="text-muted font-weight-bold font-size-sm"></span>--}}
{{--                        </h3>--}}
{{--                                        <div class="card-toolbar">--}}
{{--                                            <a href="#" class="btn btn-light-info btn-sm font-weight-bolder font-size-sm py-3 px-6">--}}
{{--                                                Upload--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Header-->--}}

{{--                    <!--begin::Body-->--}}
{{--                    <div class="card-body pt-2">--}}
{{--                        <!--begin::Table-->--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Equipment</th>--}}
{{--                                    <th>Mandatory</th>--}}
{{--                                    <th>Qty</th>--}}

{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <!--begin::Item-->--}}
{{--                                @foreach($request->task->matrices as $matrix)--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-primary text-bold">{{$matrix->equipment->name}}</td>--}}
{{--                                        <td class="text-muted">{{$matrix->is_mandatory? 'Yes':'No'}}</td>--}}
{{--                                        <td class="text-muted">{{$matrix->quantity * $issues->total()}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                <!--end::Item-->--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                        <!--end::Table-->--}}
{{--                    </div>--}}
{{--                    <!--end::Body-->--}}
{{--                </div>--}}
            </div>
        </div>
        <!--end::Row-->
    </div>
    {{--    <div class="col-lg-12">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-lg-6">--}}
    {{--                <div class="card card-custom  card-stretch gutter-b">--}}
    {{--                    <div class="card-header border-0 pt-6 mb-2">--}}
    {{--                        <h3 class="card-title align-items-start flex-column">--}}
    {{--                    <span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3"> Approval Activity</span>--}}
    {{--                            <span class="text-muted font-weight-bold font-size-sm"></span>--}}
    {{--                        </h3>--}}

    {{--                        <div class="card-body">--}}
    {{--                            <div class="timeline timeline-1 w-100">--}}
    {{--                                <div class="timeline-sep bg-primary-opacity-20"></div>--}}

    {{--                                @foreach($request->statuses as $status)--}}
    {{--                                    <div class="timeline-item">--}}
    {{--                                        <div class="timeline-label">{{$status->created_at->toDateString()}}</div>--}}
    {{--                                        <div class="timeline-badge">--}}
    {{--                                            <i class="flaticon2-time text-primary "></i>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="timeline-content text-muted font-weight-normal">--}}
    {{--                                           {{$status->reason}}--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                @endforeach--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}

    {{--    </div>--}}
</div>


<!--end::Card-->


<!--begin::Row-->

<!--end::Row-->
{{--<div class="row">--}}
{{--    <div class="col-lg-12">--}}
{{--        <div class="card card-custom gutter-b" xmlns="http://www.w3.org/1999/html">--}}
{{--            <div class="card-body">--}}
{{--                <!--begin::Details-->--}}
{{--                <div class="d-flex mb-9">--}}
{{--                    <!--begin: Pic-->--}}
{{--                    <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">--}}
{{--                        <div class="symbol symbol-primary symbol-50 symbol-lg-150 bg-primary">--}}
{{--                            <span--}}
{{--                                class="font-size-h3 symbol-label font-weight-boldest">{{$request->number}}</span>--}}

{{--                        </div>--}}

{{--                        --}}{{--                <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">--}}
{{--                        --}}{{--                    <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>--}}
{{--                        --}}{{--                </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Pic-->--}}

{{--                    <!--begin::Info-->--}}
{{--                    <div class="flex-grow-1">--}}
{{--                        <!--begin::Title-->--}}
{{--                        <div class="d-flex justify-content-between flex-wrap mt-1">--}}
{{--                            <div class="d-flex mr-3">--}}
{{--                        <span--}}
{{--                            class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">{{$request->task->name}}</span>--}}
{{--                                --}}{{--                        <a href="#"><i class="flaticon2-correct text-success font-size-h5"></i></a>--}}
{{--                            </div>--}}

{{--                            <div class="my-lg-0 my-3">--}}
{{--                                @can('approve', $request)--}}
{{--                                    <button class="btn btn-outline-success" wire:click="approve" wire:target="approve" wire:loading.attr="disabled" wire:loading.class="spinner spinner-primary spinner-right">Approve</button>--}}
{{--                                    <button class="btn btn-outline-danger" wire:click="reject" wire:target="reject" wire:loading.attr="disabled" wire:loading.class="spinner spinner-primary spinner-right">Reject</button>--}}
{{--                                @else--}}
{{--                                    {{$request->status()->reason}}--}}

{{--                                @endcan--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::Title-->--}}

{{--                        <!--begin::Content-->--}}
{{--                        <div class="d-flex flex-wrap justify-content-between mt-1">--}}
{{--                            <div class="d-flex flex-column flex-grow-1 pr-8">--}}
{{--                                <div class="d-flex flex-wrap mb-4">--}}
{{--                            <span--}}
{{--                                class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><i--}}
{{--                                    class="flaticon2-calendar mr-2 font-size-lg"></i>{{$request->created_at->toFormattedDateString()}}</span>--}}

{{--                                    <span--}}
{{--                                        class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><i--}}
{{--                                            class="flaticon2-user mr-2 font-size-lg"></i>{{$request->user_unit->name}} </span>--}}

{{--                                    <a href="#" class="text-dark-50 text-hover-primary font-weight-bold"><i--}}
{{--                                            class="flaticon2-user-outline-symbol mr-2 font-size-lg"></i>{{$request->division->name}}--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                                <div class="d-flex flex-wrap mb-4">--}}


{{--                                    <div class="row w-100">--}}

{{--                                        <div class="col-lg-3">--}}
{{--                                            <p class="text-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                Manager--}}
{{--                                            </p>--}}

{{--                                            <p class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2 ">--}}
{{--                                                {{$request->manager->name ?? '--'}}--}}
{{--                                            </p>--}}

{{--                                            <p class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                {{$request->manager_approved_at ? 'Approved on '.$request->manager_approved_at->toFormattedDateString(): '--'}}--}}


{{--                                            </p>--}}

{{--                                        </div>--}}

{{--                                        <div class="col-lg-3">--}}
{{--                                            <p class="text-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                HOD--}}
{{--                                            </p>--}}

{{--                                            <p class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                {{$request->hod->name ?? '--'}}--}}
{{--                                            </p>--}}

{{--                                            <p class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                {{$request->hod_approved_at ? 'Approved on '.$request->hod_approved_at ->toFormattedDateString(): '--'}}--}}
{{--                                            </p>--}}

{{--                                        </div>--}}

{{--                                        <div class="col-lg-3">--}}
{{--                                            <p class="text-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                SHEQ Manager--}}
{{--                                            </p>--}}

{{--                                            <p class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                {{$request->sheq_manager->name ?? '--'}}--}}
{{--                                            </p>--}}

{{--                                            <p class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                {{$request->sheq_manager_approved_at ? 'Approved on '.$request->sheq_manager_approved_at ->toFormattedDateString(): '--'}}--}}
{{--                                            </p>--}}

{{--                                        </div>--}}

{{--                                        <div class="col">--}}
{{--                                            <p class="text-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                ERM--}}
{{--                                            </p>--}}

{{--                                            <p class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                {{$request->erm->name ?? '--'}}--}}
{{--                                            </p>--}}

{{--                                            <p class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">--}}
{{--                                                {{$request->erm_approved_at ? 'Approved on '.$request->erm_approved_at ->toFormattedDateString(): '--'}}--}}
{{--                                            </p>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}


{{--                            </div>--}}

{{--                            --}}{{--                    <div class="d-flex align-items-center w-25 flex-fill float-right mt-lg-12 mt-8">--}}
{{--                            --}}{{--                        <span class="font-weight-bold text-dark-75">Progress</span>--}}
{{--                            --}}{{--                        <div class="progress progress-xs mx-3 w-100">--}}
{{--                            --}}{{--                            <div class="progress-bar bg-success" role="progressbar" style="width: 63%;"--}}
{{--                            --}}{{--                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            --}}{{--                        </div>--}}
{{--                            --}}{{--                        <span class="font-weight-bolder text-dark">78%</span>--}}
{{--                            --}}{{--                    </div>--}}
{{--                        </div>--}}
{{--                        <!--end::Content-->--}}
{{--                    </div>--}}
{{--                    <!--end::Info-->--}}
{{--                </div>--}}
{{--                <!--end::Details-->--}}

{{--            --}}{{--        <div class="separator separator-solid"></div>--}}

{{--            <!--begin::Items-->--}}
{{--            --}}{{--        <div class="d-flex align-items-center flex-wrap mt-8">--}}
{{--            --}}{{--            <!--begin::Item-->--}}
{{--            --}}{{--            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">--}}
{{--            --}}{{--                <span class="mr-4">--}}
{{--            --}}{{--                    <i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>--}}
{{--            --}}{{--                </span>--}}
{{--            --}}{{--                <div class="d-flex flex-column text-dark-75">--}}
{{--            --}}{{--                    <span class="font-weight-bolder font-size-sm">Earnings</span>--}}
{{--            --}}{{--                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold">$</span>249,500</span>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--            --}}{{--            <!--end::Item-->--}}

{{--            --}}{{--            <!--begin::Item-->--}}
{{--            --}}{{--            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">--}}
{{--            --}}{{--                <span class="mr-4">--}}
{{--            --}}{{--                    <i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>--}}
{{--            --}}{{--                </span>--}}
{{--            --}}{{--                <div class="d-flex flex-column text-dark-75">--}}
{{--            --}}{{--                    <span class="font-weight-bolder font-size-sm">Expenses</span>--}}
{{--            --}}{{--                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold">$</span>164,700</span>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--            --}}{{--            <!--end::Item-->--}}

{{--            --}}{{--            <!--begin::Item-->--}}
{{--            --}}{{--            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">--}}
{{--            --}}{{--                <span class="mr-4">--}}
{{--            --}}{{--                    <i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>--}}
{{--            --}}{{--                </span>--}}
{{--            --}}{{--                <div class="d-flex flex-column text-dark-75">--}}
{{--            --}}{{--                    <span class="font-weight-bolder font-size-sm">Net</span>--}}
{{--            --}}{{--                    <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold">$</span>782,300</span>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--            --}}{{--            <!--end::Item-->--}}

{{--            --}}{{--            <!--begin::Item-->--}}
{{--            --}}{{--            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">--}}
{{--            --}}{{--                <span class="mr-4">--}}
{{--            --}}{{--                    <i class="flaticon-file-2 display-4 text-muted font-weight-bold"></i>--}}
{{--            --}}{{--                </span>--}}
{{--            --}}{{--                <div class="d-flex flex-column flex-lg-fill">--}}
{{--            --}}{{--                    <span class="text-dark-75 font-weight-bolder font-size-sm">73 Tasks</span>--}}
{{--            --}}{{--                    <a href="#" class="text-primary font-weight-bolder">View</a>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--            --}}{{--            <!--end::Item-->--}}

{{--            --}}{{--            <!--begin::Item-->--}}
{{--            --}}{{--            <div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">--}}
{{--            --}}{{--                <span class="mr-4">--}}
{{--            --}}{{--                    <i class="flaticon-chat-1 display-4 text-muted font-weight-bold"></i>--}}
{{--            --}}{{--                </span>--}}
{{--            --}}{{--                <div class="d-flex flex-column">--}}
{{--            --}}{{--                    <span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>--}}
{{--            --}}{{--                    <a href="#" class="text-primary font-weight-bolder">View</a>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--            --}}{{--            <!--end::Item-->--}}

{{--            --}}{{--            <!--begin::Item-->--}}
{{--            --}}{{--            <div class="d-flex align-items-center flex-lg-fill mb-2 float-left">--}}
{{--            --}}{{--                <span class="mr-4">--}}
{{--            --}}{{--                    <i class="flaticon-network display-4 text-muted font-weight-bold"></i>--}}
{{--            --}}{{--                </span>--}}
{{--            --}}{{--                <div class="symbol-group symbol-hover">--}}
{{--            --}}{{--                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">--}}
{{--            --}}{{--                        <img alt="Pic" src="assets/media/users/300_25.jpg"/>--}}
{{--            --}}{{--                    </div>--}}
{{--            --}}{{--                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Charlie Stone">--}}
{{--            --}}{{--                        <img alt="Pic" src="assets/media/users/300_19.jpg"/>--}}
{{--            --}}{{--                    </div>--}}
{{--            --}}{{--                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Luca Doncic">--}}
{{--            --}}{{--                        <img alt="Pic" src="assets/media/users/300_22.jpg"/>--}}
{{--            --}}{{--                    </div>--}}
{{--            --}}{{--                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">--}}
{{--            --}}{{--                        <img alt="Pic" src="assets/media/users/300_23.jpg"/>--}}
{{--            --}}{{--                    </div>--}}
{{--            --}}{{--                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">--}}
{{--            --}}{{--                        <img alt="Pic" src="assets/media/users/300_18.jpg"/>--}}
{{--            --}}{{--                    </div>--}}
{{--            --}}{{--                    <div class="symbol symbol-30 symbol-circle symbol-light">--}}
{{--            --}}{{--                        <span class="symbol-label font-weight-bold">5+</span>--}}
{{--            --}}{{--                    </div>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--            --}}{{--            <!--end::Item-->--}}
{{--            --}}{{--        </div>--}}
{{--            <!--begin::Items-->--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="col-lg-12">--}}

{{--        <!--begin::Row-->--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8">--}}
{{--                <!--begin::Advance Table Widget 2-->--}}
{{--                <div class="card card-custom card-stretch gutter-b">--}}
{{--                    <!--begin::Header-->--}}
{{--                    <div class="card-header border-0 pt-5">--}}
{{--                        <h3 class="card-title align-items-start flex-column">--}}
{{--                            <span class="card-label font-weight-bolder text-dark">Employees PPE Requested</span>--}}
{{--                            <span class="text-muted mt-3 font-weight-bold font-size-sm"> <span--}}
{{--                                    class="label label-lg label-rounded label-primary">{{$issues->total()}}</span> Employess need PPE</span>--}}
{{--                        </h3>--}}
{{--                        --}}{{--                <div class="card-toolbar">--}}
{{--                        --}}{{--                    <ul class="nav nav-pills nav-pills-sm nav-dark-75">--}}
{{--                        --}}{{--                        <li class="nav-item">--}}
{{--                        --}}{{--                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_1">Month</a>--}}
{{--                        --}}{{--                        </li>--}}
{{--                        --}}{{--                        <li class="nav-item">--}}
{{--                        --}}{{--                            <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_2">Week</a>--}}
{{--                        --}}{{--                        </li>--}}
{{--                        --}}{{--                        <li class="nav-item">--}}
{{--                        --}}{{--                            <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_1_3">Day</a>--}}
{{--                        --}}{{--                        </li>--}}
{{--                        --}}{{--                    </ul>--}}
{{--                        --}}{{--                </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Header-->--}}

{{--                    <!--begin::Body-->--}}
{{--                    <div class="card-body pt-3 pb-0">--}}

{{--                        <div class="table-responsive">--}}

{{--                            {{$issues->links()}}--}}

{{--                            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Employee</th>--}}
{{--                                    <th>Status</th>--}}
{{--                                    <th>Issue By</th>--}}
{{--                                    <th>Collected By</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($issues as $issue)--}}
{{--                                    <tr>--}}
{{--                                        <td class="pl-0">--}}
{{--                                    <span--}}
{{--                                        class="text-primary font-weight-bold mb-1 ">{{$issue->user->name}}</span>--}}
{{--                                            <div>--}}
{{--                                                --}}{{--                                        <span class="font-weight-bolder">Email:</span>--}}
{{--                                                <span--}}
{{--                                                    class="text-muted font-weight-bold text-hover-primary">Man No : {{$issue->user->staff_no}}</span>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}

{{--                                        <td>--}}
{{--                            <span class="text-dark-75  d-block font-size-lg">--}}
{{--                                {{$issue->status()->reason}}--}}
{{--                            </span>--}}
{{--                                            <span class="text-muted font-weight-bold">--}}
{{--                                {{$issue->status()->created_at->diffForHumans()}}--}}
{{--                            </span>--}}
{{--                                        </td>--}}

{{--                                        <td>--}}
{{--                            <span class="text-dark-75  d-block font-size-lg">--}}
{{--                                {{$issue->issuer->name ?? '--'}}--}}
{{--                            </span>--}}
{{--                                            <span class="text-muted font-weight-bold">--}}
{{--                                {{$issue->issued_at? $issued_at->toFormattedDateString() : '--'}}--}}
{{--                            </span>--}}
{{--                                        </td>--}}

{{--                                        <td>--}}
{{--                            <span class="text-dark-75  d-block font-size-lg">--}}
{{--                                {{$issue->collector->name ?? '--'}}--}}
{{--                            </span>--}}
{{--                                            <span class="text-muted font-weight-bold">--}}
{{--                                {{$issue->collected_at? $collected_at->toFormattedDateString(): '--'}}--}}
{{--                            </span>--}}
{{--                                        </td>--}}

{{--                                        --}}{{--                                <td class="text-right pr-0">--}}
{{--                                        --}}{{--                                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
{{--                                        --}}{{--                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg--><svg--}}
{{--                                        --}}{{--                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                        --}}{{--                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                                        --}}{{--    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                        --}}{{--        <rect x="0" y="0" width="24" height="24"/>--}}
{{--                                        --}}{{--        <path--}}
{{--                                        --}}{{--            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"--}}
{{--                                        --}}{{--            fill="#000000"/>--}}
{{--                                        --}}{{--        <path--}}
{{--                                        --}}{{--            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"--}}
{{--                                        --}}{{--            fill="#000000" opacity="0.3"/>--}}
{{--                                        --}}{{--    </g>--}}
{{--                                        --}}{{--</svg><!--end::Svg Icon--></span> </a>--}}
{{--                                        --}}{{--                                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
{{--                                        --}}{{--                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg--><svg--}}
{{--                                        --}}{{--                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                        --}}{{--                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                                        --}}{{--    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                        --}}{{--        <rect x="0" y="0" width="24" height="24"/>--}}
{{--                                        --}}{{--        <path--}}
{{--                                        --}}{{--            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"--}}
{{--                                        --}}{{--            fill="#000000" fill-rule="nonzero"--}}
{{--                                        --}}{{--            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>--}}
{{--                                        --}}{{--        <path--}}
{{--                                        --}}{{--            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"--}}
{{--                                        --}}{{--            fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
{{--                                        --}}{{--    </g>--}}
{{--                                        --}}{{--</svg><!--end::Svg Icon--></span> </a>--}}
{{--                                        --}}{{--                                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
{{--                                        --}}{{--                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg--><svg--}}
{{--                                        --}}{{--                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                        --}}{{--                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                                        --}}{{--    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                        --}}{{--        <rect x="0" y="0" width="24" height="24"/>--}}
{{--                                        --}}{{--        <path--}}
{{--                                        --}}{{--            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"--}}
{{--                                        --}}{{--            fill="#000000" fill-rule="nonzero"/>--}}
{{--                                        --}}{{--        <path--}}
{{--                                        --}}{{--            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"--}}
{{--                                        --}}{{--            fill="#000000" opacity="0.3"/>--}}
{{--                                        --}}{{--    </g>--}}
{{--                                        --}}{{--</svg><!--end::Svg Icon--></span> </a>--}}
{{--                                        --}}{{--                                </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                        <!--end::Table-->--}}
{{--                    </div>--}}
{{--                    <!--end::Body-->--}}
{{--                </div>--}}
{{--                <!--end::Advance Table Widget 2-->--}}
{{--            </div>--}}

{{--            <div class="col-lg-4">--}}
{{--                <div class="card card-custom  card-stretch gutter-b">--}}
{{--                    <!--begin::Header-->--}}
{{--                    <div class="card-header border-0 pt-6 mb-2">--}}
{{--                        <h3 class="card-title align-items-start flex-column">--}}
{{--                    <span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3"><span--}}
{{--                            class="label label-lg label-rounded label-primary">{{$request->task->matrices->pluck('quantity')->sum() * $issues->count()}}</span> PPE Requested</span>--}}
{{--                            <span class="text-muted font-weight-bold font-size-sm"></span>--}}
{{--                        </h3>--}}
{{--                        --}}{{--                <div class="card-toolbar">--}}
{{--                        --}}{{--                    <a href="#" class="btn btn-light-info btn-sm font-weight-bolder font-size-sm py-3 px-6">--}}
{{--                        --}}{{--                        Upload--}}
{{--                        --}}{{--                    </a>--}}
{{--                        --}}{{--                </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Header-->--}}

{{--                    <!--begin::Body-->--}}
{{--                    <div class="card-body pt-2">--}}
{{--                        <!--begin::Table-->--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Equipment</th>--}}
{{--                                    <th>Mandatory</th>--}}
{{--                                    <th>Qty</th>--}}

{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <!--begin::Item-->--}}
{{--                                @foreach($request->task->matrices as $matrix)--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-primary text-bold">{{$matrix->equipment->name}}</td>--}}
{{--                                        <td class="text-muted">{{$matrix->is_mandatory? 'Yes':'No'}}</td>--}}
{{--                                        <td class="text-muted">{{$matrix->quantity * $issues->total()}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                <!--end::Item-->--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                        <!--end::Table-->--}}
{{--                    </div>--}}
{{--                    <!--end::Body-->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--end::Row-->--}}
{{--    </div>--}}
{{--    --}}{{--    <div class="col-lg-12">--}}
{{--    --}}{{--        <div class="row">--}}
{{--    --}}{{--            <div class="col-lg-6">--}}
{{--    --}}{{--                <div class="card card-custom  card-stretch gutter-b">--}}
{{--    --}}{{--                    <div class="card-header border-0 pt-6 mb-2">--}}
{{--    --}}{{--                        <h3 class="card-title align-items-start flex-column">--}}
{{--    --}}{{--                    <span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3"> Approval Activity</span>--}}
{{--    --}}{{--                            <span class="text-muted font-weight-bold font-size-sm"></span>--}}
{{--    --}}{{--                        </h3>--}}

{{--    --}}{{--                        <div class="card-body">--}}
{{--    --}}{{--                            <div class="timeline timeline-1 w-100">--}}
{{--    --}}{{--                                <div class="timeline-sep bg-primary-opacity-20"></div>--}}

{{--    --}}{{--                                @foreach($request->statuses as $status)--}}
{{--    --}}{{--                                    <div class="timeline-item">--}}
{{--    --}}{{--                                        <div class="timeline-label">{{$status->created_at->toDateString()}}</div>--}}
{{--    --}}{{--                                        <div class="timeline-badge">--}}
{{--    --}}{{--                                            <i class="flaticon2-time text-primary "></i>--}}
{{--    --}}{{--                                        </div>--}}
{{--    --}}{{--                                        <div class="timeline-content text-muted font-weight-normal">--}}
{{--    --}}{{--                                           {{$status->reason}}--}}
{{--    --}}{{--                                        </div>--}}
{{--    --}}{{--                                    </div>--}}
{{--    --}}{{--                                @endforeach--}}
{{--    --}}{{--                            </div>--}}
{{--    --}}{{--                        </div>--}}

{{--    --}}{{--                    </div>--}}
{{--    --}}{{--                </div>--}}

{{--    --}}{{--            </div>--}}
{{--    --}}{{--        </div>--}}

{{--    --}}{{--    </div>--}}
{{--</div>--}}


<!--end::Card-->


<!--begin::Row-->

<!--end::Row-->
