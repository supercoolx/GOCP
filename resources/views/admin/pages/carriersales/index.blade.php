@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.carriersales.create") }}">
                {{ trans('global.add') }} {{ trans('carriersale') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bcarriersaleed table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                        User Name
                        </th>
                        <th>
                            Password
                        </th>
                        <td>
                            First Name
                        </td>
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
                    @foreach($carriersales as $key => $carriersale)
                        <tr data-entry-id="{{ $carriersale->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $carriersale->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $carriersale->user_name ?? '' }}
                            </td>
                            <td>
                                {{ $carriersale->password ?? '' }}
                            </td>
                            <td>
                                {{ $carriersale->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $carriersale->last_name ?? '' }}
                            </td>
                             <td>
                                {{ $carriersale->cell_number ?? '' }}
                            </td>
                            <td>
                                {{ $carriersale->email ?? '' }}
                            </td>
                            <td>
                                {{ $carriersale->skype ?? '' }}
                            </td>
                           <td>
                                {{ $carriersale->whatsapp ?? '' }}
                            </td>
                            <td>
                                {{ $carriersale->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.carriersales.show', $carriersale->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.carriersales.edit', $carriersale->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.carriersales.destroy', $carriersale->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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