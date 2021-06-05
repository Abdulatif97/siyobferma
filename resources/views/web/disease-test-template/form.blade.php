
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('locale.title')) }}
            {{ Form::text('title', $item->title?? '', ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(trans('input.note')) }}
            {{ Form::textarea('note', $item->note ?? '', ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.note')]) }}
            {!! $errors->first('note', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <fieldset class="form-group">
          {{ Form::label(trans('term.disease')) }}
          {{ Form::select('disease_id', $diseases, $item->disease_id ?? old('value') ,['class' => 'form-control' . ($errors->has('disease_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('disease_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
          {{ Form::label(trans('term.item')) }}
          {{ Form::select('item_id', $items, $item->item_id ?? old('value') ,['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
          {{ Form::label(trans('term.item-category')) }}
          {{ Form::select('item_category_id', $categories, $item->item_category_id ?? old('value') ,['class' => 'form-control' . ($errors->has('item_category_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('disease_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $item->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
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
