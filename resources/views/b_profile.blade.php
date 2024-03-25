@extends('layouts.app')

@section('content')
<h1>Profile page</h1>


@if($errors->any())
    <h3>Errors</h3>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif

{{-- Currrent User: {{$image_test=$user->profilePic}} --}}

<div class="container">
    <div class="col-12">
    <div class="card mb-4">
        <div class="card-body">
            <table>
                <tr>
                    <td><a href="/updateProfilePicture/{{$user->id}}">
                        {{-- @if(strpos($user->profilePic, 'https://img.favpng.com/25/7/23/computer-icons-user-profile-avatar-image-png-favpng-LFqDyLRhe3PBXM0sx2LufsGFU.jpg'))
                         <img src={{asset($user->profilePic)}} alt="pic" width="100" height="100"/>
                         @endif
                         @if(!strpos($user->profilePic, 'http'))
                         <img src={{$relative_path = ltrim(str_replace(public_path(), '', $user->profilePic), '\\/')}} alt="pic" width="100" height="100"/>
                         @endif --}}

                         <img src={{asset($user->profilePic)}} alt="pic" width="100" height="100"/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td >Name:</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $user->email }}</td>
                </tr>

                @can('isDoctor')
                <tr>
                    <td>Expertise:</td>
                    <td>{{ $user->expertise }}</td>
                </tr>
                @endcan

                <tr>
                    <td >Gender:</td>
                    <td>{{ $user->gender }}</td>
                </tr>

                <tr>
                    <td >IC Number:</td>
                    <td>{{ $user->ic }}</td>
                </tr>

                <tr>
                    <td>Phone Number:</td>
                    <td>{{ $user->phone }}</td>
                </tr>

                <!-- <tr>
                    <td>Password:</td>
                    <td>{{ $user->password }}</td>
                </tr> -->


                <tr>
                    <td><a href='/updateProfile/{{$user->id}}' class="btn btn-primary">Update profile</a></td>
                </tr>

            </table>
            </div>
        </div>
    </div>
</div>


@endsection