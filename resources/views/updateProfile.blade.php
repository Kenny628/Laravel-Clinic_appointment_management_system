@extends('layouts.app')

@section('content')
<div class=" text-center mt-5 ">
<h1 >Update {{$data['name']}} Profile page</h1>
</div>

@if(session()->has('PassFailedUpdate'))
    <span style="color:red">{{session('PassFailedUpdate')}}</span>
@endif

<div class="row ">
    <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">

                <div class="container">

                    <form action='/updateProfile' method="POST">

                        @csrf
                        <input type="hidden" name='id' value='{{$data->id}}' />

                        {{-- PATIENT --}}
                        @can('isPatient')

                        <div class="controls">

                            <input type="hidden" name='oldPasswordHash' value='{{$data->password}}' />

                            <div class="row">

                                <!-- NAME -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Name *</label>
                                        <input id="form_name" type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Please enter the name *" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- ROW 2 -->  
                            <div class="row">
                                <!-- IC -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_ic">IC *</label>
                                            <input id="form_ic" type="text" name="ic"
                                                    class="form-control @error('ic') is-invalid @enderror"
                                                    placeholder="Ex: 123456-78-9999 *" value="{{ old('ic') }}">
                                    </div>
                                </div>
                                
                                <!-- Phone number -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phoneNumber">Phone number *</label>
                                            <input id="form_phoneNumber" type="text" name="phone"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    placeholder="Ex: 012-34567890 *" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                
                            </div>

                        <!-- ROW 3 -->
                        <div class="row">
                            <!-- Password -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_passsword">Old Password *</label>
                                    <input id="form_password" type="text" name="oldPassword"
                                            class="form-control @error('oldPassword') is-invalid @enderror"
                                            placeholder="Please enter your old password *">
                                </div>
                            </div>
                        </div>    
                            
                            <!-- New Password -->
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_passCon">New password *</label>
                                            <input id="form_passwNew" type="text" name="newPassword"
                                                    class="form-control @error('newPassword') is-invalid @enderror"
                                                    placeholder="Please enter your new password *">
                                    </div>
                            </div>
                            
                            <!-- Password confirmation -->
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_passCon">Confirm password *</label>
                                            <input id="form_passwCon" type="text" name="confirmPassword"
                                                    class="form-control @error('confirmPassword') is-invalid @enderror" 
                                                    placeholder="Please enter the password again *">
                                    </div>
                            </div>
                            
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger mt-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        {{-- DOCTOR --}}
                        
                        @elsecan('isDoctor')

                        <div class="controls">

                            <!-- ROW 1 -->
                            <div class="row">

                                <!-- NAME -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Name *</label>
                                        <input id="form_name" type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Please enter the name *" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <!-- EMAIL -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="text" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Ex: name@email.com *" value="{{ old('email') }}">
                                    </div>
                                </div>

                            </div>

                            <!-- ROW 2 -->
                            <div class="row">

                                <!-- IC -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_ic">IC *</label>
                                        <input id="form_ic" type="text" name="ic"
                                            class="form-control @error('ic') is-invalid @enderror"
                                            placeholder="Ex: 123456-78-9999 *" value="{{ old('ic') }}">
                                    </div>
                                </div>

                                <!-- Phone number -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phoneNumber">Phone number *</label>
                                        <input id="form_phoneNumber" type="text" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Ex: 012-34567890 *" value="{{ old('phone') }}">
                                    </div>
                                </div>

                            </div>

                            <!-- ROW 3 -->
                            <div class="row">

                                <!-- Expertise -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_Expertise">Expertise *</label>
                                        <textarea id="form_Expertise" name="expertise"
                                            class="form-control @error('expertise') is-invalid @enderror"
                                            placeholder="Please enter the expertise description of the doctor"
                                            rows="4"> {{ old('expertise') }}</textarea>
                                    </div>
                                </div>

                            </div>

                            <!-- ROW 4 -->
                            <div class="row">

                                <!-- Password -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_passsword">Password *</label>
                                        <input id="form_password" type="text" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Please enter the password *">
                                    </div>
                                </div>


                                <!-- Password confirmation -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_passCon">Confirm password *</label>
                                        <input id="form_passwCon" type="text" name="password_confirmation"
                                            class="form-control @error('password_confirmation') is-invalid @enderror" 
                                            placeholder="Please enter the password again *">
                                    </div>
                                </div>

                            </div>

                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger mt-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- Submit button -->

                        @endcan
                        <div class="mt-3">
                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection