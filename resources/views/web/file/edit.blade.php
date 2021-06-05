@extends('layouts.app')
@php
    $title  = __('File');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('file.edit', $file) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update File</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('file.update', $file->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('file.form')

            </form>
        </div>
    </div>
@endsection
