@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} carrierbuy
    </div>

    <div class="card-body">
        <form action="{{ route("admin.carrierbuy.update", [$carrierbuy->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="carrier_by_rout_name"> Carrier By Rout Name*</label>
                    <input type="text" id="carrier_by_rout_name" name="carrier_by_rout_name" class="form-control" value="{{ old('carrier_by_rout_name', isset($carrierbuy) ? $carrierbuy->carrier_by_rout_name : '') }}" required>
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
                    <label for="carrier_id">Cellular Carrier*</label>
                    <select name="carrier_id" id="carrier_id" class="custom-select">
                       <option value="">select Carrier</option>
                        @if(!empty($carrier))
                        @foreach($carrier as $val)
                            <option value="{{ $val->id }}">{{$val->carrier_name}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="route_sale_price_id">Route Price*</label>
                    <select name="route_sale_price_id" id="route_sale_price_id" class="custom-select">
                       <option value="">select Route Price</option>
                        @if(!empty($route))
                        @foreach($route as $val)
                            <option value="{{ $val->id }}">{{$val->sale_price}}</option>
                        @endforeach
                        @endif
                    </select>
                
                </div>
            </div>

                <div class="col-md-4">
                <div class="form-group">
                    <label for="sc_commision">Sc Commision*</label>
                    <input type="text" id="sc_commision" name="sc_commision" class="form-control" value="{{ old('rout_price', isset($carrierbuy) ? $carrierbuy->sc_commision : '') }}" required>
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
        $("#category").val("{{ $carrierbuy->category }}");
        $("#cellular_companies_id").val("{{ $carrierbuy->cellular_companies_id }}");
        $("#carrier_id").val("{{ $carrierbuy->carrier_id }}");
        $("#route_sale_price_id").val("{{ $carrierbuy->route_sale_price_id }}");
        $("#status").val("{{ $carrierbuy->status }}");
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