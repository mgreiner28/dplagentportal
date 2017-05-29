@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.agent-sales.title')</h3>
    @can('agent_sale_create')
    <p>
        <a href="{{ route('admin.agent_sales.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
                
        @if(!is_null(Auth::getUser()->role_id) && config('quickadmin.can_see_all_records_role_id') == Auth::getUser()->role_id)
            @if(Session::get('AgentSale.filter', 'all') == 'my')
                <a href="?filter=all" class="btn btn-default">Show all records</a>
            @else
                <a href="?filter=my" class="btn btn-default">Filter my records</a>
            @endif
        @endif
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($agent_sales) > 0 ? 'datatable' : '' }} @can('agent_sale_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('agent_sale_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.agent-sales.fields.file-number')</th>
                        <th>@lang('quickadmin.agent-sales.fields.client')</th>
                        <th>@lang('quickadmin.agent-sales.fields.property')</th>
                        <th>@lang('quickadmin.agent-sales.fields.city-town-village')</th>
                        <th>@lang('quickadmin.agent-sales.fields.county')</th>
                        <th>@lang('quickadmin.agent-sales.fields.buyer')</th>
                        <th>@lang('quickadmin.agent-sales.fields.buyer-attorney')</th>
                        <th>@lang('quickadmin.agent-sales.fields.rep-agmt')</th>
                        <th>@lang('quickadmin.agent-sales.fields.approval-letter')</th>
                        <th>@lang('quickadmin.agent-sales.fields.search-update')</th>
                        <th>@lang('quickadmin.agent-sales.fields.survey-update')</th>
                        <th>@lang('quickadmin.agent-sales.fields.tax-receipts')</th>
                        <th>@lang('quickadmin.agent-sales.fields.sewer-water-compliance')</th>
                        <th>@lang('quickadmin.agent-sales.fields.proposed-deed')</th>
                        <th>@lang('quickadmin.agent-sales.fields.mortgage-commitment')</th>
                        <th>@lang('quickadmin.agent-sales.fields.seach')</th>
                        <th>@lang('quickadmin.agent-sales.fields.mortgage-payoff-info')</th>
                        <th>@lang('quickadmin.agent-sales.fields.title-report-from-buyer')</th>
                        <th>@lang('quickadmin.agent-sales.fields.closing-docs-drafted')</th>
                        <th>@lang('quickadmin.agent-sales.fields.closing-statement')</th>
                        <th>@lang('quickadmin.agent-sales.fields.closing-statement-to-buyer')</th>
                        <th>@lang('quickadmin.agent-sales.fields.closing-date')</th>
                        <th>@lang('quickadmin.agent-sales.fields.notes')</th>
                        <th>@lang('quickadmin.agent-sales.fields.agent')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($agent_sales) > 0)
                        @foreach ($agent_sales as $agent_sale)
                            <tr data-entry-id="{{ $agent_sale->id }}">
                                @can('agent_sale_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $agent_sale->file_number }}</td>
                                <td>{{ $agent_sale->client }}</td>
                                <td>{{ $agent_sale->property }}</td>
                                <td>{{ $agent_sale->city_town_village }}</td>
                                <td>{{ $agent_sale->county }}</td>
                                <td>{{ $agent_sale->buyer }}</td>
                                <td>{{ $agent_sale->buyer_attorney }}</td>
                                <td>{{ $agent_sale->rep_agmt }}</td>
                                <td>{{ $agent_sale->approval_letter }}</td>
                                <td>{{ $agent_sale->search_update }}</td>
                                <td>{{ $agent_sale->survey_update }}</td>
                                <td>{{ $agent_sale->tax_receipts }}</td>
                                <td>{{ $agent_sale->sewer_water_compliance }}</td>
                                <td>{{ $agent_sale->proposed_deed }}</td>
                                <td>{{ $agent_sale->mortgage_commitment }}</td>
                                <td>{{ $agent_sale->seach }}</td>
                                <td>{{ $agent_sale->mortgage_payoff_info }}</td>
                                <td>{{ $agent_sale->title_report_from_buyer }}</td>
                                <td>{{ $agent_sale->closing_docs_drafted }}</td>
                                <td>{{ $agent_sale->closing_statement }}</td>
                                <td>{{ $agent_sale->closing_statement_to_buyer }}</td>
                                <td>{{ $agent_sale->closing_date }}</td>
                                <td>{!! $agent_sale->notes !!}</td>
                                <td>{{ $agent_sale->agent->name or '' }}</td>
                                <td>
                                    @can('agent_sale_view')
                                    <a href="{{ route('admin.agent_sales.show',[$agent_sale->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('agent_sale_edit')
                                    <a href="{{ route('admin.agent_sales.edit',[$agent_sale->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('agent_sale_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.agent_sales.destroy', $agent_sale->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="28">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('agent_sale_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.agent_sales.mass_destroy') }}';
        @endcan

    </script>
@endsection