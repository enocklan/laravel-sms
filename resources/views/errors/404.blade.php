@extends('layouts.errors')

@section('content')
    <div class="body d-flex p-0 p-xl-5">
        <div class="container-xxl">
            <div class="row g-0">
                <div class="col-lg-12 d-flex justify-content-center align-items-center rounded-lg auth-h100">
                    <div class="w-100 p-5 card border-0 shadow-sm" style="max-width: 32rem;">
                        <div class="text-center mb-5">
                            <img src="{{ asset('assets/images/404.svg') }}" style="height: 250px;" alt="404-img">
                        </div>
                        <div class="text-center mb-3">
                            <h1>Oops! Page Not Found</h1>
                            <p class="text-muted">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                        </div>
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-primary">Go to Home</a>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div>
    </div>
@endsection
