@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} cpayments
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $cpayments->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                          CP Name
                        </th>
                        <td>{{ $cpayments->carrier_info_id }}</td>
                    </tr>
                    <tr>
                        <th>
                            Time Range
                        </th>
                        <td>{{ $cpayments->time_range }}</td>
                    </tr>
                    <tr>
                        <td>
                           Whatsapp Minutes
                        </td>
                        <td>{{ $cpayments->whatsapp_mints }}</td>
                    </tr>

                    <tr>
                        <td>
                           GSM Minutes
                        </td>
                        <td>{{ $cpayments->gsm_mints }}</td>
                    </tr>

                    <tr>
                        <td>
                           Create Payment
                        </td>
                        <td>{{ $cpayments->create_payment }}</td>
                    </tr>
                     
                   
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $cpayments->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $cpayments->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $cpayments->name }}
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