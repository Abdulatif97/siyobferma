<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $sample->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $sample->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $sample->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('akt_id') }}
            {{ Form::text('akt_id', $sample->akt_id, ['class' => 'form-control' . ($errors->has('akt_id') ? ' is-invalid' : ''), 'placeholder' => 'Akt Id']) }}
            {!! $errors->first('akt_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('code') }}
            {{ Form::text('code', $sample->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Code']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $sample->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('normative_docs_id') }}
            {{ Form::text('normative_docs_id', $sample->normative_docs_id, ['class' => 'form-control' . ($errors->has('normative_docs_id') ? ' is-invalid' : ''), 'placeholder' => 'Normative Docs Id']) }}
            {!! $errors->first('normative_docs_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sample_state') }}
            {{ Form::text('sample_state', $sample->sample_state, ['class' => 'form-control' . ($errors->has('sample_state') ? ' is-invalid' : ''), 'placeholder' => 'Sample State']) }}
            {!! $errors->first('sample_state', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sample_receipt_date') }}
            {{ Form::text('sample_receipt_date', $sample->sample_receipt_date, ['class' => 'form-control' . ($errors->has('sample_receipt_date') ? ' is-invalid' : ''), 'placeholder' => 'Sample Receipt Date']) }}
            {!! $errors->first('sample_receipt_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('note') }}
            {{ Form::text('note', $sample->note, ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''), 'placeholder' => 'Note']) }}
            {!! $errors->first('note', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('template_id') }}
            {{ Form::text('template_id', $sample->template_id, ['class' => 'form-control' . ($errors->has('template_id') ? ' is-invalid' : ''), 'placeholder' => 'Template Id']) }}
            {!! $errors->first('template_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>