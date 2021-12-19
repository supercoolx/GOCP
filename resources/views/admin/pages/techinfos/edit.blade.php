@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} techinfo
    </div>

    <div class="card-body">
        <form action="{{ route("admin.techinfos.update", [$techinfos->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_first_name">Name*</label>
                    <input type="text" id="tech_first_name" name="tech_first_name" class="form-control" value="{{ old('tech_first_name', isset($techinfos) ? $techinfos->tech_first_name : '') }}" required>
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_middle_name">Middle Name*</label>
                    <input type="text" id="tech_middle_name" name="tech_middle_name" class="form-control" value="{{ old('tech_middle_name', isset($techinfos) ? $techinfos->tech_middle_name : '') }}" required>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_last_name">Last Name*</label>
                    <input type="text" id="tech_last_name" name="tech_last_name" class="form-control" value="{{ old('tech_last_name', isset($techinfos) ? $techinfos->tech_last_name : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_cell_number">Cell Number*</label>
                    <input type="text" id="tech_cell_number" name="tech_cell_number" readonly="" class="form-control" value="{{ old('tech_cell_number', isset($techinfos) ? $techinfos->tech_cell_number : '') }}" required>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_email">Email*</label>
                    <input type="text" id="tech_email" name="tech_email" class="form-control" value="{{ old('tech_email', isset($techinfos) ? $techinfos->tech_email) : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_skype">Skype</label>
                    <input type="text" id="tech_skype" name="tech_skype" class="form-control" value="{{ old('tech_skype', isset($techinfos) ? $techinfos->tech_skype) : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tech_whatsapp">Whatsapp</label>
                    <input type="text" id="tech_whatsapp" name="tech_whatsapp" class="form-control" value="{{ old('tech_whatsapp', isset($techinfos) ? $techinfos->tech_whatsapp) : '') }}" required>
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
        $("#category").val("{{ $techinfos->category }}");
        $("#status").val("{{ $techinfos->status }}");
        
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