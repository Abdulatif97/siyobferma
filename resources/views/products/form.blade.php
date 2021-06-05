
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">

      <fieldset class="form-group">
        {{ Form::label(trans('locale.order')) }}
        <select name="order" class="form-control {{ ($errors->has('slug') ? ' is-invalid' : '')}}" required="required" id="">
          <option disabled value="">{{trans('locale.select')}}</option>
          @for ($i = 0; $i < 15; $i++)
            <option {{$product->order ?? -0 == $i ? 'selected' : '' }} value="{{$i}}">{{$i}}</option>
          @endfor
        </select>
        {!! $errors->first('order', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>

        <div class="form-group">
            {{ Form::label(trans('locale.title_uz') . '(uz)') }}
            {{ Form::text('title_uz', $product->title_uz?? '', ['class' => 'form-control' . ($errors->has('title_uz') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title_uz', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('locale.title_ru') . '(ru)') }}
            {{ Form::text('title_ru', $product->title_ru?? '', ['class' => 'form-control' . ($errors->has('title_ru') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title_ru', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('locale.weight_uz') . '(uz)') }}
            {{ Form::text('weight_uz', $product->weight_uz?? '', ['class' => 'form-control' . ($errors->has('weight_uz') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('weight_uz', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('locale.weight_ru') . '(ru)') }}
            {{ Form::text('weight_ru', $product->weight_ru?? '', ['class' => 'form-control' . ($errors->has('weight_ru') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('weight_ru', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('locale.image')) }}
            {{ Form::file('image1', ['class' => 'form-control' . ($errors->has('weight_ru') ? ' is-invalid' : ''), 'required' => 'required']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

      <div class="form-group">
        @isset($product)
          <img src="{{asset('storage/'.$product->image) }}" height="100" width="100" alt="">
        @endisset
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
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

@endsection
