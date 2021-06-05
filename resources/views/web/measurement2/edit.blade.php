@extends('layouts.app')
@php
    $title  = __('Measurement');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('measurement.edit', $measurement) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Measurement</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('measurement.update', $measurement->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('measurement.form')

            </form>
        </div>
    </div>
@endsection
