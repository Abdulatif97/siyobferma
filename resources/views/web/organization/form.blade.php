
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('input.inn')) }}
            {{ Form::text('inn', $organization->inn?? old('inn'), ['class' => 'form-control' . ($errors->has('inn') ? ' is-invalid' : ''),'required' => 'required',  'maxlength' => 9,'placeholder' => trans('input.inn')]) }}
            {!! $errors->first('inn', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(trans('input.full_name')) }}
            {{ Form::textarea('full_name', $organization->full_name?? old('value'), ['class' => 'form-control' . ($errors->has('full_name') ? ' is-invalid' : ''),'required' => 'required', 'rows'       => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.full_name')]) }}
            {!! $errors->first('full_name', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
        {{ Form::label(trans('input.date_state_reg')) }}
        {{ Form::date('date_state_reg', $organization->date_state_reg?? old('value'), ['class' => 'form-control' . ($errors->has('date_state_reg') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.date_state_reg')]) }}
        {!! $errors->first('date_state_reg', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.number_state_reg')) }}
        {{ Form::text('number_state_reg', $organization->number_state_reg?? old('value'), ['class' => 'form-control' . ($errors->has('number_state_reg') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.number_state_reg')]) }}
        {!! $errors->first('number_state_reg', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
        {{ Form::label(trans('input.legal_address_soato_id')) }}
        {{ Form::select('legal_address_soato_id', $soatos, $organization->legal_address_soato_id ?? old('value') ,['class' => 'form-control' . ($errors->has('legal_address_soato_id') ? ' is-invalid' : ''), 'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('legal_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.legal_address_additional')) }}
        {{ Form::text('legal_address_additional', $organization->legal_address_additional?? old('value'), ['class' => 'form-control' . ($errors->has('legal_address_additional') ? ' is-invalid' : ''), 'required' => 'required', 'placeholder' => trans('input.legal_address_additional')]) }}
        {!! $errors->first('legal_address_additional', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.opf')) }}
        {{ Form::number('opf', $organization->opf?? old('value'), ['class' => 'form-control' . ($errors->has('opf') ? ' is-invalid' : ''), 'maxlength' => 3, 'placeholder' => trans('input.opf')]) }}
        {!! $errors->first('opf', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.oked')) }}
        {{ Form::text('oked', $organization->oked?? old('value'), ['class' => 'form-control' . ($errors->has('oked') ? ' is-invalid' : ''),  'maxlength' => 5,'placeholder' => trans('input.oked')]) }}
        {!! $errors->first('oked', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.coogu')) }}
        {{ Form::number('coogu', $organization->coogu?? old('value'), ['class' => 'form-control' . ($errors->has('coogu') ? ' is-invalid' : ''), 'maxlength' => 5,  'placeholder' => trans('input.coogu')]) }}
        {!! $errors->first('coogu', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
        {{ Form::label(trans('input.activity_status')) }}
        {{ Form::select('activity_status'?? old('value'), ['current' => trans('input.current'), 'non-current' => trans('input.non-current')], $organization->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('activity_status') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('activity_status', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.pcmp')) }}
        {{ Form::textarea('pcmp', $organization->pcmp?? old('value'), ['class' => 'form-control' . ($errors->has('pcmp') ? ' is-invalid' : ''), 'rows'       => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.pcmp')]) }}
        {!! $errors->first('pcmp', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.email_address')) }}
        {{ Form::email('email_address', $organization->email_address?? old('value'), ['class' => 'form-control' . ($errors->has('email_address') ? ' is-invalid' : ''), 'placeholder' => trans('input.email_address')]) }}
        {!! $errors->first('email_address', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.phone_number')) }}
        {{ Form::text('phone_number', $organization->phone_number?? old('value'), ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => trans('input.phone_number')]) }}
        {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
        {{ Form::label(trans('locale.deleted')) }}
        {{ Form::select('deleted'?? old('value'), [1 => trans('locale.yes'), 0 => trans('locale.no')], $organization->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('input.is_client')) }}
        {{ Form::select('is_client'?? old('value'), [1 => trans('locale.yes'), 0 => trans('locale.no')], $organization->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('is_client') ? ' is-invalid' : ''), 'placeholder' => trans('input.is_client')]) }}
        {!! $errors->first('is_client', '<div class="invalid-feedback">:message</p></div>') !!}
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
