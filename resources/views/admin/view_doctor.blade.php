@extends('layouts.app')

@section('content')

<h1 style="text-align:center;">Doctor management page</h1>

<table class="table table-striped table-hover dt-responsive wrap" id="doctor_table" style="width:100%">
    <thead class="table-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col">Email</th> 
        <th scope="col">IC</th> 
        <th scope="col">Expertise</th> 
        <th scope="col">Phone</th> 
        <th scope="col">Action</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="table-info">
        @foreach($doctors as $key => $doctor)
            <tr>
                <th scope="row">{{$key+1}}.</th>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->email}}</td>
                <td>{{$doctor->ic}}</td>
                <td>{{$doctor->expertise}}</td>
                <td>{{$doctor->phone}}</td>
                <td>
                    <form action='/updateDoctor/{{$doctor->id}}' method='GET'>
                        @csrf
                        <button type="submit" class="btn btn-info">UPDATE</button>
                    </form>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target='#DeleteDoctorModal_{{$doctor->id}}'>
                        DELETE
                    </button>

                    <!-- APPROVED MODAL DISPLAY -->
                    @include('partials.prompt_window', [
                    'modal_id' => 'DeleteDoctorModal_'.$doctor->id,
                    'aria_label' => 'deleteModalLabel',
                    'modal_title' => 'CONFIRM TO DELETE THIS DOCTOR',
                    'modal_body' => 'NOTE: THIS DOCTOR WILL BE DELETED PERMANENTLY',
                    'id' => $doctor->id,
                    'route_name' => "deleteDoctor/".$doctor->id
                    ])

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<form action="/addDoctor_page" method="GET">
    @csrf
    <button type="submit" class="btn btn-success">Add a Doctor</button>
</form>

<script>
    $('#doctor_table').DataTable();
</script>

@endsection