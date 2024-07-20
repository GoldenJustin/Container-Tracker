@extends('dashboard/layouts.main')
@section('content')
<div class="span12">
  <div class="container mt-5">
      @if (session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      @endif
      @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      @endif
      <div class="widget-box">
          <div class="span6">
              <div class="widget-box">
                  <div class="widget-title">
                      <span class="icon"><i class="icon-align-justify"></i></span>
                      <h5>New Driver</h5>
                  </div>
                  <div class="widget-content nopadding">
                      <form method="POST" action="{{ route('driver.store') }}" class="form-horizontal">
                          @csrf
                          <div class="form-group">
                              <label for="fullName" class="control-label">Full Name</label>
                              <div class="controls">
                                  <input type="text" name="fullName" id="fullName" placeholder="Enter Full Name" class="form-control" value="{{ old('fullName') }}" required>
                                  @error('fullName')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="licenseNo" class="control-label">License Number</label>
                              <div class="controls">
                                  <input type="text" name="licenseNo" id="licenseNo" placeholder="Enter License Number" class="form-control" value="{{ old('licenseNo') }}" required>
                                  @error('licenseNo')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="phone" class="control-label">Phone Number</label>
                              <div class="controls">
                                  <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control" value="{{ old('phone') }}" required>
                                  @error('phone')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-actions">
                              <button type="submit" class="btn btn-primary">Save</button>
                              <button type="button" class="btn btn-warning" onclick="window.history.back()">Back</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

      
    @endsection
    
    