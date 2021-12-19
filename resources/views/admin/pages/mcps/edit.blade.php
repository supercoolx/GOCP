@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} mcp
    </div>

    <div class="card-body">
        <form action="{{ route("admin.mcps.update", [$mcps->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($mcps) ? $mcps->name : '') }}" required>
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="user_name">User Name*</label>
                    <input type="text" id="user_name" name="user_name" class="form-control" value="{{ old('user_name', isset($mcps) ? $mcps->user_name : '') }}" required>
                </div>
            </div>
           
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="mcp_connect">MCP Connect*</label>
                    <input type="text" id="mcp_connect" name="mcp_connect"  class="form-control" value="{{ old('mcp_connect', isset($mcps) ? $mcps->mcp_connect : '') }}" required>
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