@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} accountantinfo
    </div>

    <div class="card-body">
        <form action="{{ route("admin.accountantinfos.update", [$accountantinfos->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_first_name">Name*</label>
                    <input type="text" id="accountant_first_name" name="accountant_first_name" class="form-control" value="{{ old('accountant_first_name', isset($accountantinfos) ? $accountantinfos->accountant_first_name : '') }}" required>
                </div>
            </div>
          <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_middle_name">Middle Name*</label>
                    <input type="text" id="accountant_middle_name" name="accountant_middle_name" class="form-control" value="{{ old('accountant_middle_name', isset($accountantinfos) ? $accountantinfos->accountant_middle_name : '') }}" required>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_last_name">Last Name*</label>
                    <input type="text" id="accountant_last_name" name="accountant_last_name" class="form-control" value="{{ old('accountant_last_name', isset($accountantinfos) ? $accountantinfos->accountant_last_name : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_cell_number">Cell Number*</label>
                    <input type="text" id="accountant_cell_number" name="accountant_cell_number" readonly="" class="form-control" value="{{ old('accountant_cell_number', isset($accountantinfos) ? $accountantinfos->accountant_cell_number : '') }}" required>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_email">Email*</label>
                    <input type="text" id="accountant_email" name="accountant_email" class="form-control" value="{{ old('accountant_email') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_skype">Skype</label>
                    <input type="text" id="accountant_skype" name="accountant_skype" class="form-control" value="{{ old('accountant_skype') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="accountant_whatsapp">Whatsapp</label>
                    <input type="text" id="accountant_whatsapp" name="accountant_whatsapp" class="form-control" value="{{ old('accountant_whatsapp') }}" required>
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
        $("#category").val("{{ $accountantinfos->category }}");
        $("#status").val("{{ $accountantinfos->status }}");
        
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