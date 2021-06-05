@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">Show Item Category</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('itemCategory.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">

      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $itemCategory->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $itemCategory->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $itemCategory->deleted }}
      </div>
      <div class="form-group">
        <strong>Title:</strong>
        {{ $itemCategory->title }}
      </div>
      <div class="form-group">
        <strong>Description:</strong>
        {{ $itemCategory->description }}
      </div>
      <div class="form-group">
        <strong>Type:</strong>
        {{ $itemCategory->type }}
      </div>
      <div class="form-group">
        <strong>Parent Id:</strong>
        {{ $itemCategory->parent_id }}
      </div>

    </div>
  </div>

@endsection
