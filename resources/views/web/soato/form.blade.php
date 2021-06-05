
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('input.name')) }}
            {{ Form::text('name', $soato->name?? '', ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),  'placeholder' => trans('input.name')]) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <fieldset class="form-group">
            {{ Form::label(trans('input.type')) }}
            {{ Form::select('soato_type', $handbks, $soato->soato_type ?? 0 ,['class' => 'form-control' . ($errors->has('soato_type') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('soato_type', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
            {{ Form::label(trans('input.parent')) }}
            {{ Form::select('parent_id', $soatos, $soato->parent_id ?? 0 ,['class' => 'form-control' . ($errors->has('parent_id') ? ' is-invalid' : ''),   'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('parent_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('locale.deleted')) }}
        {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $soatos->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
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
