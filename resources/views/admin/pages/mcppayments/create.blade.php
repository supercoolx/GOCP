@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create mcppayments') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.mcppayments.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            
            
           
             <div class="col-md-4">
                <div class="form-group">
                    <label for="mcp_id">MCP Name*</label>
                    <select name="mcp_id" id="mcp_id " class="custom-select">
                       <option value="">select Carrier Buy ID</option>
                        @if(!empty($mcp))
                        @foreach($mcp as $val)
                            <option value="{{ $val->id }}">{{$val->mcp_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="time_range">Time Range*</label>
                    <input type="text" id="time_range" name="time_range" class="form-control" value="{{ old('time_range') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="whatsapp_mints">Whatsapp Minutes*</label>
                    <input type="text" id="whatsapp_mints" name="whatsapp_mints" class="form-control" value="{{ old('whatsapp_mints') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="gsm_mints">GSM Minutes*</label>
                    <input type="text" id="gsm_mints" name="gsm_mints" class="form-control" value="{{ old('gsm_mints') }}" required>
                </div>
            </div>
          
            <div class="col-md-4">
                <div class="form-group">
                    <label for="create_payment">Create Payment*</label>
                    <input type="text" id="create_payment" name="create_payment" class="form-control" value="{{ old('create_payment') }}" required>
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