@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">Show Person</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('person.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">

      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $person->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $person->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $person->deleted }}
      </div>
      <div class="form-group">
        <strong>Pinfl:</strong>
        {{ $person->pinfl }}
      </div>
      <div class="form-group">
        <strong>Id Card Number:</strong>
        {{ $person->id_card_number }}
      </div>
      <div class="form-group">
        <strong>Passport Series:</strong>
        {{ $person->passport_series }}
      </div>
      <div class="form-group">
        <strong>Passport Number:</strong>
        {{ $person->passport_number }}
      </div>
      <div class="form-group">
        <strong>Given Name:</strong>
        {{ $person->given_name }}
      </div>
      <div class="form-group">
        <strong>Surname:</strong>
        {{ $person->surname }}
      </div>
      <div class="form-group">
        <strong>Fathers Name:</strong>
        {{ $person->fathers_name }}
      </div>
      <div class="form-group">
        <strong>Actual Address Soato Id:</strong>
        {{ $person->actual_address_soato_id }}
      </div>
      <div class="form-group">
        <strong>Actual Address Additional:</strong>
        {{ $person->actual_address_additional }}
      </div>
      <div class="form-group">
        <strong>Temporary Address Soato Id:</strong>
        {{ $person->temporary_address_soato_id }}
      </div>
      <div class="form-group">
        <strong>Temporary Address Additional:</strong>
        {{ $person->temporary_address_additional }}
      </div>
      <div class="form-group">
        <strong>Email Address:</strong>
        {{ $person->email_address }}
      </div>
      <div class="form-group">
        <strong>Phone Number:</strong>
        {{ $person->phone_number }}
      </div>
      <div class="form-group">
        <strong>State Of Activity Status:</strong>
        {{ $person->state_of_activity_status }}
      </div>
      <div class="form-group">
        <strong>Is Client:</strong>
        {{ $person->is_client }}
      </div>
      <div class="form-group">
        <strong>Organization Id:</strong>
        {{ $person->organization_id }}
      </div>
      <div class="form-group">
        <strong>Department Id:</strong>
        {{ $person->department_id }}
      </div>

    </div>
  </div>
@endsection
