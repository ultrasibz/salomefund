<div class="d-flex flex-row">
    <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
        <livewire:profile.profile-card :user="$user"/>
    </div>


    <div class="flex-row-fluid">
        <div class="col-lg-12">
            <div class="card card-custom card-stretch">

                <!--begin::Header-->
                <div class="card-header py-3">
                    <div class="card-title align-items-start flex-column">
                        <h3 class="card-label font-weight-bolder text-dark">Documents</h3>
                        <span
                            class="text-muted font-weight-bold font-size-sm mt-1">edit your personal information</span>
                    </div>
                    <div class="card-toolbar">
                        <button type="submit" class="btn btn-success mr-2" wire:loading.attr="disabled"
                                wire:loading.class="spinner spinner-right spinner-white" wire:target="save">Save
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-12 mt-3">

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                            </h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                     data-placement="left">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
                <span class="label label-light-primary label-inline font-weight-bold">new</span>
            </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>

                                            <li class="navi-separator my-3"></li>

                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
                <span class="label label-light-danger label-rounded font-weight-bold">5</span>
            </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center">
                                <!--begin: Icon-->
                                <img alt="" class="max-h-65px" src="{{asset('')}}/media/svg/files/pdf.svg"/>
                                <!--end: Icon-->

                                <!--begin: Tite-->
                                <a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">
                                    Technical Requiremnts.pdf
                                </a>
                                <!--end: Tite-->
                            </div>
                        </div>
                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->

            </div>
        </div>

    </div>


</div>














