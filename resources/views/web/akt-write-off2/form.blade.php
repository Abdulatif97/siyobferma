<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $aktWriteOff->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $aktWriteOff->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $aktWriteOff->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('code') }}
            {{ Form::text('code', $aktWriteOff->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Code']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sample_group_result_id') }}
            {{ Form::text('sample_group_result_id', $aktWriteOff->sample_group_result_id, ['class' => 'form-control' . ($errors->has('sample_group_result_id') ? ' is-invalid' : ''), 'placeholder' => 'Sample Group Result Id']) }}
            {!! $errors->first('sample_group_result_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('write_off_date') }}
            {{ Form::text('write_off_date', $aktWriteOff->write_off_date, ['class' => 'form-control' . ($errors->has('write_off_date') ? ' is-invalid' : ''), 'placeholder' => 'Write Off Date']) }}
            {!! $errors->first('write_off_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('note') }}
            {{ Form::text('note', $aktWriteOff->note, ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''), 'placeholder' => 'Note']) }}
            {!! $errors->first('note', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('approved_person_id') }}
            {{ Form::text('approved_person_id', $aktWriteOff->approved_person_id, ['class' => 'form-control' . ($errors->has('approved_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Approved Person Id']) }}
            {!! $errors->first('approved_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('approved_date') }}
            {{ Form::text('approved_date', $aktWriteOff->approved_date, ['class' => 'form-control' . ($errors->has('approved_date') ? ' is-invalid' : ''), 'placeholder' => 'Approved Date']) }}
            {!! $errors->first('approved_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>