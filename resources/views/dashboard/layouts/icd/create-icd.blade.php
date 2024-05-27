@extends('dashboard/layouts.main')
@section('content')
<div class="span12">
<div class="widget-box">
    <div class="span6">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"><i class="icon-align-justify"></i></span>
            <h5>New ICD</h5>
          </div>
          <div class="widget-content nopadding">
            <form method="POST" action="{{ route('icd.store') }}" class="form-horizontal">
              @csrf
              
      
              <div class="control-group">
                <label class="control-label">ICD Name</label>
                <div class="controls">
                  <input type="text" name="name" placeholder="ICD Name" class="form-control">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">ICD Location</label>
                <div class="controls">
                  <input type="text" name="location" placeholder="ICD Location" class="form-control">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Container Capacity</label>
                <div class="controls">
                  <input type="text" name="containerCapacity" placeholder="Container Capacity" class="form-control">
                </div>
              </div>
      
              
      
              <div class="control-group">
                <label class="control-label">Available Trucks</label>
                <div class="controls">
                  <input type="number" name="availableTrucks" placeholder="Enter ICD Number" class="form-control">
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