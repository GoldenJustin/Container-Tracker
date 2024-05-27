@extends('dashboard/layouts.main')
@section('content')
<div class="span12">
  @if(@session()->has('success-message'))
    <div class="col-5 mx-auto alert alert-success text-center">
      <strong>{{ session('success-message') }}</strong>
      </div>   
    @endif
  
    <div class="widget-box">
        <div class="widget-title">
          <span class="icon"><i class="icon-th"></i></span>
          <a href="{{ route('delivery.create') }}"><h5><i class="icon-resize-small"></i>Initiate Delivery</h5></a>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>S/N</th>
                {{-- <th>Customer</th> --}}
                <th>Container number</th>
                <th>Container Type</th>
                <th>Truck</th>
                <th>Departure Date</th>
                <th>Expected Arrival Date</th>
                <th>Arrival Status</th>
              </tr>
              {{-- id	customer_id	container_id	truck_id	departureDate	arrivalDate	isArrived --}}
            </thead>
            <tbody>
              @foreach ($deliveryOrder as $item)
                <tr class="gradeX">
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->containers->number}}</td>
                  <td>{{ $item->containers->size}}</td>
                  <td>{{ $item->trucks->number }}</td>
                  <td>{{ $item->departureDate }}</td>
                  <td>{{ $item->expected_arrival_date }}</td>
                  <td>{{ $item->isArrived ? 'Arrived' : 'Not Arrived' }}</td>

                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      

  @endsection