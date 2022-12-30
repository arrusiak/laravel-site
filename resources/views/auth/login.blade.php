@extends('layout')

@section('content')
    <h1 class="text-primary text-center mt-5">Login to system</h1>
    <form class="row g-3" method="post" action="{{ route('auth.signIn') }}">
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
            @csrf
        <div class="row g-3">
            <div class="col-sm-12">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-12">
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary mb-3">Sign In</button>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-12">
                <p class="text-light-emphasis">Don't have an account? <a href="{{ route('auth.register') }}">Sign up</a></p>
            </div>
        </div>
    </form>
@endsection
