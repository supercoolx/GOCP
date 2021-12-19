@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.callingplan.create") }}">
                {{ trans('global.add') }} {{ trans('callingplan') }}
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
                        Calling Plan Cost
                        </th>
                        <td>
                          Usa Currency
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
                    @foreach($callingplan as $key => $callingplan)
                        <tr data-entry-id="{{ $callingplan->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $callingplan->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $callingplan->calling_phone_id ?? '' }}
                            </td>
                            <td>
                                {{ $callingplan->calling_plan_cost ?? '' }}
                            </td>
                            <td>
                                {{ $callingplan->usa_currency ?? '' }}
                            </td>
                          
                            <td>
                                {{ $accountantinfo->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.callingplan.show', $callingplan->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.callingplan.edit', $callingplan->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.callingplan.destroy', $callingplan->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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