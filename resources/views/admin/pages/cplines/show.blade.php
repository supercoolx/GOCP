@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} cplines
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bcplineed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $cplines->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>{{ $cplines->name }}</td>
                    </tr>
                    <tr>
                        <th>
                           Calling Plane Costing Id
                        </th>
                        <td>{{ $cplines->calling_plane_costing_id }}</td>
                    </tr>
                    <tr>
                        <td>
                           Cellular Companies Id
                        </td>
                        <td>{{ $cplines->cellular_companies_id }}</td>
                    </tr>
                    <tr>
                        <td>
                           Line Id
                        </td>
                        <td>{{ $cplines->line_id }}</td>
                    </tr>
                    
                     
                     
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $cplines->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $cplines->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $cplines->name }}
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