@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.carrierinvoices.create") }}">
                {{ trans('global.add') }} {{ trans('carrierinvoices') }}
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
                            Carrier Buy Route Name
                        </th>
                        <th>
                        Time Range
                        </th>
                        <td>
                         Total Minutes
                        </td>
                     
                        
                        <td>
                            Status
                        </td>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carrierinvoices as $key => $carrierinvoices)
                        <tr data-entry-id="{{ $carrierinvoices->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $carrierinvoices->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $carrierinvoices->carrier_buy_id ?? '' }}
                            </td>
                            <td>
                                {{ $carrierinvoices->time_range ?? '' }}
                            </td>
                            <td>
                                {{ $carrierinvoices->total_mints ?? '' }}
                            </td>
                          
                            <td>
                                {{ $accountantinfo->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.carrierinvoices.show', $carrierinvoices->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.carrierinvoices.edit', $carrierinvoices->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.carrierinvoices.destroy', $carrierinvoices->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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