@extends('layouts.app')
@php
    $title  = __('Disease Test Template Parameter');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseTestTemplateParameter.edit', $diseaseTestTemplateParameter) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Disease Test Template Parameter</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('diseaseTestTemplateParameter.update', $diseaseTestTemplateParameter->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('disease-test-template-parameter.form')

            </form>
        </div>
    </div>
@endsection
