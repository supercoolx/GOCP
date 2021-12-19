@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} callingplan
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $callingplan->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           Calling Plan Name
                        </th>
                        <td>{{ $callingplan->calling_plan_name }}</td>
                    </tr>
                    <tr>
                        <th>
                      Calling Plan Cost
                        </th>
                        <td>{{ $callingplan->calling_phone_id }}</td>
                    </tr>
                    <tr>
                        <td>
                           Usa Currency
                        </td>
                        <td>{{ $callingplan->usa_currency }}</td>
                    </tr>
                 
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $callingplan->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $callingplan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $callingplan->name }}
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