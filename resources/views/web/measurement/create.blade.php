@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Create'))

@section('content')

  @includeif('partials.errors')

  <div class="card card-default">
    <div class="card-header">
      <span class="card-title">{{trans('locale.Create')}}</span>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('measurement.store') }}"  role="form" enctype="multipart/form-data">
        @csrf

        @include('web.measurement.form')

      </form>
    </div>
  </div>
@endsection
