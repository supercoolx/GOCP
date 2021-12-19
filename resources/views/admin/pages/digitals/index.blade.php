@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.digitals.create") }}">
                {{ trans('global.add') }} {{ trans('digital') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bdigitaled table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                        Transfer Name
                        </th>
                        <th>
                            Account
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
                    @foreach($digitals as $key => $digital)
                        <tr data-entry-id="{{ $digital->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $digital->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $digital->trasnfer_name ?? '' }}
                            </td>
                            <td>
                                {{ $digital->account ?? '' }}
                            </td>
                            
                           
                            <td>
                                {{ $digital->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.digitals.show', $digital->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.digitals.edit', $digital->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.digitals.destroy', $digital->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
