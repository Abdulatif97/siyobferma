@extends('layouts.app')

@php
    $title  = 'Create: Measurement';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('measurement.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Measurement</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('measurement.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('measurement.form')

            </form>
        </div>
    </div>
@endsection
