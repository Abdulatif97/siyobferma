@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')

  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">Show Disease Category</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('disease-category.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">

      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $diseaseCategory->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $diseaseCategory->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $diseaseCategory->deleted ? '1' : '0' }}
      </div>
      <div class="form-group">
        <strong>Title:</strong>
        {{ $diseaseCategory->title }}
      </div>
      <div class="form-group">
        <strong>Description:</strong>
        {{ $diseaseCategory->description }}
      </div>
      <div class="form-group">
        <strong>Type:</strong>
        {{ $diseaseCategory->type }}
      </div>

    </div>
  </div>
@endsection
