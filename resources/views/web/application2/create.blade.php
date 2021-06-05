@extends('layouts.app')

@php
    $title  = 'Create: Application';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('application.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Application</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('application.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('application.form')

            </form>
        </div>
    </div>
@endsection
