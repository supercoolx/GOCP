@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} carrierinvoices
    </div>

    <div class="card-body">
        <form action="{{ route("admin.carrierinvoices.update", [$carrierinvoices->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
             <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_by_rout_name">Carrier Buy ID*</label>
                    <select name="carrier_by_rout_name" id="carrier_by_rout_name " class="custom-select">
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