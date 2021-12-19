@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} androids
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bandroided table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $androids->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           Sim No.
                        </th>
                        <td>{{ $androids->sim_no }}</td>
                    </tr>
                    <tr>
                        <th>
                           Phone Number
                        </th>
                        <td>{{ $androids->phone_number }}</td>
                    </tr>
                    <tr>
                        <td>
                           Imei
                        </td>
                        <td>{{ $androids->imei }}</td>
                    </tr>
                    <tr>
                        <td>
                          Calling Plan
                        </td>
                        <td>{{ $androids->calling_plane_costing_id }}</td>
                    </tr>
                    
                     <tr>
                        <td>
                          Cellular Companies
                        </td>
                        <td>{{ $androids->cellular_companies_id }}</td>
                    </tr>
                     
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $androids->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $androids->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $androids->name }}
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