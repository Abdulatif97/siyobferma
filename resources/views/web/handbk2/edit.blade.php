@extends('layouts.app')
@php
    $title  = __('Handbk');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('handbk.edit', $handbk) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Handbk</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('handbk.update', $handbk->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('handbk.form')

            </form>
        </div>
    </div>
@endsection
