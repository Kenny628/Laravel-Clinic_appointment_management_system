@extends('layouts.app')

@section('content')
<div class="container-sm">
    <table class="table table-dark table-bordered border-2 border-secondary" id='patient_table'>
        <thead>
            <td>Patient Name</td>
            <td>Email</td>
            <td>IC</td>
            <td>Gender</td>
            <td>Phone</td>
            <td>Action</td>
        </thead>
        <tbody class="table-light table-striped ">
            @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient['name'] }}</td>
                <td>{{ $patient['email'] }}</td>
                <td>{{ $patient['ic'] }}</td>
                <td>{{ $patient['gender'] }}</td>
                <td>{{ $patient['phone'] }}</td>
                <td>
                    @can('isDoctor')
                    <a href="viewpatient/{{$patient['id']}}" class="btn btn-info"
                        style="text-decoration: none; color: white;">View</a>
                    @elsecan('isAdmin')
                    <a href="viewpatient/{{$patient['id']}}" class="btn btn-info"
                        style="text-decoration: none; color: white;">View</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target='#DeletePatientModal_{{$patient->id}}'>
                        Delete
                    </button>

                    <!-- APPROVED MODAL DISPLAY -->
                    @include('partials.prompt_window', [
                    'modal_id' => 'DeletePatientModal_'.$patient->id,
                    'aria_label' => 'DeleteModalLabel',
                    'modal_title' => 'Delete Patient',
                    'modal_body' => 'DO YOU WANT TO DELETE THIS PATIENT ?',
                    'id' => $patient->id,
                    'route_name' => "deletepatient/".$patient->id
                    ])
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $('#patient_table').DataTable();
</script>
@endsection