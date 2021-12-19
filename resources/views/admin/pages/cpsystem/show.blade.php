@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} cpsystem
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $cpsystem->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>{{ $cpsystem->name }}</td>
                    </tr>
                    <tr>
                        <th>
                      Type
                        </th>
                        <td>{{ $cpsystem->Type }}</td>
                    </tr>
                    <tr>
                        <td>
                           Email
                        </td>
                        <td>{{ $cpsystem->email }}</td>
                    </tr>
                      <tr>
                        <td>
                           Access
                        </td>
                        <td>{{ $cpsystem->access }}</td>
                    </tr>
                      <tr>
                        <td>
                           Password
                        </td>
                        <td>{{ $cpsystem->password }}</td>
                    </tr>
                 
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $cpsystem->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $cpsystem->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $cpsystem->name }}
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