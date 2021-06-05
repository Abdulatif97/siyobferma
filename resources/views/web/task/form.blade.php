
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
      <fieldset class="form-group">
        {{ Form::label(trans('input.type')) }}
        {{ Form::select('type', $handbks, $task->type ?? old('value') ,['class' => 'form-control' . ($errors->has('akt_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('type', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('input.gave_person')) }}
        {{ Form::select('gave_person_id', $personals, $task->gave_person_id ?? old('value') ,['class' => 'form-control' . ($errors->has('gave_person_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('gave_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.gave_date')) }}
        {{ Form::date('gave_date', $task->gave_date ??  old('value'), ['class' => 'form-control' . ($errors->has('gave_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.gave_date')]) }}
        {!! $errors->first('gave_date', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.deadline')) }}
        {{ Form::date('deadline', $task->deadline ??  old('value'), ['class' => 'form-control' . ($errors->has('deadline') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.deadline')]) }}
        {!! $errors->first('deadline', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('locale.description')) }}
        {{ Form::textarea('description', $task->note ?? old('value'), ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.description')]) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
        {{ Form::label(trans('input.attached_person')) }}
        {{ Form::select('attached_person_id', $personals, $task->attached_person_id ?? old('value') ,['class' => 'form-control' . ($errors->has('attached_person_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('attached_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>

      <fieldset class="form-group">
        {{ Form::label(trans('term.organization')) }}
        {{ Form::select('organization_id', $organizations, $task->organization_id ?? old('value') ,['class' => 'form-control' . ($errors->has('organization_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('organization_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('input.status')) }}
        {{ Form::select('status', $handbks, $task->status ?? old('value') ,['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>

      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $task->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
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
