@extends('dashboard/layouts.main')
@section('content')
    <div class="span12">
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
                <div class="control-group">
                  <label class="control-label">Full Name</label>
                  <div class="controls">
                    <input type="text" id="fullName" name="fullName" required>
                  </div>
                </div>
      
                <div class="control-group">
                  <label class="control-label">License Number</label>
                  <div class="controls">
                    <input type="text" id="licenseNo" name="licenseNo" required>
                  </div>
                </div>
      
                <div class="control-group">
                  <label class="control-label">Phone Number</label>
                  <div class="controls">
                    <input type="tel" id="phone" name="phone" required>
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
      
    @endsection
    {{-- <form action="{{ route('driver.store') }}" method="POST">
      @csrf
      <div>
          <label for="fullName">Full Name</label>
          <input type="text" id="fullName" name="fullName" required>
      </div>
      <div>
          <label for="licenseNo">License Number</label>
          <input type="text" id="licenseNo" name="licenseNo" required>
      </div>
      <div>
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" required>
      </div>
      <button type="submit">Add Driver</button>
    </form> --}}
    