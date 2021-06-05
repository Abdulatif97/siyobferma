<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $sampleGroupResult->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $sampleGroupResult->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $sampleGroupResult->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('code') }}
            {{ Form::text('code', $sampleGroupResult->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Code']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sample_group_id') }}
            {{ Form::text('sample_group_id', $sampleGroupResult->sample_group_id, ['class' => 'form-control' . ($errors->has('sample_group_id') ? ' is-invalid' : ''), 'placeholder' => 'Sample Group Id']) }}
            {!! $errors->first('sample_group_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temperature') }}
            {{ Form::text('temperature', $sampleGroupResult->temperature, ['class' => 'form-control' . ($errors->has('temperature') ? ' is-invalid' : ''), 'placeholder' => 'Temperature']) }}
            {!! $errors->first('temperature', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hum') }}
            {{ Form::text('hum', $sampleGroupResult->hum, ['class' => 'form-control' . ($errors->has('hum') ? ' is-invalid' : ''), 'placeholder' => 'Hum']) }}
            {!! $errors->first('hum', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('additional_text') }}
            {{ Form::text('additional_text', $sampleGroupResult->additional_text, ['class' => 'form-control' . ($errors->has('additional_text') ? ' is-invalid' : ''), 'placeholder' => 'Additional Text']) }}
            {!! $errors->first('additional_text', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('end_date') }}
            {{ Form::text('end_date', $sampleGroupResult->end_date, ['class' => 'form-control' . ($errors->has('end_date') ? ' is-invalid' : ''), 'placeholder' => 'End Date']) }}
            {!! $errors->first('end_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('note') }}
            {{ Form::text('note', $sampleGroupResult->note, ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''), 'placeholder' => 'Note']) }}
            {!! $errors->first('note', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('approved_person_id') }}
            {{ Form::text('approved_person_id', $sampleGroupResult->approved_person_id, ['class' => 'form-control' . ($errors->has('approved_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Approved Person Id']) }}
            {!! $errors->first('approved_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('approved_date') }}
            {{ Form::text('approved_date', $sampleGroupResult->approved_date, ['class' => 'form-control' . ($errors->has('approved_date') ? ' is-invalid' : ''), 'placeholder' => 'Approved Date']) }}
            {!! $errors->first('approved_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('attachments') }}
            {{ Form::text('attachments', $sampleGroupResult->attachments, ['class' => 'form-control' . ($errors->has('attachments') ? ' is-invalid' : ''), 'placeholder' => 'Attachments']) }}
            {!! $errors->first('attachments', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>