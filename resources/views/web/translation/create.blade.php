@extends('layouts.app')

@php
    $title  = 'Create: Translation';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('translation.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Translation</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('translation.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('translation.form')

            </form>
        </div>
    </div>
@endsection
