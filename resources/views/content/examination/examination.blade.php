@extends('layouts/contentNavbarLayout')

@section('title', 'EMR - Examination')

@section('content')
<!-- <h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Appointment /</span> Patient Appointment
</h4> -->



<!-- Hoverable Table rows -->
<div class="card">
  
  <div class="row">
  <h5 class="card-header col-md-8">Examination</h5>
  <div class='col-md-4'>
  <button type="submit" class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModalCenter">Add Appointment</button>
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
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
       
      </tbody>
    </table>
  </div>

  <!-- Modal Appointment -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Book Appointment for?</h5>
    
      </div>
      <form method="POST" action="{{ route('appointment.store') }}" >
      @csrf
      <div class="modal-body">
      <div class="form-row row">
    <div class="form-group col-md-4">
      <label for="inputCity">Date</label>
      <input type="date" class="form-control" name="date_appointment" id="date_appointment">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">In Time</label>
      <input type="text" class="form-control"  name='intime' id="intime">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Out Time</label>
      <input type="text" class="form-control" name="outtime" id="outime">
    </div>
  </div>

  <div class="form-row row">
    <div class="form-group col-md-4">
      <label for="inputState">Title</label>
      <select id="title" name="title" class="form-control">
        <option selected>Mr</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">First Name</label>
      <input type="text" class="form-control" name="firstname" id="firstname">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Last Name</label>
      <input type="text" class="form-control" name="lastname" id="lastname">
    </div>
  </div>


  <div class="form-row row">
    <div class="form-group col-md-4">
      <label for="inputState">Country Code</label>
      <select id="countrycode" name="countrycode" class="form-control">
        <option selected>+91</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-8">
      <label for="inputZip">Contact Number</label>
      <input type="number" class="form-control" name="contact_no" id="contactnumber">
    </div>
  </div>

  <div class="form-row row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
  </div>

  <div class="form-row row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Choose Doctor</label>
      <select id="choose_doctor" name="choose_doctor" class="form-control">
        <option selected>Dr.Gokul</option>
        <option>Dr.Abishai</option>
        <option>...</option>
      </select>
  </div>


  <div class="form-row row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Reason For Appointment</label>
      <select id="reason_appointment" name="reason_appointment" class="form-control">
      <option selected>Checkup</option>
        <option>...</option>
        </select>
    </div>
  </div>


  <div class="form-row row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Note</label>
      <input type="text" class="form-control" name="note" id="note" >
    </div>
  </div>

  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>
<!--/ Hoverable Table rows -->

@endsection
