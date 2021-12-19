@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create cpsystem') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.cpsystem.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($cpsystem) ? $cpsystem->name : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="Type">Type*</label>
                    <input type="text" id="Type" name="Type" class="form-control" value="{{ old('Type', isset($cpsystem) ? $cpsystem->cpsystem : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="text" id="email" name="email" readonly="true" class="form-control" value="{{ old('email', isset($cpsystem) ? $cpsystem->email : '') }}" required>
                </div>
            </div>

               <div class="col-md-4">
                <div class="form-group">
                    <label for="access">Access*</label>
                    <input type="text" id="access" name="access" readonly="true" class="form-control" value="{{ old('access', isset($cpsystem) ? $cpsystem->access : '') }}" required>
                </div>
            </div>
         

               <div class="col-md-4">
                <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="text" id="password" name="password" readonly="true" class="form-control" value="{{ old('password', isset($cpsystem) ? $cpsystem->password : '') }}" required>
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