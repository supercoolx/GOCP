@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create carriersale') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.carriersales.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="user_name">User Name*</label>
                    <input type="text" id="user_name" name="user_name" class="form-control" value="{{ old('user_name', isset($carriersales) ? $carriersales->user_name : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="text" id="password" name="password" class="form-control" value="{{ old('password', isset($carriersales) ? $carriersales->password : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="first_name">First_name*</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', isset($carriersales) ? $carriersales->first_name : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">Last Name*</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name', isset($carriersales) ? $carriersales->last_name : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cell_number">Cell Number*</label>
                    <input type="text" id="cell_number" name="cell_number"  class="form-control" value="{{ old('cell_number', isset($carriersales) ? $carriersales->cell_number : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="text" id="email" name="email"  class="form-control" value="{{ old('email', isset($carriersales) ? $carriersales->email : '') }}" required>
                </div>
            </div>
         
            <div class="col-md-4">
                <div class="form-group">
                    <label for="skype">Skype*</label>
                    <input type="text" id="skype" name="skype"  class="form-control" value="{{ old('skype', isset($carriersales) ? $carriersales->skype : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="whatsapp">whatsapp*</label>
                    <input type="text" id="whatsapp" name="whatsapp"  class="form-control" value="{{ old('whatsapp', isset($carriersales) ? $carriersales->whatsapp : '') }}" required>
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