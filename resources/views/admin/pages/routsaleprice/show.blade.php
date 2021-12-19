@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} routsaleprice
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $routsaleprice->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                            Rout Name
                        </th>
                        <td>{{ $routsaleprice->create_route_id }}</td>
                    </tr>
                    <tr>
                        <th>
                      Sale Price
                        </th>
                        <td>{{ $routsaleprice->sale_price }}</td>
                    </tr>
                   
               
                 
                 
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $routsaleprice->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $routsaleprice->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $routsaleprice->name }}
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