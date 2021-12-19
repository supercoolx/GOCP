@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} timerang
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $timerang->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           From Time Stamp
                        </th>
                        <td>{{ $timerang->from_time_stamp }}</td>
                    </tr>
                    <tr>
                        <th>
                      Type
                        </th>
                        <td>{{ $timerang->to_time_stamp }}</td>
                    </tr>
                   
               
                 
                 
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $timerang->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $timerang->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $timerang->name }}
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