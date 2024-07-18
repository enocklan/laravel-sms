<div>
    <!-- Body: Body -->
    <div class="body d-flex p-0 p-xl-5">
        <div class="container-xxl">
            <div class="row g-0">
                <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                    <div style="max-width: 25rem;">
                        <div class="text-center mb-5">
                            <img src="{{ asset('assets/images/school.png') }}" style="height: 250px;" alt="login-img">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                    <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                        <!-- Form -->
                        <form wire:submit.prevent="resetPassword" class="row g-1 p-3 p-md-4">
                            <div class="col-12 text-center mb-5">
                                <h1>Reset Password</h1>
                            </div>
                            @if (session()->has('status'))
                                <div class="col-12 mb-2">
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="col-12 mb-2">
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">Admin Email</label>
                                    <input type="email" wire:model="email" class="form-control form-control-lg" placeholder="Enter Email">
                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">New Password</label>
                                    <input type="password" wire:model="password" class="form-control form-control-lg" placeholder="Enter New Password">
                                    @error('password') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" wire:model="password_confirmation" class="form-control form-control-lg" placeholder="Confirm New Password">
                                    @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase">RESET PASSWORD</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div> <!-- End Row -->
        </div>
    </div>
</div>
