@extends('dashboard/layouts.main')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Initiate Delivery</h1>
        <p class="mb-4">Manage your delivery orders and track their statuses.</p>

        <!-- Success Message -->
        @if (@session()->has('success-message'))
            <div class="col-5 mx-auto alert alert-success text-center">
                <strong>{{ session('success-message') }}</strong>
            </div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Delivery Orders</h6>
                <a href="{{ route('delivery.create') }}" class="btn btn-primary btn-sm float-right"><i
                        class="fas fa-plus"></i> Initiate Delivery</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Container Number</th>
                                <th>Container Type</th>
                                <th>Truck</th>
                                <th>Departure Date</th>
                                <th>Expected Arrival Date</th>
                                <th>Arrival Status</th>
                            </tr>
                        </thead>
                     
                        <tbody>
                            @foreach ($deliveryOrder as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->containers->number }}</td>
                                    <td>{{ $item->containers->size }}</td>
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
        </div>

    </div>
@endsection
