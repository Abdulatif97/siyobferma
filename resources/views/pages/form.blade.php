
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
      <fieldset class="form-group">
        {{ Form::label(trans('locale.slug')) }}
        {{ Form::select('slug', ['main' => 'Главная', 'about' => 'О нас', 'advantages' => 'Наши преимущества' ], $page->slug ?? '' ,['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('slug', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
        <div class="form-group">
            {{ Form::label(trans('locale.title_uz') . '(uz)') }}
            {{ Form::text('title_uz', $page->title_uz?? '', ['class' => 'form-control' . ($errors->has('title_uz') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title_uz', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('locale.title_ru') . '(ru)') }}
            {{ Form::text('title_ru', $page->title_ru?? '', ['class' => 'form-control' . ($errors->has('title_ru') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title_ru', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
        {{ Form::label(trans('locale.text_uz') . '(uz)') }}
        {{ Form::textarea('text_uz', $page->text_uz?? '', ['class' => 'form-control' . ($errors->has('text_uz') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.title')]) }}
        {!! $errors->first('text_uz', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('locale.text_ru') . '(ru)') }}
        {{ Form::textarea('text_ru', $page->text_ru?? '', ['class' => 'form-control' . ($errors->has('text_ru') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.title')]) }}
        {!! $errors->first('text_ru', '<div class="invalid-feedback">:message</p></div>') !!}
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
  <script>


    tinymce.init({
      selector:'textarea',
      width: 900,
      menubar: false,
      height: 300,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        "textcolor colorpicker",
        'insertdatetime media table paste code help wordcount'
      ],color_picker_callback: function(callback, value) {
        callback('#FF00FF');
      },
      toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help | forecolor | backcolor',
    });
  </script>

  </script>
@endsection
