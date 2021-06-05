@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')

  <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">{{trans('locale.Show')}}</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('measurement.index') }}"> {{trans('locale.Back')}}</a>
            </div>
        </div>

        <div class="card-body">

                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $measurement->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $measurement->updated_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>{{trans('input.suggested_values')}}:</strong>
                            {{ $measurement->suggested_values }}
                        </div>
                        <div class="form-group">
                            <strong>{{trans('input.measurement_value_check_regex')}}:</strong>
                            {{ $measurement->measurement_value_check_regex }}
                        </div>
                        <div class="form-group">
                            <strong>{{trans('input.type')}}:</strong>
                            {{ $measurement->type }}
                        </div>
          @php
            $data = array();
              $data = $measurement->deleted ?  ['text' => ' ', 'bg-color' => 'bg-success'] :  ['text' => ' ', 'bg-color' => 'bg-danger'];
          @endphp
                        <div class="form-group">
                            <strong>Deleted:</strong>
                          <span class="badge rounded-pill {{$data['bg-color']}}">{{$data['text']}}</span>
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $measurement->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $measurement->description }}
                        </div>

        </div>
    </div>
@endsection
