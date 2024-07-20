@extends('dashboard/layouts.main')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">ICD</h1>
        <p class="mb-4">Below is a table listing all the ICDs (Inland Container Depots) in the system. You can add, view,
            and delete ICDs as needed.</p>

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ICD List</h6>
                @auth
                    @if (Auth::user()->hasRole('super-admin'))
                        <a href="{{ route('icd.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i>
                            Add ICD</a>
                    @endif
                @endauth
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>ICD Name</th>
                                <th>ICD Location</th>
                                <th>Container Capacity</th>
                                <th>Available Trucks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($icd as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->containerCapacity }}</td>
                                    <td>{{ $item->availableTrucks }}</td>
                                    <td>
                                        <form action="{{ route('icd.delete', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fas fa-trash"></i> Delete</button>
                                        </form>
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
