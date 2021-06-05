@extends('layouts.app')
@php
    $title  = __('Disease');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('disease.edit', $disease) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Disease</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('disease.update', $disease->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('disease.form')

            </form>
        </div>
    </div>
@endsection
