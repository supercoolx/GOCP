@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} carrierbuy
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $carrierbuy->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           Carrier By Rout Name
                        </th>
                        <td>{{ $carrierbuy->carrier_by_rout_name }}</td>
                    </tr>
                    <tr>
                        <th>
                     Cellular Company
                        </th>
                        <td>{{ $carrierbuy->cellular_companies_id }}</td>
                    </tr>

                        <tr>
                        <th>
                     Carrier
                        </th>
                        <td>{{ $carrierbuy->carrier_id }}</td>
                    </tr>
                        <tr>
                        <th>
                      Rout Price
                        </th>
                        <td>{{ $carrierbuy->route_sale_price_id }}</td>
                    </tr>
                        <tr>
                        <th>
                     Sc Commision
                        </th>
                        <td>{{ $carrierbuy->sc_commision }}</td>
                    </tr>
                   
               
                 
                 
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $carrierbuy->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $carrierbuy->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $carrierbuy->name }}
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