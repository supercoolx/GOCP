@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} sims
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bsimed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $sims->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Sim Number
                        </th>
                        <td>{{ $sims->name }}</td>
                    </tr>
                    <tr>
                        <th>
                            Phone Number
                        </th>
                        <td>{{ $sims->phone_number }}</td>
                    </tr>
                    <tr>
                        <th>
                            Imei
                        </th>
                        <td>{{ $sims->imei }}</td>
                    </tr>
                    <tr>
                        <th>
                           Calling Plan
                        </th>
                        <td>{{ $sims->calling_plane_costing_id }}</td>
                    </tr>
                    <tr>
                        <td>
                           Cellular Companies
                        </td>
                        <td>{{ $sims->cellular_companies_id }}</td>
                    </tr>
                     
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $sims->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $sims->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $sims->name }}
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