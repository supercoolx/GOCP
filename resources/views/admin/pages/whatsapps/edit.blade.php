@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} whatsapp
    </div>

    <div class="card-body">
        <form action="{{ route("admin.whatsapps.update", [$whatsapps->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
                   <div class="col-md-4">
                        <div class="form-group">
                            <label for="whatsapp_number">Whatsapp Number*</label>
                            <input type="text" id="whatsapp_number" name="whatsapp_number" class="form-control" value="{{ old('whatsapp_number', isset($whatsapps) ? $whatsapps->whatsapp_number : '') }}" required>
                        </div>
                    </div>
         
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone_number">Phone Number*</label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ old('phone_number', isset($whatsapps) ? $whatsapps->phone_number : '') }}" required>
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