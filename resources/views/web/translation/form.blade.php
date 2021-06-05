<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $translation->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $translation->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $translation->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referenced_column_id') }}
            {{ Form::text('referenced_column_id', $translation->referenced_column_id, ['class' => 'form-control' . ($errors->has('referenced_column_id') ? ' is-invalid' : ''), 'placeholder' => 'Referenced Column Id']) }}
            {!! $errors->first('referenced_column_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lang_code') }}
            {{ Form::text('lang_code', $translation->lang_code, ['class' => 'form-control' . ($errors->has('lang_code') ? ' is-invalid' : ''), 'placeholder' => 'Lang Code']) }}
            {!! $errors->first('lang_code', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('translation') }}
            {{ Form::text('translation', $translation->translation, ['class' => 'form-control' . ($errors->has('translation') ? ' is-invalid' : ''), 'placeholder' => 'Translation']) }}
            {!! $errors->first('translation', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>