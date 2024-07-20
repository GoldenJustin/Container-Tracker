@extends('dashboard/layouts.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Containers</h1>
    <p class="mb-4">Below is a table listing all the containers in the system. You can add, view, and delete containers as needed. The table is powered by DataTables, which provides search, pagination, and sorting functionalities for ease of use.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Container List</h6>
            @auth
            @if (Auth::user()->hasRole('super-admin|terminal'))
            <a href="{{ route('container.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Add Container</a>
            @endif
            @endauth
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Container Weight</th>
                            <th>Container Size</th>
                            <th>Container Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($container as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->weight }}</td>
                            <td>{{ $item->size }}</td>
                            <td>{{ $item->number }}</td>
                            <td>
                                <form action="{{ route('container.delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
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
