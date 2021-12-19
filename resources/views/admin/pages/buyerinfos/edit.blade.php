@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} buyerinfo
    </div>

    <div class="card-body">
        <form action="{{ route("admin.buyerinfos.update", [$buyerinfos->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="first_name">Name*</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', isset($buyerinfos) ? $buyerinfos->first_name : '') }}" required>
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="middle_name">Middle Name*</label>
                    <input type="text" id="middle_name" name="middle_name" class="form-control" value="{{ old('middle_name', isset($buyerinfos) ? $buyerinfos->middle_name : '') }}" required>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">Last Name*</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name', isset($buyerinfos) ? $buyerinfos->last_name : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cell_number">Cell Number*</label>
                    <input type="text" id="cell_number" name="cell_number" class="form-control" value="{{ old('cell_number', isset($buyerinfos) ? $buyerinfos->cell_number : '') }}" required>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{ old('email', isset($buyerinfos) ? $buyerinfos->email : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="skype">Skype</label>
                    <input type="text" id="skype" name="skype" class="form-control" value="{{ old('skype', isset($buyerinfos) ? $buyerinfos->skype : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" id="whatsapp" name="whatsapp" class="form-control" value="{{ old('whatsapp', isset($buyerinfos) ? $buyerinfos->whatsapp : '') }}" required>
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
    <script type="text/javascript">
        $("#category").val("{{ $buyerinfos->category }}");
        $("#status").val("{{ $buyerinfos->status }}");
        
        $(document).ready(function(e){
            var total = 0;
            var q = 0;
            var cat = 0;
            $('#category').on('change',function(){
                var cat_val = $(this).val();
                cat = getCategoryValue(cat_val);
                q = $("#quantity").val();
                total = eval(q) * eval(cat);
                $("#total").val(total);
            });
            $('#quantity').keyup(function(){
                var q_value = $(this).val();
                cat_val = $("#category").val();
                cat = getCategoryValue(cat_val);
                total = eval(q_value) * eval(cat);
                $("#total").val(total);
            });


            function getCategoryValue(type){
                if(type === 'VIP'){
                    return 500;
                }else if(type === 'Special'){
                    return 300;
                } 
            }
        });
    </script>

@endsection