@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.buyerinfos.create") }}">
                {{ trans('global.add') }} {{ trans('buyerinfo') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bbuyerinfoed table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                        First Name
                        </th>
                        <th>
                            Middle Name
                        </th>
                        <td>
                            Last Name
                        </td>
                        <td>
                           Cell Number
                        </td>
                       
                        <td>
                           Email
                        </td>
                          <td>
                           Skype
                        </td>
                        <td>
                          Whatsapp
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
                    @foreach($buyerinfos as $key => $buyerinfo)
                        <tr data-entry-id="{{ $buyerinfo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $buyerinfo->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $buyerinfo->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $buyerinfo->middle_name ?? '' }}
                            </td>
                            <td>
                                {{ $buyerinfo->last_name ?? '' }}
                            </td>
                            <td>
                                {{ $buyerinfo->cell_number ?? '' }}
                            </td>
                             <td>
                                {{ $buyerinfo->email ?? '' }}
                            </td>
                            <td>
                                {{ $buyerinfo->skype ?? '' }}
                            </td>
                            <td>
                                {{ $buyerinfo->whatsapp ?? '' }}
                            </td>
                           
                            <td>
                                {{ $buyerinfo->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.buyerinfos.show', $buyerinfo->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.buyerinfos.edit', $buyerinfo->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.buyerinfos.destroy', $buyerinfo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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