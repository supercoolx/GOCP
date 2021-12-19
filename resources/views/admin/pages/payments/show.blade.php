@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} payments
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bpaymented table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $payments->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           Payment to Cs
                        </th>
                        <td>{{ $payments->payment_to_cs }}</td>
                    </tr>
                    <tr>
                        <th>
                       Amount
                        </th>
                        <td>{{ $payments->amount }}</td>
                    </tr>
                   
                   <tr>
                        <th>
                       Number
                        </th>
                        <td>{{ $payments->number }}</td>
                    </tr>

                    <tr>
                        <th>
                       Rang Date
                        </th>
                        <td>{{ $payments->rang_dates }}</td>
                    </tr>


                     <tr>
                        <th>
                      Invoice Id
                        </th>
                        <td>{{ $payments->invoice_id }}</td>
                    </tr>

                   <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $payments->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $payments->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $payments->name }}
                        </td>
                    </tr>
                   
                  
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection