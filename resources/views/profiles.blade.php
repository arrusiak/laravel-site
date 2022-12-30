@extends('layout')

@section('content')
@extends('navbar')
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <th>Profile picture</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Age</th>
                <th>Email</th>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        @if($user->profile_pic)
                            <img src="{{ asset('storage/images/'. $user->profile_pic) }}" alt="ProfilePic" class="" style="width: 50px"/>
                        @else
                            <img src="{{ asset('storage/images/profile.png')}}" alt="ProfilePic" style="width: 50px"/>
                        @endif
                    </td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
