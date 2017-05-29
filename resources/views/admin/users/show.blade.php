@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.users.fields.name')</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.email')</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.role')</th>
                            <td>{{ $user->role->title or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#internalnotifications" aria-controls="internalnotifications" role="tab" data-toggle="tab">Notifications</a></li>
<li role="presentation" class=""><a href="#agentsales" aria-controls="agentsales" role="tab" data-toggle="tab">Sales</a></li>
<li role="presentation" class=""><a href="#agentpurchases" aria-controls="agentpurchases" role="tab" data-toggle="tab">Purchases</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="internalnotifications">
<table class="table table-bordered table-striped {{ count($internal_notifications) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
<div role="tabpanel" class="tab-pane " id="agentsales">
<table class="table table-bordered table-striped {{ count($agent_sales) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
<div role="tabpanel" class="tab-pane " id="agentpurchases">
<table class="table table-bordered table-striped {{ count($agent_purchases) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.agent-purchases.fields.file-number')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.property')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.city-town-village')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.county')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.seller')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.seller-attorney')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.bank-attorney')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.rep-agmt')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.approval-letter')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.seller-approval-letter')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.search-update-received')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.survey-update-received')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.tax-receipts')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.sewer')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.pina')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.proposed-deed-received')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.mortgage-commitment')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.mc')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.survey-taxes')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.ordered-title-insurance')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.title-report-to-seller')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.title-report-to-bank')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.hoi-binder')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.hoi-binder-receipt-to-bank')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.closing-statement-received')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.closing-statement-to-bank')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.closing-date')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.notes')</th>
                        <th>@lang('quickadmin.agent-purchases.fields.agent')</th>
                        <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @if (count($agent_purchases) > 0)
            @foreach ($agent_purchases as $agent_purchase)
                <tr data-entry-id="{{ $agent_purchase->id }}">
                    <td>{{ $agent_purchase->file_number }}</td>
                                <td>{{ $agent_purchase->property }}</td>
                                <td>{{ $agent_purchase->city_town_village }}</td>
                                <td>{{ $agent_purchase->county }}</td>
                                <td>{{ $agent_purchase->seller }}</td>
                                <td>{{ $agent_purchase->seller_attorney }}</td>
                                <td>{{ $agent_purchase->bank_attorney }}</td>
                                <td>{{ $agent_purchase->rep_agmt }}</td>
                                <td>{{ $agent_purchase->approval_letter }}</td>
                                <td>{{ $agent_purchase->seller_approval_letter }}</td>
                                <td>{{ $agent_purchase->search_update_received }}</td>
                                <td>{{ $agent_purchase->survey_update_received }}</td>
                                <td>{{ $agent_purchase->tax_receipts }}</td>
                                <td>{{ $agent_purchase->sewer }}</td>
                                <td>{{ $agent_purchase->pina }}</td>
                                <td>{{ $agent_purchase->proposed_deed_received }}</td>
                                <td>{{ $agent_purchase->mortgage_commitment }}</td>
                                <td>{{ $agent_purchase->mc }}</td>
                                <td>{{ $agent_purchase->survey_taxes }}</td>
                                <td>{{ $agent_purchase->ordered_title_insurance }}</td>
                                <td>{{ $agent_purchase->title_report_to_seller }}</td>
                                <td>{{ $agent_purchase->title_report_to_bank }}</td>
                                <td>{{ $agent_purchase->hoi_binder }}</td>
                                <td>{{ $agent_purchase->hoi_binder_receipt_to_bank }}</td>
                                <td>{{ $agent_purchase->closing_statement_received }}</td>
                                <td>{{ $agent_purchase->closing_statement_to_bank }}</td>
                                <td>{{ $agent_purchase->closing_date }}</td>
                                <td>{!! $agent_purchase->notes !!}</td>
                                <td>{{ $agent_purchase->agent->name or '' }}</td>
                                <td>
                                    @can('agent_purchase_view')
                                    <a href="{{ route('admin.agent_purchases.show',[$agent_purchase->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('agent_purchase_edit')
                                    <a href="{{ route('admin.agent_purchases.edit',[$agent_purchase->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('agent_purchase_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.agent_purchases.destroy', $agent_purchase->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="33">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop