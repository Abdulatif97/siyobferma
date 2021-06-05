@extends('layouts.app')
@php
    $title  = __('Normative Doc');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('normativeDoc.edit', $normativeDoc) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Normative Doc</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('normativeDoc.update', $normativeDoc->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('normative-doc.form')

            </form>
        </div>
    </div>
@endsection
