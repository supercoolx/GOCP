@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} cellularcompanies
    </div>

    <div class="card-body">
        <form action="{{ route("admin.cellularcompanies.update", [$cellularcompanies->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cellular_company_name"> Cellular Company Name*</label>
                    <input type="text" id="cellular_company_name" name="cellular_company_name" class="form-control" value="{{ old('cellular_company_name', isset($cellularcompanies) ? $cellularcompanies->cellular_company_name : '') }}" required>
                </div>
            </div>
          
          <div class="col-md-4">
                <div class="form-group">
                    <label for="countries_id">Select Country*</label>
                    <select name="countries_id" id="countries_id" class="custom-select">
                       <option value="">select Country</option>
                        @if(!empty($countries))
                        @foreach($countries as $value)
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
           
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('Update') }}">
            </div>
        </form>


    </div>
</div>
@endsection



@section('scripts')
    <script type="text/javascript">
        $("#category").val("{{ $cellularcompanies->category }}");
        $("#countries_id ").val("{{ $cellularcompanies->countries_id }}");
        $("#status").val("{{ $cellularcompanies->status }}");
        
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