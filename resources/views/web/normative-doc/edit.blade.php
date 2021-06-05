@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Update'))

@section('content')

  @includeif('partials.errors')

  @includeif('partials.errors')

  <div class="card card-default">
    <div class="card-header">
      <span class="card-title">{{trans('locale.Update')}}</span>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('normative-doc.update', $normativeDoc->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf

        @include('web.normative-doc.form')

      </form>
    </div>
  </div>
@endsection
