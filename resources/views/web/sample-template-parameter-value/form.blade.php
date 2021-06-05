
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
      <fieldset class="form-group">
        {{ Form::label(trans('term.sample')) }}
        {{ Form::select('sample_id', $samples, $sampleTemplateParameterValue->sample_id ?? old('value') ,['class' => 'form-control' . ($errors->has('sample_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('sample_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('term.disease_test_template_parameter')) }}
        {{ Form::select('disease_test_template_parameter_id', $parameters, $sampleTemplateParameterValue->disease_test_template_parameter_id ?? old('value') ,['class' => 'form-control' . ($errors->has('disease_test_template_parameter_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('disease_test_template_parameter_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>

        <div class="form-group">
            {{ Form::label(trans('input.fact_value')) }}
            {{ Form::textarea('fact_value', $sampleTemplateParameterValue->fact_value ?? '', ['class' => 'form-control' . ($errors->has('fact_value') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.fact_value')]) }}
            {!! $errors->first('fact_value', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('input.compliance_requirements')) }}
            {{ Form::textarea('compliance_requirements', $sampleTemplateParameterValue->compliance_requirements ?? '', ['class' => 'form-control' . ($errors->has('compliance_requirements') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.compliance_requirements')]) }}
            {!! $errors->first('compliance_requirements', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $sampleTemplateParameterValue->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
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
