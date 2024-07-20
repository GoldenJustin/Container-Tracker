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
                        <h5>Allocate Container</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form method="POST" action="{{ route('allocate.store') }}" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label for="container_id" class="control-label">Container</label>
                                <div class="controls">
                                    <select name="container_id" id="container_id" class="form-control">
                                        @foreach ($viewData['containers'] as $container)
                                            <option value="{{ $container->id }}" {{ old('container_id') == $container->id ? 'selected' : '' }}>{{ $container->number }}</option>
                                        @endforeach
                                    </select>
                                    @error('container_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="truck_id" class="control-label">Truck</label>
                                <div class="controls">
                                    <select name="truck_id" id="truck_id" class="form-control">
                                        @foreach ($viewData['trucks'] as $truck)
                                            <option value="{{ $truck->id }}" {{ old('truck_id') == $truck->id ? 'selected' : '' }}>{{ $truck->number }}</option>
                                        @endforeach
                                    </select>
                                    @error('truck_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="icd_id" class="control-label">ICD</label>
                                <div class="controls">
                                    <select name="icd_id" id="icd_id" class="form-control">
                                        @foreach ($viewData['icds'] as $icd)
                                            <option value="{{ $icd->id }}" {{ old('icd_id') == $icd->id ? 'selected' : '' }}>{{ $icd->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('icd_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="departureDate" class="control-label">Departure Date</label>
                                <div class="controls">
                                    <input type="datetime-local" name="departureDate" id="departureDate" class="form-control" value="{{ old('departureDate') }}">
                                    @error('departureDate')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-warning" onclick="window.history.back()">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   @endsection
    