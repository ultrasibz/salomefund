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
                            <span class="font-weight-bolder font-size-h5">@money($group->deposit_total)<small
                                    class="text-muted">(@money($group->deposit_net_amount_total) Net)</small></span>
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
                            <span class="font-weight-bolder font-size-h5">@money($group->loan_total)<small
                                    class="text-muted">(@money($group->loan_net_amount_total) Net)</small></span>
                        </div>
                    </div>


                </div>
                <!--begin::Items-->
            </div>
        </div>

    </div>

    <div class="col-lg-12">

       <div class="row">
            <div class="col-lg-12">
                <livewire:groups.group-user-index :group="$group"/>
            </div>
        </div>
    </div>
    <!--end::Row-->
</div>

</div>
