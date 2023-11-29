@extends('layouts/contentNavbarLayout')

@section('Doctor', 'Doctor Information')

@section('content')
<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Update Doctor Info</h5> <small class="text-muted float-end"></small>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('doctor.update',$doctor->doc_id) }}" >
            @csrf
            @method('PUT')
            <div class="modal-body">
    
      
        <div class="form-row row">
          <div class="form-group col-md-6">
            <label for="inputZip">Doctor Name</label>
            <input type="text" class="form-control" value="{{$doctor->doc_name}}" name="doc_name" id="doc_name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">Type</label>
            <select id="doc_type" name="doc_type" class="form-control">
                <option selected value="Resident Doctor" @selected($doctor->doc_type == "Resident Doctor")>Resident Doctor</option>
                <option selected value="Resident Consultant" @selected($doctor->doc_type == "Resident Consultant")>Resident Consultant</option>
                <option selected value="Visiting Consultant" @selected($doctor->doc_type == "Visiting Consultant")>Visiting Consultant</option>
              </select>
          </div>
        </div>
      
      
        <div class="form-row row">
          <div class="form-group col-md-6">
            <label for="inputState">Doctor Speciality</label>
            <input type="text" class="form-control" name="doc_speciality" value="{{$doctor->doc_speciality}}" id="doc_speciality" placeholder="Orthodontist">
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip">Contact Number</label>
            <input type="text" class="form-control" name="doc_mobile" value="{{$doctor->doc_mobile}}" id="doc_mobile">
          </div>
        </div>
      
        <div class="form-row row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Email</label>
            <input type="email" name="doc_email" class="form-control" value="{{$doctor->doc_email}}" id="doc_email" placeholder="Email">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Join Date</label>
            <input type="date" class="form-control" name="doc_join_date" value="{{$doctor->doc_join_date}}" id="doc_join_date">
          </div>
    
          <div class="form-group col-md-4">
            <label for="inputCity">Color Code</label>
            <input type="text" class="form-control" name="doc_cal_color" value="{{$doctor->doc_cal_color}}" id="doc_cal_color" placeholder="#526236">
          </div>
        </div>
      
        <div class="form-row row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Status</label>
            <select id="doc_status" name="doc_status" class="form-control">
              <option  value="Active"  @selected($doctor->doc_status == "Active")>Active</option>
              <option value="In Active"  @selected($doctor->doc_status == "In Active")>In Active</option>
            </select>
        </div>
    
        <div class="form-group col-md-6">
            <label for="inputCity">Termination Date</label>
            <input type="date" class="form-control" name="doc_termination_date" value="{{$doctor->doc_termination_date}}" id="doc_termination_date">
          </div>
        </div>
      
      
      
      
        <div class="form-row row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Note</label>
            <input type="text" class="form-control" value="{{$doctor->note}}" name="note" id="note" >
            <input type="hidden" class="form-control " name="doc_branch" id="doc_branch"  value="{{auth()->user()->branch}}" >
          </div>
        </div>
      
            </div>
            <div class="modal-footer">
             
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
      </div>
    </div>
  </div>
 
</div>
@endsection
