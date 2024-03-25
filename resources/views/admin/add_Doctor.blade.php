@extends('layouts.app')

@section('content')

<div class="container">
    <!-- TITLE -->
    <div class=" text-center mt-5 ">
        <h1>Add Doctor Form</h1>
    </div>

    <!-- FORM BODY -->
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">

                    <div class="container">

                        <!-- FORM -->
                        <form id="contact-form" method="POST" action="/addDoctor">
                            @csrf

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

                                    <!-- GENDER -->
                                    <div class="col-md-12 mt-3">
                                        <label class="mb-3 mr-1" for="gender">Gender: </label>

                                        <input type="radio" class="btn-check @error('gender') is-invalid @enderror"
                                            name="gender" id="male" autocomplete="off" value="Male">
                                        <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                                        <input type="radio" class="btn-check @error('gender') is-invalid @enderror"
                                            name="gender" id="female" autocomplete="off" value="Female">
                                        <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

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
                            <div class="mt-3" style="text-align: center">
                                <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Update">
                            </div>
                        </form>

                    </div>
                </div>


            </div>

        </div>
    </div>

</div>

<style>
    .invalid-feedback {
        color: #ff606e;
    }

    .valid-feedback {
        color: #2acc80;
    }
</style>

@endsection