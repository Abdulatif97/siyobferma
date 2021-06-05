@extends('layouts.app')
@php
    $title  = $measurement->name ?? 'Show Measurement'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('measurement.show', $measurement) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Measurement</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('measurement.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $measurement->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $measurement->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $measurement->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $measurement->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $measurement->description }}
                        </div>
                        <div class="form-group">
                            <strong>Measurement Value Check Regex:</strong>
                            {{ $measurement->measurement_value_check_regex }}
                        </div>
                        <div class="form-group">
                            <strong>Suggested Values:</strong>
                            {{ $measurement->suggested_values }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $measurement->type }}
                        </div>

        </div>
    </div>
@endsection
