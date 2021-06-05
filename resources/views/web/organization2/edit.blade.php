@extends('layouts.app')
@php
    $title  = __('Organization');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('organization.edit', $organization) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Organization</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('organization.update', $organization->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('organization.form')

            </form>
        </div>
    </div>
@endsection
