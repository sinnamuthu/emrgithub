@extends('layouts/contentNavbarLayout')

@section('title', 'Profile - Settings')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<!-- <h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Profile Settings /</span> Profile
</h4> -->


<div class="row">
  <div class="col-md-12">
    <!-- <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-notifications')}}"><i class="bx bx-bell me-1"></i> Notifications</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-connections')}}"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
    </ul> -->
    <div class="card mb-4">

      @if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

      <h5 class="card-header">Profile Details</h5>
      @if($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{$message}}
      </div>
      @endif
      <!-- Account -->
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
          {{-- <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" /> --}}
          {{-- <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new photo</span>
              <i class="bx bx-upload d-block d-sm-none"></i>
              <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button>

            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
          </div> --}}
        </div>
      </div>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" enctype="multipart/form-data" method="POST" action="{{ route('profile.update',$profile[0]['id']) }}">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">Hospital Name</label>
              <input class="form-control" type="text" id="hospitalname" name="hospitalname" value="{{$profile[0]['hospitalname']}}" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">Branch Name</label>
              <input class="form-control" type="text" id="branchname" name="branchname" value="{{$profile[0]['branchname']}}" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control" type="text" id="email" name="email" value="{{$profile[0]['email']}}" placeholder="" />
            </div>
          
            <div class="mb-3 col-md-6">
              <label class="form-label" for="phoneNumber">Mobile Number</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">+91</span>
                <input type="text" id="phoneNumber" name="phoneNumber" value="{{$profile[0]['phoneNumber']}}" class="form-control" placeholder="" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" value="{{$profile[0]['address']}}" placeholder="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">City</label>
              <input class="form-control" type="text" id="city" name="city" value="{{$profile[0]['city']}}" placeholder="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">State</label>
              <input class="form-control" type="text" id="state" name="state" value="{{$profile[0]['state']}}" placeholder="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="zipCode" class="form-label">Pincode</label>
              <input type="text" class="form-control" id="picode" name="picode" value="{{$profile[0]['picode']}}" placeholder="" maxlength="6" />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="country">Country</label>
              <select id="country" class="select2 form-select" name='country'>
                <option value="">Select</option>
                <option value="Australia" @selected($profile[0]['country'] == "Australia")>Australia</option>
                <option value="Bangladesh" @selected($profile[0]['country'] == "Bangladesh") >Bangladesh</option>
                <option value="Belarus"@selected($profile[0]['country'] == "Belarus") >Belarus</option>
                <option value="Brazil" @selected($profile[0]['country'] == "Brazil")>Brazil</option>
                <option value="Canada" @selected($profile[0]['country'] == "Canada")>Canada</option>
                <option value="China" @selected($profile[0]['country'] == "China")>China</option>
                <option value="France" @selected($profile[0]['country'] == "France")>France</option>
                <option value="Germany" @selected($profile[0]['country'] == "Germany")>Germany</option>
                <option value="India" @selected($profile[0]['country'] == "India")>India</option>
                <option value="Indonesia" @selected($profile[0]['country'] == "Indonesia")>Indonesia</option>
                <option value="Israel" @selected($profile[0]['country'] == "Israel")>Israel</option>
                <option value="Italy" @selected($profile[0]['country'] == "Italy")>Italy</option>
                <option value="Japan" @selected($profile[0]['country'] == "Japan")>Japan</option>
                <option value="Korea" @selected($profile[0]['country'] == "Korea")>Korea, Republic of</option>
                <option value="Mexico" @selected($profile[0]['country'] == "Mexico")>Mexico</option>
                <option value="Philippines" @selected($profile[0]['country'] == "Philippines")>Philippines</option>
                <option value="Russia" @selected($profile[0]['country'] == "Russian Federation")>Russian Federation</option>
                <option value="South Africa" @selected($profile[0]['country'] == "South Africa")>South Africa</option>
                <option value="Thailand" @selected($profile[0]['country'] == "Thailand")>Thailand</option>
                <option value="Turkey" @selected($profile[0]['country'] == "Turkey")>Turkey</option>
                <option value="Ukraine" @selected($profile[0]['country'] == "Ukraine")>Ukraine</option>
                <option value="United Arab Emirates" @selected($profile[0]['country'] == "United Arab Emirates")>United Arab Emirates</option>
                <option value="United Kingdom" @selected($profile[0]['country'] == "United Kingdom")>United Kingdom</option>
                <option value="United States" @selected($profile[0]['country'] == "United States")>United States</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">Hospital Logo</label>
              <input class="form-control" type="file" id="image" name="image" />
            </div>

                <input class="form-control" type="hidden" id="branch" name="branch" value="{{$profile[0]['hospitalname']}}" placeholder="" />
                <input class="form-control" type="hidden" id="image_name" name="image_name" value="{{$profile[0]['image']}}" placeholder="" />

            <div class="mt-4 col-md-6">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
          </div>

          
          </div>
         
        </form>
      </div>
      <!-- /Account -->
    </div>

  </div>
</div>
@endsection
