@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create payment') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.payments.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="payment_to_cs">Payment to CS</label>
                    <input type="text" id="payment_to_cs" name="payment_to_cs" class="form-control" value="{{ old('payment_to_cs' ) }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" id="amount" name="amount" class="form-control" value="{{ old('amount') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="number">Number</label>
                    <input type="text" id="number" name="number" class="form-control" value="{{ old('number') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="rang_dates">Rang Dates</label>
                    <input type="date" id="rang_dates" name="rang_dates" class="form-control" value="{{ old('rang_dates') }}" required>
                </div>
            </div>
            
           
             <div class="col-md-4">
                <div class="form-group">
                    <label for="invoice_id">Invoice Id*</label>
                    <select name="invoice_id" id="invoice_id " class="custom-select">
                       <option value="">select Invoice Id</option>
                        @if(!empty($invoice))
                        @foreach($invoice as $value)
                            <option value="{{ $value->id }}">{{$value->name}}</option>
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