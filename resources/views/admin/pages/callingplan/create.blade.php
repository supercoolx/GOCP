@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create callingplan') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.callingplan.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                    <label for="calling_phone_id">Calling Plan Name*</label>
                    <select name="calling_phone_id" id="calling_phone_id " class="custom-select">
                       <option value="">select Calling Plan Name</option>
                        @if(!empty($callingphone))
                        @foreach($callingphone as $val)
                            <option value="{{ $val->id }}">{{$val->calling_plan_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="calling_plan_cost">Calling Plan Cost*</label>
                    <input type="text" id="calling_plan_cost" name="calling_plan_cost" class="form-control" value="{{ old('calling_plan_cost') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="usa_currency">USA Currency*</label>
                    <input type="text" id="usa_currency" name="usa_currency"  class="form-control" value="{{ old('usa_currency') }}" required>
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