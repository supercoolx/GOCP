@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} mcps
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bmcped table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $mcps->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>{{ $mcps->name }}</td>
                    </tr>
                    <tr>
                        <th>
                           User Name
                        </th>
                        <td>{{ $mcps->user_name }}</td>
                    </tr>
                   
                    <tr>
                        <td>
                           MCp Connect
                        </td>
                        <td>{{ $mcps->mcp_connect }}</td>
                    </tr>
                   
                   
                    
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $mcps->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $mcps->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $mcps->name }}
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