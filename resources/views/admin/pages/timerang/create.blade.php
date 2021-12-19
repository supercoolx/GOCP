@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create timerang') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.timerang.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="from_time_stamp">From Time Stamp*</label>
                    <input type="time" id="from_time_stamp" name="from_time_stamp" class="form-control" value="{{ old('from_time_stamp') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="to_time_stamp">To Time Stamp*</label>
                    <input type="time" id="to_time_stamp" name="to_time_stamp" class="form-control" value="{{ old('to_time_stamp') }}" required>
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