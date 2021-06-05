@extends('layouts.app')
@php
    $title  = $file->name ?? 'Show File'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('file.show', $file) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show File</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('file.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $file->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $file->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $file->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Referenced Column Id:</strong>
                            {{ $file->referenced_column_id }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $file->type }}
                        </div>
                        <div class="form-group">
                            <strong>Original Name:</strong>
                            {{ $file->original_name }}
                        </div>
                        <div class="form-group">
                            <strong>Generated Name:</strong>
                            {{ $file->generated_name }}
                        </div>
                        <div class="form-group">
                            <strong>File Extension:</strong>
                            {{ $file->file_extension }}
                        </div>

        </div>
    </div>
@endsection
