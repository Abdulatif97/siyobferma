@extends('layouts.app')

@php
    $title  = 'Create: Item Category';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('itemCategory.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Item Category</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('itemCategory.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('item-category.form')

            </form>
        </div>
    </div>
@endsection
