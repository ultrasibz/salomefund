<div class="card card-custom card-stretch gutter-b">

    <div class="card-body pt-3 pb-0">

            <form class="form" wire:submit.prevent="save">
                <div class="card">

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group row">

                            <div class="col-lg-4">
                                <label>First Name:</label>
                                <input type="text" class="form-control" placeholder="First Name"
                                       wire:model.defer="user.firstname"
                                       required/>
                                @error('firstname') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-4">
                                <label>Maiden Name:</label>
                                <input type="text" class="form-control" placeholder="Maiden Name"
                                       wire:model.defer="user.maidenname"/>
                                @error('maidenname') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-4">
                                <label>Last Name:</label>
                                <input type="text" class="form-control" placeholder="Last Name" wire:model.defer="user.lastname"
                                       required/>
                                @error('lastname') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-lg-4">
                                <label>NRC:</label>
                                <input type="text" class="form-control" placeholder="******/**/*" wire:model.defer="user.nrc"
                                       required/>
                                @error('nrc') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-4">
                                <label>T-PIN:</label>
                                <input type="text" class="form-control" placeholder="T-PIN" wire:model.defer="user.tpin"
                                       required/>
                                @error('tpin') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-3">
                                <label>E-mail:</label>
                                <input type="email" class="form-control" placeholder="E-Mail" wire:model.defer="user.email"
                                       required/>
                                @error('email') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-3">
                                <label>Mobile:</label>
                                <input type="text" class="form-control" placeholder="Mobile" wire:model.defer="user.mobile"
                                       required/>
                                @error('mobile') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-3">
                                <label>Telephone:</label>
                                <input type="text" class="form-control" placeholder="Telephone"
                                       wire:model.defer="user.telephone"/>
                                @error('telephone') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-3">
                                <label>Fax:</label>
                                <input type="text" class="form-control" placeholder="Fax" wire:model.defer="user.fax"/>
                                @error('fax') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-lg-4">
                                <label>Physical Address:</label>
                                <textarea type="text" class="form-control" placeholder="Physical Address"
                                          wire:model.defer="user.physical_address"
                                          required></textarea>
                                @error('physical_address') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-lg-4">
                                <label>Post Address:</label>
                                <input type="text" class="form-control" placeholder="Postal Address"
                                       wire:model.defer="user.postal_address"
                                       required/>
                                @error('postal_address') <span class="alert-danger mt-2">{{ $message }}</span> @enderror
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>

    </div>
</div>
