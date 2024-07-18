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
                        <form wire:submit.prevent="login" class="row g-1 p-3 p-md-4">
                            <div class="col-12 text-center mb-5">
                                <h1>Sign in</h1>
                            </div>
                            <div class="col-12 text-center mb-4">
                                <a class="btn btn-lg btn-light btn-block" href="#">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <img class="avatar xs me-2" src="{{ asset('assets/images/google.svg') }}" alt="Image Description">
                                        Sign in with Google
                                    </span>
                                </a>
                                <span class="dividers text-muted mt-4">OR</span>
                            </div>
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
                                    @error('student_id') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <div class="form-label">
                                        <span class="d-flex justify-content-between align-items-center">
                                            Password
                                            <a class="text-secondary" href="{{route('admin.forgot-password')}}">Forgot Password?</a>
                                        </span>
                                    </div>
                                    <input type="password" wire:model="password" class="form-control form-control-lg" placeholder="***************">
                                    @error('password') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model="remember" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase">SIGN IN</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div> <!-- End Row -->
        </div>
    </div>
</div>
