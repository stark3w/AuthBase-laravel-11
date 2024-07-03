@extends('layouts.app')

@section('content')
    <div class="wave-container">
        <a href="{{ route('login') }}" class="btn btn-link btn-signup">Log In</a>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
                <h3 class="card-title text-center mb-4">Register</h3>
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Login</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="username" placeholder="Enter your username" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter the password" required minlength="8">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Password confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm the password" required minlength="8">
                        @error('confirm-password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-submit btn-block">Sign Up</button>
                    <a href="{{ route('login') }}" class=" mt-3 text-center d-block">Already have an account?</a>
                </form>
            </div>
        </div>
    </div>
@endsection
