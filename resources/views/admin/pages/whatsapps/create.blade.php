@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create whatsapp') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.whatsapps.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">\
                
            <div class="col-md-4">
                <div class="form-group">
                    <label for="whatsapp_number">Whatsapp Number*</label>
                    <input type="tel" id="whatsapp_number" name="whatsapp_number" class="form-control" value="{{ old('whatsapp_number', isset($whatsapps) ? $whatsapps->whatsapp_number : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="phone_number">Phone Number*</label>
                    <input type="tel" id="phone_number" name=" phone_number" class="form-control" value="{{ old('phone_number', isset($whatsapps) ? $whatsapps->phone_number : '') }}" required>
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