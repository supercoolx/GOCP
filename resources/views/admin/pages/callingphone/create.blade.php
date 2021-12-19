@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create callingphone') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.callingphone.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="calling_plan_name">Calling Plan Name*</label>
                    <input type="text" id="calling_plan_name" name="calling_plan_name" class="form-control" value="{{ old('calling_plan_name') }}" required>
                </div>
            </div>
            
            
           
           <div class="col-md-4">
                <div class="form-group">
                    <label for="cellular_companies_id">Cellular Companies ID*</label>
                    <select name="cellular_companies_id" id="cellular_companies_id " class="custom-select">
                       <option value="">select Cellular Companies Id</option>
                        @if(!empty($cellularcompanies))
                        @foreach($cellularcompanies as $val)
                            <option value="{{ $val->id }}">{{$val->cellular_company_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="call_plan_detail">Call Plan Detail*</label>
                    <input type="text" id="call_plan_detail" name="call_plan_detail" class="form-control" value="{{ old('call_plan_detail') }}" required>
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