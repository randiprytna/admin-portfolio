@extends('layouts.auth')

@section('content')
    <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
        <div class="auth-cover-bg-image"></div>
        <div class="auth-overlay"></div>
        <div class="auth-cover">
            <div class="position-relative">
                <img src="{{ asset('img/foto-profil.jpeg') }}" alt="auth-img" class="rounded-circle">
                <h2 class="mt-5 text-white font-weight-bolder px-2">Admin - Muhammad Randi Nur Priyatna's Portfolio</h2>
                <p class="text-white px-2">"Interested in becoming a contributor? Click <a href="javascript:void(0);" class="text-warning">here</a> to join."</p>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('login') }}" method="post" class="row">
                    @csrf
                    @include('components.message')
                    <div class="col-md-12 mb-3">
                        <h2>Sign In</h2>
                        <p>Enter your email and password to sign in</p>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <button class="btn btn-secondary w-100">SIGN IN</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <p class="mb-0">Dont't have an account ? <a href="javascript:void(0);" class="text-warning">Sign Up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection