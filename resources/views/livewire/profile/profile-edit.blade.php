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
                            <h3 class="card-label font-weight-bolder text-dark">Update Information</h3>
                            <span
                                class="text-muted font-weight-bold font-size-sm mt-1">edit your personal information</span>
                        </div>
                        <div class="card-toolbar">
                            <button type="submit" class="btn btn-success mr-2" wire:loading.attr="disabled"
                                    wire:loading.class="spinner spinner-right spinner-white" wire:target="save">Save
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->

                    <!--begin::Form-->
                    <!--begin::Body-->
                    <div class="card-body">
{{--                        <div class="row">--}}
{{--                            <label class="col-12"></label>--}}
{{--                            <div class="col-lg-9 col-xl-6">--}}
{{--                                <h5 class="font-weight-bold mb-6">Personal Information</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row">
                            <label class="col-12 col-form-label"></label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="image-input image-input-outline image-input-circle" id="kt_profile_avatar"
                                     style="background-image: url('{{$user->avatar ? $user->avatar->getUrl() : asset('media/users/blank.png')}}')">

                                    <div class="image-input-wrapper"
                                         style="background-image: url('{{$avatar ? $avatar->temporaryUrl() : $user->avatar->getUrl()}}')"></div>

                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" accept=".png, .jpg, .jpeg" wire:model="avatar"/>
                                        {{--                                        <input type="hidden" name="profile_avatar_remove"/>--}}
                                    </label>

                                    <span
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>

                                    </span>
                                </div>
                                <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>First Name:</label>
                                    <input type="text"
                                           class="form-control form-control-lg form-control-solid form-control form-control-lg form-control-solid-lg form-control form-control-lg form-control-solid-solid"
                                           placeholder="First Name"
                                           wire:model.defer="user.firstname"
                                           required/>
                                    @error('firstname') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Maiden Name:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="Maiden Name"
                                           wire:model.defer="user.maidenname"/>
                                    @error('maidenname') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Last Name:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="Last Name" wire:model.defer="user.lastname"
                                           required/>
                                    @error('lastname') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>NRC:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="******/**/*" wire:model.defer="user.nrc"
                                           required/>
                                    @error('nrc') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>T-PIN:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="T-PIN" wire:model.defer="user.tpin"
                                           required/>
                                    @error('tpin') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>E-mail:</label>
                                    <input type="email" class="form-control form-control-lg form-control-solid"
                                           placeholder="E-Mail" wire:model.defer="user.email"
                                           required/>
                                    @error('email') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Mobile:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="Mobile" wire:model.defer="user.mobile"
                                           required/>
                                    @error('mobile') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Telephone:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="Telephone"
                                           wire:model.defer="user.telephone"/>
                                    @error('telephone') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fax:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="Fax" wire:model.defer="user.fax"/>
                                    @error('fax') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Physical Address:</label>
                                    <textarea type="text" class="form-control form-control-lg form-control-solid"
                                              placeholder="Physical Address"
                                              wire:model.defer="user.physical_address"
                                              required></textarea>
                                    @error('physical_address') <span
                                        class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Post Address:</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           placeholder="Postal Address"
                                           wire:model.defer="user.postal_address"
                                           required/>
                                    @error('postal_address') <span
                                        class="alert-danger mt-2">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success mr-2" wire:loading.attr="disabled"
                                wire:loading.class="spinner spinner-right spinner-white" wire:target="save">Save
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>


</div>
