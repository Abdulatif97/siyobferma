@extends('layouts.app')
@php
    $title  = $diseaseTestTemplateParameter->name ?? 'Show Disease Test Template Parameter'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseTestTemplateParameter.show', $diseaseTestTemplateParameter) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Disease Test Template Parameter</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('diseaseTestTemplateParameter.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $diseaseTestTemplateParameter->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $diseaseTestTemplateParameter->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $diseaseTestTemplateParameter->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $diseaseTestTemplateParameter->title }}
                        </div>
                        <div class="form-group">
                            <strong>Disease Test Template Id:</strong>
                            {{ $diseaseTestTemplateParameter->disease_test_template_id }}
                        </div>
                        <div class="form-group">
                            <strong>Measurement Id:</strong>
                            {{ $diseaseTestTemplateParameter->measurement_id }}
                        </div>
                        <div class="form-group">
                            <strong>Min Value:</strong>
                            {{ $diseaseTestTemplateParameter->min_value }}
                        </div>
                        <div class="form-group">
                            <strong>Max Value:</strong>
                            {{ $diseaseTestTemplateParameter->max_value }}
                        </div>
                        <div class="form-group">
                            <strong>Fact Value Check Regex:</strong>
                            {{ $diseaseTestTemplateParameter->fact_value_check_regex }}
                        </div>
                        <div class="form-group">
                            <strong>Suggested Values:</strong>
                            {{ $diseaseTestTemplateParameter->suggested_values }}
                        </div>

        </div>
    </div>
@endsection
