@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <!-- ADMIN HOME -->
        @can('isAdmin')
        
        @include('admin.admin_main')

        <!-- DOCTOR HOME -->
        @elsecan('isDoctor')

        @include('doctor.doctor_main')

        <!-- PATIENT HOME -->
        @else

        @include('patient.patient_main', ['upcoming' => $upcoming, 'pending' => $pending, 'completed' => $completed])

        @endcan
    </div>
</div>

<style>
    .h-custom {
        height: 200px;
    }
</style>
@endsection