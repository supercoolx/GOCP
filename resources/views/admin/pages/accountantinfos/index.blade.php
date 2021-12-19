@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.accountantinfos.create") }}">
                {{ trans('global.add') }} {{ trans('accountantinfo') }}
            </a>
        </div>
    </div>

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
                    @foreach($accountantinfos as $key => $accountantinfo)
                        <tr data-entry-id="{{ $accountantinfo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $accountantinfo->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $accountantinfo->accountant_first_name ?? '' }}
                            </td>
                            <td>
                                {{ $accountantinfo->accountant_middle_name ?? '' }}
                            </td>
                            <td>
                                {{ $accountantinfo->accountant_last_name ?? '' }}
                            </td>
                            <td>
                                {{ $accountantinfo->accountant_cell_number ?? '' }}
                            </td>
                             <td>
                                {{ $accountantinfo->accountant_email ?? '' }}
                            </td>
                            <td>
                                {{ $accountantinfo->accountant_skype ?? '' }}
                            </td>
                            <td>
                                {{ $accountantinfo->accountant_whatsapp ?? '' }}
                            </td>
                           
                            <td>
                                {{ $accountantinfo->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.accountantinfos.show', $accountantinfo->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.accountantinfos.edit', $accountantinfo->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.accountantinfos.destroy', $accountantinfo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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