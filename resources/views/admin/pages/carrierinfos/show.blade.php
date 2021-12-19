@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} carrierinfos
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bcarrierinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $carrierinfos->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           Carrier Name
                        </th>
                        <td>{{ $carrierinfos->carrier_name }}</td>
                    </tr>
                    <tr>
                        <th>
                       Carrier Address 
                        </th>
                        <td>{{ $carrierinfos->carrier_address }}</td>
                    </tr>
                    <tr>
                        <td>
                           Carrier City
                        </td>
                        <td>{{ $carrierinfos->carrier_city }}</td>
                    </tr>
                    <tr>
                        <td>
                             Carrier Country
                        </td>
                        <td>{{ $carrierinfos->carrier_country }}</td>
                    </tr>
                    <tr>
                        <td>
                            Carrier ZIP
                        </td>
                        <td>{{ $carrierinfos->carrier_ZIP }}</td>
                    </tr>
                   
                    
                     
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $carrierinfos->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $carrierinfos->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $carrierinfos->name }}
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