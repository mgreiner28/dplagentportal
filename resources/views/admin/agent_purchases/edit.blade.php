@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.agent-purchases.title')</h3>
    
    {!! Form::model($agent_purchase, ['method' => 'PUT', 'route' => ['admin.agent_purchases.update', $agent_purchase->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('file_number', 'File Number', ['class' => 'control-label']) !!}
                    {!! Form::text('file_number', old('file_number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('file_number'))
                        <p class="help-block">
                            {{ $errors->first('file_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('property', 'Property', ['class' => 'control-label']) !!}
                    {!! Form::text('property', old('property'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('property'))
                        <p class="help-block">
                            {{ $errors->first('property') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('city_town_village', 'City/Town/Village', ['class' => 'control-label']) !!}
                    {!! Form::text('city_town_village', old('city_town_village'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('city_town_village'))
                        <p class="help-block">
                            {{ $errors->first('city_town_village') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('county', 'County', ['class' => 'control-label']) !!}
                    {!! Form::text('county', old('county'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('county'))
                        <p class="help-block">
                            {{ $errors->first('county') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seller', 'Seller', ['class' => 'control-label']) !!}
                    {!! Form::text('seller', old('seller'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seller'))
                        <p class="help-block">
                            {{ $errors->first('seller') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seller_attorney', 'Seller Attorney', ['class' => 'control-label']) !!}
                    {!! Form::text('seller_attorney', old('seller_attorney'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seller_attorney'))
                        <p class="help-block">
                            {{ $errors->first('seller_attorney') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('bank_attorney', 'Bank Attorney', ['class' => 'control-label']) !!}
                    {!! Form::text('bank_attorney', old('bank_attorney'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('bank_attorney'))
                        <p class="help-block">
                            {{ $errors->first('bank_attorney') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rep_agmt', 'Rep. Agmt.', ['class' => 'control-label']) !!}
                    {!! Form::text('rep_agmt', old('rep_agmt'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rep_agmt'))
                        <p class="help-block">
                            {{ $errors->first('rep_agmt') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('approval_letter', 'Approval Letter', ['class' => 'control-label']) !!}
                    {!! Form::text('approval_letter', old('approval_letter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('approval_letter'))
                        <p class="help-block">
                            {{ $errors->first('approval_letter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seller_approval_letter', 'Seller Approval Letter', ['class' => 'control-label']) !!}
                    {!! Form::text('seller_approval_letter', old('seller_approval_letter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seller_approval_letter'))
                        <p class="help-block">
                            {{ $errors->first('seller_approval_letter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('search_update_received', 'Search Update Received', ['class' => 'control-label']) !!}
                    {!! Form::text('search_update_received', old('search_update_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('search_update_received'))
                        <p class="help-block">
                            {{ $errors->first('search_update_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('survey_update_received', 'Survey Update Received', ['class' => 'control-label']) !!}
                    {!! Form::text('survey_update_received', old('survey_update_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('survey_update_received'))
                        <p class="help-block">
                            {{ $errors->first('survey_update_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tax_receipts', 'Tax Receipts', ['class' => 'control-label']) !!}
                    {!! Form::text('tax_receipts', old('tax_receipts'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tax_receipts'))
                        <p class="help-block">
                            {{ $errors->first('tax_receipts') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sewer', 'Sewer/Water/Compliance Tax Certificates', ['class' => 'control-label']) !!}
                    {!! Form::text('sewer', old('sewer'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sewer'))
                        <p class="help-block">
                            {{ $errors->first('sewer') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pina', 'PINA', ['class' => 'control-label']) !!}
                    {!! Form::text('pina', old('pina'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pina'))
                        <p class="help-block">
                            {{ $errors->first('pina') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('proposed_deed_received', 'Proposed Deed Received', ['class' => 'control-label']) !!}
                    {!! Form::text('proposed_deed_received', old('proposed_deed_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('proposed_deed_received'))
                        <p class="help-block">
                            {{ $errors->first('proposed_deed_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mortgage_commitment', 'Mortgage Commitment', ['class' => 'control-label']) !!}
                    {!! Form::text('mortgage_commitment', old('mortgage_commitment'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mortgage_commitment'))
                        <p class="help-block">
                            {{ $errors->first('mortgage_commitment') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mc', 'MC Rate Lock Expiration', ['class' => 'control-label']) !!}
                    {!! Form::text('mc', old('mc'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mc'))
                        <p class="help-block">
                            {{ $errors->first('mc') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('survey_taxes', 'Survey, Taxes & Deed Sent to Bank Attorney', ['class' => 'control-label']) !!}
                    {!! Form::text('survey_taxes', old('survey_taxes'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('survey_taxes'))
                        <p class="help-block">
                            {{ $errors->first('survey_taxes') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ordered_title_insurance', 'Ordered Title Insurance', ['class' => 'control-label']) !!}
                    {!! Form::text('ordered_title_insurance', old('ordered_title_insurance'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ordered_title_insurance'))
                        <p class="help-block">
                            {{ $errors->first('ordered_title_insurance') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title_report_to_seller', 'Title Report To Seller', ['class' => 'control-label']) !!}
                    {!! Form::text('title_report_to_seller', old('title_report_to_seller'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title_report_to_seller'))
                        <p class="help-block">
                            {{ $errors->first('title_report_to_seller') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title_report_to_bank', 'Title Report to Bank', ['class' => 'control-label']) !!}
                    {!! Form::text('title_report_to_bank', old('title_report_to_bank'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title_report_to_bank'))
                        <p class="help-block">
                            {{ $errors->first('title_report_to_bank') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hoi_binder', 'HOI Binder', ['class' => 'control-label']) !!}
                    {!! Form::text('hoi_binder', old('hoi_binder'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hoi_binder'))
                        <p class="help-block">
                            {{ $errors->first('hoi_binder') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hoi_binder_receipt_to_bank', 'HOI Binder/Receipt to Bank', ['class' => 'control-label']) !!}
                    {!! Form::text('hoi_binder_receipt_to_bank', old('hoi_binder_receipt_to_bank'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hoi_binder_receipt_to_bank'))
                        <p class="help-block">
                            {{ $errors->first('hoi_binder_receipt_to_bank') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement_received', 'Closing Statement Received', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement_received', old('closing_statement_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement_received'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement_to_bank', 'Closing Statement to Bank', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement_to_bank', old('closing_statement_to_bank'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement_to_bank'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement_to_bank') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_date', 'Closing Date', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_date', old('closing_date'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_date'))
                        <p class="help-block">
                            {{ $errors->first('closing_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notes', 'Notes', ['class' => 'control-label']) !!}
                    {!! Form::textarea('notes', old('notes'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notes'))
                        <p class="help-block">
                            {{ $errors->first('notes') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('agent_id', 'Agent', ['class' => 'control-label']) !!}
                    {!! Form::select('agent_id', $agents, old('agent_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('agent_id'))
                        <p class="help-block">
                            {{ $errors->first('agent_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

