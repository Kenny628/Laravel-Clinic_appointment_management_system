<h1 style="text-align:center;">Welcome to Admin page, {{session('user_name')}}</h1>

<!-- PENGING TO APPROVED APPOINTMENT -->
<table class="table table-striped table-hover dt-responsive nowrap" id="admin_table" style="width:100%">
    <thead class="table-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col">Patient_id</th>
            <th scope="col">Patient_name</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Status</th>
            <th scope="col">Doctor</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody class="table-info">
        @foreach($all_pending_appointments as $key => $appointment)
        @if($appointment->patient_name)
        <tr>
            <th scope="row">{{$key+1}}.</th>
            <td>{{$appointment->user_id}}</td>
            <td>{{$appointment->patient_name->name}}</td>
            <td>{{$appointment->date}}</td>
            <td>{{$appointment->time}}</td>
            <td>{{$appointment->status}}</td>
            <td>{{$appointment->doctor->name}}</td>
            <td>

                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target='#approvedModal_{{$appointment->id}}'>
                    APPROVE
                </button>

                <!-- APPROVED MODAL DISPLAY -->
                @include('partials.prompt_window', [
                'modal_id' => 'approvedModal_'.$appointment->id,
                'aria_label' => 'approvedModalLabel',
                'modal_title' => 'Appointment Approval',
                'modal_body' => 'DO YOU WANT TO APPROVE THIS APPOINTMENT ?',
                'id' => $appointment->id,
                'route_name' => "/update_Status/".$appointment->id
                ])

            </td>
        </tr>
        @endif

        @endforeach
    </tbody>
</table>

<!-- ON GOIND AND COMPLETED APPOINTMENTS -->
<div class="container-fluid">
    <div class="d-flex flex-column">
        <div class="row">

            <!-- On Going APPOINTMENT-->
            <div class="col-xxl-6 col-12">

                <div class="d-flex border-0 pt-5 mb-2">
                    <h3 class="align-items-start flex-column">
                        <span class="fw-bolder fs-3 mb-1">On Going Appointment</span>
                    </h3>
                </div>

                <div class="table-responsive livewire-table">

                    <table id="pending_table" class="table table-striped table-bordered table-sm below_table"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="th-sm">No.</th>
                                <th class="th-sm">Patient Name</th>
                                <th class="th-sm">Doctor Name</th>
                                <th class="th-sm">DATE</th>
                                <th class="th-sm">Time</th>
                                <th class="th-sm">View</th>
                                <th class="th-sm">Delete</th>
                                <th class="th-sm">Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($approved_Appointment_All as $key => $approved_Appointment)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$approved_Appointment->patient_name->name}}</td>
                                <td>{{$approved_Appointment->doctor->name}}</td>
                                <td>{{$approved_Appointment['date']}}</td>
                                <td>{{$approved_Appointment['time']}}</td>

                                <!-- VIEW -->
                                <td>

                                    <a data-bs-toggle="modal"
                                        data-bs-target="#viewModal_{{$approved_Appointment['id']}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </a>

                                    <div class="modal fade" id="viewModal_{{$approved_Appointment['id']}}" tabindex="-1"
                                        aria-labelledby="viewModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- MODAL HEADER -->
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="viewModalLabel">
                                                        Appointment details
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <!-- MODAL BODY -->
                                                <div class="modal-body">
                                                    <p>
                                                        <span>
                                                            <strong>Appointment ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>
                                                        </span>
                                                        {{$approved_Appointment['id']}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Appointment date&nbsp;: </strong>
                                                        </span>
                                                        {{$approved_Appointment['date']}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Appointment time : </strong>
                                                        </span>
                                                        {{$approved_Appointment['time']}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Appointed doctor &nbsp;: </strong>
                                                        </span>
                                                        {{$approved_Appointment->doctor->name}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Patient id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>
                                                        </span>
                                                        {{$approved_Appointment->patient_name->id}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Patient name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>
                                                        </span>
                                                        {{$approved_Appointment->patient_name->name}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>
                                                        </span>
                                                        {{$approved_Appointment['status']}}
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </td>

                                <!-- DELETE -->
                                <td>
                                    <a data-bs-toggle="modal"
                                        data-bs-target="#cancelModal_{{$approved_Appointment['id']}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                    </a>

                                    <div class="modal fade" id="cancelModal_{{$approved_Appointment['id']}}"
                                        tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- MODAL HEADER -->
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="cancelModalLabel">
                                                        Appointment details
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <!-- MODAL BODY -->
                                                <div class="modal-body">
                                                    Are your sure to delete this appointment ?
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger" id="confirmBtn">
                                                        <a href="/cancel/{{$approved_Appointment['id']}}"
                                                            style="color: white; text-decoration:none">DELETE</a>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <!-- UPDATE -->
                                <td>
                                    <form method="POST" action="/patient/editAppointment_admin">
                                        @csrf
                                        <input type="hidden" name="chosen_doctor_id"
                                            value="{{strval($approved_Appointment->doctor->id)}}">
                                        <input type="hidden" name="is_edit" value="true">
                                        <input type="hidden" name="is_admin" value="true">
                                        <input type="hidden" name="edit_date" value="{{$approved_Appointment['date']}}">
                                        <input type="hidden" name="appointment_id"
                                            value={{$approved_Appointment['id']}}>
                                        <input type="hidden" name="patient_id" value="{{$approved_Appointment->patient_name->id}}">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" style="background:black;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

            <!-- All Appointments-->
            <div class="col-xxl-6 col-12">

                <div class="d-flex border-0 pt-5 mb-2">
                    <h3 class="align-items-start flex-column">
                        <span class="fw-bolder fs-3 mb-1">Completed Appointment</span>
                    </h3>
                </div>

                <div class="table-responsive livewire-table">

                    <table id="all_appointment" class="table table-striped table-bordered table-sm below_table"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="th-sm">No.</th>
                                <th class="th-sm">Patient Name</th>
                                <th class="th-sm">Doctor Name</th>
                                <th class="th-sm">DATE
                                </th>
                                <th class="th-sm">Time
                                </th>
                                <th class="th-sm">View</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($all_completed_appointment as $key => $completed_Appointment)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$completed_Appointment->patient_name->name}}</td>
                                <td>{{$completed_Appointment->doctor->name}}</td>
                                <td>{{$completed_Appointment['date']}}</td>
                                <td>{{$completed_Appointment['time']}}</td>
                                <td>

                                    <a data-bs-toggle="modal"
                                        data-bs-target="#viewModal_{{$completed_Appointment['id']}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </a>

                                    <div class="modal fade" id="viewModal_{{$completed_Appointment['id']}}"
                                        tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- MODAL HEADER -->
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="viewModalLabel">
                                                        Appointment details
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <!-- MODAL BODY -->
                                                <div class="modal-body">
                                                    <p>
                                                        <span>
                                                            <strong>Appointment ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>
                                                        </span>
                                                        {{$completed_Appointment['id']}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Appointment date&nbsp;: </strong>
                                                        </span>
                                                        {{$completed_Appointment['date']}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Appointment time : </strong>
                                                        </span>
                                                        {{$completed_Appointment['time']}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Appointed doctor &nbsp;: </strong>
                                                        </span>
                                                        {{$completed_Appointment->doctor->name}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Patient id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>
                                                        </span>
                                                        {{$completed_Appointment->patient_name->id}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Patient name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>
                                                        </span>
                                                        {{$completed_Appointment->patient_name->name}}
                                                    </p>
                                                    <p>
                                                        <span>
                                                            <strong>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong>
                                                        </span>
                                                        {{$completed_Appointment['status']}}
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

</div>

<style>
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
        bottom: .5em;
    }
</style>

<script>
    $(document).ready(function () {
  $('.below_table').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
  });
  $('.dataTables_length').addClass('bs-select');
});

$('#admin_table').DataTable();
</script>