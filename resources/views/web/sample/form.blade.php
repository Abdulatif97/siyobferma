
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
      <fieldset class="form-group">
        {{ Form::label(trans('locale.akt')) }}
        {{ Form::select('akt_id', $akts, $sample->akt_id ?? old('value') ,['class' => 'form-control' . ($errors->has('akt_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('akt_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
        <div class="form-group">
            {{ Form::label(trans('input.code')) }}
            {{ Form::text('code', $sample->code?? '', ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.code')]) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <fieldset class="form-group">
        {{ Form::label(trans('locale.type')) }}
        {{ Form::select('type', $handbks, $sample->type ?? old('value') ,['class' => 'form-control' . ($errors->has('akt_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('type', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('term.normative_docs')) }}
        {{ Form::select('normative_docs_id', $docs, $sample->normative_docs_id ?? old('value') ,['class' => 'form-control' . ($errors->has('normative_docs_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('normative_docs_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('input.sample_state')) }}
        {{ Form::select('sample_state', $handbks, $sample->sample_state ?? old('value') ,['class' => 'form-control' . ($errors->has('sample_state') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('sample_state', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.sample_receipt_date')) }}
        {{ Form::date('sample_receipt_date', $sample->sample_receipt_date ?? '', ['class' => 'form-control' . ($errors->has('sample_receipt_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.sample_receipt_date')]) }}
        {!! $errors->first('sample_receipt_date', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
        <div class="form-group">
            {{ Form::label(trans('locale.note')) }}
            {{ Form::textarea('note', $sample->note?? '', ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.note')]) }}
            {!! $errors->first('note', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

      <fieldset class="form-group">
          {{ Form::label(trans('input.template_id')) }}
          {{ Form::select('template_id', $templates, $sample->template_id ?? old('value') ,['class' => 'form-control' . ($errors->has('template_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('template_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $sample->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
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
