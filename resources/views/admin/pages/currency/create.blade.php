@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create currency') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.currency.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="currncey_name">Currency Name*</label>
                    <input type="text" id="currncey_name" name="currncey_name" class="form-control" value="{{ old('currncey_name') }}" required>
                </div>
            </div>
            
           
             <div class="col-md-4">
                <div class="form-group">
                    <label for="countries_id">Country Name*</label>
                    <select name="countries_id" id="countries_id " class="custom-select">
                       <option value="">select Country Name</option>
                        @if(!empty($countries))
                        @foreach($countries as $val)
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