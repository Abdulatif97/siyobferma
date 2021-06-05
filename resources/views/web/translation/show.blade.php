@extends('layouts.app')
@php
    $title  = $translation->name ?? 'Show Translation'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('translation.show', $translation) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Translation</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('translation.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $translation->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $translation->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $translation->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Referenced Column Id:</strong>
                            {{ $translation->referenced_column_id }}
                        </div>
                        <div class="form-group">
                            <strong>Lang Code:</strong>
                            {{ $translation->lang_code }}
                        </div>
                        <div class="form-group">
                            <strong>Translation:</strong>
                            {{ $translation->translation }}
                        </div>

        </div>
    </div>
@endsection
