@extends('layouts.app')

@php
    $title  = 'Create: Task';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('task.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Task</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('task.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('task.form')

            </form>
        </div>
    </div>
@endsection
