
  <!-- Modal Appointment -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Call Notes</h5>
      
        </div>
        <form method="POST" action="{{ route('call.store') }}" >
        @csrf
        <div class="modal-body">
        <div class="form-row row">
      <div class="form-group col-md-6">
        <label for="inputCity">Date</label>
        <input type="date" class="form-control" name="call_date" id="date_appointment">
      </div>
      <div class="form-group col-md-6">
        <label for="inputState">In Time</label>
        <input type="time" class="form-control"  name='call_time' pattern="[0-2][0-9]:[0-5][0-9]:[0-5][0-9]" id="intime">
        <input type="hidden" class="form-control ic mail" name="appo_id" id="appo_id"  value="{{$appointment_id}}" >
        <input type="hidden" class="form-control " name="branch" id="branch"  value="{{auth()->user()->branch}}" >	
      </div>
    
    </div>

  
  
  
    <div class="form-row row">
      <div class="form-group col-md-12">
        <label for="inputEmail4">Title</label>
            <input type="text"  class="form-control" name="call_title">
      </div>
    </div>
  
  
    <div class="form-row row">
      <div class="form-group col-md-12">
        <label for="inputEmail4">Note</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="call_note" rows="3"></textarea>
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