@extends('layouts.app')
@php
    $title  = $user->name ?? 'Show User'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('user.show', $user) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show User</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $user->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $user->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $user->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Username:</strong>
                            {{ $user->username }}
                        </div>
                        <div class="form-group">
                            <strong>P Position Id:</strong>
                            {{ $user->p_position_id }}
                        </div>
                        <div class="form-group">
                            <strong>Person Id:</strong>
                            {{ $user->person_id }}
                        </div>

        </div>
    </div>
@endsection
