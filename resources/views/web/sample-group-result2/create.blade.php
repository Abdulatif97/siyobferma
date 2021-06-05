@extends('layouts.app')

@php
    $title  = 'Create: Sample Group Result';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sampleGroupResult.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Sample Group Result</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sampleGroupResult.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('sample-group-result.form')

            </form>
        </div>
    </div>
@endsection
