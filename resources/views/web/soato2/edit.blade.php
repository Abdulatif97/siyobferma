@extends('layouts.app')
@php
    $title  = __('Soato');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('soato.edit', $soato) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Soato</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('soato.update', $soato->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('soato.form')

            </form>
        </div>
    </div>
@endsection
