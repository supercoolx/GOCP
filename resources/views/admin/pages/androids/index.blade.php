@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.androids.create") }}">
                {{ trans('global.add') }} {{ trans('android') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bandroided table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                         Sim No.
                        </th>
                        <td>
                            Phone Number
                        </td>
                        <td>
                            Imei
                        </td>
                        <td>
                             Calling Plan
                        </td>
                        <td>
                            Cellular Companies ID
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
                    @if(!empty($androids))
                    @foreach($androids as $key => $android)
                        <tr data-entry-id="{{ $android->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $android->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $android->sim_no ?? '' }}
                            </td>
                            <td>
                                {{ $android->phone_number ?? '' }}
                            </td>
                            <td>
                                {{ $android->imei ?? '' }}
                            </td>
                            <td>
                                {{ $android->calling_plane_costing_id ?? '' }}
                            </td>
                            <td>
                                {{ $android->cellular_companies_id ?? '' }}
                            </td>
                            
                           <td>
                                {{ $android->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.androids.show', $android->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.androids.edit', $android->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.androids.destroy', $android->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('admin_manage')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    android: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection