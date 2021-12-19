@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} callingp Plan
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $callingphone->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Calling Plan Name
                        </th>
                        <td>{{ $callingphone->calling_plan_name }}</td>
                    </tr>
                    <tr>
                        <th>
                      Cellular Company
                        </th>
                        <td>{{ $callingphone->cellular_companies_id }}</td>
                    </tr>

                    <tr>
                        <th>
                      Call Plan Detail
                        </th>
                        <td>{{ $callingphone->call_plan_detail }}</td>
                    </tr>
                   
               
                 
                 
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $callingphone->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $callingphone->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $callingphone->name }}
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