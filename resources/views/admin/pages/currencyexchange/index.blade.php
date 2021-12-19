@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.currencyexchange.create") }}">
                {{ trans('global.add') }} {{ trans('currencyexchange') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-baccountantinfoed table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                        Name
                        </th>
                        <th>
                        date
                        </th>
                        <th>currency value</th>
                        <th>usa dollarvalue </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($currencyexchange as $key => $currencyexchange)
                        <tr data-entry-id="{{ $currencyexchange->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $currencyexchange->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $currencyexchange->currncey_id ?? '' }}
                            </td>
                            <td>
                                {{ $currencyexchange->date ?? '' }}
                            </td>

                              <td>
                                {{ $currencyexchange->currency_value ?? '' }}
                            </td>

                            <td>
                                {{ $currencyexchange->usa_dollar_value ?? '' }}
                            </td>
                        

                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.currencyexchange.show', $currencyexchange->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.currencyexchange.edit', $currencyexchange->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.currencyexchange.destroy', $currencyexchange->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')

@endsection