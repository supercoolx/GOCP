@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} traffics
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-btrafficed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $traffics->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>{{ $traffics->route_id }}</td>
                    </tr>
                    <tr>
                        <th>
                           Phone Number
                        </th>
                        <td>{{ $traffics->route_sale_price_id }}</td>
                    </tr>
                  
                   
                    <tr>
                        <td>
                            Amount
                        </td>
                        <td>{{ $traffics->call_attempts_per_hour }}</td>
                    </tr>
                    
                     <tr>
                        <td>
                            Amount
                        </td>
                        <td>{{ $traffics->call_attempts_complete }}</td>
                    </tr>

                     <tr>
                        <td>
                            Amount
                        </td>
                        <td>{{ $traffics->average_call_duration }}</td>
                    </tr>

                     <tr>
                        <td>
                            Amount
                        </td>
                        <td>{{ $traffics->range_time }}</td>
                    </tr>

                    
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $traffics->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $traffics->name }}
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