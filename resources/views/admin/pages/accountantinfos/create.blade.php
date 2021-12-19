@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create accountantinfo') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.accountantinfos.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_first_name">Name*</label>
                    <input type="text" id="accountant_first_name" name="accountant_first_name" class="form-control" value="{{ old('accountant_first_name', isset($accountantinfos) ? $accountantinfos->accountant_first_name : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_middle_name">Middle Name*</label>
                    <input type="text" id="accountant_middle_name" name="accountant_middle_name" class="form-control" value="{{ old('accountant_middle_name', isset($accountantinfos) ? $accountantinfos->accountant_middle_name : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_last_name">Last Name*</label>
                    <input type="text" id="accountant_last_name" name="accountant_last_name" class="form-control" value="{{ old('accountant_last_name', isset($accountantinfos) ? $accountantinfos->accountant_last_name : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_cell_number">Cell Number*</label>
                    <input type="text" id="accountant_cell_number" name="accountant_cell_number" class="form-control" value="{{ old('accountant_cell_number', isset($accountantinfos) ? $accountantinfos->accountant_cell_number : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_email">Email*</label>
                    <input type="text" id="accountant_email" name="accountant_email"  class="form-control" value="{{ old('accountant_email', isset($accountantinfos) ? $accountantinfos->accountant_email : '') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_skype">Skype</label>
                    <input type="text" id="accountant_skype" name="accountant_skype"  class="form-control" value="{{ old('accountant_skype', isset($accountantinfos) ? $accountantinfos->accountant_skype : '') }}" required>
                </div>
            </div>

             <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_whatsapp">Whatsapp</label>
                    <input type="Number" id="accountant_whatsapp" name="accountant_whatsapp"  class="form-control" value="{{ old('accountant_whatsapp', isset($accountantinfos) ? $accountantinfos->accountant_whatsapp : '') }}" required>
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