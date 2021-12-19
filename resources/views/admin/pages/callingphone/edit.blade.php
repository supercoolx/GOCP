@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} callingphone
    </div>

    <div class="card-body">
        <form action="{{ route("admin.callingphone.update", [$callingphone->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="calling_plan_name"> Calling Plan Name*</label>
                    <input type="text" id="calling_plan_name" name="calling_plan_name" class="form-control" value="{{ old('calling_plan_name', isset($callingphone) ? $callingphone->calling_plan_name : '') }}" required>
                </div>
            </div>
          
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cellular_companies_id">Cellular Companies ID*</label>
                    <select name="cellular_companies_id" id="cellular_companies_id" class="custom-select">
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
                    <label for="call_plan_detail">Call Plan Detail*</label>
                    <input type="text" id="call_plan_detail" name="call_plan_detail" class="form-control" value="{{ old('call_plan_detail', isset($callingphone) ? $callingphone->call_plan_detail : '') }}" required>
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
        $("#category").val("{{ $callingphone->category }}");
        $("#cellular_companies_id").val("{{ $callingphone->cellular_companies_id }}");
        $("#status").val("{{ $callingphone->status }}");
        
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