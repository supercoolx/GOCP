@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} accountantinfos
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $accountantinfos->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           First Name
                        </th>
                        <td>{{ $accountantinfos->tech_first_name }}</td>
                    </tr>
                    <tr>
                        <th>
                       Middle Name 
                        </th>
                        <td>{{ $accountantinfos->tech_middle_name }}</td>
                    </tr>
                    <tr>
                        <td>
                           Last Name
                        </td>
                        <td>{{ $accountantinfos->tech_last_name }}</td>
                    </tr>
                    <tr>
                        <td>
                             Cell Number
                        </td>
                        <td>{{ $accountantinfos->tech_cell_number }}</td>
                    </tr>
                    <tr>
                        <td>
                            Email 
                        </td>
                        <td>{{ $accountantinfos->tech_email }}</td>
                    </tr>
                    <tr>
                        <td>
                           Skype
                        </td>
                        <td>{{ $accountantinfos->tech_skype }}</td>
                    </tr>
                    <tr>
                        <td>
                           Whatsapp
                        </td>
                        <td>{{ $accountantinfos->tech_whatsapp }}</td>
                    </tr>
                     <tr>
                        <td>
                          accountant Swift
                        </td>
                        <td>{{ $accountantinfos->accountant_swift }}</td>
                    </tr>
                     <tr>
                        <td>
                            accountant Account Email
                        </td>
                        <td>{{ $accountantinfos->accountant_account_email }}</td>
                    </tr>
                     <tr>
                        <td>
                            accountant Account Number
                        </td>
                        <td>{{ $accountantinfos->accountant_account_number }}</td>
                    </tr>
                     <tr>
                        <td>
                            accountant ACH
                        </td>
                        <td>{{ $accountantinfos->accountant_ACH }}</td>
                    </tr>
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $accountantinfos->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $accountantinfos->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $accountantinfos->name }}
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