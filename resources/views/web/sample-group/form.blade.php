
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('input.samples_count')) }}
            {{ Form::number('samples_count', $sampleGroup->samples_count?? '', ['class' => 'form-control' . ($errors->has('samples_count') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.samples_count')]) }}
            {!! $errors->first('samples_count', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(trans('input.note')) }}
            {{ Form::textarea('note', $sampleGroup->note ?? '', ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.note')]) }}
            {!! $errors->first('note', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <fieldset class="form-group">
            {{ Form::label(trans('input.is_complex')) }}
            {{ Form::select('is_complex', [1 => trans('locale.yes'), 0 => trans('locale.no')], $sampleGroup->is_complex ?? 0 ,['class' => 'form-control' . ($errors->has('is_complex') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('is_complex', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $sampleGroup->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{trans('locale.Submit')}}</button>
    </div>
</div>
@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>
@endsection
