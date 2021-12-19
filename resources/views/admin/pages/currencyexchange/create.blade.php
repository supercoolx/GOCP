@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create currencyexchange') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.currencyexchange.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="currncey_id">Select Currency Exchange*</label>
                    <select name="currncey_id" id="currncey_id " class="custom-select">
                       <option value="">select Currency Exchange</option>
                        @if(!empty($currency))
                        @foreach($currency as $value)
                            <option value="{{ $value->id }}">{{$value->currncey_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="date">Date*</label>
                    <input type="text" id="date" name="date" class="form-control" value="{{ old('date') }}" required>
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label for="currency_value">Currency Value*</label>
                    <input type="text" id="currency_value" name="currency_value" class="form-control" value="{{ old('currency_value') }}" required>
                </div>
            </div>

               <div class="col-md-4">
                <div class="form-group">
                    <label for="usa_dollar_value">Usa Dollar Value*</label>
                    <input type="text" id="usa_dollar_value" name="usa_dollar_value" class="form-control" value="{{ old('usa_dollar_value') }}" required>
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