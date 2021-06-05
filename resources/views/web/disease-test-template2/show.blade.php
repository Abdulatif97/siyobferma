@extends('layouts.app')
@php
    $title  = $diseaseTestTemplate->name ?? 'Show Disease Test Template'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseTestTemplate.show', $diseaseTestTemplate) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Disease Test Template</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('diseaseTestTemplate.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $diseaseTestTemplate->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $diseaseTestTemplate->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $diseaseTestTemplate->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Disease Id:</strong>
                            {{ $diseaseTestTemplate->disease_id }}
                        </div>
                        <div class="form-group">
                            <strong>Item Category Id:</strong>
                            {{ $diseaseTestTemplate->item_category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Item Id:</strong>
                            {{ $diseaseTestTemplate->item_id }}
                        </div>
                        <div class="form-group">
                            <strong>Note:</strong>
                            {{ $diseaseTestTemplate->note }}
                        </div>

        </div>
    </div>
@endsection
