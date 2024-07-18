<div>
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Admin Credentials</h3>
                </div>
            </div>
        </div> <!-- Row end -->

        <div class="row g-3">
            <div class="col-xl-12 col-lg-10 col-md-8">
                <div class="card profile-card flex-column mb-3" style="background-image: url('{{ asset('assets/images/bgs.jpg') }}'); background-size: cover; background-position: center; height: 300px; position: relative;">
                    <div class="profile-info" style="position: absolute; bottom: 15px; left: 50%; transform: translateX(-50%); text-align: center;">
                        @if ($profile)
                            <img src="{{ Storage::url($profile) }}" alt="Profile Image" class="rounded-circle" style="width: 100px; height: 100px; border: 3px solid white;">
                        @else
                            <img src="{{ asset('assets/images/xs/avatar11.svg') }}" alt="Default Profile Image" class="rounded-circle" style="width: 100px; height: 100px; border: 3px solid white;">
                        @endif
                        <p class="text-white mt-2">{{ $admin->name }}</p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Profile Update</h6>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="changePassword">
                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label for="oldPassword">Old Password</label>
                                    <input type="password" class="form-control" id="oldPassword" wire:model="oldPassword" placeholder="Enter your old password">
                                    @error('oldPassword') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-xl-6 mt-3 mt-xl-0">
                                    <label for="newPassword">New Password</label>
                                    <input type="password" class="form-control" id="newPassword" wire:model="newPassword" placeholder="Enter your new password">
                                    @error('newPassword') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 float-end">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
