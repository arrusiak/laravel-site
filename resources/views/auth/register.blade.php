@extends('layout')

@section('content')
    <h1 class="text-primary text-center mt-5">Registration</h1>
    <form class="row g-3" method="post" action="{{ route('auth.registration') }}" enctype="multipart/form-data">
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
        @csrf
        <div class="row g-3">
            <div class="col-md-6 col-sm-12">
                <input type="text" class="form-control" id="staticEmail2"  placeholder="First Name" name="first_name">
                <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-6 col-sm-12">
                <input type="text" class="form-control" id="staticEmail2"  placeholder="Last Name" name="last_name">
                <span class="text-danger">@error('last_name'){{ $message }} @enderror</span>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6 col-sm-12">
                <input type="file" class="form-control" placeholder="Profile picture" name="profile_pic">
                <span class="text-danger">@error('profile_pic'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-6 col-sm-12">
                <input type="number" class="form-control" placeholder="Age" name="age">
                <span class="text-danger">@error('age'){{ $message }} @enderror</span>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6 col-sm-12">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-6 col-sm-12">
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary mb-3">Sign Up</button>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-12">
                <p class="text-light-emphasis">Have an account? <a href="{{ route('auth.login') }}"> Sign in </a></p>
            </div>
        </div>
    </form>
@endsection
