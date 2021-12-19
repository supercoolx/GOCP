@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create timezone') }} 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.routsaleprice.update", [$routsaleprice->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="create_route_id">Route Name*</label>
                        <select name="create_route_id" id="create_route_id" class="custom-select">
                            <option value="">select Route Name</option>
                                        @if(!empty($rout))
                                        @foreach($rout as $value)
                            <option value="{{ $value->id }}">{{$value->route_name}}</option>
                            @endforeach
                            @endif
                        </select>
                
                    </div>
                </div>
            
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sale_price">Sale Price*</label>
                    <input type="text" id="sale_price" name="sale_price" class="form-control" value="{{ old('sale_price', isset($routsaleprice) ? $routsaleprice->sale_price : '') }}" required>
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
<script type="text/javascript">
    $("#category").val("{{ $routsaleprice->category }}");
    $("#create_route_id").val("{{ $routsaleprice->create_route_id }}");
    $("#status").val("{{ $routsaleprice->status }}");
    
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