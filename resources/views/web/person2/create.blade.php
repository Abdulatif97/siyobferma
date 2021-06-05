@extends('layouts.app')

@php
    $title  = 'Create: Person';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('person.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Person</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('person.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('person.form')

            </form>
        </div>
    </div>
@endsection
