@extends('layouts.app')
@php
    $title  = __('Sample Group Result');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sampleGroupResult.edit', $sampleGroupResult) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Sample Group Result</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sampleGroupResult.update', $sampleGroupResult->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('sample-group-result.form')

            </form>
        </div>
    </div>
@endsection
