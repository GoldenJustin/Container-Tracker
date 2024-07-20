@extends('dashboard/layouts.main')
@section('content')
    <div class="span12">
        <div class="container mt-5">
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="widget-box">
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"><i class="icon-align-justify"></i></span>
                            <h5>New ICD</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form method="POST" action="{{ route('icd.store') }}" class="form-horizontal">
                                @csrf
                                <div class="form-group">
                                    <!-- <label for="name" class="control-label">ICD Name</label> -->
                                    <div class="controls">
                                        <input type="text" name="name" id="name" placeholder="ICD Name"
                                            class="form-control" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="location" class="control-label">ICD Location</label> -->
                                    <div class="controls">
                                        <input type="text" name="location" id="location" placeholder="ICD Location"
                                            class="form-control" value="{{ old('location') }}">
                                        @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="containerCapacity" class="control-label">Container Capacity</label> -->
                                    <div class="controls">
                                        <input type="text" name="containerCapacity" id="containerCapacity"
                                            placeholder="Container Capacity" class="form-control"
                                            value="{{ old('containerCapacity') }}">
                                        @error('containerCapacity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="availableTrucks" class="control-label">Available Trucks</label> -->
                                    <div class="controls">
                                        <input type="number" name="availableTrucks" id="availableTrucks"
                                            placeholder="Enter Available Trucks" class="form-control"
                                            value="{{ old('availableTrucks') }}">
                                        @error('availableTrucks')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-warning"
                                        onclick="window.history.back()">Back</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
