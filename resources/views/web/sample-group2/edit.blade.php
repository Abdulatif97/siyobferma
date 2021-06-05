@extends('layouts.app')
@php
    $title  = __('Sample Group');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sampleGroup.edit', $sampleGroup) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Sample Group</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sampleGroup.update', $sampleGroup->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('sample-group.form')

            </form>
        </div>
    </div>
@endsection
