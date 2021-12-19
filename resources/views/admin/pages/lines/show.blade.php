@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} lines
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-blineed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $lines->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           Line Number
                        </th>
                        <td>{{ $lines->line_number }}</td>
                    </tr>
                    <tr>
                        <th>
                           Imei
                        </th>
                        <td>{{ $lines->imei }}</td>
                    </tr>
                    <tr>
                        <td>
                           Cp Info Id
                        </td>
                        <td>{{ $lines->cp_info_id }}</td>
                    </tr>
                     <tr>
                        <td>
                           Line Info Id
                        </td>
                        <td>{{ $lines->line_info_id }}</td>
                    </tr>
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $lines->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $lines->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $lines->name }}
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