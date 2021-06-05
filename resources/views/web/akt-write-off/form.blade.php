@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
      <div class="form-group">
        {{ Form::label(trans('input.code')) }}
        {{ Form::text('code', $aktWriteOff->code ?? '', ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.code')]) }}
        {!! $errors->first('code', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
        {{ Form::label(trans('term.sample-group-result')) }}
        {{ Form::select('sample_group_result_id', $sampleGroupResults, $aktWriteOff->sample_group_result_id ?? 0 ,['class' => 'form-control' . ($errors->has('sample_group_result_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('sample_group_result_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.write_off_date')) }}
        {{ Form::date('write_off_date', $aktWriteOff->write_off_date ?? '', ['class' => 'form-control' . ($errors->has('write_off_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.write_off_date')]) }}
        {!! $errors->first('write_off_date', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
          <div class="form-group">
            {{ Form::label(trans('input.note')) }}
            {{ Form::textarea('note', $aktWriteOff->note ?? '', ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.note')]) }}
            {!! $errors->first('note', '<div class="invalid-feedback">:message</p></div>') !!}
          </div>
      <div class="form-group">
        {{ Form::label('approved_person_id') }}
        {{ Form::text('approved_person_id', $aktWriteOff->approved_person_id ?? '', ['class' => 'form-control' . ($errors->has('approved_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Approved Person Id']) }}
        {!! $errors->first('approved_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.approved_date')) }}
        {{ Form::date('approved_date', $aktWriteOff->approved_date ?? old('value'), ['class' => 'form-control' . ($errors->has('approved_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.approved_date')]) }}
        {!! $errors->first('approved_date', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $aktWriteOff->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
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
