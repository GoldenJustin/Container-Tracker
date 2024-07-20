@extends('dashboard/layouts.main')
@section('content')
<div class="span12">
<div class="widget-box">
    <div class="span6">
        <div class="widget-box">
          <div class="widget-title">
            <span class="icon"><i class="icon-align-justify"></i></span>
            <h5>Add Truck</h5>
          </div>
          <div class="widget-content nopadding">
            <form method="POST" action="{{ route('truck.store') }}" class="form-horizontal">
              @csrf
              
      
              <div class="control-group">
                <label class="control-label">Truck Number</label>
                <div class="controls">
                  <input type="number" name="number" placeholder="Enter Number" class="form-control">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Size</label>
                <div class="controls">
                  <select name="type" class="form-control">
                    <option value="">Truck Type</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                  </select>
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