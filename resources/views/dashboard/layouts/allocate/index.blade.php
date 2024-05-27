@extends('dashboard/layouts.main')
@section('content')

<div class="span12">
    <div class="widget-box">
        <div class="widget-title">
          <span class="icon"><i class="icon-th"></i></span>
          <a href="{{ route('allocate.create') }}"><h5><i class="icon-plus"></i> Allocate Containers</h5></a>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Container number</th>
                <th>Container Type</th>
                <th>ICD</th>
                <th>Departure Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($terminalToIcd as $item)
                <tr class="gradeX">
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->containers->number}}</td>
                  <td>{{ $item->trucks->type }}</td>
                  <td>{{ $item->icds->name }}</td>
                  <td>{{ $item->departureDate }}</td>
                  <td><i class="icon-trash"></i></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      
{{-- 
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
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
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
                        <h5>New Terminal to ICD</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form method="POST" action="{{ route('container.store') }}" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label for="container_id" class="control-label">Container</label>
                                <div class="controls">
                                    <select name="container_id" id="container_id" class="form-control">
                                        @foreach($viewData['containers'] as $container)
                                            <option value="{{ $container->id }}">{{ $container->number }}</option>
                                        @endforeach
                                    </select>
                                    @error('container_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Add other fields as needed -->
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-warning" onclick="window.history.back()">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
  @endsection