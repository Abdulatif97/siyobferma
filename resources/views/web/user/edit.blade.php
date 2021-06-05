@extends('layouts.app')
@php
    $title  = __('User');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('user.edit', $user) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update User</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('user.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('user.form')

            </form>
        </div>
    </div>
@endsection
