@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.timezone.create") }}">
                {{ trans('global.add') }} {{ trans('timezone') }}
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
                             TimeZone Name
                        </th>
                        <th>
                            Actual
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
                    @foreach($timezone as $key => $timezone)
                        <tr data-entry-id="{{ $timezone->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $timezone->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $timezone->timezone_name ?? '' }}
                            </td>
                            <td>
                                {{ $timezone->actual ?? '' }}
                            </td>
                        
                            <td>
                                {{ $cpsystem->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.timezone.show', $timezone->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.timezone.edit', $timezone->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.timezone.destroy', $timezone->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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