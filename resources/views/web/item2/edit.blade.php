@extends('layouts.app')
@php
    $title  = __('Item');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('item.edit', $item) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Item</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('item.update', $item->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('item.form')

            </form>
        </div>
    </div>
@endsection
