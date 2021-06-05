@extends('layouts.app')
@php
    $title  = __('Translation');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('translation.edit', $translation) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Translation</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('translation.update', $translation->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('translation.form')

            </form>
        </div>
    </div>
@endsection
