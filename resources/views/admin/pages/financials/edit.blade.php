@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} financial
    </div>

    <div class="card-body">
        <form action="{{ route("admin.financials.update", [$financials->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="account_name">Name*</label>
                    <input type="text" id="account_name" name="account_name" class="form-control" value="{{ old('account_name', isset($financials) ? $financials->account_name : '') }}" required>
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="payment_method">Sim*</label>
                    <input type="text" id="payment_method" name="payment_method" class="form-control" value="{{ old('payment_method', isset($financials) ? $financials->payment_method : '') }}" required>
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
           
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('Update') }}">
            </div>
        </form>


    </div>
</div>
@endsection
