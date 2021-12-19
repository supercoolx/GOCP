@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create traffic') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.traffics.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="route_id">Route Id*</label>
                    <input type="text" id="route_id" name="route_id" class="form-control" value="{{ old('route_id', isset($traffics) ? $traffics->route_id : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="route_sale_price_id">Route Sale Price Id*</label>
                    <input type="tel" id="route_sale_price_id" name=" route_sale_price_id" class="form-control" value="{{ old('route_sale_price_id', isset($traffics) ? $traffics->route_sale_price_id : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="call_attempts_per_hour">Call Attempts per hour*</label>
                    <input type="text" id="call_attempts_per_hour" name="call_attempts_per_hour" class="form-control" value="{{ old('call_attempts_per_hour', isset($traffics) ? $traffics->call_attempts_per_hour : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="call_attempts_complete">Call Attempts Completed*</label>
                    <input type="number" id="call_attempts_complete" min="10" maxlength="16" name="call_attempts_complete" class="form-control" value="{{ old('call_attempts_complete', isset($traffics) ? $traffics->call_attempts_complete : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="average_call_duration">Average Call Duration*</label>
                    <input type="string" id="average_call_duration" name="average_call_duration"  class="form-control" value="{{ old('average_call_duration', isset($traffics) ? $traffics->average_call_duration : '') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="range_time">Range Time*</label>
                    <input type="text" id="range_time" name="range_time"  class="form-control" value="{{ old('range_time', isset($traffics) ? $traffics->range_time : '') }}" required>
                </div>
            </div>

          <div class="col-md-4">
                <div class="form-group">
                    <label for="status">status*</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">Please select</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
            </div>
           
           
            
        </div>
         
         
            <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                
                <p class="helper-block">
                    {{ trans('cruds.user.fields.roles_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
   

@endsection