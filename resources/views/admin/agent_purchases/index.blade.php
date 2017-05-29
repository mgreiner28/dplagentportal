@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.agent-purchases.title')</h3>
    @can('agent_purchase_create')
    <p>
        <a href="{{ route('admin.agent_purchases.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
                
        @if(!is_null(Auth::getUser()->role_id) && config('quickadmin.can_see_all_records_role_id') == Auth::getUser()->role_id)
            @if(Session::get('AgentPurchase.filter', 'all') == 'my')
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
            <table class="table table-bordered table-striped {{ count($agent_purchases) > 0 ? 'datatable' : '' }} @can('agent_purchase_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('agent_purchase_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

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
                                @can('agent_purchase_delete')
                                    <td></td>
                                @endcan

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
@stop

@section('javascript') 
    <script>
        @can('agent_purchase_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.agent_purchases.mass_destroy') }}';
        @endcan

    </script>
@endsection