@extends('layouts.app')
 
@section('content')
<div class=" text-center mt-5 ">
<h1  >Update {{$data['name']}} Profile Picture</h1>
</div>


<div class="row ">
    <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                     <div class="container">

                        <form action='/updateProfilePicture' method="POST" enctype="multipart/form-data">
                            @csrf
                        @can('isPatient')
                            <label for="file-input">Choose a JPG file:</label>
                            <input type="hidden" name="id" value="{{session('user_id')}}">
                            <input type="file" name="profilePic" accept=".jpg, .png">
                            <br><br>
                            <input type="submit" value="Submit">
                        

                        @elsecan('isDoctor')
                            <label for="file-input">Choose a JPG file:</label>
                            <input type="hidden" name="id" value="{{session('user_id')}}">
                            <input type="file" name="profilePic" accept=".jpg, .png">
                            <br><br>
                            <input type="submit" value="Submit">
                    
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>

@elsecan('isDoctor')
<div class="row ">
    <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                     <div class="container">

                        <form action='/updateProfilePicture' method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="file-input">Choose a JPG file:</label>
                            <input type="hidden" name="id" value="{{session('user_id')}}">
                            <input type="file" name="profilePic" accept=".jpg, .png">
                            <br><br>
                            <input type="submit" value="Submit">
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endcan

@endsection