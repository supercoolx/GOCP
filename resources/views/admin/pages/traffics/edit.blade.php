@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} traffic
    </div>

    <div class="card-body">
        <form action="{{ route("admin.traffics.update", [$traffics->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                    <input type="text" id="route_sale_price_id" name="route_sale_price_id" class="form-control" value="{{ old('route_sale_price_id', isset($traffics) ? $traffics->route_sale_price_id : '') }}" required>
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label for="call_attempts_per_hour">Call attempts per hour*</label>
                    <input type="number" id="call_attempts_per_hour" name="call_attempts_per_hour" class="form-control" value="{{ old('call_attempts_per_hour', isset($traffics) ? $traffics->call_attempts_per_hour : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="call_attempts_complete">Calls attempts completed</label>
                    <input type="number" id="call_attempts_complete" name="call_attempts_complete" class="form-control" value="{{ old('call_attempts_complete', isset($traffics) ? $traffics->call_attempts_complete : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="average_call_duration">Average Call Duration</label>
                    <input type="number"id="average_call_duration" name="average_call_duration"  class="form-control" value="{{ old('average_call_duration', isset($traffics) ? $traffics->average_call_duration : '') }}" required>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="range_time">Range Time</label>
                        <input type="number" id="range_time" name="range_time" class="form-control" value="{{ old('range_time', isset($traffics) ? $traffics->range_time : '') }}" required>
                </div>
            </div>
        </div>
           
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('Update') }}">
            </div>
        </form>


    </div>
</div>
@endsection



@section('scripts')
   

@endsection