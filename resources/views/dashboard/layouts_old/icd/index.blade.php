@extends('dashboard/layouts.main')
@section('content')
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-th"></i></span>

                @auth
                    @if (Auth::user()->hasRole('super-admin'))
                        <a href="{{ route('icd.create') }}">
                            <h5><i class="icon-plus"></i> Icd</h5>
                        </a>
                    @endif
                @endauth

            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Icd name</th>
                            <th>Icd location</th>
                            <th>Container Capacity</th>
                            <th>Available Trucks</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($icd as $item)
                            <tr class="gradeX">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->containerCapacity }}</td>
                                <td>{{ $item->availableTrucks }}</td>
                                <td><i class="icon-trash"></i></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
