
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('locale.title')) }}
            {{ Form::text('title', $measurement->title?? '', ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''),  'required' => 'required', 'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(trans('locale.description')) }}
            {{ Form::textarea('description', $measurement->description?? '', ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'rows'       => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.description')]) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('input.measurement_value_check_regex')) }}
            {{ Form::textarea('measurement_value_check_regex', $measurement->measurement_value_check_regex?? '', ['class' => 'form-control' . ($errors->has('measurement_value_check_regex') ? ' is-invalid' : ''), 'rows'       => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.measurement_value_check_regex')]) }}
            {!! $errors->first('measurement_value_check_regex', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('input.suggested_values')) }}
            {{ Form::textarea('suggested_values', $measurement->suggested_values?? '', ['class' => 'form-control' . ($errors->has('suggested_values') ? ' is-invalid' : ''), 'rows'       => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.suggested_values')]) }}
            {!! $errors->first('suggested_values', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <fieldset class="form-group">
        {{ Form::label(trans('input.type')) }}
        {{ Form::select('type', $handbks, $measurement->type ?? 0 ,['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('type', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $measurement->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => trans('locale.select')]) }}
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
