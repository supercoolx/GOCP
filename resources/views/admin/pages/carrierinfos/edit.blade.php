@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} carrierinfo
    </div>

    <div class="card-body">
        <form action="{{ route("admin.carrierinfos.update", [$carrierinfos->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_name">Name*</label>
                    <input type="text" id="carrier_name" name="carrier_name" class="form-control" value="{{ old('carrier_name', isset($carrierinfos) ? $carrierinfos->carrier_name : '') }}" required>
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_address">Carrier Address*</label>
                    <input type="text" id="carrier_address" name="carrier_address" class="form-control" value="{{ old('carrier_address', isset($carrierinfos) ? $carrierinfos->carrier_address : '') }}" required>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_city">Carrier City*</label>
                    <input type="text" id="carrier_city" name="carrier_city" class="form-control" value="{{ old('carrier_city', isset($carrierinfos) ? $carrierinfos->carrier_city : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_country">Carrier Country*</label>
                    <input type="text" id="carrier_country" name="carrier_country" readonly="" class="form-control" value="{{ old('carrier_country', isset($carrierinfos) ? $carrierinfos->carrier_country : '') }}" required>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_ZIP">Carrier ZIP*</label>
                    <input type="text" id="carrier_ZIP" name="carrier_ZIP" class="form-control" value="{{ old('carrier_ZIP', isset($carrierinfos) ? $carrierinfos->carrier_ZIP: '') }}" required>
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