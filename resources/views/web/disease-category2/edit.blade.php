@extends('layouts.app')
@php
    $title  = __('Disease Category');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseCategory.edit', $diseaseCategory) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Disease Category</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('diseaseCategory.update', $diseaseCategory->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('disease-category.form')

            </form>
        </div>
    </div>
@endsection
