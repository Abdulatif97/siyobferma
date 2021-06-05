@extends('layouts/contentLayoutMaster')

@section('title', trans('locale.Show'))

@section('content')

  <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="card-title">{{trans('locale.Show')}}</span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('advantage.index') }}"> {{trans('locale.Back')}}</a>
            </div>
        </div>
        <div class="card-body">
                        <div class="form-group">
                            <strong>Create Person Id:</strong>
                            {{ $advantage->create_person_id }}
                        </div>
                        <div class="form-group">
                            <strong>Updated Person Id:</strong>
                            {{ $advantage->updated_person_id }}
                        </div>
                        @php
                          $data = array();
                            $data = $advantage->deleted ?  ['text' => ' ', 'bg-color' => 'bg-success'] :  ['text' => ' ', 'bg-color' => 'bg-danger'];
                        @endphp
                        <div class="form-group">
                            <strong>Deleted:</strong>
                          <span class="badge rounded-pill {{$data['bg-color']}}">{{$data['text']}}</span>
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $advantage->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $advantage->description }}
                        </div>

        </div>
    </div>
@endsection
