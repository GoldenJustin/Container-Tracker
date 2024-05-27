@extends('dashboard/layouts.main')
@section('content')
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-th"></i></span>
                @auth
                    @if (Auth::user()->hasRole('super-admin|terminal'))
                        <a href="{{ route('driver.create') }}">
                            <h5><i class="icon-plus"></i> Driver</h5>
                        </a>
                    @endif
                @endauth
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Full Name</th>
                            <th>License Number</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($driver as $item)
                            <tr class="gradeX">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->fullName }}</td>
                                <td>{{ $item->licenseNo }}</td>
                                <td>{{ $item->phone }}</td>
                                <td><i class="icon-trash"></i></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
