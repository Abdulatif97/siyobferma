@extends('layouts.app')

@php
    $title  = 'Create: Disease Category';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseCategory.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Disease Category</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('diseaseCategory.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('disease-category.form')

            </form>
        </div>
    </div>
@endsection
