@extends('layouts.app')
@php
    $title  = $normativeDoc->name ?? 'Show Normative Doc'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('normativeDoc.show', $normativeDoc) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Normative Doc</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('normativeDoc.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $normativeDoc->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $normativeDoc->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $normativeDoc->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $normativeDoc->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $normativeDoc->description }}
                        </div>
                        <div class="form-group">
                            <strong>Attachments:</strong>
                            {{ $normativeDoc->attachments }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $normativeDoc->type }}
                        </div>
                        <div class="form-group">
                            <strong>Item Category Id:</strong>
                            {{ $normativeDoc->item_category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Item Id:</strong>
                            {{ $normativeDoc->item_id }}
                        </div>

        </div>
    </div>
@endsection
