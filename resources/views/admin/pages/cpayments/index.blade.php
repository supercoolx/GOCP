@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.cpayments.create") }}">
                {{ trans('global.add') }} {{ trans('cpayments') }}
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
            <table class="table  table-baccountantinfoed table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                            CP Name
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
                    @foreach($cpayments as $key => $cpayments)
                        <tr data-entry-id="{{ $cpayments->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $cpayments->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $cpayments->carrier_info_id ?? '' }}
                            </td>
                            <td>
                                {{ $cpayments->time_range ?? '' }}
                            </td>
                            <td>
                                {{ $cpayments->whatsapp_mints ?? '' }}
                            </td>
                             
                            <td>
                                {{ $cpayments->gsm_mints ?? '' }}
                            </td>

                            <td>
                                {{ $cpayments->create_payment ?? '' }}
                            </td>
                            
                            <td>
                                {{ $cpayments->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.cpayments.show', $cpayments->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.cpayments.edit', $cpayments->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.cpayments.destroy', $cpayments->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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