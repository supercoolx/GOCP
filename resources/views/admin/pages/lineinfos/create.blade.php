@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create lineinfo') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.lineinfos.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($lineinfos) ? $lineinfos->name : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sim">Sim*</label>
                    <input type="text" id="sim" name="sim" class="form-control" value="{{ old('sim', isset($lineinfos) ? $lineinfos->sim : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="whatsapp">Whatsapp*</label>
                    <input type="text" id="whatsapp" name="whatsapp"  class="form-control" value="{{ old('whatsapp', isset($lineinfos) ? $lineinfos->whatsapp : '') }}" required>
                </div>
            </div>
             
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status">Status*</label>
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