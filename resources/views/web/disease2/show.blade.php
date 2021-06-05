@extends('layouts.app')
@php
    $title  = $disease->name ?? 'Show Disease'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('disease.show', $disease) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Disease</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('disease.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $disease->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $disease->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $disease->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $disease->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $disease->description }}
                        </div>
                        <div class="form-group">
                            <strong>Attachments:</strong>
                            {{ $disease->attachments }}
                        </div>
                        <div class="form-group">
                            <strong>Disease Category Id:</strong>
                            {{ $disease->disease_category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $disease->type }}
                        </div>

        </div>
    </div>
@endsection
