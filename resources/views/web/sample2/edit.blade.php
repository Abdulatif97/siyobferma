@extends('layouts.app')
@php
    $title  = __('Sample');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sample.edit', $sample) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Sample</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sample.update', $sample->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('sample.form')

            </form>
        </div>
    </div>
@endsection
