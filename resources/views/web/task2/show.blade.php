@extends('layouts.app')
@php
    $title  = $task->name ?? 'Show Task'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('task.show', $task) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Task</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('task.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $task->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $task->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $task->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Referenced Table Id:</strong>
                            {{ $task->referenced_table_id }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $task->type }}
                        </div>
                        <div class="form-group">
                            <strong>Number:</strong>
                            {{ $task->number }}
                        </div>
                        <div class="form-group">
                            <strong>Gave Person Id:</strong>
                            {{ $task->gave_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Gave Person Department Id:</strong>
                            {{ $task->gave_person_department_id }}
                        </div>
                        <div class="form-group">
                            <strong>Gave Date:</strong>
                            {{ $task->gave_date }}
                        </div>
                        <div class="form-group">
                            <strong>Deadline:</strong>
                            {{ $task->deadline }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $task->description }}
                        </div>
                        <div class="form-group">
                            <strong>Attached Person Id:</strong>
                            {{ $task->attached_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Attached Person Department Id:</strong>
                            {{ $task->attached_person_department_id }}
                        </div>
                        <div class="form-group">
                            <strong>Approved Person Id:</strong>
                            {{ $task->approved_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Organization Id:</strong>
                            {{ $task->organization_id }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $task->status }}
                        </div>

        </div>
    </div>
@endsection
