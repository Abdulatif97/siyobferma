
@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.css') }}">
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label(trans('locale.title')) }}
            {{ Form::text('title', $role->title?? '', ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.title')]) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(trans('locale.description')) }}
            {{ Form::textarea('description', $role->description?? '', ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''),   'rows'       => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('locale.description')]) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.deleted')) }}
            {{ Form::select('deleted', [1 => trans('locale.yes'), 0 => trans('locale.no')], $role->deleted ?? 0 ,['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
            {{ Form::label(trans('locale.positions')) }}
            {{Form::select('positions[]',
                  $positions,
                  $selectedPositions ?? [],
                  ['class' => 'form-control select2' . ($errors->has('positions') ? ' is-invalid' : ''),  'multiple'=>'multiple','data-placeholder'=>trans('locale.select')])
                }}
            {!! $errors->first('positions', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive border rounded px-1 ">
            <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i
                class="feather icon-lock mr-50 "></i>Permission</h6>
            <table class="table table-borderless table-bordered">
              <thead>
              <tr>
                <th>Module</th>
                <th>List</th>
                <th>Create</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
              @foreach($permissions as $key => $permission)
              <tr class="border">
                <td>{{ trans('term.' . $key) }}</td>
                @foreach($permissions[$key] as  $value)
                  <td>
                    <div class="custom-control custom-checkbox">
                      {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions ?? []) ? true : false, array('class' => 'custom-control-input','id' => $value['name'])) }}
                      <label class="custom-control-label" for="{{$value['name']}}"></label>
                    </div>
                  </td>
                @endforeach

              </tr>
              @endforeach
              </tbody>
            </table>
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
  <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>
@endsection
