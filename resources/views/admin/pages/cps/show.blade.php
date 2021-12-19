@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} cpunits
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bcpunited table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $cpunits->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Time
                        </th>
                        <td>{{ $cpunits->time }}</td>
                    </tr>
                    <tr>
                        <th>
                           Cp Info Id
                        </th>
                        <td>{{ $cpunits->cp_info_id }}</td>
                    </tr>
                   
                   
                   
                    
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $cpunits->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $cpunits->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $cpunits->name }}
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