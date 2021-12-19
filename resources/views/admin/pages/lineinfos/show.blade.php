@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} lineinfos
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-blineinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $lineinfos->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>{{ $lineinfos->name }}</td>
                    </tr>
                    <tr>
                        <th>
                           Sim
                        </th>
                        <td>{{ $lineinfos->sim }}</td>
                    </tr>
                    <tr>
                        <td>
                           Whatsapp
                        </td>
                        <td>{{ $lineinfos->whatsapp }}</td>
                    </tr>
                     
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $lineinfos->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $lineinfos->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $lineinfos->name }}
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