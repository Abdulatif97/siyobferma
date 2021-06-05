@extends('layouts.app')

@php
    $title  = 'Create: Message';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('message.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Message</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('message.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('message.form')

            </form>
        </div>
    </div>
@endsection
