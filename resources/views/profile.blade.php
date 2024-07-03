@extends('layouts.app')

@section('content')
    <div class="header">
        <h1>Profile</h1>
    </div>
    <div class="d-flex justify-content-end">
        <form method="post" action="{{ route('logout') }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link btn-signup">Log Out</button>
        </form>


    </div>
@endsection
