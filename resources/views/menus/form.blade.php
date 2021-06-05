
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('locale.title_uz') . '(uz)') }}
            {{ Form::text('title_uz', $menu->title_uz?? '', ['class' => 'form-control' . ($errors->has('title_uz') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title_uz', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('locale.title_ru') . '(ru)') }}
            {{ Form::text('title_ru', $menu->title_ru?? '', ['class' => 'form-control' . ($errors->has('title_ru') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title_ru', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
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
