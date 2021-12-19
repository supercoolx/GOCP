@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.rout.create") }}">
                {{ trans('global.add') }} {{ trans('rout') }}
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
                       Rout Name
                        </th>
                        <th>
                       Cellular Company
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
                    @foreach($rout as $key => $rout)
                        <tr data-entry-id="{{ $rout->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $rout->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $rout->route_name ?? '' }}
                            </td>
                            <td>
                                {{ $rout->cellular_companies_id ?? '' }}
                            </td>
                        
                            <td>
                                {{ $rout->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.rout.show', $rout->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @can('admins_manage')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.rout.edit', $rout->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan
                                <form action="{{ route('admin.rout.destroy', $rout->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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