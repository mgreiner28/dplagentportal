@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.agent-sales.title')</h3>
    
    {!! Form::model($agent_sale, ['method' => 'PUT', 'route' => ['admin.agent_sales.update', $agent_sale->id]]) !!}

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
                    {!! Form::label('client', 'Client', ['class' => 'control-label']) !!}
                    {!! Form::text('client', old('client'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('client'))
                        <p class="help-block">
                            {{ $errors->first('client') }}
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
                    {!! Form::label('buyer', 'Buyer', ['class' => 'control-label']) !!}
                    {!! Form::text('buyer', old('buyer'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('buyer'))
                        <p class="help-block">
                            {{ $errors->first('buyer') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('buyer_attorney', 'Buyer Attorney', ['class' => 'control-label']) !!}
                    {!! Form::text('buyer_attorney', old('buyer_attorney'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('buyer_attorney'))
                        <p class="help-block">
                            {{ $errors->first('buyer_attorney') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rep_agmt', 'Rep. Agmt', ['class' => 'control-label']) !!}
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
                    {!! Form::label('search_update', 'Search Update', ['class' => 'control-label']) !!}
                    {!! Form::text('search_update', old('search_update'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('search_update'))
                        <p class="help-block">
                            {{ $errors->first('search_update') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('survey_update', 'Survey Update', ['class' => 'control-label']) !!}
                    {!! Form::text('survey_update', old('survey_update'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('survey_update'))
                        <p class="help-block">
                            {{ $errors->first('survey_update') }}
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
                    {!! Form::label('sewer_water_compliance', 'Sewer/Water/Compliance', ['class' => 'control-label']) !!}
                    {!! Form::text('sewer_water_compliance', old('sewer_water_compliance'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sewer_water_compliance'))
                        <p class="help-block">
                            {{ $errors->first('sewer_water_compliance') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('proposed_deed', 'Proposed Deed', ['class' => 'control-label']) !!}
                    {!! Form::text('proposed_deed', old('proposed_deed'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('proposed_deed'))
                        <p class="help-block">
                            {{ $errors->first('proposed_deed') }}
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
                    {!! Form::label('seach', 'Seach, Taxes, Deed Sent to Buyer Attorney', ['class' => 'control-label']) !!}
                    {!! Form::text('seach', old('seach'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seach'))
                        <p class="help-block">
                            {{ $errors->first('seach') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mortgage_payoff_info', 'Mortgage Payoff Info', ['class' => 'control-label']) !!}
                    {!! Form::text('mortgage_payoff_info', old('mortgage_payoff_info'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mortgage_payoff_info'))
                        <p class="help-block">
                            {{ $errors->first('mortgage_payoff_info') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title_report_from_buyer', 'Title Report from Buyer', ['class' => 'control-label']) !!}
                    {!! Form::text('title_report_from_buyer', old('title_report_from_buyer'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title_report_from_buyer'))
                        <p class="help-block">
                            {{ $errors->first('title_report_from_buyer') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_docs_drafted', 'Closing Docs Drafted', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_docs_drafted', old('closing_docs_drafted'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_docs_drafted'))
                        <p class="help-block">
                            {{ $errors->first('closing_docs_drafted') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement', 'Closing Statement', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement', old('closing_statement'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement_to_buyer', 'Closing Statement to Buyer', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement_to_buyer', old('closing_statement_to_buyer'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement_to_buyer'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement_to_buyer') }}
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

