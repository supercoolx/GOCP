@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create techinfo') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.techinfos.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_first_name">Name*</label>
                    <input type="text" id="tech_first_name" name="tech_first_name" class="form-control" value="{{ old('tech_first_name', isset($techinfos) ? $techinfos->tech_first_name : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_middle_name">Middle Name*</label>
                    <input type="text" id="tech_middle_name" name="tech_middle_name" class="form-control" value="{{ old('tech_middle_name', isset($techinfos) ? $techinfos->tech_middle_name : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_last_name">Last Name*</label>
                    <input type="text" id="tech_last_name" name="tech_last_name"  class="form-control" value="{{ old('tech_last_name', isset($techinfos) ? $techinfos->tech_last_name : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_cell_number">Cell Number*</label>
                    <input type="text" id="tech_cell_number" name="tech_cell_number" class="form-control" value="{{ old('tech_cell_number', isset($techinfos) ? $techinfos->tech_cell_number : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_email">Email*</label>
                    <input type="text" id="tech_email" name="tech_email"  class="form-control" value="{{ old('tech_email', isset($techinfos) ? $techinfos->tech_email : '') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_skype">Skype</label>
                    <input type="text" id="tech_skype" name="tech_skype"  class="form-control" value="{{ old('tech_skype', isset($techinfos) ? $techinfos->tech_skype : '') }}" required>
                </div>
            </div>

             <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_whatsapp">Whatsapp</label>
                    <input type="Number" id="tech_whatsapp" name="tech_whatsapp"  class="form-control" value="{{ old('tech_whatsapp', isset($techinfos) ? $techinfos->tech_whatsapp : '') }}" required>
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