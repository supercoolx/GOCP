@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} cpayments
    </div>

    <div class="card-body">
        <form action="{{ route("admin.cpayments.update", [$cpayments->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            

              <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_info_id">CP Name*</label>
                    <select name="carrier_info_id" id="carrier_info_id" class="custom-select">
                       <option value="">select Carrier Buy ID</option>
                        @if(!empty($cpinfo))
                        @foreach($cpinfo as $val)
                            <option value="{{ $val->id }}">{{$val->carrier_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label for="time_range">Time Range*</label>
                    <input type="text" id="time_range" name="time_range" class="form-control" value="{{ old('time_range', isset($cpayments) ? $cpayments->time_range : '') }}" required>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="whatsapp_mints">Whatsapp Minutes*</label>
                    <input type="text" id="whatsapp_mints" name="whatsapp_mints" class="form-control" value="{{ old('whatsapp_mints', isset($cpayments) ? $cpayments->whatsapp_mints : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="gsm_mints">GSM Minutes*</label>
                    <input type="text" id="gsm_mints" name="gsm_mints" class="form-control" value="{{ old('gsm_mints', isset($cpayments) ? $cpayments->gsm_mints : '') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="create_payment">Create Payment*</label>
                    <input type="text" id="create_payment" name="create_payment" class="form-control" value="{{ old('create_payment', isset($cpayments) ? $cpayments->create_payment : '') }}" required>
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
        $("#category").val("{{ $cpayments->category }}");
        $("#carrier_info_id").val("{{ $cpayments->carrier_info_id }}");
        $("#status").val("{{ $cpayments->status }}");
        
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