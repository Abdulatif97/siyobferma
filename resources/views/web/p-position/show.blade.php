@extends('layouts.app')
@php
    $title  = $pPosition->name ?? 'Show P Position'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('pPosition.show', $pPosition) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show P Position</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('pPosition.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $pPosition->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $pPosition->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $pPosition->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $pPosition->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $pPosition->description }}
                        </div>

        </div>
    </div>
@endsection
