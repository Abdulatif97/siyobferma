@extends('layouts.app')
@php
    $title  = __('Message');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('message.edit', $message) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Message</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('message.update', $message->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('message.form')

            </form>
        </div>
    </div>
@endsection
