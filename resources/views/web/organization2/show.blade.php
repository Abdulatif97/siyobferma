@extends('layouts.app')
@php
    $title  = $organization->name ?? 'Show Organization'
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('organization.show', $organization) }}
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">Show Organization</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('organization.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $organization->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $organization->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted:</strong>
                            {{ $organization->deleted }}
                        </div>
                        <div class="form-group">
                            <strong>Inn:</strong>
                            {{ $organization->inn }}
                        </div>
                        <div class="form-group">
                            <strong>Full Name:</strong>
                            {{ $organization->full_name }}
                        </div>
                        <div class="form-group">
                            <strong>Date State Reg:</strong>
                            {{ $organization->date_state_reg }}
                        </div>
                        <div class="form-group">
                            <strong>Number State Reg:</strong>
                            {{ $organization->number_state_reg }}
                        </div>
                        <div class="form-group">
                            <strong>Legal Address Soato Id:</strong>
                            {{ $organization->legal_address_soato_id }}
                        </div>
                        <div class="form-group">
                            <strong>Legal Address Additional:</strong>
                            {{ $organization->legal_address_additional }}
                        </div>
                        <div class="form-group">
                            <strong>Opf:</strong>
                            {{ $organization->opf }}
                        </div>
                        <div class="form-group">
                            <strong>Oked:</strong>
                            {{ $organization->oked }}
                        </div>
                        <div class="form-group">
                            <strong>Coogu:</strong>
                            {{ $organization->coogu }}
                        </div>
                        <div class="form-group">
                            <strong>Activity Status:</strong>
                            {{ $organization->activity_status }}
                        </div>
                        <div class="form-group">
                            <strong>Pcmp:</strong>
                            {{ $organization->pcmp }}
                        </div>
                        <div class="form-group">
                            <strong>Email Address:</strong>
                            {{ $organization->email_address }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $organization->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Is Client:</strong>
                            {{ $organization->is_client }}
                        </div>

        </div>
    </div>
@endsection
