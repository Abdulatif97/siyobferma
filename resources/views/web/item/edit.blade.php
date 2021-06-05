@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Update'))

@section('content')

  @includeif('partials.errors')

  <div class="card card-default">
    <div class="card-header">
      <span class="card-title">{{trans('locale.Update')}}</span>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('item.update', $item->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf

        @include('web.item.form')

      </form>
    </div>
  </div>
@endsection
