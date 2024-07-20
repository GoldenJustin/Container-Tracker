@extends('dashboard/layouts.main')

@section('content')
<!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Allocate Containers</h1>
        <p class="mb-4">Here you can allocate containers and view the details.</p>
    
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Allocate Containers</h6>
                <a href="{{ route('allocate.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Allocate Containers</a>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            @foreach ($terminalToIcd as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->containers->number }}</td>
                                <td>{{ $item->trucks->type }}</td>
                                <td>{{ $item->icds->name }}</td>
                                <td>{{ $item->departureDate }}</td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
  
  @endsection