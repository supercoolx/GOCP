@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create carrierbuy') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.carrierbuy.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_by_rout_name">Carrier By Rout Name*</label>
                    <input type="text" id="carrier_by_rout_name" name="carrier_by_rout_name" class="form-control" value="{{ old('carrier_by_rout_name') }}" required>
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
                    <label for="carrier_id"> Carrier*</label>
                    <select name="carrier_id" id="carrier_id " class="custom-select">
                       <option value="">select Carrier</option>
                        @if(!empty($carrier))
                        @foreach($carrier as $val)
                            <option value="{{ $val->id }}">{{$val->carrier_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>

        <div class="col-md-4">
                <div class="form-group">
                    <label for="route_sale_price_id">Cellular Companies ID*</label>
                    <select name="route_sale_price_id" id="route_sale_price_id " class="custom-select">
                       <option value="">select Route Price</option>
                        @if(!empty($route))
                        @foreach($route as $val)
                            <option value="{{ $val->id }}">{{$val->sale_price}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="sc_commision">Sc Commision*</label>
                    <input type="text" id="sc_commision" name="sc_commision" class="form-control" value="{{ old('sc_commision') }}" required>
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