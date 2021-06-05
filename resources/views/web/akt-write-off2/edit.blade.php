@extends('layouts.app')
@php
    $title  = __('Akt Write Off');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('aktWriteOff.edit', $aktWriteOff) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Akt Write Off</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('aktWriteOff.update', $aktWriteOff->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('akt-write-off.form')

            </form>
        </div>
    </div>
@endsection
