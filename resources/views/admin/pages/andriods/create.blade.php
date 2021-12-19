@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create android') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.androids.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sim_no">Sim No.*</label>
                        <input type="text" id="sim_no" name="sim_no" class="form-control" value="{{ old('sim_no', isset($androids) ? $androids->sim_no : '') }}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone_number">Phone No.*</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ old('phone_number', isset($androids) ? $androids->phone_number : '') }}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="imei">Imei*</label>
                        <input type="text" id="imei" name="imei" class="form-control" value="{{ old('imei', isset($androids) ? $androids->imei : '') }}" required>
                    </div>
                </div>
            
           
             <div class="col-md-4">
                <div class="form-group">
                    <label for="calling_plane_costing_id">Calling Plan ID*</label>
                    <select name="calling_plane_costing_id" id="calling_plane_costing_id " class="custom-select">
                       <option value="">select Calling Plane Cost</option>
                        @if(!empty($callingplan))
                        @foreach($callingplan as $value)
                            <option value="{{ $value->id }}">{{$value->name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cellular_companies_id">Cellular Companies ID*</label>
                    <select name="cellular_companies_id" id="cellular_companies_id " class="custom-select">
                       <option value="">select Cellular Companies Id</option>
                        @if(!empty($cellularcompanies))
                        @foreach($cellularcompanies as $val)
                            <option value="{{ $val->id }}">{{$val->name}}</option>
                        @endforeach
                        @endif
                    </select>
                
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

