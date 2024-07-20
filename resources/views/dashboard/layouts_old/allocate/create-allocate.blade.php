@extends('dashboard/layouts.main')
@section('content')
    <div class="span12">
        <div class="widget-box">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-align-justify"></i></span>
                        <h5>Allocate Container</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form method="POST" action="{{ route('allocate.store') }}" class="form-horizontal">
                            @csrf

                            <div class="control-group">
                                <label class="control-label">Container</label>
                                <div class="controls">
                                    <select name="container_id" class="form-control">
                                        @foreach ($viewData['containers'] as $container)
                                            <option value="{{ $container->id }}">{{ $container->number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Truck</label>
                                <div class="controls">
                                    <select name="truck_id" class="form-control">
                                        @foreach ($viewData['trucks'] as $truck)
                                            <option value="{{ $truck->id }}">{{ $truck->number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">ICD</label>
                                <div class="controls">
                                    <select name="icd_id" class="form-control">
                                        @foreach ($viewData['icds'] as $icd)
                                            <option value="{{ $icd->id }}">{{ $icd->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Departure Date</label>
                                <div class="controls">
                                    <input type="datetime-local" name="departureDate" class="form-control">
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
