@extends('layout')

@section('content')
@extends('navbar')
<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <th>Profile picture</th>
                <th>Email</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        @if($LoggedUserInfo['profile_pic'])
                            <img src="{{ asset('storage/images/'. $LoggedUserInfo['profile_pic']) }}" alt="ProfilePic" class="img-fluid rounded w-25"/>
                        @else
                            <img src="{{ asset('storage/images/profile.png')}}" alt="ProfilePic" class="img-fluid rounded w-25"/>
                        @endif
                    </td>
                    <td>{{ $LoggedUserInfo['email'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Age</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $LoggedUserInfo['first_name'] }}</td>
                    <td>{{ $LoggedUserInfo['last_name'] }}</td>
                    <td>{{ $LoggedUserInfo['age'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
