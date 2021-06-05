
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection

{{--fact_value_check_regex   text          null,-- measurementdan olinganda tekshirish shart bo'lsa tekshiriladi valueni to'g'ri yoki noto'g'ri kiritilganligini--}}
{{--suggested_values         text          null,--}}
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('locale.title')) }}
            {{ Form::text('title', $diseaseTestTemplateParameter->title?? '', ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <fieldset class="form-group">
          {{ Form::label(trans('term.disease-test-template')) }}
          {{ Form::select('disease_test_template_id', $diseases, $diseaseTestTemplateParameter->disease_test_template_id ?? old('value') ,['class' => 'form-control' . ($errors->has('disease_test_template_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('disease_test_template_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
        <fieldset class="form-group">
          {{ Form::label(trans('term.measurement')) }}
          {{ Form::select('measurement_id', $measurments, $diseaseTestTemplateParameter->measurement_id ?? old('value') ,['class' => 'form-control' . ($errors->has('measurement_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('measurement_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.min_value')) }}
        {{ Form::text('min_value', $diseaseTestTemplateParameter->min_value ?? '', ['class' => 'form-control' . ($errors->has('min_value') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.min_value')]) }}
        {!! $errors->first('min_value', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.max_value')) }}
        {{ Form::text('max_value', $diseaseTestTemplateParameter->max_value ?? '', ['class' => 'form-control' . ($errors->has('max_value') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.max_value')]) }}
        {!! $errors->first('max_value', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.fact_value_check_regex')) }}
        {{ Form::textarea('fact_value_check_regex', $diseaseTestTemplateParameter->fact_value_check_regex ?? '', ['class' => 'form-control' . ($errors->has('fact_value_check_regex') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.fact_value_check_regex')]) }}
        {!! $errors->first('fact_value_check_regex', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.suggested_values')) }}
        {{ Form::textarea('suggested_values', $diseaseTestTemplateParameter->suggested_values ?? '', ['class' => 'form-control' . ($errors->has('suggested_values') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.suggested_values')]) }}
        {!! $errors->first('suggested_values', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $diseaseTestTemplateParameter->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
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
