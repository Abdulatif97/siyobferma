@extends('layouts.app')

@php
    $title  = 'Create: Sample';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sample.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Sample</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sample.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('sample.form')

            </form>
        </div>
    </div>
@endsection
