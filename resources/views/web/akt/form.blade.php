<div class="box box-info padding-1">
    <div class="box-body">
          <fieldset class="form-group">
            {{ Form::label(trans('term.application')) }}
            {{ Form::select('application_id', $applications, $akt->item_id ?? '' ,['class' => 'form-control' . ($errors->has('application_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('application_id', '<div class="invalid-feedback">:message</p></div>') !!}
          </fieldset>
          <fieldset class="form-group">
            {{ Form::label(trans('input.test_possibility')) }}
            {{ Form::select('test_possibility', [1 => trans('locale.yes'), 0 => trans('locale.no')], $akt->test_possibility ?? '' ,['class' => 'form-control' . ($errors->has('test_possibility') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('test_possibility', '<div class="invalid-feedback">:message</p></div>') !!}
          </fieldset>
          <fieldset class="form-group">
            {{ Form::label(trans('input.aim')) }}
            {{ Form::select('aim', $handbks, $akt->aim ?? old('value'), ['class' => 'form-control' . ($errors->has('aim') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('aim', '<div class="invalid-feedback">:message</p></div>') !!}
          </fieldset>
          <div class="form-group">
            {{ Form::label(trans('input.sample_date')) }}
            {{ Form::date('sample_date', $akt->sample_date ?? '', ['class' => 'form-control' . ($errors->has('sample_date') ? ' is-invalid' : ''),'required' => 'required', 'placeholder' => trans('input.sample_date')]) }}
            {!! $errors->first('sample_date', '<div class="invalid-feedback">:message</p></div>') !!}
          </div>
          <fieldset class="form-group">
            {{ Form::label(trans('input.from_message')) }}
            {{ Form::select('from_message', [1 => trans('locale.yes'), 0 => trans('locale.no')], $akt->from_message ?? '' ,['class' => 'form-control' . ($errors->has('from_message') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('from_message', '<div class="invalid-feedback">:message</p></div>') !!}
          </fieldset>
          <fieldset class="form-group">
            {{ Form::label(trans('term.message')) }}
            {{ Form::select('message_id', $messages, $akt->message_id ?? '' ,['class' => 'form-control' . ($errors->has('message_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
            {!! $errors->first('message_id', '<div class="invalid-feedback">:message</p></div>') !!}
          </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.about_docs')) }}
        {{ Form::textarea('about_docs', $akt->about_docs?? '', ['class' => 'form-control' . ($errors->has('about_docs') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.about_docs')]) }}
        {!! $errors->first('about_docs', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
        {{ Form::label(trans('input.packaging')) }}
        {{ Form::select('packaging', $handbks, $akt->packaging ?? old('value'), ['class' => 'form-control' . ($errors->has('packaging') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('packaging', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <fieldset class="form-group">
        {{ Form::label(trans('input.measurement_id')) }}
        {{ Form::select('measurement_id', $measurements, $akt->measurement_id ?? '' ,['class' => 'form-control' . ($errors->has('measurement_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('measurement_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.measurement_value')) }}
        {{ Form::text('measurement_value', $akt->measurement_value?? '', ['class' => 'form-control' . ($errors->has('measurement_value') ? ' is-invalid' : ''),   'placeholder' => trans('input.measurement_value')]) }}
        {!! $errors->first('measurement_value', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.volume_sample_looking')) }}
        {{ Form::text('volume_sample_looking', $akt->volume_sample_looking?? '', ['class' => 'form-control' . ($errors->has('measurement_value') ? ' is-invalid' : ''),   'placeholder' => trans('input.volume_sample_looking')]) }}
        {!! $errors->first('volume_sample_looking', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.volume_sample_test')) }}
        {{ Form::text('volume_sample_test', $akt->volume_sample_test?? '', ['class' => 'form-control' . ($errors->has('volume_sample_test') ? ' is-invalid' : ''),   'placeholder' => trans('input.volume_sample_test')]) }}
        {!! $errors->first('volume_sample_test', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
        {{ Form::label(trans('input.item_country_soato_id')) }}
        {{ Form::select('item_country_soato_id', $soatos, $akt->item_country_soato_id ?? '' ,['class' => 'form-control' . ($errors->has('test_address_soato_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('item_country_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
      <div class="form-group">
        {{ Form::label(trans('input.note')) }}
        {{ Form::textarea('note', $akt->note?? '', ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.note')]) }}
        {!! $errors->first('note', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <div class="form-group">
        {{ Form::label(trans('input.additional_information')) }}
        {{ Form::textarea('additional_information', $akt->note?? '', ['class' => 'form-control' . ($errors->has('additional_information') ? ' is-invalid' : ''),   'rows' => 3, 'onkeypress' => "return nameFunction(event);", 'placeholder' => trans('input.additional_information')]) }}
        {!! $errors->first('additional_information', '<div class="invalid-feedback">:message</p></div>') !!}
      </div>
      <fieldset class="form-group">
        {{ Form::label(trans('input.sample_get_soato_id')) }}
        {{ Form::select('sample_get_soato_id', $soatos, $akt->sample_get_soato_id ?? '' ,['class' => 'form-control' . ($errors->has('sample_get_soato_id') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('sample_get_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
        <div class="form-group">
            {{ Form::label(trans('input.akt_write_off_id')) }}
            {{ Form::text('akt_write_off_id', $akt->akt_write_off_id ?? '', ['class' => 'form-control' . ($errors->has('akt_write_off_id') ? ' is-invalid' : ''), 'placeholder' => trans('input.akt_write_off_id')]) }}
            {!! $errors->first('akt_write_off_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
      <fieldset class="form-group">
        {{ Form::label(trans('input.status')) }}
        {{ Form::select('status', $handbks, $akt->status ?? old('value'), ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'required' => 'required',  'placeholder' => trans('locale.select')]) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</p></div>') !!}
      </fieldset>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{trans('locale.Submit')}}</button>
    </div>
</div>
