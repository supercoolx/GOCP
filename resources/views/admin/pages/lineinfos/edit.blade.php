@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} lineinfo
    </div>

    <div class="card-body">
        <form action="{{ route("admin.lineinfos.update", [$lineinfos->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($lineinfos) ? $lineinfos->name : '') }}" required>
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="sim">Sim*</label>
                    <input type="text" id="sim" name="sim" class="form-control" value="{{ old('sim', isset($lineinfos) ? $lineinfos->sim : '') }}" required>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="whatsapp">Whatsapp*</label>
                    <input type="text" id="whatsapp" name="whatsapp" class="form-control" value="{{ old('whatsapp', isset($lineinfos) ? $lineinfos->whatsapp : '') }}" required>
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
