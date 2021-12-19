@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} cp
    </div>

    <div class="card-body">
        <form action="{{ route("admin.cps.update", [$cps->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($cps) ? $cps->name : '') }}" required>
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="user_name">User Name*</label>
                    <input type="text" id="user_name" name="user_name" class="form-control" value="{{ old('user_name', isset($cps) ? $cps->user_name : '') }}" required>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="text" id="password" name="password" class="form-control" value="{{ old('password', isset($cps) ? $cps->password : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cp_connect">CP Connect*</label>
                    <input type="text" id="cp_connect" name="cp_connect"  class="form-control" value="{{ old('cp_connect', isset($cps) ? $cps->cp_connect : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="mcp_id">MCP ID*</label>
                    <select name="mcp_id" id="mcp_id">
                       
                        @if(!empty($mcp))
                        @foreach()
                            <option value="{{ $mcp->id }}">{{$mcp->name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="countries_id">Countries ID*</label>
                    <select name="countries_id" id="countries_id">
                       
                        @if(!empty($countries))
                        @foreach()
                            <option value="{{ $countries->id }}">{{$countries->name}}</option>
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
           
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('Update') }}">
            </div>
        </form>


    </div>
</div>
@endsection



@section('scripts')
   

@endsection