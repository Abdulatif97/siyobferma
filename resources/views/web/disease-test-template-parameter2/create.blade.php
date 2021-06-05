@extends('layouts.app')

@php
    $title  = 'Create: Disease Test Template Parameter';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseTestTemplateParameter.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Disease Test Template Parameter</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('diseaseTestTemplateParameter.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('disease-test-template-parameter.form')

            </form>
        </div>
    </div>
@endsection
