@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} currencyexhange
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-baccountantinfoed table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>{{ $currencyexchange->id }}</td>
                    </tr>
                    
                    <tr>
                        <th>
                          Currncey Name
                        </th>
                        <td>{{ $currencyexchange->currncey_id }}</td>
                    </tr>
                    <tr>
                        <th>
                      Date
                        </th>
                        <td>{{ $currencyexchange->date }}</td>
                    </tr>

                      <tr>
                        <th>
                      Currency Value
                        </th>
                        <td>{{ $currencyexchange->currency_value }}</td>
                    </tr>

                     <tr>
                        <th>
                    Usa Dollar Value
                        </th>
                        <td>{{ $currencyexchange->usa_dollar_value }}</td>
                    </tr>
                   
               
                 
                 
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>{{ $currencyexchange->status }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $currencyexchange->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $currencyexchange->name }}
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