@extends('layouts.app')

@php
    $title  = 'Create: File';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('file.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create File</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('file.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('file.form')

            </form>
        </div>
    </div>
@endsection
