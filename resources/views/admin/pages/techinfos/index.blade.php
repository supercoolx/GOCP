@extends('layouts.admin')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.techinfos.create") }}">
                {{ trans('global.add') }} {{ trans('techinfo') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-btechinfoed table-striped table-hover datatable datatable-User">
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
                    @if(!empty($techinfo))
                    @foreach($techinfos as $key => $techinfo)
                        <tr data-entry-id="{{ $techinfo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $techinfo->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $techinfo->tech_first_name ?? '' }}
                            </td>
                            <td>
                                {{ $techinfo->tech_middle_name ?? '' }}
                            </td>
                            <td>
                                {{ $techinfo->tech_last_name ?? '' }}
                            </td>
                            <td>
                                {{ $techinfo->tech_cell_number ?? '' }}
                            </td>
                             <td>
                                {{ $techinfo->tech_email ?? '' }}
                            </td>
                            <td>
                                {{ $techinfo->tech_skype ?? '' }}
                            </td>
                            <td>
                                {{ $techinfo->tech_whatsapp ?? '' }}
                            </td>
                           
                            <td>
                                {{ $techinfo->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.techinfos.show', $techinfo->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.techinfos.edit', $techinfo->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.techinfos.destroy', $techinfo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    techinfo: [[ 1, 'desc' ]],
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