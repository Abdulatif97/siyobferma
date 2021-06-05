@extends('layouts.app')
@php
    $title  = __('Task');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('task.edit', $task) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Task</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('task.update', $task->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('task.form')

            </form>
        </div>
    </div>
@endsection
