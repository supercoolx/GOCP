@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} whatsapps
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bwhatsapped table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $whatsapps->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Whatsapp Number
                        </th>
                        <td>{{ $whatsapps->whatsapp_number }}</td>
                    </tr>
                    <tr>
                        <th>
                           Phone Number
                        </th>
                        <td>{{ $whatsapps->phone_number }}</td>
                    </tr>
                  
                   

                    
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $whatsapps->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $whatsapps->name }}
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