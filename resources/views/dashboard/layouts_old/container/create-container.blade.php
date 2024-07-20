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
                    <h5>New Container</h5>
                </div>
                <div class="widget-content nopadding">
                    <form method="POST" action="{{ route('container.store') }}" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="weight" class="control-label">Weight</label>
                            <div class="controls">
                                <input type="number" name="weight" id="weight" placeholder="Enter Weight" class="form-control" value="{{ old('weight') }}">
                                @error('weight')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="size" class="control-label">Size</label>
                            <div class="controls">
                                <select name="size" id="size" class="form-control">
                                    <option value="">Select Size</option>
                                    <option value="Small" {{ old('size') == 'Small' ? 'selected' : '' }}>Small</option>
                                    <option value="Medium" {{ old('size') == 'Medium' ? 'selected' : '' }}>Medium</option>
                                    <option value="Large" {{ old('size') == 'Large' ? 'selected' : '' }}>Large</option>
                                </select>
                                @error('size')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number" class="control-label">Number</label>
                            <div class="controls">
                                <input type="text" name="number" id="number" placeholder="Enter Container Number" class="form-control" value="{{ old('number') }}">
                                @error('number')
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

  @endsection