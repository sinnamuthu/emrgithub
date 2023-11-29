
  <!-- Modal Appointment -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Clinic</h5>
      
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{ route('add_clinics') }}" >
        @csrf
        <div class="modal-body">

  
            <div class="form-row row">
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">Hospital Name</label>
              <input class="form-control" type="text" id="hospitalname" name="hospitalname" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">Branch Name</label>
              <input class="form-control" type="text" id="branchname" name="branchname" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control" type="text" id="email" name="email" value="" placeholder="" />
            </div>
          
            <div class="mb-3 col-md-6">
              <label class="form-label" for="phoneNumber">Mobile Number</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">+91</span>
                <input type="text" id="phoneNumber" name="phoneNumber" value="" class="form-control" placeholder="" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" value="" placeholder="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">City</label>
              <input class="form-control" type="text" id="city" name="city" value="" placeholder="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">State</label>
              <input class="form-control" type="text" id="state" name="state" value="" placeholder="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="zipCode" class="form-label">Pincode</label>
              <input type="text" class="form-control" id="picode" name="picode" value="" placeholder="" maxlength="6" />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="country">Country</label>
              <select id="country" class="select2 form-select" name='country'>
                <option value="">Select</option>

                <option value="India" >India</option>
                
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">Hospital Logo</label>
              <input class="form-control" type="file" id="image" name="image" />
            </div>

                <input class="form-control" type="hidden" id="branch" name="branch" value="{{$lastid}}" placeholder="" />
                <input class="form-control" type="hidden" id="image_name" name="image_name" value="" placeholder="" />
                <input class="form-control" type="hidden" id="status" name="status" value="1" placeholder="" />

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