@extends('layouts.app')
@php
    $title  = __('Akt');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('akt.edit', $akt) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Akt</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('akt.update', $akt->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('akt.form')

            </form>
        </div>
    </div>
@endsection
