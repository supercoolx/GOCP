@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.carrierinfos.create") }}">
                {{ trans('global.add') }} {{ trans('carrierinfo') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bcarrierinfoed table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                        Carrier Name
                        </th>
                        <th>
                            Carrier Address
                        </th>
                        <td>
                            Carrier City
                        </td>
                        <td>
                           Carrier Country
                        </td>
                       
                        <td>
                         Carrier  ZIP
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
                    @foreach($carrierinfos as $key => $carrierinfo)
                        <tr data-entry-id="{{ $carrierinfo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $carrierinfo->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $carrierinfo->carrier_name ?? '' }}
                            </td>
                            <td>
                                {{ $carrierinfo->carrier_address ?? '' }}
                            </td>
                            <td>
                                {{ $carrierinfo->carrier_city ?? '' }}
                            </td>
                            <td>
                                {{ $carrierinfo->carrier_country ?? '' }}
                            </td>
                             <td>
                                {{ $carrierinfo->carrier_ZIP ?? '' }}
                            </td>
                            
                           
                            <td>
                                {{ $carrierinfo->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.carrierinfos.show', $carrierinfo->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.carrierinfos.edit', $carrierinfo->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.carrierinfos.destroy', $carrierinfo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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