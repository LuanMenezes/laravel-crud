@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a class="btn btn-primary" href="{{ url('/login') }}">Login</a>
                    <a class="btn btn-primary" href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif
    </div>
    <div class="content">
        <h4>Nothing</h4>
    </div>
@endsection