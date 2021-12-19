@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} callingplan
    </div>

    <div class="card-body">
        <form action="{{ route("admin.callingplan.update", [$callingplan->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
             <div class="col-md-4">
                <div class="form-group">
                    <label for="calling_phone_id">Calling Plan Name*</label>
                    <select name="calling_phone_id" id="calling_phone_id " class="custom-select">
                       <option value="">select Calling Plan Name</option>
                        @if(!empty($callingphone))
                        @foreach($callingphone as $val)
                            <option value="{{ $val->id }}">{{$val->calling_plan_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="calling_plan_cost">Calling Plan Cost*</label>
                    <input type="text" id="calling_plan_cost" name="calling_plan_cost" class="form-control" value="{{ old('calling_plan_cost') }}" required>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="usa_currency">USA Currency*</label>
                    <input type="text" id="usa_currency" name="usa_currency" class="form-control" value="{{ old('usa_currency') }}" required>
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
        $("#category").val("{{ $callingplan->category }}");
        $("#status").val("{{ $callingplan->status }}");
        
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