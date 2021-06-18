<div class="card card-custom card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Members</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm"> <span
                    class="label label-lg label-rounded label-primary">{{$users->count()}}</span></span>
        </h3>

        <div class="card-toolbar">

            <form class="form-inline" wire:submit.prevent="save">
                <select class="form-control mr-3" wire:model.defer="selecteduser">
                    <option value="">--Member--</option>
                    @foreach($non_members as $user)
                        <option value="{{$user->id}}">{{$user->fullname}}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary my-1" wire:loading.attr="disabled"
                        wire:loading.class="spinner spinner-right spinner-white">Add
                </button>
            </form>

            <span class="label label-dot label-primary mr-3 ml-3"></span>


            <a href="{{route('group.user.add',$group)}}" class="btn btn-primary font-weight-bolder font-size-sm">
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
                        </svg><!--end::Svg Icon--></span>Create Member
            </a>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-3 pb-0">

        <div class="table-responsive">

            {{$users->links()}}

            <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Ratings</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="pl-0">
                             <a href="{{route('user.show',$user)}}"> {{$user->nrc}}</a>
                        </td>

                        <td class="pl-0">
                             <span class="text-dark-75  d-block font-size-lg">
                                {{$user->fullname}}
                            </span>
                        </td>

                        <td class="pl-0">
                             <span class="text-dark-75  d-block font-size-lg">
                                {{$user->email}}
                            </span>
                        </td>

                        <td class="pl-0">
                             <span class="text-dark-75  d-block font-size-lg">
                                {{$user->mobile}}
                            </span>
                        </td>

                        <td class="pl-0">
                             <span class="text-dark-75  d-block font-size-lg">
                                {{$user->rating}}
                            </span>
                        </td>


                        <td class="text-right pr-0">
                            <a href="{{route('group.user.deposits',compact('group','user'))}}"
                               class="btn btn-text-primary btn-hover-primary btn-sm">Deposits</a>
                            <a href="{{route('group.user.loans',compact('group','user'))}}"
                               class="btn btn-text-primary   btn-hover-primary btn-sm">Loans</a>

                            <button class="btn btn-icon btn-light btn-hover-primary btn-sm" wire:click="remove({{$user->id}})">
                                                                        <span
                                                                            class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg--><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
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
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
