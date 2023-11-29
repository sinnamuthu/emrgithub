
  <!-- Modal Appointment -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Users</h5>
      
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{ route('add_users') }}" >
        @csrf
        <div class="modal-body">

  
            <div class="form-row row">
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">User Name</label>
              <input class="form-control" type="text" id="username" name="name" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">Password</label>
              <input class="form-control" type="password" id="password" name="password" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control" type="text" id="email" name="email" value="" placeholder="" />
            </div>
          
            <div class="mb-3 col-md-6">
                <label class="form-label" for="country">Status</label>
                <select id="country" class="select2 form-select" name='status'>
                  <option value="1" >Active</option>
                  <option value="0" >In Active</option>
                </select>
              </div>

               <div class="mb-3 col-md-6">
                <label class="form-label" for="country">Type</label>
                <select id="country" class="select2 form-select" name='type'>
                  <option value="Admin" >Admin</option>
                  <option value="User" >User</option>
                </select>
              </div>

              <div class="mb-3 col-md-6">
                <label class="form-label" for="country">Branch</label>
                <select id="country" class="select2 form-select" name='branch'>
                    @foreach($profile as $profiles)
                    <option value="{{ $profiles->id }}">{{ $profiles->hospitalname }}</option>
                @endforeach
                </select>
              </div>

           
                <div class="form-row row">
                    <div class="mt-12 col-md-12">
                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                 </div>
         
        </form>
      </div>
    </div>
  </div>





  <!-- Modal Appointment -->
  <div class="modal fade" id="secondModalCenter" tabindex="-1" role="dialog" aria-labelledby="secondModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="secondModalLongTitle">Book Appointment for?</h5>
      
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