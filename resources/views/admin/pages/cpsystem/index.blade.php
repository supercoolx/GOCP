@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.cpsystem.create") }}">
                {{ trans('global.add') }} {{ trans('cpsystem') }}
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
                        Type
                        </th>
                        <td>
                          Email
                        </td>
                         <td>
                          Access
                        </td>

                          <td>
                          Password
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
                    @foreach($cpsystem as $key => $cpsystem)
                        <tr data-entry-id="{{ $cpsystem->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $cpsystem->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $cpsystem->name ?? '' }}
                            </td>
                            <td>
                                {{ $cpsystem->Type ?? '' }}
                            </td>
                            <td>
                                {{ $cpsystem->email ?? '' }}
                            </td>
                             <td>
                                {{ $cpsystem->access ?? '' }}
                            </td>
                             <td>
                                {{ $cpsystem->password ?? '' }}
                            </td>
                          
                            <td>
                                {{ $cpsystem->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.cpsystem.show', $cpsystem->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.cpsystem.edit', $cpsystem->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.cpsystem.destroy', $cpsystem->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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