@extends('layouts.app')

@section('content')
<div class="text-center mt-5 ">
    <h1>Add New Record for {{$patient['name']}}</h1>
</div>
<br>
<div class="col-lg-7 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">

            <div class="container">

                <form action="/addNewRecord" method="POST">
                    @csrf
                    <div class="mx-auto col-md-8 ">
                        <input type="hidden" name="doctor_id" value="{{$doctor['id']}}">
                        <input type="hidden" name="patient_id" value="{{$patient['id']}}">
                        <input type="hidden" name="appointment_id" value="{{$appointment['id']}}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="text-info-emphasis col-form-label-lg">Patient Name</label><textarea
                                    class="form-control" name="diagnosis" readonly>{{$patient['name']}}</textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="text-info-emphasis col-form-label-lg">Symptoms*</label><textarea
                                    class="form-control @error ('symptoms') is-invalid @enderror"
                                    name="symptoms"></textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="text-info-emphasis col-form-label-lg">Diagnosis*</label><textarea
                                    class="form-control @error ('diagnosis') is-invalid @enderror"
                                    name="diagnosis"></textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="text-info-emphasis col-form-label-lg">Prescription*</label><textarea
                                    class="form-control @error ('prescription') is-invalid @enderror"
                                    name="prescription"></textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label-lg text-info-emphasis col-form-label-lg">Test
                                    Result</label><textarea class="form-control" name="test_result"></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                        @if ($errors->any())
                        <div class="alert alert-danger mt-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="mt-3" style="text-align: center">
                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Add">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection