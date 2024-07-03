@extends('layouts.app')

@section('content')
    <div class="header">
        <h1>Dashboard</h1>
    </div>
    <div>
        <form method="post" action="{{ route('logout') }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link btn-signup">Log Out</button>

        </form>

    </div>
@endsection
