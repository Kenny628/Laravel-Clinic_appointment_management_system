<h1 style="text-align:center;">Welcome to Dr.Ho Clinic, {{ session('user_name') }}</h1>

<!-- UPPER APPOINTMENTS OVERVIEW -->
<div class="d-flex flex-column">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="row">

                <!-- UPCOMING -->
                <div class="col-xxl-4 col-xl-4 col-md-6 widget">
                    <div
                        class="bg-black h-custom rounded-3 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                        <div
                            class="bg-cyan-300 px-3 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white"
                                class="p-1 bi bi-calendar2-event" viewBox="0 0 16 16">
                                <path
                                    d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                <path
                                    d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                            </svg>
                        </div>
                        <div class="text-end px-3 text-white">
                            <h2 class="fs-1-xxl fw-bolder text-white">{{ count($upcoming) }}</h2>
                            <h3 class="mb-0 fs-4 fw-light">Upcoming Appointments</h3>
                        </div>
                    </div>
                </div>

                <!-- PENGING -->
                <div class="col-xxl-4 col-xl-4 col-md-6 widget">
                    <div
                        class="bg-black h-custom rounded-3 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                        <div
                            class="bg-green-300 px-3 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white"
                                class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                            </svg>
                        </div>
                        <div class="text-end px-3 text-white">
                            <h2 class="fs-1-xxl fw-bolder text-white">{{ count($pending) }}</h2>
                            <h3 class="mb-0 fs-4 fw-light">Pending Appointments</h3>
                        </div>
                    </div>
                </div>

                <!-- COMPLETED -->
                <div class="col-xxl-4 col-xl-4 col-md-6 widget">
                    <div
                        class="bg-black h-custom rounded-3 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                        <div
                            class="bg-yellow-300 px-3 widget-icon rounded-10 d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white"
                                class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                <path
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                            </svg>
                        </div>
                        <div class="text-end px-3 text-white">
                            <h2 class="fs-1-xxl fw-bolder text-white">{{ count($completed) }}</h2>
                            <h3 class="mb-0 fs-4 fw-light">Completed Appointments</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</div>

<!-- Lower PART -->
<div class="card border-2 border-dark">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs bg-dark" id="myTab" role="tablist" style="background-color: gray">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="Upcoming-tab" data-bs-toggle="tab" data-bs-target="#Upcoming"
                type="button" role="tab" aria-controls="Upcoming" aria-selected="true"
                style="font-size:20px;">Upcoming</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="Pending-tab" data-bs-toggle="tab" data-bs-target="#Pending" type="button"
                role="tab" aria-controls="Pending" aria-selected="false" style="font-size:20px;">Pending</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="History-tab" data-bs-toggle="tab" data-bs-target="#History" type="button"
                role="tab" aria-controls="History" aria-selected="false" style="font-size:20px">History</button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content container-fluid" style="background-color:#838996">

        <!-- UPCOMING TAB -->
        <div class="tab-pane fade show active" id="Upcoming" role="tabpanel" aria-labelledby="Upcoming-tab">
            <ul class="list-group">
                <div class="justify-content-center">

                    @foreach ($upcoming as $upcoming_booking)
                    <div class="border border-dark rounded m-4" style="background-color:#d0f0c0">
                        <div class="d-flex justify-content-between">

                            <!-- SHOW THE DATE AND TIME OF APPOINTMENT -->
                            <div class="p-2">
                                <h4>{{ $upcoming_booking['date'] }} ({{ $upcoming_booking['time'] }})</h4>
                            </div>

                            <!-- SHOW EDIT AND DELETE ICON -->
                            <div class="p-2">


                                <!-- DELETE ICON -->
                                <span>

                                    <!-- CANCEL BUTTON -->
                                    <a data-bs-toggle="modal"
                                        data-bs-target="#cancelModal_{{ $upcoming_booking['id'] }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red"
                                            class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                        </svg>
                                    </a>

                                    <!-- CANCEL MODAL -->
                                    @include('partials.prompt_window', [
                                    'modal_id' => 'cancelModal_' . $upcoming_booking['id'],
                                    'aria_label' => 'cancelModalLabel',
                                    'modal_title' => 'Cancel Request',
                                    'modal_body' => 'DO YOU WANT TO CANCEL THIS APPOINTMENT ?',
                                    'id' => $upcoming_booking['id'],
                                    'route_name' => '/cancel/' . $upcoming_booking['id'],
                                    ])
                                </span>

                            </div>

                        </div>

                        <!-- SHOW THE DOCTOR OF APPOINTMENT -->
                        <h5 style="padding-left: 8px">{{ $upcoming_booking->doctor->name }}</h5>
                    </div>
                    @endforeach

                    @if (count($upcoming) == 0)
                    <h4 style="text-align:center; margin: 53.5px">Not available</h4>
                    @endif

                </div>
            </ul>
        </div>

        <!-- PENDING TAB -->
        <div class="tab-pane fade show" id="Pending" role="tabpanel" aria-labelledby="Pending-tab">
            <ul class="list-group">
                <div class="justify-content-center">

                    @foreach ($pending as $pending_appointment)
                    <div class="border border-dark rounded m-4" style="background-color:#fffacd">
                        <div class="d-flex justify-content-between">

                            <!-- SHOW THE DATE AND TIME OF APPOINTMENT -->
                            <div class="p-2">
                                <h4>{{ $pending_appointment['date'] }} ({{ $pending_appointment['time'] }})
                                </h4>
                            </div>

                            <!-- SHOW EDIT AND DELETE ICON -->
                            <div class="p-2">
                                <form method="POST" action="/patient/editAppointment">
                                    @csrf
                                    <input type="hidden" name="chosen_doctor_id"
                                        value="{{ strval($pending_appointment['doctor_id']) }}">
                                    <input type="hidden" name="is_edit" value="true">
                                    <input type="hidden" name="appointment_id" value={{ $pending_appointment['id'] }}>
                                    <input type="hidden" name="edit_date" value="{{ $pending_appointment['date'] }}">

                                    <button type="submit" class="btn btn-primary" style="background:black;">{{
                                        __('Edit') }}</button>
                                    <!-- DELETE ICON -->
                                    <span>

                                        <!-- CANCEL BUTTON -->
                                        <a data-bs-toggle="modal"
                                            data-bs-target="#cancelModal_{{ $pending_appointment['id'] }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red"
                                                class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                            </svg>
                                        </a>

                                        <!-- CANCEL MODAL -->
                                        @include('partials.prompt_window', [
                                        'modal_id' => 'cancelModal_' . $pending_appointment['id'],
                                        'aria_label' => 'cancelModalLabel',
                                        'modal_title' => 'Cancel Request',
                                        'modal_body' => 'DO YOU WANT TO CANCEL THIS APPOINTMENT ?',
                                        'id' => $pending_appointment['id'],
                                        'route_name' => '/cancel/' . $pending_appointment['id'],
                                        ])


                                    </span>
                                </form>


                            </div>

                        </div>

                        <!-- SHOW THE DOCTOR OF APPOINTMENT -->
                        <h5 style="padding-left: 8px">{{ $pending_appointment->doctor->name }}</h5>
                    </div>
                    @endforeach

                    @if (count($pending) == 0)
                    <h4 style="text-align:center; margin: 53.5px">Not available</h4>
                    @endif
                </div>
            </ul>
        </div>

        <!-- COMPLETED TAB -->
        <div class="tab-pane fade show" id="History" role="tabpanel" aria-labelledby="History-tab">
            <ul class="list-group">
                <div class="justify-content-center">

                    @foreach ($completed as $completed_appointment)
                    <div class="border border-dark rounded m-4" style="background-color:#d3d3d3">
                        <div class="d-flex justify-content-between">

                            <!-- SHOW THE DATE AND TIME OF APPOINTMENT -->
                            <div class="p-2">
                                <h4>{{ $completed_appointment['date'] }} ({{ $completed_appointment['time'] }})
                                </h4>
                            </div>

                        </div>

                        <!-- SHOW THE DOCTOR OF APPOINTMENT -->
                        <h5 style="padding-left: 8px">{{ $completed_appointment->doctor->name }}</h5>
                    </div>
                    @endforeach

                    @if (count($completed) == 0)
                    <h4 style="text-align:center; margin: 53.5px">Not available</h4>
                    @endif

                </div>
            </ul>
        </div>

    </div>

</div>