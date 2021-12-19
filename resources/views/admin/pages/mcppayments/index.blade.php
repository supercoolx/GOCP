@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.mcppayments.create") }}">
                {{ trans('global.add') }} {{ trans('mcppayments') }}
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
                            MCP Name
                        </th>
                        <th>
                        Time Range
                        </th>
                        <td>
                         Whatsapp Minutes
                        </td>
                        <td>
                         GSM Minutes
                        </td>
                        <td>
                         Create Payment
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
                    @foreach($mcppayments as $key => $mcppayments)
                        <tr data-entry-id="{{ $mcppayments->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $mcppayments->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $mcppayments->mcp_id ?? '' }}
                            </td>
                            <td>
                                {{ $mcppayments->time_range ?? '' }}
                            </td>
                            <td>
                                {{ $mcppayments->whatsapp_mints ?? '' }}
                            </td>
                             
                            <td>
                                {{ $mcppayments->gsm_mints ?? '' }}
                            </td>

                            <td>
                                {{ $mcppayments->create_payment ?? '' }}
                            </td>
                            
                            <td>
                                {{ $accountantinfo->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.mcppayments.show', $mcppayments->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.mcppayments.edit', $mcppayments->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.mcppayments.destroy', $mcppayments->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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