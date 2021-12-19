@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} digitals
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bdigitaled table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $digitals->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                           Transfer Name
                        </th>
                        <td>{{ $digitals->trasnfer_name }}</td>
                    </tr>
                    <tr>
                        <th>
                       Account
                        </th>
                        <td>{{ $digitals->account }}</td>
                    </tr>
                   
                   <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $digitals->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $digitals->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $digitals->name }}
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