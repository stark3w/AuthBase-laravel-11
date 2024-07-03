@extends('layouts.app')

@section('content')
    <div class="wave-container">
        <a href="{{ route('register') }}" class="btn btn-link btn-signup">Register</a>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
                <h3 class="card-title text-center mb-4">Forgot password?</h3>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="post"  action="{{ route('password.request') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-submit btn-block">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
