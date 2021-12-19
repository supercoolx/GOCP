@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <!-- <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.traffics.create") }}">
                {{ trans('global.add') }} {{ trans('traffic') }}
            </a>
        </div> -->
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-btrafficed table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                           Route Id
                        </th>
                       
                       
                        <td>
                           Route Sale Price Id
                        </td>
                         <td>
                          Call Attempts per hour
                        </td>
                        <td>
                           Call Attempts Completed
                        </td>
                        <td>
                           Average Call Duration
                        </td>
                        <td>
                           Range Time
                        </td>

                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($traffics as $key => $traffic)
                        <tr data-entry-id="{{ $traffic->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $traffic->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $traffic->route_id ?? '' }}
                            </td>
                          
                            <td>
                                {{ $traffic->call_attempts_per_hour ?? '' }}
                            </td>
                            
                              <td>
                                {{ $traffic->call_attempts_complete ?? '' }}
                            </td>

                              <td>
                                {{ $traffic->average_call_duration ?? '' }}
                            </td>

                              <td>
                                {{ $traffic->range_time ?? '' }}
                            </td>

                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.traffics.show', $traffic->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.traffics.edit', $traffic->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.traffics.destroy', $traffic->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    traffic: [[ 1, 'desc' ]],
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