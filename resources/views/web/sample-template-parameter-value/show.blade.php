@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">Show Sample Template Parameter Value</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('sample-template-parameter-value.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">

      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $sampleTemplateParameterValue->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $sampleTemplateParameterValue->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $sampleTemplateParameterValue->deleted }}
      </div>
      <div class="form-group">
        <strong>Sample Id:</strong>
        {{ $sampleTemplateParameterValue->sample_id }}
      </div>
      <div class="form-group">
        <strong>Disease Test Template Parameter Id:</strong>
        {{ $sampleTemplateParameterValue->disease_test_template_parameter_id }}
      </div>
      <div class="form-group">
        <strong>Fact Value:</strong>
        {{ $sampleTemplateParameterValue->fact_value }}
      </div>
      <div class="form-group">
        <strong>Compliance Requirements:</strong>
        {{ $sampleTemplateParameterValue->compliance_requirements }}
      </div>

    </div>
  </div>
@endsection
