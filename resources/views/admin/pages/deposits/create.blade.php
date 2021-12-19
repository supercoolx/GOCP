@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create deposit') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.deposits.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($deposits) ? $deposits->name : '') }}" required>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="phone_number">Phone Number*</label>
                    <input type="tel" id="phone_number" name="phone_number" class="form-control" value="{{ old('phone_number', isset($deposits) ? $deposits->phone_number : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="address">Address*</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($deposits) ? $deposits->address : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="account_number">Account Number*</label>
                    <input type="number" id="account_number" min="10" maxlength="16" name="account_number" class="form-control" value="{{ old('account_number', isset($deposits) ? $deposits->account_number : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="account_title">Account Title*</label>
                    <input type="string" id="account_title" name="account_title"  class="form-control" value="{{ old('account_title', isset($deposits) ? $deposits->account_title : '') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="bank_name">Bank Name*</label>
                    <input type="text" id="bank_name" name="bank_name"  class="form-control" value="{{ old('bank_name', isset($deposits) ? $deposits->bank_name : '') }}" required>
                </div>
            </div>

           <div class="col-md-4">
                <div class="form-group">
                    <label for="branch_code">Branch Code*</label>
                    <input type="Number" id="branch_code" name="branch_code"  class="form-control" value="{{ old('branch_code', isset($deposits) ? $deposits->branch_code : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="amount">Amount*</label>
                    <input type="Number" id="amount" name="amount"  class="form-control" value="{{ old('amount', isset($deposits) ? $deposits->amount : '') }}"min="7000" max="1526722.31" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="date">Date*</label>
                    <input type="date" id="date" name="date"  class="form-control" value="{{ old('date', isset($deposits) ? $deposits->date : '') }}" required>
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