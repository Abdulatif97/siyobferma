@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">Show Item</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('disease-test-template.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">
      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $diseaseTestTemplate->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $diseaseTestTemplate->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $diseaseTestTemplate->deleted }}
      </div>
      <div class="form-group">
        <strong>Note:</strong>
        {{ $diseaseTestTemplate->note }}
      </div>
      <div class="form-group">
        <strong>Item Category Id:</strong>
        {{ $diseaseTestTemplate->item_category_id }}
      </div>

    </div>
  </div>

@endsection
