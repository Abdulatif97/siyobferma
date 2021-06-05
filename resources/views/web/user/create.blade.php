@extends('layouts.app')

@php
    $title  = 'Create: User';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('user.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create User</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('user.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('user.form')

            </form>
        </div>
    </div>
@endsection
