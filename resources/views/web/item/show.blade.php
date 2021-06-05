@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">Show Item</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('item.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">

      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $item->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $item->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $item->deleted }}
      </div>
      <div class="form-group">
        <strong>Title:</strong>
        {{ $item->title }}
      </div>
      <div class="form-group">
        <strong>Description:</strong>
        {{ $item->description }}
      </div>
      <div class="form-group">
        <strong>Item Category Id:</strong>
        {{ $item->item_category_id }}
      </div>

    </div>
  </div>

@endsection
