@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} carrierinvoices
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $carrierinvoices->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                          Carrier Buy Route Name
                        </th>
                        <td>{{ $carrierinvoices->carrier_buy_id }}</td>
                    </tr>
                    <tr>
                        <th>
                            Time Range
                        </th>
                        <td>{{ $carrierinvoices->time_range }}</td>
                    </tr>
                    <tr>
                        <td>
                           Total Minutes
                        </td>
                        <td>{{ $carrierinvoices->total_mints }}</td>
                    </tr>
                 
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $carrierinvoices->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $carrierinvoices->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $carrierinvoices->name }}
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