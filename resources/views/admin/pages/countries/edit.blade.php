@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} countries
    </div>

    <div class="card-body">
        <form action="{{ route("admin.countries.update", [$countries->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Country Name*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($countries) ? $countries->name : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="timezone_id">Time zone*</label>
                    <select name="timezone_id" id="timezone_id" class="custom-select">
                       <option value="">select Time zone</option>
                        @if(!empty($timezone))
                        @foreach($timezone as $val)
                            <option value="{{ $val->id }}">{{$val->timezone_name}}</option>
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
        $("#category").val("{{ $countries->category }}");
        $("#status").val("{{ $countries->status }}");
        $("#timezone_id").val({{ $countries->timezone_id }});
        
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