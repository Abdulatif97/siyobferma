
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('locale.title')) }}
            {{ Form::text('title', $department->title?? '', ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(trans('locale.description')) }}
            {{ Form::textarea('description', $department->description?? '', ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.description')]) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <fieldset class="form-group">
          {{ Form::label(trans('locale.organization')) }}
          {{ Form::select('organization_id', $organizations, $department->organization_id ?? old('value') ,['class' => 'form-control' . ($errors->has('organization') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('organization', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
          {{ Form::label(trans('input.type')) }}
          {{ Form::select('type', $types, $department->type ?? old('value') ,['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('type', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $department->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
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
