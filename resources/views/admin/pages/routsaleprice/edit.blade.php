@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create timezone') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.timezone.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="create_route_id">Route Name*</label>
                        <select name="create_route_id" id="create_route_id " class="custom-select">
                            <option value="">select Route Name</option>
                                        @if(!empty($routsaleprice))
                                        @foreach($routsaleprice as $value)
                            <option value="{{ $value->id }}">{{$value->route_name}}</option>
                            @endforeach
                            @endif
                        </select>
                
                    </div>
                </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sale_price">Sale Price*</label>
                    <input type="text" id="sale_price" name="sale_price" class="form-control" value="{{ old('sale_price') }}" required>
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