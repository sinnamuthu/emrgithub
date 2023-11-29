@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="row">
  <section class="super-admin-blk"><!--super admin-->
    <div class="row">
      <div class="col-lg-5">
        <div class="row">
          <div class="col-sm-6 mb-4 ">
            <div class="admin-bx pink">
              <small>Clinics</small>
              <p>10</p>
            </div>
          </div>
          <div class="col-sm-6 mb-4 ">
            <div class="admin-bx green">
              <small>User</small>
              <p>5</p>
            </div>
          </div>
          <div class="col-sm-6 mb-4 ">
            <div class="admin-bx blue">
              <small>Help</small>
              <p>1</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="admin-bx lav">
              <small>Lead</small>
              <p>2</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="admin-bx lg-green">
          <div class="row">
            <div class="col-sm-6">
              <p>We Are Working to Document your data</p>
              <a class="btn-create-cl" href="javascript:;">Create Clinic</a>
            </div>
            <div class="col-sm-6">
              <figure><img src="/assets/img/customimage/doc-data-img.png" class="img-fluid" style="max-width: 77% !important;"></figure>
            </div>
            </div>
        </div>
      </div>

    </div>
  </section>	<!--./super admin-->	

  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Logo</th>
          <th>Hospital Name</th>
          <th>Branch</th>
          <th>Phone No</th>
          <th>Email</th>
          <th>Join Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($profile as $key => $profiles)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ ++$key }}</strong></td>
          <td><div class="avatar ">
            <img src="/hospital_logo/{{$profiles->image}}" alt="" class="w-px-40 h-auto rounded-circle"></div></td>
          <td>{{$profiles->hospitalname}}</td>
          <td>{{$profiles->branchname}}</td>
          <td>{{$profiles->phoneNumber}}</td>
          <td>{{$profiles->email}}</td>
          <td>{{$profiles->created_at}}</td>
          <td><span class="badge bg-label-primary me-1">Active</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('doctor.edit',$profiles->id) }}"><i class="bx bx-street-view me-1"></i> History</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
       
      </tbody>
    </table>
  </div>
</div>
@endsection