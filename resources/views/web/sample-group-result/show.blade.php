@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">Show Sample</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('sample.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">

      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $sample->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $sample->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $sample->deleted }}
      </div>
      <div class="form-group">
        <strong>Akt Id:</strong>
        {{ $sample->akt_id }}
      </div>
      <div class="form-group">
        <strong>Code:</strong>
        {{ $sample->code }}
      </div>
      <div class="form-group">
        <strong>Type:</strong>
        {{ $sample->type }}
      </div>
      <div class="form-group">
        <strong>Normative Docs Id:</strong>
        {{ $sample->normative_docs_id }}
      </div>
      <div class="form-group">
        <strong>Sample State:</strong>
        {{ $sample->sample_state }}
      </div>
      <div class="form-group">
        <strong>Sample Receipt Date:</strong>
        {{ $sample->sample_receipt_date }}
      </div>
      <div class="form-group">
        <strong>Note:</strong>
        {{ $sample->note }}
      </div>
      <div class="form-group">
        <strong>Template Id:</strong>
        {{ $sample->template_id }}
      </div>

    </div>
  </div>
@endsection
