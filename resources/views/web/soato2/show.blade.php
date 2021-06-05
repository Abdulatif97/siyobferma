@extends('layouts.app')
@php
    $title  = $soato->name ?? 'Show Soato'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('soato.show', $soato) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Soato</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('soato.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $soato->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $soato->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $soato->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $soato->name }}
                        </div>
                        <div class="form-group">
                            <strong>Parent Id:</strong>
                            {{ $soato->parent_id }}
                        </div>
                        <div class="form-group">
                            <strong>Soato Type:</strong>
                            {{ $soato->soato_type }}
                        </div>

        </div>
    </div>
@endsection
