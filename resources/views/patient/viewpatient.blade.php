@extends('layouts.app')

@section('content')
<div class="container-sm">
    <h3>{{$name['name']}}</h3>
    <table class="table table-dark table-bordered border-2 border-secondary" id="patient_details">
        <thead>
            <td>Symptoms</td>
            <td>Diagnosis</td>
            <td>Prescription</td>
            <td>Date Updated</td>
            <td>Test Result</td>
            <td>Actions</td>
        </thead>
        <tbody class="table-light table-striped ">
            @foreach ($patient as $details)
            <tr>
                <td>{{ $details['symptoms'] }}</td>
                <td>{{ $details['diagnosis'] }}</td>
                <td>{{ $details['prescription'] }}</td>
                <td>{{ $details['updated_at'] }}</td>
                <td>{{ $details['test_result'] }}</td>
                <td>
                    <a href="/patient/updatepatient/{{$details['id']}}" class="btn btn-info"
                        style="text-decoration: none; color: white;">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $('#patient_details').DataTable();
</script>

@endsection