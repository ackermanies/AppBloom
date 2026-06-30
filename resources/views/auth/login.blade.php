@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="login-card shadow">

                    <h2 class="text-center mb-4">
                        Welcome Back 🌸
                    </h2>

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">
                                    Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email') }}"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>
                        </div>

                        <button class="btn hero-btn w-100">
                            Login
                        </button>
                        <div class="demo-account mt-4">
                            <strong>Demo Account</strong><br>
                                Email :
                                admin@appbloom.com <br>

                                Password :
                                admin123
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection