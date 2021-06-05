@extends('layouts.app')
@php
    $title  = __('Disease Test Template');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseTestTemplate.edit', $diseaseTestTemplate) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Disease Test Template</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('diseaseTestTemplate.update', $diseaseTestTemplate->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('disease-test-template.form')

            </form>
        </div>
    </div>
@endsection
