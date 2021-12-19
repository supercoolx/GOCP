@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.callingphone.create") }}">
                {{ trans('global.add') }} {{ trans('calling Plan') }}
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
                        Calling Plan Name
                        </th>
                        <th>
                        Cellular Company
                        </th>
                         <th>
                        Call Plan Detail
                        </th>

                        <td>
                            Status
                        </td>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($callingphone as $key => $callingphone)
                        <tr data-entry-id="{{ $callingphone->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $callingphone->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $callingphone->calling_plan_name ?? '' }}
                            </td>
                            <td>
                                {{ $callingphone->cellular_companies_id ?? '' }}
                            </td>
                            <td>
                                {{ $callingphone->call_plan_detail ?? '' }}
                            </td>
                        
                            <td>
                                {{ $cpsystem->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.callingphone.show', $callingphone->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.callingphone.edit', $callingphone->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.callingphone.destroy', $callingphone->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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