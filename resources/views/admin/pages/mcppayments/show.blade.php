@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} mcppayments
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $mcppayments->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                          MCP Name
                        </th>
                        <td>{{ $mcppayments->mcp_id }}</td>
                    </tr>
                    <tr>
                        <th>
                            Time Range
                        </th>
                        <td>{{ $mcppayments->time_range }}</td>
                    </tr>
                    <tr>
                        <td>
                           Whatsapp Minutes
                        </td>
                        <td>{{ $mcppayments->whatsapp_mints }}</td>
                    </tr>

                    <tr>
                        <td>
                           GSM Minutes
                        </td>
                        <td>{{ $mcppayments->gsm_mints }}</td>
                    </tr>

                    <tr>
                        <td>
                           Create Payment
                        </td>
                        <td>{{ $mcppayments->create_payment }}</td>
                    </tr>
                     
                   
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $mcppayments->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $mcppayments->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $mcppayments->name }}
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