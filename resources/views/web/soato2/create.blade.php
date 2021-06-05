@extends('layouts.app')

@php
    $title  = 'Create: Soato';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('soato.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Soato</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('soato.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('soato.form')

            </form>
        </div>
    </div>
@endsection
