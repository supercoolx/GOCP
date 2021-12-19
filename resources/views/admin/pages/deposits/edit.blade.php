@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} wallet
    </div>

    <div class="card-body">
        <form action="{{ route("admin.wallets.update", [$wallets->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
           <div class="col-md-4">
                <div class="form-group">
                    <label for="user_id">UserId*</label>
                    <input type="text" id="user_id" name="user_id" class="form-control" value="{{ old('user_id', isset($wallets) ? $wallets->user_id : '') }}" required>
                </div>
            </div>
         
             <div class="col-md-4">
                <div class="form-group">
                    <label for="user_name">User Name*</label>
                    <input type="text" id="user_name" name="user_name" class="form-control" value="{{ old('user_name', isset($wallets) ? $wallets->user_name : '') }}" required>
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label for="payment">payment*</label>
                    <input type="number" id="payment" name="payment" class="form-control" value="{{ old('payment', isset($wallets) ? $wallets->payment : '') }}" required>
                </div>
            </div>
             <div class="col-md-4">
                <div class="form-group">
                    <label for="profit">Profit Share Bonus</label>
                    <input type="number" id="profit" name="profit" readonly="true" class="form-control" value="{{ old('profit', isset($wallets) ? $wallets->profit : '') }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="bonus">Direct Bonus</label>
                    <input type="number" readonly="" id="bonus" name="bonus"  class="form-control" value="{{ old('bonus', isset($wallets) ? $wallets->bonus : '') }}" required>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="invested_amount">Invested Amount</label>
                        <input type="number" id="invested_amount" name="invested_amount" class="form-control" value="{{ old('invested_amount', isset($wallets) ? $wallets->date : '') }}" readonly="true" required>
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
   

@endsection