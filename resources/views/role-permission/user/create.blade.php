@extends('dashboard/layouts.main')
{{-- @extends('index') --}}
@section('content')
<div class="span6">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon"><i class="icon-align-justify"></i></span>
            <h5>New User</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="{{ url('users') }}" method="POST" class="form-horizontal">
                @csrf
                <div class="control-group">
                    <label class="control-label">Name</label>
                    <div class="controls">
                        <input type="text" name="name" placeholder="Enter Name" class="form-control">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input type="email" name="email" placeholder="Enter Email" class="form-control">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Password</label>
                    <div class="controls">
                        <input type="password" name="password" placeholder="Enter Password" class="form-control">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Roles</label>
                    <div class="controls">
                        <select name="roles[]" class="form-control" multiple>
                            <option value="">Select Role</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                            @endforeach
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

@endsection
