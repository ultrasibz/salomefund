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
                </div>

            </div>
        </div>

        <div class="col-lg-12 mt-3">

            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <div class="card-header border-0">
                            <h3 class="card-title text-muted">
                                NRC / Passport
                            </h3>

                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center">

                                @if($user->nrc_doc)
                                    <object data="{{$user->nrc_doc->getUrl()}}" type="application/pdf" width="100%" height="800px">
                                        <p>It appears you don't have a PDF plugin for this browser.
                                            No biggie... you can <a href="resume.pdf">click here to
                                                download the PDF file.</a></p>
                                    </object>
                                @endif


                            </div>
                        </div>

                        <div class="card-footer">
                            <form class="form" wire:submit.prevent="nrc_upload">
                                <div class="input-group" wire:ignore>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" wire:model.defer="nrc">
                                        <label class="custom-file-label"  >Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" wire:loading.attr="disabled"
                                                wire:loading.class="spinner spinner-right spinner-white" wire:target="save">Upload</button>
                                    </div>
                                </div>
{{--                            </form>--}}
{{--                            <button class="btn btn-dark btn-text-primary btn-hover-text-primary font-weight-bold">--}}
{{--                                download--}}
{{--                            </button>--}}
                        </div>

                    </div>
                    <!--end:: Card-->
                </div>
                <!--end::Col-->

            </div>
        </div>

    </div>


</div>














