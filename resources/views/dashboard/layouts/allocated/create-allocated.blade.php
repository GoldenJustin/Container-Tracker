@extends('dashboard/layouts.main')
@section('content')
<div class="span12">
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

<div class="span12">
    <div class="widget-box">
        <div class="span6">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon"><i class="icon-align-justify"></i></span>
                    <h5>Allocated Container</h5>
                </div>
                <div class="widget-content nopadding">
                    <form method="POST" action="{{ route('allocated.update', ['id'=>$data_id]) }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="arrival" class="control-label">Arrival Date</label>
                            <div class="controls">
                                <input type="datetime-local" name="arrival" id="arrival" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isArrived" class="control-label">Inspection</label>
                            <div class="controls">
                                <select name="isArrived" id="isArrived" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
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
