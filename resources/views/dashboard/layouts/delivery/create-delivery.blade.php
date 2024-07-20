@extends('dashboard/layouts.main')
@section('content')
<div class="span12">
    <div class="container mt-5">
        <div class="widget-box">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-align-justify"></i></span>
                        <h5>Allocated Container</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form method="POST" action="{{ route('delivery.store') }}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="control-label">Container No</label>
                                <div class="controls">
                                    <select name="container_id" class="form-control">
                                        @foreach($viewData['containers'] as $container)
                                        <option value="{{ $container->id }}">{{ $container->number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Customer Name</label>
                                <div class="controls">
                                    <select name="customer_id" class="form-control">
                                        @foreach($viewData['customers'] as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Truck Number</label>
                                <div class="controls">
                                    <select name="truck_id" class="form-control">
                                        @foreach($viewData['trucks'] as $truck)
                                        <option value="{{ $truck->id }}">{{ $truck->number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Departure Date</label>
                                <div class="controls">
                                    <input type="datetime-local" name="departureDate" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Arrival Date</label>
                                <div class="controls">
                                    <input type="datetime-local" name="expected_arrival_date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Arrival Status</label>
                                <div class="controls">
                                    <select name="isArrived" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
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
    </div>
</div>

   
@endsection

