@extends('layouts/contentNavbarLayout')

@section('title', 'Patient - Patient Appointment')

@section('content')
<!-- <h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Appointment /</span> Patient Appointment
</h4> -->



<!-- Hoverable Table rows -->
<div class="card">
  
  <div class="row">
  
  <h5 class="card-header col-md-8">Patient</h5>
  <div class='col-md-4'>
  <button type="submit" class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModalCenter">Add Patient</button>
  </div>
  
  </div>

  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Patient ID</th>
          <th>Patient Name</th>
          <th>Contact No</th>
          <th>Doctor</th>
          <th>App Timing</th>
          <th>Date</th>
          <th>Note</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($appointment as $key => $appointments)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ ++$key }}</strong></td>
          <td>{{$appointments->firstname}}{{$appointments->lastname}}</td>
          <td>{{$appointments->contact_no}}</td>
          <td>{{$appointments->choose_doctor}}</td>
          <td>{{$appointments->intime}}-{{$appointments->outtime}}</td>
          <td>{{$appointments->date_appointment}}</td>
          <td>{{$appointments->note}}</td>
          <td><span class="badge bg-label-primary me-1">Active</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('patient_information.show',$appointments->id) }}"><i class="bx bx-street-view me-1"></i> History</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
       
      </tbody>
    </table>
  </div>

<!--appointment modal start-->
@include('../layouts/appointment_modal')
<!--appointment modal end -->

</div>
<!--/ Hoverable Table rows -->

@endsection
