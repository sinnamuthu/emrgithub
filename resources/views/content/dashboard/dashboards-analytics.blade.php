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
  <div class="col-lg-8 mb-4 order-0">
      <div class="d-flex align-items-end row">
        @if(auth()->user()->type == 'Admin')
        <div class="col-sm-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" alt="chart success" class="rounded">
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Total Doctor</span>
              <h3 class="card-title mb-2">{{$doctorcount}}</h3>
              
            </div>
          </div>

			{{-- <div class="front-bx">
				<aside class="item-img">
					 <img src="{{asset('/assets/img/customimage/ic-patients.png')}}" alt="chart success" class="rounded">
				</aside>
				<aside class="item-desc">
					<h4>Today's patients</h4>
					<p>06</p>
				</aside>
			</div> --}}
		</div>
   
   <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="chart success" class="rounded">
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Total Vendor</span>
        <h3 class="card-title mb-2">{{$doctorcount}}</h3>
        
      </div>
    </div>
		</div>

    <div class="col-sm-4 mb-3">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="chart success" class="rounded">
            </div>
          </div>
          <span class="fw-semibold d-block mb-1">Total Payment</span>
          <h3 class="card-title mb-2">{{$doctorcount}}</h3>
        </div>
      </div>
		</div>
    @endif

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="chart success" class="rounded">
            </div>
          </div>
          <span class="fw-semibold d-block mb-1">Total Appointments</span>
          <h3 class="card-title mb-2">{{$appointmentcount}}</h3>
        </div>
      </div>
		</div>
    

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="{{asset('assets/img/icons/unicons/cc-primary.png')}}" alt="chart success" class="rounded">
            </div>
          </div>
          <span class="fw-semibold d-block mb-1">Total Teratments</span>
          <h3 class="card-title mb-2">{{$treatmentcount}}</h3>
        </div>
      </div>
		</div>

        <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="{{asset('assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded">
            </div>
          </div>
          <span class="fw-semibold d-block mb-1">Total Lab works</span>
          <h3 class="card-title mb-2">{{$labcount}}</h3>
        </div>
      </div>
		</div>
	  </div>


    <div class="card mt-5">
  
      <div class="row">
      
      <h5 class="card-header col-md-8">Today Appointments</h5>
      </div>
    
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>

              <th>Patient Name</th>
              <th>Contact No</th>
              <th>Doctor</th>
              <th>App Timing</th>
              <th>Status</th>

            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($appointment as $key => $appointments)
            <tr>
            
              <td>{{$appointments->firstname}}{{$appointments->lastname}}</td>
              <td>{{$appointments->contact_no}}</td>
              <td>{{$appointments->choose_doctor}}</td>
              <td>{{$appointments->intime}}-{{$appointments->outtime}}</td>
              <td><span class="badge bg-label-primary me-1">Active</span></td>
            
            </tr>
            @endforeach
           
          </tbody>
        </table>
      </div>
    
    <!--appointment modal start-->
    @include('../layouts/appointment_modal')
    <!--appointment modal end -->
    
    </div>
	
	<!--<div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Congratulations {{auth()->user()->name}}! 🎉</h5>
            <p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in your profile.</p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>-->

  </div>
  <div class="col-lg-4 col-md-4 order-1">
      <div class="dash-btn-wrap">
              <a href="javascript:;" class="dash-add-apt">Add Appointment</a>
              <a href="javascript:;" class="dash-add-pat">Add Patient</a>
      </div>
      
  <!-- Order Statistics -->
  <div class="order-0 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Today Appointments</h5>
          {{-- <small class="text-muted">42.82k Total Sales</small> --}}
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">{{$to_appointment}}</h2>
            {{-- <span>Total Orders</span> --}}
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-mobile-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Today Examination</h6>
                {{-- <small class="text-muted">Mobile, Earbuds, TV</small> --}}
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{$to_exam}}</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Today Observation</h6>
                {{-- <small class="text-muted">Today Observation</small> --}}
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{$to_observ}}</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Today Treatments</h6>
                {{-- <small class="text-muted">Today Treatments</small> --}}
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{$to_treatments}}</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Today Clinical Notes</h6>
                {{-- <small class="text-muted">Today Clinical Notes</small> --}}
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{$to_clinical}}</small>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-football'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Today Lab Works</h6>
                {{-- <small class="text-muted">Today Lab Works</small> --}}
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{$to_labworks}}</small>
              </div>
            </div>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
  <!--/ Order Statistics -->
</div>
  
</div>
<div class="row">

 
</div>
@endsection
