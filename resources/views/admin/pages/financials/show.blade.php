@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} financials
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bfinancialed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $financials->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                          Account  Name
                        </th>
                        <td>{{ $financials->account_name }}</td>
                    </tr>
                    <tr>
                        <th>
                           Payment Method
                        </th>
                        <td>{{ $financials->payment_method }}</td>
                    </tr>
                   
                     
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $financials->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $financials->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $financials->name }}
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