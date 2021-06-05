@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">Show Sample Group</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('akt-write-off.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">

      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $sampleGroup->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $sampleGroup->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $sampleGroup->deleted }}
      </div>
      <div class="form-group">
        <strong>Samples Count:</strong>
        {{ $sampleGroup->samples_count }}
      </div>
      <div class="form-group">
        <strong>Note:</strong>
        {{ $sampleGroup->note }}
      </div>
      <div class="form-group">
        <strong>Is Complex:</strong>
        {{ $sampleGroup->is_complex }}
      </div>

    </div>
  </div>
@endsection
