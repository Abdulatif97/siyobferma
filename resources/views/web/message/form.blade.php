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
            {{ Form::label(trans('input.reporting_person_name')) }}
            {{ Form::text('reporting_person_name', $message->reporting_person_name?? '', ['class' => 'form-control validate ' . ($errors->has('reporting_person_name') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.reporting_person_name')]) }}
            {!! $errors->first('reporting_person_name', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <div class="form-group">
            {{ Form::label(trans('input.reporting_person_phone_number')) }}
            {{ Form::text('reporting_person_phone_number', $message->reporting_person_phone_number?? '', ['class' => 'form-control' . ($errors->has('reporting_person_phone_number') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.reporting_person_phone_number')]) }}
            {!! $errors->first('reporting_person_phone_number', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <fieldset class="form-group">
          {{ Form::label(trans('term.itemCategory')) }}
          {{ Form::select('item_category_id', $itemCategories, $message->item_category_id ?? '' ,['class' => 'form-control' . ($errors->has('item_category_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_category_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
          {{ Form::label(trans('term.item')) }}
          {{ Form::select('item_id', $items, $message->item_id ?? '' ,['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
          {{ Form::label(trans('input.item_condition')) }}
          {{ Form::select('item_condition', $handbks, $message->item_condition ?? '' ,['class' => 'form-control' . ($errors->has('item_condition') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_condition', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <fieldset class="form-group">
          {{ Form::label(trans('input.item_address_soato_id')) }}
          {{ Form::select('item_address_soato_id', $soatos, $message->item_address_soato_id ?? '' ,['class' => 'form-control' . ($errors->has('item_address_soato_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
          {!! $errors->first('item_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.item_address_additional')) }}
        {{ Form::text('item_address_additional', $message->item_address_additional?? '', ['class' => 'form-control' . ($errors->has('item_address_additional') ? ' is-invalid' : ''),   'placeholder' => trans('input.item_address_additional')]) }}
        {!! $errors->first('item_address_additional', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>

      <div class="form-group">
        {{ Form::label(trans('input.reporting_date')) }}
        {{ Form::date('reporting_date', $message->reporting_date?? '', ['class' => 'form-control' . ($errors->has('reporting_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.reporting_date')]) }}
        {!! $errors->first('reporting_date', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
            {{ Form::label(trans('input.is_approved')) }}
            {{ Form::select('is_approved', [1 => trans('locale.yes'), 0 => trans('locale.no')], $message->is_approved ?? '' ,['class' => 'form-control' . ($errors->has('is_approved') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('is_approved', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('input.status')) }}
        {{ Form::select('status', $handbks, $message->status ?? old('value') ,['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('input.status')]) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $message->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>

      <div class="form-group d-flex" >
      </div>
      <!-- multi file upload ends -->
      <div class="form-group col-md-12 mb-3 ">
        <label for="products">{{__('input.attached_photos')}}</label>
        <div class="product_content validate dropzone" id="products">
          <fieldset class="form-control2 " id="fieldID" data-required="false" >
            <div id="imguploaded" class="imgupload d-flex" style="height: 100%;min-height:200px; flex-wrap:wrap;" data-min-width="540">
              @if (isset($message) && !empty($message->attached_photos))
                    @foreach ($message->attached_photos as $key => $photo)

                    <div class="dz-preview dz-processing dz-image-preview dz-success">
                      <input type="hidden" name="attached_photos[]" value="{{$photo}}">
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




      <div class="col-sm-12  mb-2 data-field-col"  id="addressLang">
        <div class="d-felx">
          <span class=" mb-1" >{{trans('input.select_map')}}</span>
        </div>

        <div id="googleMap" class="height-400"></div>
        <div id="formLatLng" class="form-group mt-2 d-flex">
          <div class="form-group w-100 mr-1">
            {{ Form::label(trans('input.item_address_latitude')) }}
            {{ Form::text('item_address_latitude', $message->item_address_latitude?? '', ["id"=>"latitude", 'class' => '  form-control' . ($errors->has('item_address_latitude') ? ' is-invalid' : ''),   'placeholder' => trans('input.item_address_latitude')]) }}
            {!! $errors->first('item_address_latitude', '<div class="invalid-feedback">:message</p></div>') !!}
          </div>
          <div class="form-group w-100 ml-1">
            {{ Form::label(trans('input.item_address_longitude')) }}
            {{ Form::text('item_address_longitude', $message->item_address_longitude?? '', ["id"=>"longitude",'class' => '  form-control' . ($errors->has('item_address_longitude') ? ' is-invalid' : ''),   'placeholder' => trans('input.item_address_longitude')]) }}
            {!! $errors->first('item_address_longitude', '<div class="invalid-feedback">:message</p></div>') !!}
          </div>
        </div>
      </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{trans('locale.Submit')}}</button>
    </div>
</div>

@section('vendor-script')
  <!-- vendor files -->
  <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBgjNW0WA93qphgZW-joXVR6VC3IiYFjfo"></script>
  <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
  <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
  <script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script>

@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>
  <script src="{{ asset('js/scripts/extensions/dropzone.js') }}"></script>

  <script>


    function myMap() {
      var mapProp= {
        center:new google.maps.LatLng({{$message->item_address_latitude ?? 41.2663432630637}},{{$message->item_address_longitude ?? 69.28588449954987}} ),
        zoom:9,
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

      google.maps.event.addListener(map, 'click', function(event) {
        $('#latitude').val(event.latLng.lat());
        $('#longitude').val(event.latLng.lng());
      });

    }


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

      // if (confirm('Ты уверен?')) {
      //
      //   // var file1 = thisParent.find('input').val()
      //   // $.ajax({
      //   //   type: 'POST',
      //   //   url: '/media-delete',
      //   //   data: {
      //   //     file: file1,
      //   //     request: 'delete',
      //   //     _token: token
      //   //   },
      //   //   success: function (data) {
      //   //
      //   //   },
      //   //   error: function () {
      //   //   }
      //   // });
      // }

    });

    $("form").submit( function(eventObj) {
      // alert('s')
      // eventObj.preventDefault()
      let i = 0;
      for (i = 0; i < images.length; i++) {
        $("<input />").attr("type", "hidden")
          .attr("name", "attached_photos[]")
          .attr("value",images[i] )
          .appendTo("form");
      }
    //  eventObj.preventDefault()

      return true;
    });


  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOk4xLDruMQiCfybBIGw_iv48ojZ5AO8I&callback=myMap"></script>

@endsection


