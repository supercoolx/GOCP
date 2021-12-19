@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.timezone.create") }}">
                {{ trans('global.add') }} {{ trans('timezone') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-baccountantinfoed table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                                From
                        </th>
                        <th>
                                To
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
                    @foreach($timerang as $key => $timerang)
                        <tr data-entry-id="{{ $timerang->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $timerang->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $timerang->from_time_stamp ?? '' }}
                            </td>
                            <td>
                                {{ $timerang->to_time_stamp ?? '' }}
                            </td>
                        
                            <td>
                                {{ $timerang->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.timerang.show', $timerang->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.timerang.edit', $timerang->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.timerang.destroy', $timerang->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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