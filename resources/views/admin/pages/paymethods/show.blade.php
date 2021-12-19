@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} paymethods
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bpaymethoded table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $paymethods->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                          Name
                        </th>
                        <td>{{ $paymethods->name }}</td>
                    </tr>
                   

                   <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $paymethods->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $paymethods->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $paymethods->name }}
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