@extends('dashboard/layouts.main')
@section('content')
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
                            
                            <div class="control-group">
                                <label class="control-label">Arrival Date</label>
                                <div class="controls">
                                    <input type="datetime-local" name="arrival" class="form-control">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Inspection</label>
                                <div class="controls">
                                    <select name="isArrived" class="form-control">
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
    @endsection

