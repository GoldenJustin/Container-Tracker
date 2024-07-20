@extends('dashboard/layouts.main')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Receive Containers</h1>
    <p class="mb-4">Here you can receive containers and view their details.</p>
  
    <!-- Success Message -->
    @if(@session()->has('success-message'))
    <div class="col-5 mx-auto alert alert-success text-center">
        <strong>{{ session('success-message') }}</strong>
    </div>   
    @endif
  
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Received Containers</h6>
            <a href="{{ route('allocated.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Receive Container</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Container Number</th>
                            <th>Container Type</th>
                            <th>ICD</th>
                            <th>Departure Date</th>
                            <th>Arrival Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @foreach ($terminalToIcd as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{route('allocated.edit', ['id'=>$item->id])}}">{{ $item->containers->number }}</a></td>
                            <td>{{ $item->trucks->type }}</td>
                            <td>{{ $item->icds->name }}</td>
                            <td>{{ $item->departureDate }}</td>
                            <td>{{ $item->arrivalDate }}</td>
                            <td>{{ $item->isArrived ? 'Inspected' : 'Not Inspected' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
  </div>
@endsection