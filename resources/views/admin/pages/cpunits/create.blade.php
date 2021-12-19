@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create cpunit') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.cpunits.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="time_up">Time*</label>
                    <input type="time" id="time_up" name="time_up" class="form-control" value="{{ old('time_up', isset($cpunits) ? $cpunits->time_up : '') }}" required>
                </div>
            </div>
            
           
           
             
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cp_info_id">Cp Info ID*</label>
                    <select name="cp_info_id" id="cp_info_id" class="custom-select">
                       <option value="">Select Cp Info ID</option>
                        @if(!empty($cp))
                        @foreach($cp as $val)
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

@section('scripts')
 

@endsection