@extends('layouts.app')
@php
    $title  = __('Person');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('person.edit', $person) }}
@stop

@section('content')
    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Update Person</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('person.update', $person->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('person.form')

            </form>
        </div>
    </div>
@endsection
