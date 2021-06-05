
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
  <style>
    .field-icon {
      float: right;
      margin-left: -25px;
      left: -7px;
      margin-top: -25px;
      position: relative;
      z-index: 2;
    }

    .container{
      padding-top:50px;
      margin: auto;
    }
  </style>
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
      <div class="form-group">
        {{ Form::label(trans('input.pinfl')) }}
        {{ Form::text('pinfl', $person->pinfl ?? '', ['class' => 'form-control' . ($errors->has('pinfl') ? ' is-invalid' : ''), 'maxlength' => 14, 'placeholder' => trans('input.pinfl')]) }}
        {!! $errors->first('pinfl', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.id_card_number')) }}
        {{ Form::text('id_card_number', $person->id_card_number ?? '', ['class' => 'form-control' . ($errors->has('id_card_number') ? ' is-invalid' : ''), 'maxlength' => 15,   'placeholder' => trans('input.id_card_number')]) }}
        {!! $errors->first('id_card_number', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.passport_series')) }}
        {{ Form::text('passport_series', $person->passport_series ?? '', ['class' => 'form-control' . ($errors->has('passport_series') ? ' is-invalid' : ''), 'maxlength' => 5,  'placeholder' => trans('input.passport_series')]) }}
        {!! $errors->first('passport_series', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.passport_number')) }}
        {{ Form::text('passport_number', $person->passport_number ?? '', ['class' => 'form-control' . ($errors->has('passport_number') ? ' is-invalid' : ''),  'maxlength' => 8, 'placeholder' => trans('input.passport_number')]) }}
        {!! $errors->first('passport_number', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.given_name')) }}
        {{ Form::text('given_name', $person->given_name ?? '', ['class' => 'form-control' . ($errors->has('given_name') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.given_name')]) }}
        {!! $errors->first('given_name', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.surname')) }}
        {{ Form::text('surname', $person->surname ?? '', ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.surname')]) }}
        {!! $errors->first('surname', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.fathers_name')) }}
        {{ Form::text('fathers_name', $person->fathers_name ?? '', ['class' => 'form-control' . ($errors->has('fathers_name') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.fathers_name')]) }}
        {!! $errors->first('fathers_name', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
        {{ Form::label(trans('input.actual_address_soato_id')) }}
        {{ Form::select('actual_address_soato_id', $soatos, $person->actual_address_soato_id ?? old('value') ,['class' => 'form-control' . ($errors->has('actual_address_soato_id') ? ' is-invalid' : ''), 'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('actual_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.actual_address_additional')) }}
        {{ Form::text('actual_address_additional', $person->actual_address_additional ?? '', ['class' => 'form-control' . ($errors->has('actual_address_additional') ? ' is-invalid' : ''),  'placeholder' => trans('input.actual_address_additional')]) }}
        {!! $errors->first('actual_address_additional', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>

      <fieldset class="form-group">
        {{ Form::label(trans('input.temporary_address_soato_id')) }}
        {{ Form::select('temporary_address_soato_id', $soatos, $person->temporary_address_soato_id ?? old('value') ,['class' => 'form-control' . ($errors->has('temporary_address_soato_id') ? ' is-invalid' : ''), 'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('temporary_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.temporary_address_additional')) }}
        {{ Form::text('temporary_address_additional', $person->temporary_address_additional ?? '', ['class' => 'form-control' . ($errors->has('temporary_address_additional') ? ' is-invalid' : ''),   'placeholder' => trans('input.temporary_address_additional')]) }}
        {!! $errors->first('temporary_address_additional', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.email_address')) }}
        {{ Form::email('email_address', $person->email_address?? old('value'), ['class' => 'form-control' . ($errors->has('email_address') ? ' is-invalid' : ''), 'placeholder' => trans('input.email_address')]) }}
        {!! $errors->first('email_address', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.phone_number')) }}
        {{ Form::text('phone_number', $person->phone_number?? old('value'), ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => trans('input.phone_number')]) }}
        {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>




      <fieldset class="form-group">
        {{ Form::label(trans('input.state_of_activity_status')) }}
        {{ Form::select('state_of_activity_status', ['alive' => trans('input.alive'), 'dead' => trans('input.dead')], $person->state_of_activity_status ?? old('value') ,['class' => 'form-control' . ($errors->has('state_of_activity_status') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('state_of_activity_status', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('locale.organization')) }}
        {{ Form::select('organization_id', $organizations, $person->organization_id ?? old('value') ,['class' => 'form-control' . ($errors->has('organization_id') ? ' is-invalid' : ''),  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('organization_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('locale.department')) }}
        {{ Form::select('department_id', $departments, $person->department_id ?? old('value') ,['class' => 'form-control' . ($errors->has('department_id') ? ' is-invalid' : ''),   'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('department_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>

      <fieldset class="form-group">
        {{ Form::label(trans('locale.position')) }}
        {{ Form::select('p_position_id', $positions, $person->p_position_id ?? old('value') ,['class' => 'form-control' . ($errors->has('p_position_id') ? ' is-invalid' : ''),  'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('p_position_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>

      <fieldset class="form-group">
        {{ Form::label(trans('locale.deleted')) }}
        {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $person->deleted ?? old('value') ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('input.is_client')) }}
        {{ Form::select('is_client'?? old('value'), [1 => trans('locale.yes'), 0 => trans('locale.no')], $person->deleted ?? old('value') ,['class' => 'form-control' . ($errors->has('is_client') ? ' is-invalid' : ''), 'required' => 'required','placeholder' => trans('locale.select')]) }}
        {!! $errors->first('is_client', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('input.roles')) }}
        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        {!! $errors->first('is_client', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      @empty($person)
      <div class="form-group">
        {{ Form::label(trans('input.password')) }}
        {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''),'id' => "password-field", 'placeholder' => trans('input.password')]) }}
        {!! $errors->first('password', '<div class="invalid-feedback">:message</p></div>') !!}
        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.password_confirmation')) }}
        {{ Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''),'id' => "password-field2",'placeholder'=>trans('input.password_confirmation')]) }}
        {!! $errors->first('password_confirmation', '<div class="invalid-feedback">:message</p></div>') !!}
        <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
      </div>
      @endempty
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
  <script>

    $(".toggle-password").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    $(".toggle-password2").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
  </script>
@endsection
