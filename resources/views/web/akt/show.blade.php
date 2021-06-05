@extends('layouts.app')
@php
    $title  = $akt->name ?? 'Show Akt'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('akt.show', $akt) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Akt</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('akt.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $akt->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $akt->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $akt->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Application Id:</strong>
                            {{ $akt->application_id }}
                        </div>
                        <div class="form-group">
                            <strong>Test Possibility:</strong>
                            {{ $akt->test_possibility }}
                        </div>
                        <div class="form-group">
                            <strong>Aim:</strong>
                            {{ $akt->aim }}
                        </div>
                        <div class="form-group">
                            <strong>Sample Date:</strong>
                            {{ $akt->sample_date }}
                        </div>
                        <div class="form-group">
                            <strong>From Message:</strong>
                            {{ $akt->from_message }}
                        </div>
                        <div class="form-group">
                            <strong>Message Id:</strong>
                            {{ $akt->message_id }}
                        </div>
                        <div class="form-group">
                            <strong>About Docs:</strong>
                            {{ $akt->about_docs }}
                        </div>
                        <div class="form-group">
                            <strong>Packaging:</strong>
                            {{ $akt->packaging }}
                        </div>
                        <div class="form-group">
                            <strong>Measurement Id:</strong>
                            {{ $akt->measurement_id }}
                        </div>
                        <div class="form-group">
                            <strong>Measurement Value:</strong>
                            {{ $akt->measurement_value }}
                        </div>
                        <div class="form-group">
                            <strong>Volume Sample Looking:</strong>
                            {{ $akt->volume_sample_looking }}
                        </div>
                        <div class="form-group">
                            <strong>Volume Sample Test:</strong>
                            {{ $akt->volume_sample_test }}
                        </div>
                        <div class="form-group">
                            <strong>Item Country Soato Id:</strong>
                            {{ $akt->item_country_soato_id }}
                        </div>
                        <div class="form-group">
                            <strong>Note:</strong>
                            {{ $akt->note }}
                        </div>
                        <div class="form-group">
                            <strong>Additional Information:</strong>
                            {{ $akt->additional_information }}
                        </div>
                        <div class="form-group">
                            <strong>Sample Get Soato Id:</strong>
                            {{ $akt->sample_get_soato_id }}
                        </div>
                        <div class="form-group">
                            <strong>Akt Write Off Id:</strong>
                            {{ $akt->akt_write_off_id }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $akt->status }}
                        </div>

        </div>
    </div>
@endsection
