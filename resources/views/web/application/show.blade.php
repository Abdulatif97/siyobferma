@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">Show Application</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('application.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">

      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $application->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $application->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $application->deleted }}
      </div>
      <div class="form-group">
        <strong>Applicant Person Id:</strong>
        {{ $application->applicant_person_id }}
      </div>
      <div class="form-group">
        <strong>Applicant Organization Id:</strong>
        {{ $application->applicant_organization_id }}
      </div>
      <div class="form-group">
        <strong>Applicant Phone Number:</strong>
        {{ $application->applicant_phone_number }}
      </div>
      <div class="form-group">
        <strong>Purpose:</strong>
        {{ $application->purpose }}
      </div>
      <div class="form-group">
        <strong>Urgency:</strong>
        {{ $application->urgency }}
      </div>
      <div class="form-group">
        <strong>Category Paid:</strong>
        {{ $application->category_paid }}
      </div>
      <div class="form-group">
        <strong>Test Address Soato Id:</strong>
        {{ $application->test_address_soato_id }}
      </div>
      <div class="form-group">
        <strong>Item Category Id:</strong>
        {{ $application->item_category_id }}
      </div>
      <div class="form-group">
        <strong>Item Id:</strong>
        {{ $application->item_id }}
      </div>
      <div class="form-group">
        <strong>Item Owner Person Id:</strong>
        {{ $application->item_owner_person_id }}
      </div>
      <div class="form-group">
        <strong>Item Owner Organization Id:</strong>
        {{ $application->item_owner_organization_id }}
      </div>
      <div class="form-group">
        <strong>Is Animal:</strong>
        {{ $application->is_animal }}
      </div>
      <div class="form-group">
        <strong>Bdic Id:</strong>
        {{ $application->bdic_id }}
      </div>
      <div class="form-group">
        <strong>Bdiczm Id:</strong>
        {{ $application->bdiczm_id }}
      </div>
      <div class="form-group">
        <strong>Item Sex:</strong>
        {{ $application->item_sex }}
      </div>
      <div class="form-group">
        <strong>Item Colour:</strong>
        {{ $application->item_colour }}
      </div>
      <div class="form-group">
        <strong>Item Age:</strong>
        {{ $application->item_age }}
      </div>
      <div class="form-group">
        <strong>Item Health Status:</strong>
        {{ $application->item_health_status }}
      </div>
      <div class="form-group">
        <strong>Measurement Id:</strong>
        {{ $application->measurement_id }}
      </div>
      <div class="form-group">
        <strong>Measurement Value:</strong>
        {{ $application->measurement_value }}
      </div>
      <div class="form-group">
        <strong>Registration Date:</strong>
        {{ $application->registration_date }}
      </div>
      <div class="form-group">
        <strong>Akt Date:</strong>
        {{ $application->akt_date }}
      </div>
      <div class="form-group">
        <strong>Test Receipt Date:</strong>
        {{ $application->test_receipt_date }}
      </div>
      <div class="form-group">
        <strong>Test Date:</strong>
        {{ $application->test_date }}
      </div>
      <div class="form-group">
        <strong>Attachments:</strong>
        {{ $application->attachments }}
      </div>
      <div class="form-group">
        <strong>Status:</strong>
        {{ $application->status }}
      </div>

    </div>
  </div>

@endsection
