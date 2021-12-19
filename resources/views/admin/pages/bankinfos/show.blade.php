@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} bankinfos
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bbankinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $bankinfos->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Bank Name
                        </th>
                        <td>{{ $bankinfos->bank_name }}</td>
                    </tr>
                    <tr>
                        <th>
                            Bank Address
                        </th>
                        <td>{{ $bankinfos->bank_address }}</td>
                    </tr>
                    <tr>
                        <td>
                           Bank City
                        </td>
                        <td>{{ $bankinfos->bank_city }}</td>
                    </tr>
                    <tr>
                        <td>
                           Bank Country
                        </td>
                        <td>{{ $bankinfos->bank_country }}</td>
                    </tr>
                    <tr>
                        <td>
                            Bank ZIP 
                        </td>
                        <td>{{ $bankinfos->bank_ZIP }}</td>
                    </tr>
                    <tr>
                        <td>
                           Bank Phone 
                        </td>
                        <td>{{ $bankinfos->bank_phone }}</td>
                    </tr>
                    <tr>
                        <td>
                           Bank Email
                        </td>
                        <td>{{ $bankinfos->bank_email }}</td>
                    </tr>
                     <tr>
                        <td>
                          Bank Swift
                        </td>
                        <td>{{ $bankinfos->bank_swift }}</td>
                    </tr>
                     <tr>
                        <td>
                            Bank Account Email
                        </td>
                        <td>{{ $bankinfos->bank_account_email }}</td>
                    </tr>
                     <tr>
                        <td>
                            Bank Account Number
                        </td>
                        <td>{{ $bankinfos->bank_account_number }}</td>
                    </tr>
                     <tr>
                        <td>
                            Bank ACH
                        </td>
                        <td>{{ $bankinfos->bank_ACH }}</td>
                    </tr>
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $bankinfos->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $bankinfos->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $bankinfos->name }}
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