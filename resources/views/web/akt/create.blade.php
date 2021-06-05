@extends('layouts/contentLayoutMaster')

@section('title', trans('Create: Akt'))

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">

@endsection
@section('content')

    @includeif('partials.errors')

    <div class="card card-default">
        <div class="card-header">
            <span class="card-title">Create Akt</span>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('akt.store') }}"  role="form" enctype="multipart/form-data">
                @csrf

                @include('web.akt.form')

            </form>
        </div>
    </div>
@endsection
