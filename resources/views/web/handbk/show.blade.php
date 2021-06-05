@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')

  <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">{{trans('locale.Show')}}</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('handbk.index') }}"> {{trans('locale.Back')}}</a>
            </div>
        </div>

        <div class="card-body">

                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $handbk->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $handbk->updated_person_id }}
                        </div>
          @php
            $data = array();
              $data = $handbk->deleted ?  ['text' => ' ', 'bg-color' => 'bg-success'] :  ['text' => ' ', 'bg-color' => 'bg-danger'];
          @endphp
                        <div class="form-group">
                            <strong>Deleted:</strong>
                          <span class="badge rounded-pill {{$data['bg-color']}}">{{$data['text']}}</span>
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $handbk->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $handbk->description }}
                        </div>

        </div>
    </div>
@endsection
