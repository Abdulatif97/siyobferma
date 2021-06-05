@extends('layouts.app')

@php
    $title  = 'Create: Disease Test Template';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseTestTemplate.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Disease Test Template</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('diseaseTestTemplate.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('disease-test-template.form')

            </form>
        </div>
    </div>
@endsection
