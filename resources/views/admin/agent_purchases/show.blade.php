@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.agent-purchases.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.file-number')</th>
                            <td>{{ $agent_purchase->file_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.property')</th>
                            <td>{{ $agent_purchase->property }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.city-town-village')</th>
                            <td>{{ $agent_purchase->city_town_village }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.county')</th>
                            <td>{{ $agent_purchase->county }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.seller')</th>
                            <td>{{ $agent_purchase->seller }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.seller-attorney')</th>
                            <td>{{ $agent_purchase->seller_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.bank-attorney')</th>
                            <td>{{ $agent_purchase->bank_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.rep-agmt')</th>
                            <td>{{ $agent_purchase->rep_agmt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.approval-letter')</th>
                            <td>{{ $agent_purchase->approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.seller-approval-letter')</th>
                            <td>{{ $agent_purchase->seller_approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.search-update-received')</th>
                            <td>{{ $agent_purchase->search_update_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.survey-update-received')</th>
                            <td>{{ $agent_purchase->survey_update_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.tax-receipts')</th>
                            <td>{{ $agent_purchase->tax_receipts }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.sewer')</th>
                            <td>{{ $agent_purchase->sewer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.pina')</th>
                            <td>{{ $agent_purchase->pina }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.proposed-deed-received')</th>
                            <td>{{ $agent_purchase->proposed_deed_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.mortgage-commitment')</th>
                            <td>{{ $agent_purchase->mortgage_commitment }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.mc')</th>
                            <td>{{ $agent_purchase->mc }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.survey-taxes')</th>
                            <td>{{ $agent_purchase->survey_taxes }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.ordered-title-insurance')</th>
                            <td>{{ $agent_purchase->ordered_title_insurance }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.title-report-to-seller')</th>
                            <td>{{ $agent_purchase->title_report_to_seller }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.title-report-to-bank')</th>
                            <td>{{ $agent_purchase->title_report_to_bank }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.hoi-binder')</th>
                            <td>{{ $agent_purchase->hoi_binder }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.hoi-binder-receipt-to-bank')</th>
                            <td>{{ $agent_purchase->hoi_binder_receipt_to_bank }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.closing-statement-received')</th>
                            <td>{{ $agent_purchase->closing_statement_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.closing-statement-to-bank')</th>
                            <td>{{ $agent_purchase->closing_statement_to_bank }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.closing-date')</th>
                            <td>{{ $agent_purchase->closing_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.notes')</th>
                            <td>{!! $agent_purchase->notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.agent-purchases.fields.agent')</th>
                            <td>{{ $agent_purchase->agent->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.agent_purchases.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop