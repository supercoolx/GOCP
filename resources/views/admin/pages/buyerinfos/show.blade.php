@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} buyerinfos
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bbuyerinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $buyerinfos->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           First Name
                        </th>
                        <td>{{ $buyerinfos->first_name }}</td>
                    </tr>
                    <tr>
                        <th>
                       Middle Name 
                        </th>
                        <td>{{ $buyerinfos->middle_name }}</td>
                    </tr>
                    <tr>
                        <td>
                           Last Name
                        </td>
                        <td>{{ $buyerinfos->last_name }}</td>
                    </tr>
                    <tr>
                        <td>
                             Cell Number
                        </td>
                        <td>{{ $buyerinfos->cell_number }}</td>
                    </tr>
                    <tr>
                        <td>
                            Email 
                        </td>
                        <td>{{ $buyerinfos->email }}</td>
                    </tr>
                    <tr>
                        <td>
                           Skype
                        </td>
                        <td>{{ $buyerinfos->skype }}</td>
                    </tr>
                    <tr>
                        <td>
                           Whatsapp
                        </td>
                        <td>{{ $buyerinfos->whatsapp }}</td>
                    </tr>
                     
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $buyerinfos->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $buyerinfos->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $buyerinfos->name }}
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