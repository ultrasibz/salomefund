<div class="card card-custom card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">loans</span>

        </h3>
        <div class="card-toolbar">
            <button class="btn btn-primary font-weight-bolder font-size-sm" data-toggle="modal"
                    data-target="#add">
                    <span
                        class="svg-icon svg-icon-md svg-icon-white"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg--><svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path
            d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
            fill="#000000" fill-rule="nonzero"/>
    </g>
                        </svg><!--end::Svg Icon--></span>loan
            </button>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-3 pb-0">

        <div class="table-responsive">

            {{$loans->links()}}

            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                <thead>
                <tr>
                    <th>Amount</th>
                    <th>Interest</th>
                    <th>Net Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date Added</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($loans as $loan)
                    <tr>
                        <td>
                             <span class="text-dark-75  d-block font-size-lg">
                                @money($loan->amount)
                            </span>
                        </td>

                        <td>
                             <span class="text-dark-75  d-block font-size-lg">
                                {{$loan->interest}}
                            </span>
                        </td>

                        <td>
                             <span class="text-dark-75  d-block font-size-lg">
                                 @money($loan->net_amount)
                            </span>
                        </td>

                        <td>
                             <span class="text-dark-75  d-block font-size-lg">
                                {{$loan->type->name}}
                            </span>
                        </td>

                        <td>
                             <span class="text-dark-75  d-block font-size-lg">
                                {{$loan->status}}
                            </span>
                        </td>

                        <td>
                             <span class="text-dark-75  d-block font-size-lg">
                                {{$loan->created_at->toFormattedDateString()}}
                            </span>
                        </td>


                        <td class="text-right pr-0">
                            <button class="btn btn-primary btn-sm"  data-toggle="modal"
                                    data-target="#disburse-dd" wire:click="selected({{$loan}})">Disburse</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>

<div class="modal fade" id="disburse-dd" data-backdrop="static" tabindex="-1" role="dialog"
     aria-labelledby="staticBackdrop" aria-hidden="true" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <livewire:groups.group-user-disbursements-add />
    </div>
</div>
