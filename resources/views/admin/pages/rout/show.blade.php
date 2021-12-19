@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} rout
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $rout->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Rout Name
                        </th>
                        <td>{{ $rout->route_name }}</td>
                    </tr>
                    <tr>
                        <th>
                     Cellular Company
                        </th>
                        <td>{{ $rout->cellular_companies_id }}</td>
                    </tr>
                   
               
                 
                 
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $rout->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $rout->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $rout->name }}
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