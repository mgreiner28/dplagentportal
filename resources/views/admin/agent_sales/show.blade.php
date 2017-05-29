@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.agent-sales.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.file-number')</th>
                            <td>{{ $agent_sale->file_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.client')</th>
                            <td>{{ $agent_sale->client }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.property')</th>
                            <td>{{ $agent_sale->property }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.city-town-village')</th>
                            <td>{{ $agent_sale->city_town_village }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.county')</th>
                            <td>{{ $agent_sale->county }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.buyer')</th>
                            <td>{{ $agent_sale->buyer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.buyer-attorney')</th>
                            <td>{{ $agent_sale->buyer_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.rep-agmt')</th>
                            <td>{{ $agent_sale->rep_agmt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.approval-letter')</th>
                            <td>{{ $agent_sale->approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.search-update')</th>
                            <td>{{ $agent_sale->search_update }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.survey-update')</th>
                            <td>{{ $agent_sale->survey_update }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.tax-receipts')</th>
                            <td>{{ $agent_sale->tax_receipts }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.sewer-water-compliance')</th>
                            <td>{{ $agent_sale->sewer_water_compliance }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.proposed-deed')</th>
                            <td>{{ $agent_sale->proposed_deed }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.mortgage-commitment')</th>
                            <td>{{ $agent_sale->mortgage_commitment }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.seach')</th>
                            <td>{{ $agent_sale->seach }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.mortgage-payoff-info')</th>
                            <td>{{ $agent_sale->mortgage_payoff_info }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.title-report-from-buyer')</th>
                            <td>{{ $agent_sale->title_report_from_buyer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.closing-docs-drafted')</th>
                            <td>{{ $agent_sale->closing_docs_drafted }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.closing-statement')</th>
                            <td>{{ $agent_sale->closing_statement }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.closing-statement-to-buyer')</th>
                            <td>{{ $agent_sale->closing_statement_to_buyer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.closing-date')</th>
                            <td>{{ $agent_sale->closing_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.notes')</th>
                            <td>{!! $agent_sale->notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-sales.fields.agent')</th>
                            <td>{{ $agent_sale->agent->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.agent_sales.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop