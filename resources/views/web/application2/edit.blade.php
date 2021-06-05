@extends('layouts.app')
@php
    $title  = __('Application');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('application.edit', $application) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Application</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('application.update', $application->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('application.form')

            </form>
        </div>
    </div>
@endsection
