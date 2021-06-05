@extends('layouts.app')
@php
    $title  = __('P Position');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('pPosition.edit', $pPosition) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update P Position</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('pPosition.update', $pPosition->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('p-position.form')

            </form>
        </div>
    </div>
@endsection
