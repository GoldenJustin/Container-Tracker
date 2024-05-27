@extends('dashboard/layouts.main')
@section('content')
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-th"></i></span>

                @auth
                    @if (Auth::user()->hasRole('super-admin|terminal'))
                        <a href="{{ route('container.create') }}">
                            <h5><i class="icon-plus"></i> Container</h5>
                        </a>
                    @endif
                @endauth
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
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
                            <tr class="gradeX">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->weight }}</td>
                                <td>{{ $item->size }}</td>
                                <td>{{ $item->number }}</td>
                                <td><i class="icon-trash"></i></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
