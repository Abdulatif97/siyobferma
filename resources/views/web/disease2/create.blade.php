@extends('layouts.app')

@php
    $title  = 'Create: Disease';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('disease.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Disease</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('disease.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('disease.form')

            </form>
        </div>
    </div>
@endsection
