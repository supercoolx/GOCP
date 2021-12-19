@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} currencyexchange
    </div>

    <div class="card-body">
        <form action="{{ route("admin.currencyexchange.update", [$currencyexchange->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="currncey_id">Select Currency Exchange*</label>
                    <select name="currncey_id" id="currncey_id" class="custom-select">
                       <option value="">select Currency Exchange</option>
                        @if(!empty($currency))
                        @foreach($currency as $value)
                            <option value="{{ $value->id }}">{{$value->currncey_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="date">Date*</label>
                    <input type="text" id="date" name="date" class="form-control" value="{{ old('date', isset($currencyexchange) ? $currencyexchange->date : '') }}" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="currency_value">Currency Value*</label>
                    <input type="text" id="currency_value" name="currency_value" class="form-control" value="{{ old('currency_value', isset($currencyexchange) ? $currencyexchange->currency_value : '') }}" required>
                </div>
            </div>

                <div class="col-md-4">
                <div class="form-group">
                    <label for="usa_dollar_value">Usa Dollar Value*</label>
                    <input type="text" id="usa_dollar_value" name="usa_dollar_value" class="form-control" value="{{ old('usa_dollar_value', isset($currencyexchange) ? $currencyexchange->usa_dollar_value : '') }}" required>
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
        $("#category").val("{{ $currencyexchange->category }}");
        $("#currncey_id").val("{{ $currencyexchange->currncey_id }}");
        $("#status").val("{{ $currencyexchange->status }}");
        
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