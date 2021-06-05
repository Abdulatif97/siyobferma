@extends('layouts.app')
@php
    $title  = $handbk->name ?? 'Show Handbk'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('handbk.show', $handbk) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Handbk</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('handbk.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $handbk->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $handbk->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $handbk->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Abbr:</strong>
                            {{ $handbk->abbr }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $handbk->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $handbk->description }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $handbk->type }}
                        </div>

        </div>
    </div>
@endsection
