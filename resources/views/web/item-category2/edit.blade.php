@extends('layouts.app')
@php
    $title  = __('Item Category');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('itemCategory.edit', $itemCategory) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Item Category</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('itemCategory.update', $itemCategory->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('item-category.form')

            </form>
        </div>
    </div>
@endsection
