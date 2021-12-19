@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
       <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.whatsapps.create") }}">
                {{ trans('global.add') }} {{ trans('whatsapp') }}
            </a>
        </div> 
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bwhatsapped table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                           Whatsapp Number
                        </th>
                       <td>
                           Phone Number
                        </td>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($whatsapps as $key => $whatsapp)
                        <tr data-entry-id="{{ $whatsapp->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $whatsapp->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $whatsapp->whatsapp_number ?? '' }}
                            </td>
                          
                            <td>
                                {{ $whatsapp->phone_number ?? '' }}
                            </td>
                            

                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.whatsapps.show', $whatsapp->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.whatsapps.edit', $whatsapp->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.whatsapps.destroy', $whatsapp->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

