@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.mcps.create") }}">
                {{ trans('global.add') }} {{ trans('mcp') }}
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
            <table class=" table table-bmcped table-striped table-hover datatable datatable-User">
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
                            User Name
                        </th>
                        
                        <th>
                            MCP Connect
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
                    @if(!empty($mcps))
                    @foreach($mcps as $key => $mcps)
                        <tr data-entry-id="{{ $mcps->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $mcps->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $mcps->name ?? '' }}
                            </td>
                            <td>
                                {{ $mcps->user_name ?? '' }}
                            </td>
                            
                            <td>
                                {{ $mcps->mcp_connect ?? '' }}
                            </td>
                           
                           
                            <td>
                                {{ $mcps->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.mcps.show', $mcps->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.mcps.edit', $mcps->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                <form action="{{ route('admin.mcps.destroy', $mcps->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                            </td>

                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')

@endsection