@extends('layouts.app')
@php
    $title  = $sampleGroupResult->name ?? 'Show Sample Group Result'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sampleGroupResult.show', $sampleGroupResult) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Sample Group Result</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('sampleGroupResult.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $sampleGroupResult->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $sampleGroupResult->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $sampleGroupResult->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $sampleGroupResult->code }}
                        </div>
                        <div class="form-group">
                            <strong>Sample Group Id:</strong>
                            {{ $sampleGroupResult->sample_group_id }}
                        </div>
                        <div class="form-group">
                            <strong>Temperature:</strong>
                            {{ $sampleGroupResult->temperature }}
                        </div>
                        <div class="form-group">
                            <strong>Hum:</strong>
                            {{ $sampleGroupResult->hum }}
                        </div>
                        <div class="form-group">
                            <strong>Additional Text:</strong>
                            {{ $sampleGroupResult->additional_text }}
                        </div>
                        <div class="form-group">
                            <strong>End Date:</strong>
                            {{ $sampleGroupResult->end_date }}
                        </div>
                        <div class="form-group">
                            <strong>Note:</strong>
                            {{ $sampleGroupResult->note }}
                        </div>
                        <div class="form-group">
                            <strong>Approved Person Id:</strong>
                            {{ $sampleGroupResult->approved_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Approved Date:</strong>
                            {{ $sampleGroupResult->approved_date }}
                        </div>
                        <div class="form-group">
                            <strong>Attachments:</strong>
                            {{ $sampleGroupResult->attachments }}
                        </div>

        </div>
    </div>
@endsection
