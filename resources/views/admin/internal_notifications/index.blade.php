@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.internal-notifications.title')</h3>
    @can('internal_notification_create')
    <p>
        <a href="{{ route('admin.internal_notifications.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($internal_notifications) > 0 ? 'datatable' : '' }} @can('internal_notification_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('internal_notification_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.internal-notifications.fields.text')</th>
                        <th>@lang('quickadmin.internal-notifications.fields.link')</th>
                        <th>@lang('quickadmin.internal-notifications.fields.users')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($internal_notifications) > 0)
                        @foreach ($internal_notifications as $internal_notification)
                            <tr data-entry-id="{{ $internal_notification->id }}">
                                @can('internal_notification_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $internal_notification->text }}</td>
                                <td>{{ $internal_notification->link }}</td>
                                <td>
                                    @foreach ($internal_notification->users as $singleUsers)
                                        <span class="label label-info label-many">{{ $singleUsers->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @can('internal_notification_view')
                                    <a href="{{ route('admin.internal_notifications.show',[$internal_notification->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('internal_notification_edit')
                                    <a href="{{ route('admin.internal_notifications.edit',[$internal_notification->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('internal_notification_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.internal_notifications.destroy', $internal_notification->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('internal_notification_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.internal_notifications.mass_destroy') }}';
        @endcan

    </script>
@endsection