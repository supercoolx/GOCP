@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.financials.create") }}">
                {{ trans('global.add') }} {{ trans('financial') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bfinancialed table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                           Account Name
                        </th>
                        <th>
                          Payment Method
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
                    @if(!empty($financials))
                    @foreach($financials as $key => $financial)
                        <tr data-entry-id="{{ $financial->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $financial->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $financial->account_name ?? '' }}
                            </td>
                            <td>
                                {{ $financial->payment_method ?? '' }}
                            </td>
                            
                            <td>
                                {{ $financial->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.financials.show', $financial->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.financials.edit', $financial->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.financials.destroy', $financial->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
