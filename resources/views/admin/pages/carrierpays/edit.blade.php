@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} carrierpays
    </div>

    <div class="card-body">
        <form action="{{ route("admin.carrierpays.update", [$carrierpays->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            

             <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_buy_rout_id">Carrier Buy ID*</label>
                    <select name="carrier_buy_rout_id" id="carrier_buy_rout_id " class="custom-select">
                       <option value="">select Carrier Buy ID</option>
                        @if(!empty($carrierbuy))
                        @foreach($carrierbuy as $val)
                            <option value="{{ $val->id }}">{{$val->carrier_by_rout_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label for="time_range">Time Range*</label>
                    <input type="text" id="time_range" name="time_range" class="form-control" value="{{ old('time_range') }}" required>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="total_mints">Total Minutes*</label>
                    <input type="text" id="total_mints" name="total_mints" class="form-control" value="{{ old('total_mints') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="create_payment">Create Payment*</label>
                    <input type="text" id="create_payment" name="create_payment" class="form-control" value="{{ old('create_payment') }}" required>
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
           
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('Update') }}">
            </div>
        </form>


    </div>
</div>
@endsection



@section('scripts')
    

@endsection