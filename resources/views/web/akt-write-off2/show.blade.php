@extends('layouts.app')
@php
    $title  = $aktWriteOff->name ?? 'Show Akt Write Off'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('aktWriteOff.show', $aktWriteOff) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Akt Write Off</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('aktWriteOff.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $aktWriteOff->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $aktWriteOff->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $aktWriteOff->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $aktWriteOff->code }}
                        </div>
                        <div class="form-group">
                            <strong>Sample Group Result Id:</strong>
                            {{ $aktWriteOff->sample_group_result_id }}
                        </div>
                        <div class="form-group">
                            <strong>Write Off Date:</strong>
                            {{ $aktWriteOff->write_off_date }}
                        </div>
                        <div class="form-group">
                            <strong>Note:</strong>
                            {{ $aktWriteOff->note }}
                        </div>
                        <div class="form-group">
                            <strong>Approved Person Id:</strong>
                            {{ $aktWriteOff->approved_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Approved Date:</strong>
                            {{ $aktWriteOff->approved_date }}
                        </div>

        </div>
    </div>
@endsection
