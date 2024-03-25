@extends('layouts.app')

@section('content')
<div class="text-center mt-5 ">
    <h1>Update {{$patient['name']}} Details </h1>
</div>
<br>
<div class="col-lg-7 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">

            <div class="container">

                <form action="/updateUser" method="POST">
                    @csrf
                    <div class="mx-auto col-md-8 ">
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <input type="hidden" name="patient_id" value="{{$patient['id']}}">
                        @can('isAdmin')
                        <div class="col-mb-3">
                            <div class="form-group">
                                <label class="text-info-emphasis col-form-label-lg">Symptoms </label><textarea
                                    class="form-control" name="symptoms" readonly>{{$data['symptoms']}}</textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="text-info-emphasis col-form-label-lg">Diagnosis </label><textarea
                                    class="form-control" name="diagnosis" readonly>{{$data['diagnosis']}}</textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="text-info-emphasis col-form-label-lg">Prescription </label><textarea
                                    class="form-control" name="prescription"
                                    readonly>{{$data['prescription']}}</textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label-lg">Test Result</label><textarea class="form-control"
                                    name="test_result">{{$data['test_result']}}</textarea>
                            </div>
                        </div>



                        @else
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="text-info-emphasis col-form-label-lg ">Symptoms </label><textarea readonly
                                    class="form-control" name="symptoms" readonly>{{$data['symptoms']}} </textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label-lg">Diagnosis </label><textarea class="form-control"
                                    name="diagnosis">{{$data['diagnosis']}}</textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label-lg">Prescription </label><textarea class="form-control"
                                    name="prescription">{{$data['prescription']}}</textarea><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label-lg">Test Result</label><textarea class="form-control"
                                    name="test_result">{{$data['test_result']}}</textarea>
                            </div>
                        </div>
                        @endcan
                        <br>
                        <br>
                        <div class="mt-3" style="text-align: center">
                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection