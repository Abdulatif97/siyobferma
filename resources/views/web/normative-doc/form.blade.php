@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">

@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}">

  <style type="text/css">
    .tabs-body .product_content .over_products .product_item {
      width: 300px;
    }
    .new_ads form .form-control {
      height: max-content;
    }
    .inputss.disabled {
      user-select : none;
      -moz-user-select : none;
      -webkit-user-select : none;
      color: gray;
      cursor: pointer;
    }

    .error{
      border-color: red !important;
    }
    #products {
      border: 3px dashed silver ;
      background: #f4f6f7;
      padding: 20px 20px;
      border-radius: 5px;
      cursor: pointer;
      min-height: 200px;
      overflow: hidden;
    }
    .new_ads form .form-control.nice-select {
      min-height: 38px;
      line-height: 1.85;
    }
    .price_type_select{
      padding: 6px 12px !important;
      margin-top: 0 !important;
    }
    #wrapper {
      display:flex;
      width: 100%
    }
    #wrapper input{
      border:none
    }
    #static {
      width:52px;
      padding-right: 0 !important;
      border: none !important;
      border-radius:  5px 0  0  5px !important;

    }
    #telegram-account{
      border-radius: 0 5px 5px 0 !important;
    }
    .dz-preview{
      z-index: 0;
    }
    /* #shortDescription{
      display: block;
      resize: both !important;
      min-height: 100px;
      width: 100% !important;

    } */

    .input {
      flex-wrap: wrap;
    }
    .input button {
      top: 19px;
    }
    .new_ads form select.form-control {
      min-height: 45px;
    }

    .was-validated .form-control:invalid, .form-control.is-invalid { background-image: unset;}
    .was-validated .form-control:valid, .form-control.is-valid { background-image: unset;}

    .was-validated2 .form-req:invalid, .form-control.is-invalid {
      border-color: #dc3545;
      padding-right: calc(1.5em + 0.75rem);
      background-image: unset;
      background-repeat: no-repeat;
      background-position: right calc(0.375em + 0.1875rem) center;
      background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .was-validated2 .form-req:valid, .form-control.is-valid {
      border-color: #28a745;
      padding-right: calc(1.5em + 0.75rem);
      background-image: unset;
      background-repeat: no-repeat;
      background-position: right calc(0.375em + 0.1875rem) center;
      background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }
    .price_type_select{
      width: 100px !important;
    }
  </style>
@endsection

<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('locale.title')) }}
            {{ Form::text('title', $normativeDoc->title ?? '', ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(trans('locale.description')) }}
            {{ Form::textarea('description', $normativeDoc->description ?? '', ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.description')]) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <fieldset class="form-group">
          {{ Form::label(trans('term.item')) }}
          {{ Form::select('item_id', $items, $normativeDoc->item_id ?? old('value') ,['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
          {{ Form::label(trans('term.item-category')) }}
          {{ Form::select('item_category_id', $categories, $normativeDoc->item_category_id ?? old('value') ,['class' => 'form-control' . ($errors->has('item_category_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('normativeDoc_category_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
          {{ Form::label(trans('input.type')) }}
          {{ Form::select('type', $types, $normativeDoc->type ?? old('value') ,['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('type', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $normativeDoc->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <!-- multi file upload ends -->
      <div class="form-group col-md-12 mb-3 ">
        <label for="products">{{__('input.attachments')}}</label>
        <div class="product_content validate dropzone" id="products">
          <fieldset class="form-control2 " id="fieldID" data-required="false" >
            <div id="imguploaded" class="imgupload d-flex" style="height: 100%;min-height:200px; flex-wrap:wrap;" data-min-width="540">
              @if (isset($normativeDoc) && !empty($normativeDoc->attachments))
                @foreach ($normativeDoc->attachments as $key => $photo)

                  <div class="dz-preview dz-processing dz-image-preview dz-success">
                    <input type="hidden" name="attachments[]" value="{{$photo}}">
                    <div class="dz-details">
                      <div class="dz-filename"><span data-dz-name="">{{$key .'.png'}}</span></div>
                      <div class="dz-size" data-dz-size=""><strong>{{ File::size('storage/'.$photo) / 1000 }}</strong> KiB</div>
                      <img data-dz-thumbnail="" alt="01n (1).png" src="{{ asset('storage/'.$photo) }}">
                    </div>
                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;"></span></div>
                    <div class="dz-success-mark"><span>✔</span></div>  <div class="dz-error-mark"><span>✘</span></div>
                    <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                    <a class="dz-remove media-delete" href="javascript:undefined;" data-dz-remove="">Remove file</a>
                  </div>

                @endforeach
              @else
                <div class="text-reshuffle">{{__('input.drag_here')}}</div>
              @endif

            </div>

          </fieldset>
        </div>
      </div>
      <!-- multi file upload ends -->
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{trans('locale.Submit')}}</button>
    </div>
</div>

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
  <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
  <script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script>

@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>
  <script src="{{ asset('js/scripts/extensions/dropzone.js') }}"></script>

  <script>

    let images = [];
    Dropzone.autoDiscover = false;
    const token = "{!! csrf_token() !!}";
    const DropImg = new Dropzone("#imguploaded", {
      addRemoveLinks: true,
      url: "/media-upload",
      paramName: 'file',
      maxFiles: 9,
      maxFilesize: 50,
      acceptedFiles: "image/*,video/*,",
      params: {
        _token: token
      },
      init: function () {
        this.on("addedfile", function (event) {
          while (this.files.length > this.options.maxFiles) {
            this.removeFile(this.files[0]);
          }
        });

        this.on("success", function (file, response) {
          //console.log(file, response,"file, response")
          // $("#imgupload3 > img:first-child").remove();
          $("#imguploaded").attr("data-success-file", response.success);
          images.push(response.file)
          $("#imguploaded .dz-image-remove").show();
        })
      },
      removedfile: function (file) {
        var file1 = file.name
        $.ajax({
          type: 'POST',
          url: '/media-delete',
          data: {
            file: file1,
            request: 'delete',
            _token: token
          },
          success: function (data) {

          },
          error: function () {
          }
        });
        let _ref;
        return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
      }
    });

    $(document).on('click','.media-delete',function(){
      var thisParent = $(this).parent();
      thisParent.remove()

    });

    $("form").submit( function(eventObj) {
      let i = 0;
      for (i = 0; i < images.length; i++) {
        $("<input />").attr("type", "hidden")
          .attr("name", "attachments[]")
          .attr("value",images[i] )
          .appendTo("form");
      }
      //  eventObj.preventDefault()

      return true;
    });
  </script>

@endsection


