@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create financial') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.financials.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="account_name">Account Name*</label>
                    <input type="text" id="account_name" name="account_name" class="form-control" value="{{ old('account_name', isset($financials) ? $financials->account_name : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="payment_method">Payment Method*</label>
                    <input type="text" id="payment_method" name="payment_method" class="form-control" value="{{ old('payment_method', isset($financials) ? $financials->payment_method : '') }}" required>
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