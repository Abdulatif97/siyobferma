@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}">
@endsection

<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
          {{ Form::label(trans('input.applicant_person_id')) }}
          {{ Form::text('applicant_person_id', $application->applicant_person_id ?? '', ['class' => 'form-control' . ($errors->has('applicant_person_id') ? ' is-invalid' : ''), 'placeholder' => trans('input.applicant_person_id')]) }}
          {!! $errors->first('applicant_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.applicant_organization_id')) }}
          {{ Form::select('applicant_organization_id', $organizations, $application->applicant_organization_id ?? '' ,['class' => 'form-control' . ($errors->has('applicant_organization_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('applicant_organization_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(trans('input.applicant_phone_number')) }}
            {{ Form::text('applicant_phone_number', $application->applicant_phone_number?? '', ['class' => 'form-control validate ' . ($errors->has('applicant_phone_number') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.applicant_phone_number')]) }}
            {!! $errors->first('applicant_phone_number', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <fieldset class="form-group">
          {{ Form::label(trans('input.purpose')) }}
          {{ Form::select('purpose', $handbks, $application->purpose ?? '' ,['class' => 'form-control' . ($errors->has('item_category_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('purpose', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
        <fieldset class="form-group">
            {{ Form::label(trans('input.urgency')) }}
            {{ Form::select('urgency', $handbks, $application->urgency ?? '' ,['class' => 'form-control' . ($errors->has('urgency') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('urgency', '<div class="invalid-feedback">:message</p></div>') !!}
          </fieldset>
        <fieldset class="form-group">
            {{ Form::label(trans('input.category_paid')) }}
            {{ Form::select('category_paid', $handbks, $application->category_paid ?? '' ,['class' => 'form-control' . ($errors->has('category_paid') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('category_paid', '<div class="invalid-feedback">:message</p></div>') !!}
          </fieldset>
        <fieldset class="form-group">
          {{ Form::label(trans('input.test_address_soato_id')) }}
          {{ Form::select('test_address_soato_id', $soatos, $application->test_address_soato_id ?? '' ,['class' => 'form-control' . ($errors->has('test_address_soato_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('test_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
        <fieldset class="form-group">
            {{ Form::label(trans('term.itemCategory')) }}
            {{ Form::select('item_category_id', $itemCategories, $application->item_category_id ?? '' ,['class' => 'form-control' . ($errors->has('item_category_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('item_category_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
        <fieldset class="form-group">
            {{ Form::label(trans('term.item')) }}
            {{ Form::select('item_id', $items, $application->item_id ?? '' ,['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('item_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
        <div class="form-group">
          {{ Form::label(trans('input.item_owner_person_id')) }}
          {{ Form::text('item_owner_person_id', $application->item_owner_person_id ?? '', ['class' => 'form-control' . ($errors->has('item_owner_person_id') ? ' is-invalid' : ''), 'placeholder' => trans('input.item_owner_person_id')]) }}
          {!! $errors->first('item_owner_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.item_owner_organization_id')) }}
          {{ Form::select('item_owner_organization_id', $organizations, $application->item_owner_organization_id ?? '' ,['class' => 'form-control' . ($errors->has('item_owner_organization_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_owner_organization_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <fieldset class="form-group">
          {{ Form::label(trans('input.is_animal')) }}
{{--          {{ Form::select('is_animal', $handbks, $application->is_animal ?? '' ,['class' => 'form-control' . ($errors->has('is_animal') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}--}}
          {{ Form::select('is_animal', [1 => trans('locale.yes'), 0 => trans('locale.no')], $application->is_animal ?? 0 ,['class' => 'form-control' . ($errors->has('is_animal') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}

          {!! $errors->first('is_animal', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
        <div class="form-group">
          {{ Form::label(trans('input.bdic_id')) }}
          {{ Form::text('bdic_id', $application->bdic_id ?? '', ['class' => 'form-control' . ($errors->has('bdic_id') ? ' is-invalid' : ''),   'placeholder' => trans('input.bdic_id')]) }}
          {!! $errors->first('bdic_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.bdiczm_id')) }}
          {{ Form::text('bdiczm_id', $application->bdiczm_id ?? '', ['class' => 'form-control' . ($errors->has('bdiczm_id') ? ' is-invalid' : ''),   'placeholder' => trans('input.bdiczm_id')]) }}
          {!! $errors->first('bdiczm_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.item_sex')) }}
          {{ Form::select('item_sex', $handbks, $application->item_sex ?? '' ,['class' => 'form-control' . ($errors->has('item_sex') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_sex', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.item_colour')) }}
          {{ Form::select('item_colour', $handbks, $application->item_colour ?? '' ,['class' => 'form-control' . ($errors->has('item_colour') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_colour', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.item_age')) }}
          {{ Form::number('item_age', $application->item_age ?? '', ['class' => 'form-control' . ($errors->has('item_age') ? ' is-invalid' : ''),   'placeholder' => trans('input.item_age')]) }}
          {!! $errors->first('item_age', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <fieldset class="form-group">
          {{ Form::label(trans('input.item_health_status')) }}
          {{ Form::select('item_health_status', $handbks, $application->item_health_status ?? '' ,['class' => 'form-control' . ($errors->has('item_health_status') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_health_status', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
        <fieldset class="form-group">
          {{ Form::label(trans('input.measurement_id')) }}
          {{ Form::select('measurement_id', $measurements, $application->measurement_id ?? '' ,['class' => 'form-control' . ($errors->has('measurement_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('measurement_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
        <div class="form-group">
          {{ Form::label(trans('input.measurement_value')) }}
          {{ Form::text('measurement_value', $application->measurement_value?? '', ['class' => 'form-control' . ($errors->has('measurement_value') ? ' is-invalid' : ''),   'placeholder' => trans('input.measurement_value')]) }}
          {!! $errors->first('measurement_value', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.registration_date')) }}
          {{ Form::date('registration_date', $application->registration_date ?? '', ['class' => 'form-control' . ($errors->has('registration_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.registration_date')]) }}
          {!! $errors->first('registration_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.akt_date')) }}
          {{ Form::date('akt_date', $application->akt_date?? '', ['class' => 'form-control' . ($errors->has('akt_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.akt_date')]) }}
          {!! $errors->first('akt_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.test_receipt_date')) }}
          {{ Form::date('test_receipt_date', $application->test_receipt_date?? '', ['class' => 'form-control' . ($errors->has('test_receipt_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.test_receipt_date')]) }}
          {!! $errors->first('test_receipt_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.test_date')) }}
          {{ Form::date('test_date', $application->test_date?? '', ['class' => 'form-control' . ($errors->has('test_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.test_date')]) }}
          {!! $errors->first('test_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label(trans('input.attachments')) }}
          {{ Form::date('attachments', $application->attachments?? '', ['class' => 'form-control' . ($errors->has('attachments') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.attachments')]) }}
          {!! $errors->first('attachments', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <fieldset class="form-group">
          {{ Form::label(trans('input.status')) }}
          {{ Form::select('status', $handbks, $application->status ?? old('value'), ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.status')]) }}
          {!! $errors->first('status', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
        <fieldset class="form-group">
              {{ Form::label(trans('locale.deleted')) }}
              {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $application->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
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


