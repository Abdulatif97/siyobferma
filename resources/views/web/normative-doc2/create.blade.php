@extends('layouts.app')

@php
    $title  = 'Create: Normative Doc';
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('normativeDoc.create') }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Normative Doc</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('normativeDoc.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('normative-doc.form')

            </form>
        </div>
    </div>
@endsection
