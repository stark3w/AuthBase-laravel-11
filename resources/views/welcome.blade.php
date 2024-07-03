@extends('layouts.app')

@section('content')
    <div class="header">
        <h1>Auth Base</h1>
    </div>
    <div class="container">
        <div class="buttons-container">
            @guest()
                <a href="{{ route('login') }}" class="btn btn-danger btn-lg m-3">Log In</a>
                <a href="{{ route('register') }}" class="btn btn-danger btn-lg">Sign Up</a>
            @endguest
            @auth()
                <a href="{{ route('dashboard') }}" class="btn btn-danger btn-lg m-3">Dashboard</a>
            @endauth
        </div>
    </div>
@endsection
