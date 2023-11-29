
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
        <input type="time" class="form-control"  name='intime' pattern="[0-2][0-9]:[0-5][0-9]:[0-5][0-9]" id="intime">
      </div>
      <div class="form-group col-md-4">
        <label for="inputZip">Out Time</label>
        <input type="time" class="form-control" name="outtime" pattern="[0-2][0-9]:[0-5][0-9]:[0-5][0-9]" id="outime">
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
        <input type="hidden" class="form-control" value="1" name="status" id="status">
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
        <input type="text" class="form-control" name="contact_no" id="contactnumber">
        <input type="hidden" class="form-control" name="branch" value="{{auth()->user()->branch}}" id="contactnumber">
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
          @foreach($doctorlist as $doctorlists)
          <option value="{{ $doctorlists->doc_name }}">{{ $doctorlists->doc_name }}</option>
      @endforeach
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
          <button type="button" id="appointment_close" class="btn btn-secondary close" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>
      </div>
    </div>
  </div>