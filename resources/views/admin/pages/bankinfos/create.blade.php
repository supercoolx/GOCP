@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create bankinfo') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.bankinfos.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_name">Bank Name*</label>
                    <input type="text" id="bank_name" name="bank_name" class="form-control" value="{{ old('bank_name', isset($bankinfos) ? $bankinfos->bank_name : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_address">Bank Address*</label>
                    <input type="text" id="bank_address" name="bank_address" class="form-control" value="{{ old('bank_address', isset($bankinfos) ? $bankinfos->bank_address : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_city">Bank City*</label>
                    <input type="text" id="bank_city" name="bank_city"  class="form-control" value="{{ old('bank_city', isset($bankinfos) ? $bankinfos->bank_city : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_country">Bank Country*</label>
                    <input type="text" id="bank_country" name="bank_country" class="form-control" value="{{ old('bank_country', isset($bankinfos) ? $bankinfos->bank_country : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_ZIP">Bank ZIP*</label>
                    <input type="text" id="bank_ZIP" name="bank_ZIP"  class="form-control" value="{{ old('bank_ZIP', isset($bankinfos) ? $bankinfos->bank_ZIP : '') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_phone">Bank Phone</label>
                    <input type="text" id="bank_phone" name="bank_phone"  class="form-control" value="{{ old('bank_phone', isset($bankinfos) ? $bankinfos->bank_phone : '') }}" required>
                </div>
            </div>

             <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_email">Bank Email</label>
                    <input type="email" id="bank_email" name="bank_email"  class="form-control" value="{{ old('bank_email', isset($bankinfos) ? $bankinfos->bank_email : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_swift">Bank Swift</label>
                    <input type="text" id="bank_swift" name="bank_swift"  class="form-control" value="{{ old('bank_swift', isset($bankinfos) ? $bankinfos->bank_swift : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_account_email">Bank Account Email</label>
                    <input type="email" id="bank_account_email" name="bank_account_email"  class="form-control" value="{{ old('bank_account_email', isset($bankinfos) ? $bankinfos->bank_account_email : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_account_number">Bank Account Number</label>
                    <input type="text" id="bank_account_number" name="bank_account_number"  class="form-control" value="{{ old('bank_account_number', isset($bankinfos) ? $bankinfos->bank_account_number : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_ACH">Bank ACH</label>
                    <input type="text" id="bank_ACH" name="bank_ACH"  class="form-control" value="{{ old('bank_ACH', isset($bankinfos) ? $bankinfos->bank_ACH : '') }}" required>
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