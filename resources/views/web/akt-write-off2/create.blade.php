@extends('layouts.app')

@php
    $title  = 'Create: Akt Write Off';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('aktWriteOff.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Akt Write Off</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('aktWriteOff.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('akt-write-off.form')

            </form>
        </div>
    </div>
@endsection
