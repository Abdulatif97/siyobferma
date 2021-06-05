@extends('layouts.app')

@php
    $title  = 'Create: P Position';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('pPosition.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create P Position</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('pPosition.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('p-position.form')

            </form>
        </div>
    </div>
@endsection
