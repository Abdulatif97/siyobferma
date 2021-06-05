@extends('layouts.app')

@php
    $title  = 'Create: Organization';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('organization.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Organization</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('organization.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('organization.form')

            </form>
        </div>
    </div>
@endsection
