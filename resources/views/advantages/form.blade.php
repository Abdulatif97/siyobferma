
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
            <option {{$advantage->order ?? -0 == $i ? 'selected' : '' }} value="{{$i}}">{{$i}}</option>
          @endfor
        </select>
        {!! $errors->first('order', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>

      <div class="form-group">
        {{ Form::label(trans('locale.title_uz') . '(uz)') }}
        {{ Form::textarea('title_uz', $advantage->title_uz?? '', ['class' => 'form-control' . ($errors->has('title_uz') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.title')]) }}
        {!! $errors->first('title_uz', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('locale.title_ru') . '(ru)') }}
        {{ Form::textarea('title_ru', $advantage->title_ru?? '', ['class' => 'form-control' . ($errors->has('title_ru') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.title')]) }}
        {!! $errors->first('title_ru', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>

      <div class="form-group">
            {{ Form::label(trans('locale.image')) }}
            {{ Form::file('image1', ['class' => 'form-control' . ($errors->has('weight_ru') ? ' is-invalid' : ''), 'required' => 'required']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
        @isset($advantage)
        <img src="{{asset('storage/'.$advantage->image) }}" height="100" width="100" alt="">
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

@endsection
