@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} deposits
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bdeposited table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $deposits->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>{{ $deposits->name }}</td>
                    </tr>
                    <tr>
                        <th>
                           Phone Number
                        </th>
                        <td>{{ $deposits->phone_number }}</td>
                    </tr>
                  
                   
                    <tr>
                        <td>
                            Amount
                        </td>
                        <td>{{ $deposits->amount }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $deposits->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $deposits->name }}
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