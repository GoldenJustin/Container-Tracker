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
          <a href="{{ route('allocated.create') }}"><h5><i class="icon-resize-small"></i> Receive Container</h5></a>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Container number</th>
                <th>Container Type</th>
                <th>ICD</th>
                <th>Departure Date</th>
                <th>Arrival Date</th>
                <th>Status</th>
                {{-- <th>Action</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach ($terminalToIcd as $item)
                <tr class="gradeX">
                  <td>{{ $loop->iteration }}</td>
                  <td><a href="{{route('allocated.edit', ['id'=>$item->id])}}">{{ $item->containers->number}}</a></td>
                  <td>{{ $item->trucks->type }}</td>
                  <td>{{ $item->icds->name }}</td>
                  <td>{{ $item->departureDate }}</td>
                  <td>{{ $item->arrivalDate }}</td>
                  <td>{{ $item->isArrived ? 'Inspected' : 'Not Inspected' }}</td>
                  {{-- <td>{{ $item->isArrived }}</td> --}}
                  {{-- <td><i class="icon-trash"></i></td> --}}
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      

  @endsection