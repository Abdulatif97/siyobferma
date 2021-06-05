@extends('layouts.app')

@php
    $title  = 'Create: Handbk';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('handbk.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Handbk</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('handbk.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('handbk.form')

            </form>
        </div>
    </div>
@endsection
