@extends('layouts.app')

@section('content')
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register your account here !</h3>
                        <p>Fill in the data below.</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- USERNAME -->
                            <div class="form-floating col-md-12">
                                <input id="floatingUsername" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Jordon Poole" type="text" name="name" value="{{ old('name') }}">
                                <label for="floatingUsername" style="color:rgb(93, 92, 92)">Username</label>
                                @error('name')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror

                            </div>

                            <!-- EMAIL -->
                            <div class="form-floating col-md-12">
                                <input id="floatingEmail" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Ex: name@mail.com" type="email" name="email"
                                    value="{{ old('email') }}">
                                <label for="floatingEmail" style="color:rgb(93, 92, 92)">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- IC -->
                            <div class="form-floating col-md-12">
                                <input id="floatingIC" class="form-control @error('ic') is-invalid @enderror"
                                    placeholder="Ex: 000000-00-0000" type="text" name="ic"
                                    value="{{ old('ic') }}">
                                <label for="floatingIC" style="color:rgb(93, 92, 92)">IC number</label>
                                @error('ic')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- PHONE NUMBER -->
                            <div class="form-floating col-md-12">
                                <input id="floatingPhoneNumber" class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Ex: 000-0000000" type="text" name="phone" value="{{ old('phone') }}">
                                <label for="floatingPhoneNumber" style="color:rgb(93, 92, 92)">Phone number</label>
                                @error('phone')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- GENDER -->
                            <div class="col-md-12 mt-3">
                                <label class="mb-3 mr-1" for="gender">Gender: </label>

                                <input type="radio" class="btn-check @error('gender') is-invalid @enderror" name="gender"
                                    id="male" autocomplete="off" value="Male">
                                <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                                <input type="radio" class="btn-check @error('gender') is-invalid @enderror" name="gender"
                                    id="female" autocomplete="off" value="Female">
                                <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                                @error('gender')
                                    <div class="invalid-feedback mv-up">Please select a gender!</div>
                                @enderror
                            </div>

                            <!-- PASSWORD -->
                            <div class="form-floating col-md-12 mb-3">
                                <input id="floatingPassword" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Please enter your password" type="text" name="password"
                                    value="{{ old('password') }}">
                                <label for="floatingPassword" style="color:rgb(93, 92, 92)">Password</label>
                                @error('password')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- PASSWORD CONFIRMATION -->
                            <div class="form-floating col-md-12 mb-3">
                                <input id="floatingPassCon" name="password_confirmation" class="form-control"
                                    placeholder="Please enter your password again" type="text"
                                    name="password_confirmation">
                                <label for="floatingPassCon" style="color:rgb(93, 92, 92)">Confirm password</label>
                            </div>

                            <!-- CHECKBOX -->
                            <div class="form-check">
                                <input class="form-check-input @error('Confirm') is-invalid @enderror" type="checkbox"
                                    value="1" id="invalidCheck" name="Confirm">
                                <label class="form-check-label">I confirm that all provided data are accurate !</label>
                                @error('Confirm')
                                    <div class="invalid-feedback">Please confirm that the entered data are all correct!
                                    </div>
                                @enderror
                            </div>


                            <div class="form-button mt-3" style="text-align: center;">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-control:focus::placeholder {
            color: gray !important;
        }

        .form-holder {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            /* min-height: 100vh; */
        }

        .form-holder .form-content {
            position: relative;
            text-align: center;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 60px;
        }

        .form-content .form-items {
            border: 3px solid black;
            background-color: #abcdef;
            padding: 40px;
            display: inline-block;
            width: 100%;
            min-width: 540px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            text-align: left;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .form-content h3 {
            color: black;
            text-align: left;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .form-content h3.form-title {
            margin-bottom: 30px;
        }

        .form-content p {
            color: black;
            text-align: left;
            font-size: 17px;
            font-weight: 300;
            line-height: 20px;
            margin-bottom: 30px;
        }


        .form-content label,
        .was-validated .form-check-input:invalid~.form-check-label,
        .was-validated .form-check-input:valid~.form-check-label {
            color: black;
        }

        .form-content input[type=text],
        .form-content input[type=password],
        .form-content input[type=email],
        .form-content select {
            width: 100%;
            padding: 9px 20px;
            text-align: left;
            border: 0;
            outline: 0;
            border-radius: 6px;
            background-color: #fff;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            margin-top: 16px;
        }


        .btn-primary {
            background-color: #6C757D;
            outline: none;
            border: 0px;
            box-shadow: none;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: #495056;
            outline: none !important;
            border: none !important;
            box-shadow: none;
        }

        .form-content textarea {
            position: static !important;
            width: 100%;
            padding: 8px 20px;
            border-radius: 6px;
            text-align: left;
            background-color: #fff;
            border: 0;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            outline: none;
            resize: none;
            height: 120px;
            -webkit-transition: none;
            transition: none;
            margin-bottom: 14px;
        }

        .form-content textarea:hover,
        .form-content textarea:focus {
            border: 0;
            background-color: #ebeff8;
            color: #8D8D8D;
        }

        .mv-up {
            margin-top: -9px !important;
            margin-bottom: 8px !important;
        }

        .invalid-feedback {
            color: #ff606e;
        }

        .valid-feedback {
            color: #2acc80;
        }
    </style>
@endsection
