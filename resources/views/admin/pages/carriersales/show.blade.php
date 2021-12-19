@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} carriersales
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bcarriersaleed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $carriersales->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           User Name
                        </th>
                        <td>{{ $carriersales->user_name }}</td>
                    </tr>
                    <tr>
                        <th>
                      Password
                        </th>
                        <td>{{ $carriersales->password }}</td>
                    </tr>
                    <tr>
                        <td>
                           First Name
                        </td>
                        <td>{{ $carriersales->first_name }}</td>
                    </tr>
                    <tr>
                        <td>
                           Last Name
                        </td>
                        <td>{{ $carriersales->last_name }}</td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                             Cell Number
                        </td>
                        <td>{{ $carriersales->cell_number }}</td>
                    </tr>
                    <tr>
                        <td>
                            Email 
                        </td>
                        <td>{{ $carriersales->email }}</td>
                    </tr>
                    <tr>
                        <td>
                           Skype
                        </td>
                        <td>{{ $carriersales->skype }}</td>
                    </tr>
                    <tr>
                        <td>
                           Whatsapp
                        </td>
                        <td>{{ $carriersales->whatsapp }}</td>
                    </tr>
                     
                    
                     
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $carriersales->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $carriersales->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $carriersales->name }}
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