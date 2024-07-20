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
                            <h5>Add Truck</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form method="POST" action="{{ route('truck.store') }}" class="form-horizontal">
                                @csrf
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="number" name="number" placeholder="Enter Truck Number"
                                            class="form-control" value="{{ old('number') }}">
                                        @error('number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <select name="type" class="form-control">
                                            <option value="">Truck Size</option>
                                            <option value="Small" {{ old('type') == 'Small' ? 'selected' : '' }}>Small
                                            </option>
                                            <option value="Medium" {{ old('type') == 'Medium' ? 'selected' : '' }}>Medium
                                            </option>
                                            <option value="Large" {{ old('type') == 'Large' ? 'selected' : '' }}>Large
                                            </option>
                                        </select>
                                        @error('type')
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
