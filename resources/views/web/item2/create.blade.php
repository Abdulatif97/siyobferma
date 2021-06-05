@extends('layouts.app')

@php
    $title  = 'Create: Item';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('item.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Item</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('item.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('item.form')

            </form>
        </div>
    </div>
@endsection
