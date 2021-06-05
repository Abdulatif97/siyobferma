@extends('layouts.app')

@php
    $title  = 'Create: Sample Group';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sampleGroup.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Sample Group</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sampleGroup.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('sample-group.form')

            </form>
        </div>
    </div>
@endsection
