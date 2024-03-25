<h1 style="text-align:center;">Welcome back, {{session('user_name')}}</h1>

<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Completed appointment No.</th>
      <th scope="col">Patient_id</th>
      <th scope="col">Patient_name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody class="table-info">
    @foreach($completed_appointment as $key => $appointment)
    @if($appointment->patient_name)
    <tr>
      <th scope="row">{{$key+1}}.</th>
      <td>{{$appointment->user_id}}</td>
      <td>{{$appointment->patient_name->name}}</td>
      <td>{{$appointment->date}}</td>
      <td>{{$appointment->time}}</td>
      <td>
        <form action="/patient/addpatientrecord/{{$appointment->id}}" method="GET">
          @csrf
          <input type="hidden" name="patient_id" />
          <button type="submit" class="btn btn-success">
            DONE
          </button>
        </form>
      </td>
    </tr>
    @endif

    @endforeach
  </tbody>
</table>