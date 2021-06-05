@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')
  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <span class="card-title">{{trans('locale.Show')}}</span>
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('message.index') }}"> Back</a>
      </div>
    </div>

    <div class="card-body">

      <div class="form-group">
        <strong>Create Person Id:</strong>
        {{ $message->create_person_id }}
      </div>
      <div class="form-group">
        <strong>Updated Person Id:</strong>
        {{ $message->updated_person_id }}
      </div>
      <div class="form-group">
        <strong>Deleted:</strong>
        {{ $message->deleted }}
      </div>
      <div class="form-group">
        <strong>Reporting Person Name:</strong>
        {{ $message->reporting_person_name }}
      </div>
      <div class="form-group">
        <strong>Reporting Person Phone Number:</strong>
        {{ $message->reporting_person_phone_number }}
      </div>
      <div class="form-group">
        <strong>Item Category Id:</strong>
        {{ $message->item_category_id }}
      </div>
      <div class="form-group">
        <strong>Item Id:</strong>
        {{ $message->item_id }}
      </div>
      <div class="form-group">
        <strong>Item Condition:</strong>
        {{ $message->item_condition }}
      </div>
      <div class="form-group">
        <strong>Item Address Soato Id:</strong>
        {{ $message->item_address_soato_id }}
      </div>
      <div class="form-group">
        <strong>Item Address Additional:</strong>
        {{ $message->item_address_additional }}
      </div>
      <div class="form-group">
        <strong>Item Address Latitude:</strong>
        {{ $message->item_address_latitude }}
      </div>
      <div class="form-group">
        <strong>Item Address Longitude:</strong>
        {{ $message->item_address_longitude }}
      </div>
      <div class="form-group">
        <strong>Attached Photos:</strong>
        <div class="w-100 d-flex">
          @foreach($message->attached_photos as $photo)
            <img src=" {{  asset('storage/'.$photo)}}" class="rounded d-block" alt="...">
          @endforeach
        </div>

      </div>
      <div class="form-group">
        <strong>Reporting Date:</strong>
        {{ $message->reporting_date }}
      </div>
      <div class="form-group">
        <strong>Is Approved:</strong>
        {{ $message->is_approved }}
      </div>
      <div class="form-group">
        <strong>Approved Person Id:</strong>
        {{ $message->approved_person_id }}
      </div>
      <div class="form-group">
        <strong>Status:</strong>
        {{ $message->status }}
      </div>

    </div>
  </div>


@endsection
